
<div class="container_cart">
   <div class="list__cart">
        <h1 style=" font-size: 20px;font-weight: bold;">Chi tiết Tour</h1>
        <div style="margin:20px 10px">
           
           <?php

           include "views/cart/view_cart.php";
        
        ?>
        </div>
   </div>
   <div class="cart__pay">
      <h1 class="title">Cảm ơn bạn  Đơn TOUR của bạn đã nhận.</h1>
      <div>
        <li>Mã Tour  <?php $listcart[0]  ?></li>
        <li>Ngày đi:<?= date(' d/m/Y')  ?></li> <p></p>
        <li>Ngày về:<?= date(' d/m/Y')  ?></li> <p></p>
        <li style="    margin: 20px 0px;border-top: 1px solid;font-weight: bold;">Tổng cộng:<?=$tong?>$</li>
        
      </div>
      
     </div>
</div>