<div class=" col-span-4  bg-gray-800 p-16" >
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Danh sách tài khoản</h3>
    </div>
</div>


  
<table class="table-auto w-full">
      
      <tr class="bg-blue-500 text-white shadow-lg">
             <th class="py-3 px-4 text-left"></th>
          <th class="py-3 px-4 text-left">Mã User</th>
          <th class="py-3 px-4 text-left">UserName</th>
          <th class="py-3 px-4 text-left">Password</th>
          <th class="py-3 px-4 text-left">Email</th>  
          <th class="py-3 px-4 text-left">Address</th>  
          <th class="py-3 px-4 text-left">Tel</th>  
          <th class="py-3 px-4 text-left">Role</th>            
        
          <th class="py-3 px-4 text-left">Xóa</th>
      </tr>
      <?php
      foreach ($listacc as $acc){
       extract($acc);
       $suatk="index.php?act=suatk&id_user=".$id_user;
       $xoatk="index.php?act=xoatk&id_user=".$id_user;
       echo ' <tr class="hover:bg-gray-100">
        <td class="py-3 px-4 text-left"><input type="checkbox" name="" id=""></td>
         <td class="px-4 py-3">'.$id_user.'</td>
         <td class="px-4 py-3">'.$name_user.' </td>
         <td class="px-4 py-3">'.$pass_user.'</td>
         <td class="px-4 py-3">'.$email_user.' </td>
         <td class="px-4 py-3">'.$address_user.'</td>
         <td class="px-4 py-3">'.$address_user.' </td>
         <td class="px-4 py-3">'.$role.'</td>
         
         
         <td class="py-3 px-4 text-left"><a href="'.$xoatk.'" >  <i class="bx bx-trash"></i> </a></th>
        
     </tr>';
     
      }
  ?>
     
  
</table>

