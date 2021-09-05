<?php

class adminRouting
{
    public static $targetComponent = "homepage";
    public static $urlArray;

    public static function urlParse()
    {
        return str_replace([dirname($_SERVER['SCRIPT_NAME']), basename($_SERVER['SCRIPT_NAME'])], "", $_SERVER['REQUEST_URI']);
    }
}
// Çağrılan adresin parçalanması ve diziye aktarılması
adminRouting::$urlArray = explode("/", adminRouting::urlParse());

// Dizideki boş elemanların temizlesi
adminRouting::$urlArray = array_filter(adminRouting::$urlArray);

// Dizinin yeniden indekslenmesi
adminRouting::$urlArray = array_values(adminRouting::$urlArray);

// Eğer ilk eleman bir html sayfa çağrısı değilse ve kök dizin çağrısı değilse bileşeni eşitle
if (strstr(adminRouting::$urlArray[0], '.html') == "" && count(adminRouting::$urlArray) != 0) {
    adminRouting::$targetComponent = adminRouting::$urlArray[0];
}

// Eğer aranan bileşen yoksa homepage bileşenini aç
if (!file_exists(ADMIN_COMPONENTS . "/" . adminRouting::$targetComponent)) {
    adminRouting::$targetComponent = "homepage";
}
// echo "<br>target component: ".adminRouting::$targetComponent;