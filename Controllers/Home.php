<?php
namespace App\Controllers;

use App\Classes\Repository;

class Home extends Controller
{
    public static function updateAd()
    {
        if (empty($_POST['desc'])) {
             echo "<font color='red'>description field is empty.</font><br/>";
        } elseif (isset($_FILES['image'])) {
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $exploded = explode('.', $_FILES['image']['name']);
            
            if ($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }
            
            if (empty($errors)==true) {
                move_uploaded_file($file_tmp, "img/".$file_name);
                $dec = $_POST['desc'];
                $id = $_POST['id'];

                $repository = new Repository();
                $result = $repository->updAd($dec, $file_name, $id);
                echo '<p>Updated succefully .</p><a href= index.php>Return Home </a>';
            } else {
                print_r($errors);
            }
        }
    }

    public static function deleteAd()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $repository = new Repository();
            $result = $repository->deleteAd($id);
            $_GET['url'] = 'index';
            echo '<p>Deleted succefully .</p><a href= index.php>Return Home </a>';
        } else {
            echo '<p>Error in deletting .</p><a href= index.php>Return Home </a>';
        }
    }

    public static function addAd()
    {
        if (empty($_POST['desc'])) {
             echo "<font color='red'>description field is empty.</font><br/>";
        } elseif (isset($_FILES['image'])) {
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_size =$_FILES['image']['size'];
            $file_tmp =$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $exploded = explode('.', $_FILES['image']['name']);
            
            
            if ($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }
            
            if (empty($errors)) {
                move_uploaded_file($file_tmp, "img/".$file_name);
                $desc = $_POST['desc'];
                $repository = new Repository();
                $result = $repository->addNew($desc, $file_name);
                echo '<p>Added succefully .</p><a href= index.php>Return Home </a>';
            } else {
                print_r($errors);
            }
        }
    }

    public static function validateAdmin()
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $repository = new Repository();
        $result = $repository->login($user_name, $password);
        $errors= array();
        if (empty($result)) {
            $errors[]='please enter valid username and password';
        }
        if (empty($errors)) {
            $user = new CurrentUser($result[0]['id'], $result[0]['name'], $result[0]['role']);
            header('Location: ' . $_SERVER['SCRIPT_NAME']);
        }
        print_r($errors);
    }
}
