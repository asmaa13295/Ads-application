<?php
    $repository = new App\Classes\Repository();
    $result = $repository->getAds();
    $currentUser = App\Classes\CurrentUser::get();
    $role = $currentUser->role;

    $fb = new Facebook\Facebook([
      'app_id' => '1460994884003264', // Replace {app-id} with your app id
      'app_secret' => 'abdc76a5b58eba99c6293e205dfac20d',
      'default_graph_version' => 'v2.2',
      ]);

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class='container'>
            <ul>
                <?php foreach ($result as $res) {  ?>
                <li>
                    <a calss='ads-element' href= <?php echo"details?id=".$res['id'];?>>
                    <img src="/../img/yellowpages.jpg" alt ='yello pages pic'>
                        <p><?php echo $res["description"]; ?></p>
                    </a>
                    <?php if($role == 1 || $role == 2){ ?>
                        <a class ='Edit' href="<?php echo"edit?id=".$res['id'];?>">Edit </a>
                    <?php }?>
                    <?php if($role == 1 ){ ?>
                        <a class ='Delete' href="<?php echo"delete?id=".$res['id'];?>">Delete </a>
                    <?php } ?>

                </li> 
                <?php } ?>
            </ul>
            <div class='btn'>
                <?php if($role == 1 ){ ?>
                    <a class = 'Add' href="add">Add Advertisment</a>
                <?php } ?>
            </div>
            <div class='btn'>
                <?php if ($role == 0) { ?>
                    <a class = 'Add' href="login">admin Login</a>
                <?php } ?>
            </div>
            <div class='btn'>
                <?php if ($role == 1) { ?>
                    <a class = 'Add' href="logout">admin Logout</a>
                <?php } ?>
            </div>

        <?php echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>'; ?>
        </div>
    </body>
</html>

<style>
.container{
    width:80%;
    background-color:#EEE;
    margin: 0 10% 0 10%;
    min-height: 700px;
    padding-top: 25px;
}
ul{
    list-style: none;
    display: inline-block;
    text-align: center;
    width: 100%;
    margin: 0;
    padding: 0;
}
li, .Add{
    border-radius: 15px;
    border: 1px solid #357d9e;
    background-color: #e1f3fb;
    display: inline-block;
    margin : 10px 10px;
    padding : 3px 0 5px 0 ;
    width: 30%;
}
li img {
    border-radius: 50%;
    margin: 2px;
}
a , .ads-element{
    text-decoration: none;
    display: inline-block;
    width:100%;
    color: #333;
}
.Edit, .Delete, .Add{
    color: green;
    border: 1px solid green;
    width: 25%;
    background-color: white;
    text-align: center;

}
.Edit:hover, .Delete:hover, .Add:hover{
    color: white;
    background-color: green;
}
.Add{
    margin : 3% 35%;
}
</style>
