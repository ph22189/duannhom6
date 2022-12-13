<div class="acc__container">
<div class="signup" data-aos="fade-right">
        <h1 class="signup__title">Đăng kí</h1>
           <form action="index.php?act=acc" method="post">
                <label for="">Nhập email của bạn:</label> <br>
                <input type="email" name="email_user" placeholder="Nhập email....."  class="input"> <br>
                <label for="">Nhập tên của bạn:</label> <br>
                <input type="text" name="name_user" placeholder="Nhập Tên....." class="input" >
                <br>
                <label for="">Nhập pass của bạn:</label> <br>
                <input type="password" name="pass_user" placeholder="Nhập password....." class="input">
                <br>
                <input type="submit" value="Sign Up" name="signup" class="signup_btn">
                <input type="reset" value="Reset" class="reset_btn"> <br>
            </form>
            <p>
            <?php
            if(isset($thongbao)&&($thongbao!= "")){
                echo $thongbao;
            }
            ?>
            </p>
            
        </div>
       
          
     
        

</div>