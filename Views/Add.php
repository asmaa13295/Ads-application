<?php
  $repository = new Repository();
?>

<html>
   <body>
      
      <form action = "add_ad" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "hidden" name = "id" >
         <input type = "text" name = "desc" />
         <input type="submit" name="submit" value="Submit"/>
         
      </form>
      
   </body>
</html>