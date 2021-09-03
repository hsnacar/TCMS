<?php

class dbase
{
}

class pageBuild
{
    public static $htmlHead = "";
    public static $htmlBody = "";
    public static $theme = "basic";
    public static $language = "tr";
}

include COMPONENTS . "/" . routing::$targetComponent . "/head.php";
include COMPONENTS . "/" . routing::$targetComponent . "/modal.php";
include COMPONENTS . "/" . routing::$targetComponent . "/controller.php";
include COMPONENTS . "/" . routing::$targetComponent . "/view.php";

include TEMPLATES . "/" . pageBuild::$theme . "/index.php";
