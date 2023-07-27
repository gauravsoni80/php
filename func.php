<?php

    // ADD META TAG

    $metas = array(

        'meta-unicode' => '<meta charset="UTF-8">',
        'meta-device' => '<meta name="viewport" content="width=device-width, initial-scale=1.0">',
        'meta-theme' => '<meta name="theme-color" content="#319197">'
    );

    // ADD TITLE 

    $titles = array(

        'index' => 'Default',
        'login' => 'signin'

    );

    // ADD CASECADE STYLESHEET FILE

    $css = array(
        "icon" => "",
        "style" => "Assets/css/style.css",
        "bootstrap" => "Assets/css/bootstrap.min.css",
        "materialize" => "Assets/css/materialize.min.css"
    );

    // ADD CUSTOM JAVASCRIPT FILE

    $js = array(
        "style" => "Assets/js/style.js",
        "bootstrap" => "Assets/js/bootstrap.min.js",
        "materialize" => "Assets/js/materialize.min.js"
    );

    //ADD CUSTOM FONT PATH

    $fonts = array(

        "Halvetica" => "Assets/fonts/Halvetica/Helvetica.ttf",
        "Halvetica-Bold" => "Assets/fonts/Halvetica/Helvetica-Bold.ttf",
        "Poppins" => "Assets/fonts/Poppins/Poppins-Regular.ttf",
        "Poppins-SemiBold" => "Assets/fonts/Poppins/Poppins-SemiBold.ttf",
        "Poppins-Bold" => "Assets/fonts/Poppins/Poppins-Bold.ttf"

    );



    // DEFINE VARIABLES

    define("directory",realpath(__DIR__.'/'));
    define("file",realpath(__FILE__.'/'));
    define("directory_root","http://localhost/web");
    define("meta",$metas);
    define("title",$titles);
    define("css",$css);
    define("js",$js);
    define("font",$fonts);
?>