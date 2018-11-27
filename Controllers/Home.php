<?php
class Home extends Controller
{
    public static function edit_ad($id)
    {
        require '../View/AdDetails.php';
        if ($_POST['Submit']) {
            echo'sdddd';
            die();
        }
    }
}
