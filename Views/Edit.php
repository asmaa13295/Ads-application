<?php
  $id = $_GET['id'];
  $repository = new Repository();
  $result = $repository->getAdById($id);
  $description = $result['0']['description'];
  $image = $result['0']['image'];
?>

<html>
   <body>
      
      <form action = "update_ad" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <p><?php echo $image; ?></p>
         <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
         <input type = "text" name = "desc" value = "<?php echo $description; ?>"/>
         <input type="submit" name="submit" value="Submit"/>
         
      </form>
      
   </body>
</html>