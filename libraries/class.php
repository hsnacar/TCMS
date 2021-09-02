<?php

class dbase
{
}

class pageBuild
{
    public $htmlHead = "";
    public $htmlBody = "";
}

$page = new pageBuild();

include COMPONENTS . "/" . $defaultPage . "/head.php";
include COMPONENTS . "/" . $defaultPage . "/modal.php";
include COMPONENTS . "/" . $defaultPage . "/controller.php";
include COMPONENTS . "/" . $defaultPage . "/view.php";

include TEMPLATES . "/" . $defaultTemplate . "/index.php";
