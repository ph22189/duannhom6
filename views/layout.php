<div class="container">
<div class="banner">
        <div class="slider">
          <!-- <input type="radio" name="input-silder" id="img1" />
          <input type="radio" name="input-silder" id="img2" />
          <input type="radio" name="input-silder" id="img3" /> -->
          
          <img src="./upload/slider_1.webp" alt="img1" class="banner1" />
          <!-- <div class="banner1" style="background-image: url(views/img/slider_1.webp)"> -->
         
        </div>
        <!-- <div class="labels-silder">
          <label for="img1"></label>
          <label for="img2"></label>
          <label for="img3"></label>
        </div> -->
  </div>
  
  <div class="search">
                    <input type="text" placeholder="Tu khoa tim kiem..."><button><b>TIM</b></button>
  </div> 
      <!-- </div>  -->
      <div class="tabs">
        
        <div class="tabs-layout">
          <div id="1" data-aos="fade-up">
            <h1 class="layout-title">Tour mới</h1>
            
            <div class="items">
              <?php
             
               foreach ($pro_new as $sp) {
                  extract($sp);
                  $img=$img_path.$img_pro;
                  $linksp="index.php?act=sanphamct&id_pro=".$id_pro;
                  echo '<a href="'.$linksp.'"> 
                  <div class="items-content">
                <img style="display: block;
                margin: auto;" src="'.$img.'" alt="" 
                <p class="items-content_title">'.$name_pro.'</p>
                <p class="items-content_price">'.$price_pro.' $</p>
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id_pro" value="'.$id_pro.'">
                <input type="hidden" name="name_pro" value="'.$name_pro.'">
                <input type="hidden" name="price_pro" value="'.$price_pro.'">
                <input type="hidden" name="img_pro" value="'.$img.'">
                <input type="submit" name="addtocart" class="btn" value="Đặt tour" />
              </form>
              </div></a>';
               }
              ?>
              
            </div>

           
        </div>
      </div>
    </div>
    <div class="textanh">
                <div class="text">
                    <div class="text1">
                        <h1><b>Những bức ảnh đẹp nhất</b></h1>
                        <p>------------------------- v v v -------------------------</p>
                    </div>
                </div>
                <div class="anhdep">
                    <div class="img1">
                        <img src="./upload/img1.webp" alt="">
                    </div>
                    <div class="img2">
                        <div class="imgg2">
                            <img src="./upload/img2.webp" alt="">
                            <img src="./upload/img3.webp" alt="">
                        </div>
                        <div class="imgg2">
                            <img src="./upload/img4.webp" alt="">
                            <img src="./upload/img5.webp" alt="">
                        </div>
                    </div>

                </div>
    </div>
            
    <div class="banner2" style="background-image: url(views/img/banner2.jpg)">
      <div>
        <p>KHUYỄN MÃI <span>GIẢM GIÁ 50%</span></p>
      </div>
    </div>
    <div class="tongket">
                <div class="lienhe">
                    <h3>Liên Hệ</h3>
                    <p><b>Địa chỉ:</b>Cao đẳng FPOLY đường TRịnh Văn Bô</p>
                    <p><b>Điện thoại: </b> 09678999 </p>
                    <p><b>Email: </b>abc@gmail.com </p>
                    <p><b>Giờ làm việc: </b>Từ 8h sáng đến 6h chiều </p>

                </div>

                <div class="ketnoithanhtoan">
                    <div class="ketnoi">
                        <h3>Kết Nối Với Chúng Tôi</h3>

                    </div>
                    <div class="thanhtoan">
                        <h3>Chấp Nhận Thanh Toán</h3>
                        <div class="cart">
                            <img src="./upload/img_payment_1.webp" alt="">
                            <img src="./upload/img_payment_2.webp" alt="">
                            <img src="./upload/img_payment_4.webp" alt="">
                            <img src="./upload/img_payment_7.webp" alt="">
                        </div>

                    </div>

                </div>

                <div class="trongnuoc">
                    <h3>Trong Nước</h3>
                    <p>Hạ Long</p>
                    <p>Ninh Bình</p>
                    <p>Nghệ An</p>
                    <p>Đà Nẵng</p>
                    <p>Cà Mau</p>
                </div>
                <div class="ngoainuoc">
                    <h3>Ngoài Nước</h3>
                    <p>Tây Ban Nha</p>
                    <p>Ý</p>
                    <p>Pháp</p>
                    <p>Anh</p>
                    <p>Thái Lan</p>
                </div>
    </div>
</div>
    <style>
      
      .tongket {
    display: grid;
    grid-template-columns: 30% 30% 20% 20%;
    
    margin-left: 80px;
    max-width: 1200px;
    margin: 64px auto;
    


}

.banner2 img{
  width: 200px;
}

.tongket h3 {
    color: cadetblue;
    margin-bottom: 20px;
}

.anhdep {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1200px;
    margin: 20px auto;


}
.text1{
  text-align: center;
  font-size: 25px;
  margin-bottom: 40px;

}
.items-content img {
    width: 400px;
    height: 200px;
    border-radius: 6px;
}

.imgg2 img {
    width: 285px;
    margin: 2px;
    margin-bottom: 4px;
}

.img2 {
    margin-right: 70px;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.img1 {
    margin-left: 50px;
}


.anhdep img {
    border-radius: 10px;
    display: block;
    transition: all 0.5s ease;
}

.anhdep img:hover {
    transform: scale(1.1, 1.1);
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
}

.textanh {
    margin-top: 64px;
    /* margin:0 auto; */
    margin-left: -80px;
}
.items {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    position: relative;
    /* margin:0 auto; */
    margin-left: -90px;
    
    
}
.banner img {
    border-radius: 10px;
    width: 1480px;
}

.banner2{
    border-radius: 10px;
    margin-left: -10px;
    /* width: ; */
}
.banner2 div {
    width: 100%;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--white);
    font-size: 54px;
}

.banner2 div span {
    color: red;

}
.main {
    max-width: var(--max);
    /* margin: auto; */
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 200px;
}
/* .items-content_title  {
    font-size: 14px;
    color: #353535;
    margin-top: 10px;
    text-decoration: none;
} */
.items a{
    font-size: 14px;
    color: #353535;
    margin-top: 10px;
    text-decoration: none;
}


</style>