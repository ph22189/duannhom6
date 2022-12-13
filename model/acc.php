<?php
 function add_acc($name_user,$pass_user,$email_user){
        $sql= "insert into users(name_user, pass_user, email_user) values ('$name_user','$pass_user','$email_user')";
           pdo_execute($sql); 
    }
function check_user($name_user,$pass_user){
        $sql="select * from users where name_user='".$name_user."' AND pass_user='".$pass_user."' ";
        $user=pdo_query_one($sql);
        return $user;
   }
function forgot_pass($email_user){
    $sql="select * from users where email_user='".$email_user."' ";
    $forgot=pdo_query_one($sql);
    return $forgot;
}
   function update_acc($id_user , $name_user,$pass_user,$email_user,$address_user,$tel_user){
      $sql="update  users set name_user='".$name_user."',pass_user='".$pass_user."',email_user='".$email_user."',address_user='".$address_user."',tel_user='".$tel_user."' where id_user=".$id_user;
     pdo_execute($sql);
 }
 function loadall_acc(){
      
    $sql="select * from users  order by id_user desc ";
    $listacc=pdo_query($sql);
    return $listacc;
}
function delete_user($id_user){
    $sql="delete from users where id_user=".$_GET['id_user'];
    pdo_execute($sql);
}
?>