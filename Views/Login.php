<html>

   <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
        .container{
            width:80%;
            margin: 0 10% 0 10%;
            min-height: 700px;
            padding: 100px ;
        }
        .textarea{
            padding: 10px
        }
        h3 {
            color: green;
            text-align: center
        }
        h4{
            color: green;
        }
        form{
            border: 1px solid #555;
            width: 30%;
            height: 280px;
            padding: 2%;
            position: fixed;
            left: 35%;
            background-color:#EEE;
        }
        .password, .user_name {
            height: 30px;
            width: 285px;
        }
        .submit{
            margin: 25px 0
        }
        </style>
    </head>
    <body>
      <div class='container'>
      <form action = "login_validation" method = "POST" enctype = "multipart/form-data">
          <h3> Login</h3>
          <h4> User Name : </h4>
          <input class = "user_name" type = "text" name = "user_name" >
          <h4> Password : </h4>
          <input class = "password" type = "text" name = "password" ></br>
          <input class= "submit" type="submit" name="submit" value="Submit"/>
        </form>
      </div>
   </body>
</html>
