<?php
session_start();
include "views/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/acc.php";
include "model/danhmuc.php";
include "model/model_cmt.php";
include "global/global.php";
 if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
$pro_new=loadall_product_layout();
$dsdm=loadall_danhmuc();
$dstop=loadall_product_top10();
if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
                case 'sanpham':
                        if(isset($_POST['keyw'])&&($_POST['keyw']!="")){
                                $keyw=$_POST['keyw'];
                        }else{
                                $keyw="";
                        }
                        if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                                $id_danhmuc=$_GET['id_danhmuc'];
                               
                        }else{
                                $id_danhmuc=0;
                        }
                        $dssp=loadall_product($keyw,$id_danhmuc);
                        include "views/product.php";
                        break;
                case 'sanphamct':
                        
                        if(isset($_GET['id_pro'])&&($_GET['id_pro']>0)){
                                $id_pro=$_GET['id_pro'];
                                $onepro=loadone_product($id_pro);
                                extract($onepro);
                                $sp_cungloai=load_product_cl($id_pro,$id_danhmuc);
                                $cmt=loadall_cmt($id_pro);
                                include "views/product_detail.php";
                        }else{
                                include 'views/layout.php';
                        }
                       
                        break;

                case 'acc':
                        if(isset($_POST['signup'])&&($_POST['signup'])){
                                $name_user=$_POST['name_user'];
                                $pass_user=$_POST['pass_user'];
                                $email_user=$_POST['email_user'];
                                add_acc($name_user,$pass_user,$email_user);
                                $thongbao="Đã đăng kí thành công vui lòng, đăng nhập!";
                        }
                        include "views/acc/acc.php";
                        break;
                case 'login':
                        if(isset($_POST['login'])&&($_POST['login'])){
                                $name_user=$_POST['name_user'];
                                $pass_user=$_POST['pass_user'];
                                $check_user= check_user($name_user,$pass_user);
                                if(is_array($check_user)){
                                        $_SESSION['user']=$check_user;
                                        // $thongbao="Bạn đã đăng nhập thành công!";
                                        header('Location:index.php');
                                        
                                }else{
                                        $thongbao="Tài khoản không tồn tại vui lòng kiểm tra hoặc đăng kí?";
                                }
                               
                                }
                        include "views/acc/acc.php";        
                        break;
                case 'update_acc':
                        if(isset($_POST['update_acc'])&&($_POST['update_acc'])){
                        $id_user=$_POST['id_user'];
                        $name_user=$_POST['name_user'];
                        $pass_user=$_POST['pass_user'];
                        $email_user=$_POST['email_user'];
                        $address_user=$_POST['address_user'];
                        $tel_user=$_POST['tel_user'];
                        update_acc($id_user , $name_user,$pass_user,$email_user,$address_user,$tel_user);
                        $_SESSION['user']=check_user($name_user,$pass_user);

                        header('Location:index.php?act=update_acc');
                        
                        }
                        include "views/acc/update_acc.php";        
                                break;
                case 'forgot':
                 if(isset($_POST['forgot'])&&($_POST['forgot'])){
                        $email_user=$_POST['email_user'];
                        $forgot_pass=forgot_pass($email_user);
                        if(is_array($forgot_pass)){
                            $thongbao="Mật khẩu của bạn là:".$forgot_pass['pass_user'];
                        }else{
                             $thongbao="Email không tồn tại!!"  ; 
                        }
                        }
                        include "views/acc/forgot_pass.php";        
                        break;
                case 'logout':
                       session_unset();
                       header('Location:index.php');
                       break;
                case 'addtocart':
                        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                              $id_pro=$_POST['id_pro'];
                              $name_pro=$_POST['name_pro'];
                              $price_pro=$_POST['price_pro'];
                              $img_pro=$_POST['img_pro'];
                              $amount=1;
                              $total=$amount*$price_pro;
                              $pro_add=[$id_pro,$name_pro,$price_pro,$img_pro,$amount,$total];
                                //  var_dump($pro_add);
                              array_push($_SESSION['cart'],$pro_add);
                            
                        }
                        include "views/cart/cart.php";
                        break;
                case 'delcart':
                        if(isset($_GET['id_cart'])){
                            array_splice($_SESSION['cart'],$_GET['id_cart'],1);
                        }else{
                                $_SESSION['cart']=[];
                        }
                        header('location:index.php?act=cart');
                        break;
                case 'cart':
                        include "views/cart/cart.php";
                        break;
                case 'bill_cart':
                        include "views/cart/bill_cart.php";
                         break;
                case 'billComfrim':
                        include "views/cart/myBill.php";
                        break;
                case 'gioithieu':
                                include "views/gioithieu.php";
                                break;
                                case 'lienhe':
                                        include "views/lienhe.php";
                                        break;    
                default:
                        include 'views/layout.php';
                        break;
        }
}else{
        include "views/layout.php";
}

include "views/footer.php";



?>