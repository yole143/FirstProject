<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: Login_Admin_Account.php");
?>