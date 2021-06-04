<?php
     header("Content-Type:text/html; charset=utf-8");
     $serverName="LAPTOP-59N7GD2S\SQLEXPRESS";
     $connectionInfo=array("Database"=>"Blog","UID"=>"CCU","PWD"=>"12345678","CharacterSet" => "UTF-8");
     $conn=sqlsrv_connect($serverName,$connectionInfo);
        if($conn){
            //echo "Connect Success!!!<br/><br/>";
        }else{
            echo "Connect Error!!!<br/><br/>";
            die(print_r(sqlsrv_errors(),true));
        }            
?>