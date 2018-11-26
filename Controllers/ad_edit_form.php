<?php

if(isset($_POST['form_submitted'])) {    
    $desc = $_POST['desc'];
    $img = $_POST['img'];
        
    // checking empty fields
    if(empty($desc) || empty($img) ) {                
        if(empty($desc)) {
            echo "<font color='red'>description field is empty.</font><br/>";
        }
        
        if(empty($img)) {
            echo "<font color='red'>please upload a valid photo.</font><br/>";
        }

        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = query("INSERT INTO ads(description,image) VALUES('$desc','$img')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}


?>