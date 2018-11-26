<?php 
    class Home extends Controller{
        
        public static function get_all_ads(){
            return self::query("select * from advertisements");
        } 

        public static function get_ad_by_id($id){
            
            return self::query("select * from advertisements where id = $id");
        } 

        public static function edit_ad($id){
            require '../View/AdDetails.php';
            if($_POST['Submit']){
                echo'sdddd';
                die();
            }
        }
        

    }
?>