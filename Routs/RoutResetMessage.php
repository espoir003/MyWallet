<?php

session_start();

$_SESSION['message'] = '';

header("location: dashboard");

?>