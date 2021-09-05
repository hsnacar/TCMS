<?php

if (count(adminRouting::$urlArray) > 1) {
    switch (adminRouting::$urlArray[1]) {
        case "new":
            include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/view_new.php";
            break;
        case "edit":
            include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/view_edit.php";
            break;
        case "list":
            include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/view_list.php";
            break;
        default:
            include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/view_list.php";
    }
} else {
    include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/view_list.php";
}