<?php

//enter database details here.
$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "",
            "username" => "",
            "password" => "",
            "host" => ""
        )
    ),
    //set main url here.
    "urls" => array(
        "baseUrl" => ""
    ),
    "paths" => array(
        "resources" => "resources/",
        "images" => array(
            //enter image paths here...
        )
    )
);

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

ini_set("error_reporting", true);
error_reporting(E_ALL|E_STRICT);

?>