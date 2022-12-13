
<?php

 function add_product($name_pro,$price_pro,$img_pro,$date,$desc,$id_danhmuc){
     $sql= "INSERT INTO `tour`(`name_pro`, `price_pro`, `img_pro` ,`date`, `desc`, `id_danhmuc`) VALUES ('$name_pro','$price_pro','$img_pro','$date','$desc','$id_danhmuc')";
     
        pdo_execute($sql); 
 }
  function delete_product($id_pro){
       $sql="delete from tour where id_pro=".$_GET['id_pro'];
       pdo_execute($sql);
  }
  function loadall_product_layout(){
     $sql="select * from tour where 1 order by id_pro desc limit 0,8";
     $listsp=pdo_query($sql);
     return $listsp;
}
function loadall_product_top10(){
     $sql="select * from tour where 1 order by view desc limit 0,5";
     $listsp=pdo_query($sql);
     return $listsp;
}
  function loadall_product($key="",$id_danhmuc=0){
      
       $sql="select * from tour where 1";
       if($key!=""){
          $sql.=" and name_pro like '%".$key."%'";
       }
       if($id_danhmuc>0){
          $sql.=" and id_danhmuc='".$id_danhmuc."'";
       }
       $sql.=" order by name_pro ";
  
       $listsp=pdo_query($sql);
       return $listsp;
  }
  function loadone_product($id_pro){
       $sql="select * from tour where id_pro=".$id_pro;
       $sp=pdo_query_one($sql);
       return $sp;
  }

  function load_product_cl($id_pro,$id_danhmuc){
     $sql="select * from tour where id_danhmuc=".$id_danhmuc." AND id_pro <>".$id_pro;
     $listsp=pdo_query($sql);
       return $listsp;
}
  function  update_product($id_pro,$id_danhmuc,$name_pro,$price_pro,$img_pro,$date,$desc){
       if($img_pro!="")
       $sql="update tour set name_pro='".$name_pro."',price_pro='".$price_pro."',img_pro='".$img_pro."',`date`='".$date."',`desc`='".$desc."' where id_pro=".$id_pro;
        else

       $sql="update tour set name_pro='".$name_pro."',price_pro='".$price_pro."',`date`='".$date."',`desc`='".$desc."' where id_pro=".$id_pro;      
       
       pdo_execute($sql);
  }
 
?>