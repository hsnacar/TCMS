<?php

// echo "<br>content head.php";
adminPageBuild::$htmlHead = adminPageBuild::$htmlHead . "<title>" . $lang['articles'] . " - TCMS Admin</title>";

adminPageBuild::$htmlHead = adminPageBuild::$htmlHead . '<link rel="stylesheet" href="'. dirname($_SERVER['SCRIPT_NAME']) . '/' . ADMIN_COMPONENTS .'/content/content.css">';
