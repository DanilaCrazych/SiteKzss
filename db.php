<?php
$conn = new mysqli("192.168.1.13", "danilas", "p@ssw0rd", "kzss");
$conn->query("SET NAMES 'utf8'");
if ($mysql->connect_error) {
    echo 'Error num:' . $mysql->connect_errno . '<br>';
    echo $mysql->connect_error;
} else {
}
