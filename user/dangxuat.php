<?PHP 
    session_start();
    unset($_SESSION["user"]);
    header("Location: environment.php");
