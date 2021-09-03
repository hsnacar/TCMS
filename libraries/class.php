<?php

class dbase
{
}

class pageBuild
{
    public static $htmlHead = "";
    public static $htmlBody = "";
}


include COMPONENTS . "/" . routing::$targetComponent . "/head.php";
include COMPONENTS . "/" . routing::$targetComponent . "/modal.php";
include COMPONENTS . "/" . routing::$targetComponent . "/controller.php";
include COMPONENTS . "/" . routing::$targetComponent . "/view.php";

include TEMPLATES . "/" . $defaultTemplate . "/index.php";
