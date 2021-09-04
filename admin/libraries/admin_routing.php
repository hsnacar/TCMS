<?php

class adminRouting
{
    public static $targetComponent = "homepage";

    public static function urlParse()
    {
        return str_replace([dirname($_SERVER['SCRIPT_NAME']), basename($_SERVER['SCRIPT_NAME'])], "", $_SERVER['REQUEST_URI']);
    }
}
// Çağrılan adresin parçalanması ve diziye aktarılması
$urlArray = explode("/", adminRouting::urlParse());

// Dizideki boş elemanların temizlesi
$urlArray = array_filter($urlArray);

// Dizinin yeniden indekslenmesi
$urlArray = array_values($urlArray);

// Eğer ilk eleman bir html sayfa çağrısı değilse ve kök dizin çağrısı değilse bileşeni eşitle
if (strstr($urlArray[0], '.html') == "" && count($urlArray) != 0) {
    adminRouting::$targetComponent = $urlArray[0];
}

// Eğer aranan bileşen yoksa homepage bileşenini aç
if (!file_exists(ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent)) {
    adminRouting::$targetComponent = "homepage";
}
