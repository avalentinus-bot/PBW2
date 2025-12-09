<?php
    session_start();
    session_destroy();
    //session_unser('username');

    header("Location: form.php");