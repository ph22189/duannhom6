<?php
session_start();
include "../../model/pdo.php";
include "../../model/model_cmt.php";

$id_pro=$_REQUEST['id_pro'];
$list_cmt=loadall_cmt($id_pro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
     <style>
       *{
        margin: 0;
        padding: 2px;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
        scroll-behavior: smooth;
}
form{
     position: sticky;
     bottom:0;
}
     </style>
</head>
<body>
        <div class="container" >
               
                <table>
                     
                        <?php
                        foreach($list_cmt as $cmt){
                                extract($cmt);
                               
                                echo '<tr><td style="padding: 10px;">'.$id_user.'</td>';
                                echo ' <td style="padding: 10px;">'.$content_cmt.'</td>';
                                echo '<td style="padding: 10px;">'.$date_cmt.'</td></tr>';
                        }


?>
                </table>

        </div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="id_pro" value="<?=$id_pro?>">
                <input style="padding: 5px;width: 50%;" type="text" name="content_cmt" placeholder="Đánh giá của bạn về sản phẩm....">
                <input style="padding: 5px;
                              width: 60px;
                              background-color: black;
                              color: white;
                              font-weight: bold;" type="submit" value="Gửi" name="submit_cmt" >
                 </form>
        <?php
           if(isset($_POST['submit_cmt'])&&($_POST['submit_cmt'])){
                $content_cmt=$_POST['content_cmt'];
                $id_pro=$_POST['id_pro'];
                $id_user=$_SESSION['user']['id_user'];
                $date_cmt=date('h:i:sa d/m/Y');
                add_cmt($content_cmt,$id_user,$id_pro,$date_cmt);
                header ("location:".$_SERVER['HTTP_REFERER']);
        }
        ?>
</body>
</html>