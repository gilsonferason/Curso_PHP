<?php
function conectar(){
    define("server","mysql:host=localhost;dbname=banco_o14");
    define("user","root");
    define("pass","");
    try{
        $conn=new PDO(server,user,pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names UTF8");
    }CATCH(PDOException $ex){
        echo "Deu rui, Gilson, chame os macacos :".$ex->getMessage();
        die;
    }
    return $conn;
 }
//conectar();
 ?>