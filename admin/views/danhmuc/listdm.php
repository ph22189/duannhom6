<div class=" col-span-4  bg-gray-800 p-16" >
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">List Danh mục</h3>
    </div>
</div>


  
<table class="table-auto w-full">
      
      <tr class="bg-blue-500 text-white shadow-lg">
             <th class="py-3 px-4 text-left"></th>
          <th class="py-3 px-4 text-left">Mã loại</th>
          <th class="py-3 px-4 text-left">Tên loại</th>        
          <th class="py-3 px-4 text-left">Sửa</th>
          <th class="py-3 px-4 text-left">Xóa</th>
      </tr>
      <?php
      foreach ($listdm as $danhmuc){
       extract($danhmuc);
       $suadm="index.php?act=suadm&id_danhmuc=".$id_danhmuc;
       $xoadm="index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
       echo ' <tr class="hover:bg-gray-100">
         <td class="py-3 px-4 text-left"><input type="checkbox" name="" id=""></td>
         <td class="px-4 py-3">'.$id_danhmuc.'</td>
         <td class="px-4 py-3">'.$name_danhmuc.' </td>
         <td class=f"py-3 px-4 text-left"><a href="'.$suadm.'"><i class="bx bxs-edit-alt"></i></a></th>
         <td class="py-3 px-4 text-left"><a href="'.$xoadm.'" >  <i class="bx bx-trash"></i> </a></th>
        
     </tr>';
     
      }
  ?>
     
  
</table>

<a class="p-4 border-2 m-8 bg-cyan-400 inline-block" href="index.php?act=add">Nhập thêm</a>
