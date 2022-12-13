
        <table>
                <tr>
                        <th class="cart__title">Tour</th >
                        <th class="cart__title">Giá</th >
                        <th class="cart__title">Số lượng</th >
                        <th class="cart__title">Tổng</th>
                </tr>
                <?php
                $tong=0;
                $i=0;
                 foreach($_SESSION['cart'] as $listcart){
                        
                        $total=$listcart[2]*$listcart[4]; 
                        $tong+=$total;
                       
                        $delcart='<a href="index.php?act=delcart&id_cart='.$i.'"><i class="bx bxs-x-circle bx-tada bx-flip-horizontal" ></i></a>';
                        echo '<tr>
                        <td class="cart__product" >
                        '.$delcart.'
                        <img src="'.$listcart[3].'" alt="">
                        <p>'.$listcart[1].'</p>
                        </td>
                        <td style="text-align:center">'.$listcart[2].'<u>$</u></td>
                        <td style="text-align:center">'.$listcart[4].'</td>
                        <td style="text-align:center">'.$total.'<u>$</u></td>
                   </tr>';
                   $i+=1;
                 }
                 echo '
                 <tr>
                 <td>Tổng tất cả các tour đã đặt</td>
                 <td> </td>
                 <td> </td>
                 <td>'.$tong.'</td>
                 </tr>';
                ?>
                
        </table>
        
        

 

  