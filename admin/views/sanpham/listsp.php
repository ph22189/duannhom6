<div class=" col-span-4  bg-gray-800 p-16 " >
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">List Sản phẩm</h3>
    </div>
</div>
  <form action="index.php?act=listsp" method="post" class="mr-[200px] my-4 m-4 space-y-2 ">
    <input type="text" name="key" id="" class=" h-[42px] bg-gray-700 text-white  pl-4">
    <select name="id_danhmuc" id="" class="w-[20%] bg-gray-700 text-white  p-2 ">
        <option value="0"  selected
        >All</option>
        
        <?php
          foreach ($listdm as $danhmuc) {
            extract($danhmuc);
            echo '<option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
          }
        ?>

         
        </select>
        <input name="ok" type="submit" value="Ok" class="p-2 border-2 m-8 bg-cyan-400">
  </form>

  
<table class="table-auto w-full">
      
      <tr class="bg-blue-500 text-white shadow-lg">
             <th class="py-3 px-4 text-left"></th>
          <th class="py-3 px-4 text-left">Mã sản phẩm</th>
          <th class="py-3 px-4 text-left">Tên sản phẩm</th>
          <th class="py-3 px-4 text-left">Hình</th>
          <th class="py-3 px-4 text-left">Giá</th>  
          <th class="py-3 px-4 text-left">Lịch tour</th>
          <th class="py-3 px-4 text-left">Lượt xem</th>         
          <th class="py-3 px-4 text-left">Sửa</th>
          <th class="py-3 px-4 text-left">Xóa</th>
      </tr>
      <?php
      foreach ($listsp as $sanpham){
       extract($sanpham);
       $suasp="index.php?act=suasp&id_pro=".$id_pro;
       $xoasp="index.php?act=xoasp&id_pro=".$id_pro;
       $img_pro="../upload/".$img_pro;
       if(is_file($img_pro)){
         $img_pro="<img src='".$img_pro."' height='50'> ";
       }else{
        $img_pro="Không có hình ảnh";
       }
       echo ' <tr class="hover:bg-gray-100">
        <td class="py-3 px-4 text-left"><input type="checkbox" name="" id=""></td>
         <td class="px-4 py-3">'.$id_pro.'</td>
         <td class="px-4 py-3">'.$name_pro.' </td>
         <td class="px-4 py-3 w-32">'.$img_pro.'</td>
         <td class="px-4 py-3">'.$price_pro.' </td>
         <td class="px-4 py-3">'.$date.' </td>
         <td class="px-4 py-3">'.$view.'</td>
         

         <td class=f"py-3 px-4 text-left"><a href="'.$suasp.'"><i class="bx bxs-edit-alt"></i></a></th>
         <td class="py-3 px-4 text-left"><a href="'.$xoasp.'" >  <i class="bx bx-trash"></i> </a></th>
        
     </tr>';
     
      }
  ?>
     
  
</table>

<a class="p-4 border-2 m-8 bg-cyan-400 inline-block" href="index.php?act=addsp">Nhập thêm</a>
