<div class="container">
<h1 style="padding: 32px;"><a href="index.php">Trang chủ</a>/ <a href="index.php?act=sanpham">Sản phẩm</a></h1>
      
       <div class="detail__layout-container" style="
           max-width: 1000px;
           margin: 20px auto;
            height: 1500px;">
            
         <div class="items">

              <?php
             
               foreach ($dssp as $sp) {
                  extract($sp);
                  $img=$img_path.$img_pro;
                  $linksp="index.php?act=sanphamct&id_pro=".$id_pro;
                  echo '<a href="'.$linksp.'"> 
                  <div class="items-content">
                <img style="display:block; margin: auto" src="'.$img.'" alt="" />
                <p class="items-content_title">'.$name_pro.'</p>
                <p class="items-content_price">'.$price_pro.' <u>đ</u></p>
                <button class="btn">Đặt tour</button>
              </div></a>';
               }
              ?>
              
            </div>
         
       

       </div>
      
    
</div>
    <div class="banner2" style="background-image: url(views/img/banner2.jpg)">
      <div>
        <!-- <img src="views/img/banner2.jpg" alt=""> -->
        <p>KHUYỄN MÃI <span>GIẢM GIÁ 50%</span></p>
      </div>
    </div>

    <style>
      .items {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    position: relative;
    /* margin:0 auto; */
    margin-left: -90px;
}
.items a{
    font-size: 14px;
    color: #353535;
    margin-top: 10px;
    text-decoration: none;
}
    </style>
    
         