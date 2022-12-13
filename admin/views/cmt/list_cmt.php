<div class=" col-span-4  bg-gray-800 p-16" >
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">List Bình Luận</h3>
    </div>
</div>


  
<table class="table-auto w-full">
      
      <tr class="bg-blue-500 text-white shadow-lg">
           <th class="py-3 px-4 text-left"></th>
          <th class="py-3 px-4 text-left">ID</th>
          <th class="py-3 px-4 text-left">NỘI DUNG</th>        
          <th class="py-3 px-4 text-left">PRODUCT</th>
          <th class="py-3 px-4 text-left">USER</th>
          <th class="py-3 px-4 text-left">NGÀY</th>
          <th class="py-3 px-4 text-left">XÓA</th>

      </tr>
      <?php
      foreach ($list_cmt as $cmt){
       extract($cmt);
       
       $xoacmt="index.php?act=xoacmt&id_cmt=".$id_cmt;
       echo ' <tr class="hover:bg-gray-100">
        <td class="py-3 px-4 text-left"><input type="checkbox" name="" id=""></td>
         <td class="px-4 py-3">'.$id_cmt.'</td>
         <td class="px-4 py-3">'.$content_cmt.' </td>
         <td class="px-4 py-3">'.$id_pro.' </td>
         <td class="px-4 py-3">'.$id_user.' </td>
         <td class="px-4 py-3">'.$date_cmt.' </td>
         <td class="py-3 px-4 text-left"><a href="'.$xoacmt.'" >  <i class="bx bx-trash"></i> </a></th>
        
     </tr>';
     
      }
  ?>
     
  
</table>

