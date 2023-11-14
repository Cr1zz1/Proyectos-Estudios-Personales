<?php

    session_start();
    session_destroy();
    header("location: ../../views/Login_Register.php");

?>