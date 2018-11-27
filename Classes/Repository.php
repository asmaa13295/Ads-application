<?php
namespace App\Classes;

class Repository
{
    public static function getAds()
    {
        return Database::query("SELECT * FROM advertisement");
    }

    public static function getAdById($id)
    {
        return Database::query("SELECT * FROM advertisement WHERE id = ?", [$id]);
    }

    public static function addNew($desc, $file_name)
    {
        return Database::query("INSERT INTO advertisement(description,image) VALUES('$desc','$file_name')");
    }

    public static function updAd($desc, $file_name, $id)
    {
    
        return Database::query("UPDATE advertisement set description = '$desc' ,image = '$file_name' WHERE id = '$id'");
    }

    public static function deleteAd($id)
    {
    
        return Database::query("DELETE FROM advertisement WHERE id = '$id'");
    }

    public static function login($user_name, $password)
    {
    
        return Database::query("SELECT * FROM users WHERE name = '$user_name' and password = '$password'");
    }
}
