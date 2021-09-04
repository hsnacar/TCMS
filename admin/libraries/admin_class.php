
<?php

class adminDbase
{
}

class adminPageBuild
{
    public static $baseFolder = "/admin";
    public static $htmlHead = "";
    public static $htmlBody = "";
    public static $theme = "default";
    public static $language = "tr";
}

include ADMIN_LANGUAGES . "/" . adminPageBuild::$language . "/" . adminPageBuild::$language . ".php";


include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/head.php";
include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/modal.php";
include ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent . "/controller.php";


include ADMIN_TEMPLATES . "/" . adminPageBuild::$theme . "/index.php";
