<?php

class routing
{

    public static $targetComponent = "homepage";

    public static function urlParse()
    {
        return str_replace([dirname($_SERVER['SCRIPT_NAME']), basename($_SERVER['SCRIPT_NAME'])], "", $_SERVER['REQUEST_URI']);
    }
}
// Çağrılan adresin parçalanması ve diziye aktarılması
$urlArray = explode("/", routing::urlParse());

// Dizideki boş elemanların temizlesi
$urlArray = array_filter($urlArray);

// Dizinin yeniden indekslenmesi
$urlArray = array_values($urlArray);

// Eğer ilk eleman bir html sayfa çağrısı değilse ve kök dizin çağrısı değilse bileşeni eşitle
if (strstr($urlArray[0], '.html') == "" && count($urlArray) != 0) {
    routing::$targetComponent = $urlArray[0];
}
// Eğer ilk eleman bir html sayfa çağrısı ise content bileşenin çağır
if (strstr($urlArray[0], '.html') != "") {
    routing::$targetComponent = "content";
}

