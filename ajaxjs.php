<?php
define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "toor");
define('DB_DATABASE', "myDB");
define('DB_DRIVER', "mysql");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$confirmpassword = $_POST['confpwd'];

try {

    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["pwd"])  || empty($_POST["confpwd"]))
    {
        $message = "All data are required";
        echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href='signup.php';
            </script>";
    }
    
    elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
    {
        $emailError = "Invalid email format";
        echo "<script type='text/javascript'>
                    alert('$emailError');
                    window.location.href='signup.php';
              </script>";
    }

    elseif (strcmp($password,$confirmpassword) !=0) {
        $pwdError = "Please enter the same value to password and confirm password";
        echo "<script type='text/javascript'>
                    alert('$pwdError');
                    window.location.href='signup.php';
              </script>";
    }

    else
    {
    $conn = new PDO("mysql:host=". DB_SERVER. ";dbname=".DB_DATABASE ,DB_USER, DB_PASSWORD);
    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully"; 
    $stmt = $conn->prepare("INSERT INTO Client (ClientName, ClientEmail, ClientPwd) VALUES (:name, :email, :password)");

    $stmt->bindParam(':name', $name, PDO::PARAM_STR, 100);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR, 100);

    if($stmt->execute()) {
      $welcome='Welcome to our world ! You are registred now';
              echo "<script type='text/javascript'>
                    alert('$welcome');
                    window.location.href='signup.php';
              </script>"; 
    }

    }
    // $conn = null;
} 
catch(PDOException $e) {
    trigger_error('Error occured while trying to insert into the DB:' . $e->getMessage(), E_USER_ERROR);
}

?>