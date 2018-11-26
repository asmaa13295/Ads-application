<?php 
    $id = $_GET['pk'];
    $ads = new Home();
    $result = $ads->get_ad_by_id($id);
    $description = $result['0']['description'];
    $image = $result['0']['image'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ads details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div class='container'>
        <form method="POST">
            <div class = 'ad-cont'>
                <div class = 'ad-img'>
                    <img src='./img/<?php echo $image ?>' alt ='yello pages pic'>
                </div>
                <h4 class='ad-desc'> <?php echo $description ?></h4>
            </div>
            <input type="submit" name="form_submitted" value="Submit" />
            <div class='comments'>
                <h4 >Comments</h4>
                <div class='comment-cont'>
                    <ul >
                        <li>name:   </li>
                        <li></li>
                        <li>date:   </li>
                    </ul>
                    <p>Comment content</p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<style>
.container{
    width:80%;
    background-color:#EEE;
    margin: 0 10% 0 10%;
    color : #333
}
.ad-cont{
    text-align: center;
    width: 100%;
    padding : 1% 30%;
}
.ad-img , .ad-desc, .comments, .comment-cont{
    border : 1px solid red;
    border-radius: 15px;
    border: 1px solid #357d9e;
    background-color: #e1f3fb;
    margin : 3% 2%;
    padding : 20px 0;
    width : 30%;
    text-align: center;
}
.ad-desc{
    border-radius: 0px;
}
.ad-img img {
    border-radius: 50%;
    margin: 8px;
}
.comments{
    background-color: #EEE;
    border: none;
    width: 50%
}
.comment-cont, .comments h4{
    width: 100%;
    margin : 0% 0% 10% 40%;
    list-style: none;
    display: inline-block;
}
li{
    display: inline-block;
    width: 32%;
}
</style>