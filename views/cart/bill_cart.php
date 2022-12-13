<div class="container_cart">
   <div class="list__cart">
        <?php
        include "views/cart/view_cart.php";
        ?>
   </div>
   <div class="cart__pay">
      <h1 class="title">Thông tin đặt tour</h1>
      <form action="index.php?act=bill_cart" method="post">
          <?php
             if(isset($_SESSION['user'])){
               $name_user=$_SESSION['user']['name_user'];
               $address_user=$_SESSION['user']['address_user'];
               $email_user=$_SESSION['user']['email_user'];
               $tel_user=$_SESSION['user']['tel_user'];
             }else{
               $name_user= "";
               $address_user= "";
               $email_user= "";
               $tel_user= "";
             }
          ?>
        <div class="cart__pay-item">
            <label for="">Tên*:</label>
           <input type="text" name="name_user" value="<?=$name_user ?>" placeholder="Tên của bạn....">
        </div>
        
        <div class="cart__pay-item">
             <label for="">Địa chỉ*:</label>
             <input type="text" name="address_user" id="" value="<?=$address_user ?>" placeholder="Địa chỉ của bạn....">
        </div>
        <div class="cart__pay-item">
             <label for="">Email*:</label>
             <input type="text" name="email_user" id="" value="<?=$email_user ?>" placeholder="Email của bạn....">
        </div>
        <div class="cart__pay-item">
              <label for="">Số điện thoại:</label>
              <input type="text" name="tel_user" id="" value="<?=$tel_user ?>" placeholder="Số điện của bạn....">
        </div>
        <div>
        <p>Ngày đi</p>
                <input type="date" value="1">
          </div>
          <div>
          <p>Ngày về</p>
                <input type="date" value="1">
          </div>
        <div class="cart__pay-radio">
          <div>
                <input type="radio" value="1" name="bill_pttt" id="">
                <p>Trả tiền mặt đặt tour</p>
          </div>
          <div>
                <input type="radio" value="2" name="bill_pttt" id="">
                <p>Chuyển khoản ngân hàng</p>
          </div>
          
          
        </div>
        
      </form>
      <a href="index.php?act=billComfrim"><input type="submit" value="Đồng ý tour" name="comfirm_cart"  class="comfirm_cart"></a>
     </div>
</div>