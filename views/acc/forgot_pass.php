<div class="acc__container">
<div class="signup" data-aos="fade-right">
        <h1 class="signup__title">Forgot Password</h1>
           <form action="index.php?act=forgot" method="post">
                <label for="">Nhập email của bạn:</label> <br>
                <input type="email" name="email_user" placeholder="Nhập email....."  class="input"> <br>
                
                <input type="submit" value="Forgot Password" name="forgot" class="signup_btn">
                
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