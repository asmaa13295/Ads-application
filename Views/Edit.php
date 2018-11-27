<?php
  $id = $_GET['id'];
  $repository = new Repository();
  $result = $repository->getAdById($id);
  $description = $result['0']['description'];
  $image = $result['0']['image'];
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Edit Ad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
   <body>
      <div class= 'container'>
        <form action = "update_ad" method = "POST" enctype = "multipart/form-data">
          <h4> Decription</h4>
          <textarea rows="4" cols="50"  name = "desc" > <?php echo $description; ?></textarea></br>
          <input class= 'image' type = "file" name = "image" />
          <?php echo $image; ?></br>
          <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
          <input class='submit' type="submit" name="submit" value="Submit"/>
        </form>
      </div>
   </body>
</html>


<style>
  .container{
      width:80%;
      background-color:#EEE;
      margin: 0 10% 0 10%;
      min-height: 700px;
      padding: 25px ;
  }
  textarea{
    padding: 10px;
    font-size: 15px
  }
  h4 {
    color: green
  }
  .image{
    margin: 20px 0;
  }

  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

</style>