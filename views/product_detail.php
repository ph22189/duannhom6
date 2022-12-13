<div class="container">
<h1 style="padding: 32px;"><a href="index.php">Trang chủ</a>/ <a href="index.php?act=sanpham">Tour</a></h1>
      
      <div class="detail__layout-container" style="
        max-width: 1000px;
        margin: 20px auto;
        height: fit-content;">
        <?php  extract($onepro);
              
        ?>
        <div >
         <div class="title" >
            <?php echo '<h1 style="font-size: 25px;font-weight:bold;"> '.$name_pro.'  </h1>'  ?>
         </div>
         <?php       
         $img=$img_path.$img_pro;
         echo '<img style="width:70%" src="'.$img.'"';?>
        <div>
          <?php
           echo '<li style="font-size: 20px;font-weight:bold; margin-bottom:20px" >Giá:'.$price_pro.'$  </li>';
           echo '<form action="index.php?act=addtocart" method="post">
           <input type="hidden" name="id_pro" value="'.$id_pro.'">
           <input type="hidden" name="name_pro" value="'.$name_pro.'">
           <input type="hidden" name="price_pro" value="'.$price_pro.'">
           <input type="hidden" name="img_pro" value="'.$img.'">
           <input type="submit" name="addtocart" style="background-color:black; color:white; padding:20px;" value=" Đặt tour" />
         </form>';
        
          ?>
           <p style="margin-top:16px;">Thời gian tour : <?=$date ?></p>
          <p style="margin-top:32px;"><?=$desc ?></p>
         
        </div>
       
        
        
        <div class="comment" id="cmt" style="margin:50px 0px">
        <h1 class="title" style="border-bottom:1px solid;   font-weight: bold;font-size: 20px;">Đánh giá của bạn*</h1>
  
        <iframe src="views/cmt/cmt.php?id_pro=<?=$id_pro?>" width="100%" height="300px" frameborder="0"></iframe>
        </div>
        <div style="margin-top:32px">
          <h3 style="    font-weight: bold;font-size: 20px;border-bottom: 1px solid;
    padding-bottom: 12px;">Tour cùng loại</h3>
        <div class="items">
              <?php
             
               foreach ($sp_cungloai as $sp_cungloai) {
                  extract($sp_cungloai);
                  $img=$img_path.$img_pro;
                  $linksp="index.php?act=sanphamct&id_pro=".$id_pro;
                  echo '<a href="'.$linksp.'"> 
                  <div class="items-content">
                <img style="display: block;
                margin: auto;" src="'.$img.'" alt="" />
                <p class="items-content_title">'.$name_pro.'</p>
                <p class="items-content_price">'.$price_pro.' <u>đ</u></p>
                <button class="btn">Thêm vào giỏ hàng</button>
               </div></a>';
               }
              ?>
              
            </div>
        </div>
         
       

      </div>
      
    
</div>
    <div class="banner2" style="background-image: url(views/img/banner2.jpg)">
      <div>
        <img src="views/img/banner2.jpg" alt="">
        <p>KHUYỄN MÃI <span>GIẢM GIÁ 50%</span></p>
      </div>
    </div>
    
         