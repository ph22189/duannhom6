<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/acc.php';
include '../model/thong_ke.php';
include '../model/model_cmt.php';
include "./views/header.php";

   //controler
   if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
                case 'add':
                        //kiểm ta người dùng có click vào nut add
                        if(isset($_POST['add'])&&($_POST['add'])){
                                $name_danhmuc=$_POST['name_danhmuc'];
                                add_danhmuc($name_danhmuc);
                                $thongbao="Thêm thành công";
                        }
                        include "views/danhmuc/add.php";
                        break;
                case 'listdm':
                        $listdm=loadall_danhmuc();
                        include "views/danhmuc/listdm.php";
                        break;
                case 'xoadm':
                        if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                                delete_danhmuc($_GET['id_danhmuc']);
                            }                     
                        $listdm=loadall_danhmuc("",0);
                        include "views/danhmuc/listdm.php";
                        break;
                case 'suadm':
                        if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                                
                                $dm=loadone_danhmuc($_GET['id_danhmuc']);
                            }
                      
                        include "views/danhmuc/update.php";
                        break;
                case 'update':
                        if(isset($_POST['add'])&&($_POST['add'])){
                                $id_danhmuc=$_POST['id_danhmuc'];
                                $name_danhmuc=$_POST['name_danhmuc'];
                                update_danhmuc($id_danhmuc , $name_danhmuc);
                                $thongbao="Cập nhật thành công";
                        }
                        
                      $listdm=loadall_danhmuc();
                        include "views/danhmuc/listdm.php";
                        break;



                       // controler sản phẩm
                case 'addsp':
                        //kiểm ta người dùng có click vào nut add
                        if(isset($_POST['add'])&&($_POST['add'])){
                                $id_danhmuc=$_POST['id_danhmuc'];
                                $name_pro=$_POST['name_pro'];
                                $price_pro=$_POST['price_pro'];
                                $date=$_POST['date'];
                                $desc=$_POST['desc'];
                                $img_pro=$_FILES['img_pro']['name'];
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES["img_pro"]["name"]);
                                if (move_uploaded_file($_FILES["img_pro"]["tmp_name"], $target_file)) {
                                        // echo "The file ". htmlspecialchars( basename( $_FILES["img_pro"]["name"])). " has been uploaded.";
                                      } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                      }

                                
                                      add_product($name_pro,$price_pro,$img_pro,$date,$desc,$id_danhmuc);
                                $thongbao="Thêm thành công";
                        }
                        $listdm=loadall_danhmuc("",0);
                        // var_dump($listdm);
                        include "views/sanpham/add.php";
                        break;
                case 'listsp':
                        if(isset($_POST['ok'])&&($_POST['ok'])){
                                $key=$_POST['key'];
                                $id_danhmuc=$_POST['id_danhmuc'];
                        }else{
                                $key='';
                                $id_danhmuc=0;
                        }
                        $listdm=loadall_danhmuc();
                        $listsp=loadall_product($key,$id_danhmuc);
                        include "views/sanpham/listsp.php";
                        break;
                case 'xoasp':
                        if(isset($_GET['id_pro'])&&($_GET['id_pro']>0)){
                                delete_product($_GET['id_pro']);
                            }                     
                        $listsp=loadall_product("", 0);
                        include "views/sanpham/listsp.php";
                        break;
                case 'suasp':
                        if(isset($_GET['id_pro'])&&($_GET['id_pro']>0)){  
                                $sp=loadone_product($_GET['id_pro']);
                            }
                        $listdm=loadall_danhmuc();
                        include "views/sanpham/update.php";
                        break;
                case 'updatesp':
                        if(isset($_POST['add'])&&($_POST['add'])){
                                $id_pro=$_POST['id_pro'];
                                $id_danhmuc=$_POST['id_danhmuc'];
                                $name_pro=$_POST['name_pro'];
                                $price_pro=$_POST['price_pro'];
                                $date=$_POST['date'];
                                $desc=$_POST['desc'];
                                $img_pro=$_FILES['img_pro']['name'];
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($_FILES["img_pro"]["name"]);
                                if (move_uploaded_file($_FILES["img_pro"]["tmp_name"], $target_file)) {
                                      
                                      } else {
                                      
                                      }
                                update_product($id_pro,$id_danhmuc,$name_pro,$price_pro,$img_pro,$date,$desc);
                                $thongbao="Cập nhật thành công";
                        }
                        $listdm=loadall_danhmuc();
                        $listsp=loadall_product();
                        include "views/sanpham/listsp.php";
                        break;
                        //controler khach hang
                case 'dskh':
                        $listacc=loadall_acc();
                        include "views/acc/listacc.php";
                        break;
                case 'xoatk':
                        if(isset($_GET['id_user'])&&($_GET['id_user']>0)){
                                
                                delete_user($_GET['id_user']);
                            }                     
                       
                        $listacc=loadall_acc();
                        include "views/acc/listacc.php";
                        break;
                case 'list_cmt':
                        $list_cmt=loadall_cmt(0);
                        include "views/cmt/list_cmt.php";
                        break;
                case 'xoacmt':
                        if(isset($_GET['id_cmt'])&&($_GET['id_cmt']>0)){
                                
                                delete_cmt($_GET['id_cmt']);
                            }                     
                               
                        $list_cmt=loadall_cmt(0);
                        include "views/cmt/list_cmt.php";
                        break;
                case 'thong_ke':
                        $list_tk=load_thong_ke();
                        include "views/thong_ke/thong_ke.php";
                        break;               
                default:
                        include "./views/content.php";
                        break;
        }
   }else{
        include "./views/content.php";
   }
   
   include "./views/footer.php";
?>