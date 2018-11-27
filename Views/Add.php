<?php
  $repository = new App\Classes\Repository();
?>

<html>
   <body>
   <head>
        <meta charset="utf-8" />
        <title>Add New</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
      <div class='container'>
      <form action = "add_ad" method = "POST" enctype = "multipart/form-data">
          <h4> Decription</h4>
          <textarea rows="4" cols="50"  name = "desc" > </textarea></br>
          <input class= 'image' type = "file" name = "image" /></br>
          <input type="submit" name="submit" value="Submit"/>
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
  .textarea{
    padding: 10px
  }
  h4 {
    color: green
  }
  .image{
    margin: 20px 0;
  }
</style>