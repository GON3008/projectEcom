<?php
const DBNAME = "ass2";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/duan1/";

function url($url){
    return BASE_URL.$url;
}

if(!isset($_SESSION['san_pham'])){
    $_SESSION['san_pham'] = [];
}

//unset($_SESSION['san_pham']);
//echo "<pre>";
//print_r($_SESSION['san_pham']);
//die();



