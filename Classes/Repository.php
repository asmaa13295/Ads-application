<?php

class Repository
{
    public static function getAds()
    {
        return Database::query("select * from advertisement");
    }

    public static function getAdById($id)
    {
        return Database::query("select * from advertisement where id = ?", [$id]);
    }

    public static function addNew($desc, $file_name)
    {
        return Database::query("INSERT INTO advertisement(description,image) VALUES('$desc','$file_name')");
    }

    public static function updAd($desc, $file_name, $id){
    
        return Database::query("update advertisement set description = '$desc' ,image = '$file_name' where id = '$id'");
    }

    public static function deleteAd($id){
    
        return Database::query("delete from advertisement where id = '$id'");
    }

    
}
