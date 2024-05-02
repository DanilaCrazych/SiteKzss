<?php
$workbdlogin = mysqli_query($conn, "SELECT * FROM `staff` WHERE login LIKE '$login';");
$reslogin = mysqli_fetch_assoc($workbdlogin);
$whologin = $reslogin['fio'];
$whologinLogin = $reslogin['login'];
if ($whologinLogin == "admin") {
    include "block/admin_left_panel.php";
} else {
    include "block/left_panel.php";
}
