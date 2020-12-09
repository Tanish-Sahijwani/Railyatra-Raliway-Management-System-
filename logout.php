<?php
    session_start();    /// resume the session
    if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'])
    {
        // logout procedure
        session_unset();    // remove all the variable
        session_destroy();  
    }
    header("Location: loginFront.php");
?>