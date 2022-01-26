<?php
session_start( );
unset($_SESSION['sess_name']);
header("location:home.php");

?>