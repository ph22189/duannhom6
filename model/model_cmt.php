<?php
 function add_cmt($content_cmt,$id_user,$id_pro,$date_cmt){
        $sql="insert into comment(content_cmt,id_user,id_pro,date_cmt)values('$content_cmt','$id_user','$id_pro','$date_cmt')" ;
        pdo_execute($sql); 
 }
 function loadall_cmt($id_pro){
        $sql="select * from comment where 1";
        if($id_pro>0)
           $sql.=" AND id_pro='".$id_pro."'";
           $sql.=" order by id_cmt desc ";
           $listcmt=pdo_query($sql); 
        return $listcmt;
   }
   function delete_cmt($id_cmt){
       $sql="delete from comment where id_cmt=".$_GET['id_cmt'];
       pdo_execute($sql);
   }

?>