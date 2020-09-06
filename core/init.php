<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'jlg-;');
if (mysqli_connect_errno()) {
    echo 'connection failed: '.mysqli_connect_error();
    die();
}
?>