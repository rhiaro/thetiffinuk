<?php

function get_images($dir, $one=False, $admin=False){
    $imgdir = 'img/'.$dir;
    if($admin){
        $imgdir = '../img/'.$dir;
    }
    $files = glob($imgdir.'/*.{jpg,jpeg,png}', GLOB_BRACE);
    if($files){
        if($one){
            rsort($files, SORT_STRING);
            return $files[0];
        }else{
            shuffle($files);
            return $files;
        }
    }
}

function date_from_filename($filename, $format=null){
    if(!isset($format)){
        $format = "jS F Y";
    }
    $file = explode("/",$filename);
    $file = $file[count($file)-1];
    $d = str_replace(".jpg","",$file);
    $date = DateTime::createfromformat("Ymd", $d);
    return $date->format($format);
}

?>