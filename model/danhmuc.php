<?php
 function add_danhmuc($name_danhmuc){
        $sql="insert into danhmuc(name_danhmuc)values('$name_danhmuc')" ;
        pdo_execute($sql); 
 }
function delete_danhmuc($id_danhmuc){
       $sql="delete from danhmuc where id_danhmuc=".$_GET['id_danhmuc'];
       pdo_execute($sql);
  }
  function loadall_danhmuc(){
       $sql="select * from danhmuc order by name_danhmuc ";
       $listdm=pdo_query($sql);
       return $listdm;
}
  function loadone_danhmuc($id_danhmuc){
       $sql="select * from danhmuc where id_danhmuc=".$_GET['id_danhmuc'];
       $dm=pdo_query_one($sql);
       return $dm;
  }
  function update_danhmuc($id_danhmuc , $name_danhmuc){
       $sql="update  danhmuc set name_danhmuc='".$name_danhmuc."' where id_danhmuc=".$id_danhmuc;
       pdo_execute($sql);
  }
?>