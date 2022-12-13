<div class="acc__container">
<div class="signup" data-aos="fade-right">
        <h1 class="signup__title">Update_Acc</h1>
        <?php
        if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
            extract($_SESSION['user']);
      
        }

        ?>
           <form action="index.php?act=update_acc" method="post">
                <label for="">Nhập email của bạn:</label> <br>
                <input type="email" name="email_user" placeholder="Nhập email....."  class="input" value="<?=$email_user ?>"> <br>
                <label for="">Nhập tên của bạn:</label> <br>
                <input type="text" name="name_user" placeholder="Nhập Tên....." class="input" value="<?=$name_user ?>">
                <br>
                <label for="">Mật khẩu:</label> <br>
                <input type="password" name="pass_user" placeholder="Nhập password....." class="input" value="<?=$pass_user ?>">
                <br>
                <label for="">Địa chỉ:</label> <br>
                <input type="text" name="address_user" placeholder="Nhập address....." class="input" value="<?=$address_user ?>">
                <br>
                <label for="">Số điện thoại:</label> <br>
                <input type="text" name="tel_user" placeholder="Nhập số điện thoại....." class="input" value="<?=$tel_user ?>">
                <br>
                <input type="hidden" name="id_user" value="<?=$id_user ?>">
                <input type="submit" value="Update_acc" name="update_acc" class="signup_btn">
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