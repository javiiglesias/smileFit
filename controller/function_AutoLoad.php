<?php

function __autoload($class_name) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $curdir = getcwd();

    chdir("$root/M12/smileFit/");

    $nomFile = "class_" . $class_name . ".php";
    $arxiuPersistence = "model/Persistence/" . $nomFile;
    $arxiuBusiness = "model/Business/" . $nomFile;

    if (file_exists($arxiuPersistence)) {
        require_once $arxiuPersistence;
    } else {
        if (file_exists($arxiuBusiness)) {
            require_once $arxiuBusiness;
        }
    }
    chdir($curdir);
}

?>