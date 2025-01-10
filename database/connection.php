<?php


function database_connection()
{
    try {
        return new PDO("mysql:host=localhost;dbname=stagierdb", "root", "");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}