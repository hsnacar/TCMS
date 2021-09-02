<?php

// *** Daha sonra veritabanından okunacak ayarlar ***
$defaultTemplate = "basic";
$defaultLanguage = "tr";
$defaultYear = "2021-2022";
$defaultPage = "homepage";
// *** ***

include "libraries/const.php";

include LIBRARIES . "/routing.php";

include LIBRARIES . "/class.php";

include LANGUAGES . "/" . $defaultLanguage . "/" . $defaultLanguage . ".php";
