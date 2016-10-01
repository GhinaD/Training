<?php
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "toor");
define('DB_DATABASE', "myDB");
define('DB_DRIVER', "mysql");

$email = $_POST['email'];
$password = $_POST['pwd'];

try {

    if (empty($_POST["email"]) || empty($_POST["pwd"]) )
    {
        $message = "All data are required";
        echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href='login.php';
            </script>";
    }

    else
    {
    $conn = new PDO("mysql:host=". DB_SERVER. ";dbname=".DB_DATABASE ,DB_USER, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT ClientName, ClientEmail, ClientPwd FROM Client WHERE ClientEmail = :username";
    $stmt = $conn->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $email);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        $message = "HORA! you are not registred yet ";
        echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href='signup.php';
            </script>";
    } 
    
    else
    {
        //Compare the passwords.

        if(strcmp($password,$user['ClientPwd']) ==0)
        {                        
            echo "Welcome ". $user['ClientName'];
            exit;            
        }        
        else
        {
            //$validPassword was FALSE. Passwords do not match.
            $message = "Please enter a valid password";
            echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href='login.php';
            </script>";
        }
    }
    
}

}
catch(PDOException $e) {
    trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
}

?>
