<?php
    $ads = new Home();
    $result = $ads->get_all_ads();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ads Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class='container'>
        <ul>
            <?php foreach ($result as $res) {  ?>
            <li>
                <a calss='ads-element' href= <?php echo"AdDetails.php?pk=".$res['id'];?>>
                    <img src="./img/yellowpages.jpg" alt='ttttt'>
                    <p><?php echo $res["description"]; ?></p>
                </a>
                <a class ='Edit' href=<?php echo"Edit.php?pk=".$res['id'];?>>Edit </a>
            </li> 
            <?php } ?>
        </ul>
    </div>
    <div class='btn'>
        <a href="Add.php">Add Advertisment</a>
    </div>
</body>
</html>

<style>
.container{
    width:80%;
    background-color:#EEE;
    margin: 0 10% 0 10%;
}
ul{
    list-style: none;
    display: inline-block;
    text-align: center;
    width: 100%;
    margin: 0;
    padding: 0;
}
li{
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
.Edit{
    color: green;
    border: 1px solid green;
    width: 25%;
    background-color: white;


}
.Edit:hover{
    color: white;
    background-color: green;
}
</style>
