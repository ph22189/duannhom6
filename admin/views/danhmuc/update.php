<?php
if(is_array($dm)){
  extract($dm);
}
?>
<div class=" col-span-4  bg-gray-800 p-16" >
  <h1 class="text-4xl text-white font-bold mb-14">Update  loại hàng hóa</h1>
  <form action="index.php?act=update" method="post" class="space-y-6">
        <div>
        <label for="" class="text-2xl font-bold text-white">Mã loại</label> <br>
      <input type="text" name=""   id="" class="w-[40%] h-[42px] bg-gray-700 text-white pl-4  rounded-md"> 
        </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Tên loại</label> <br>
      <input type="text" name="name_danhmuc"  value="<?php
       if(isset($name_danhmuc)&&($name_danhmuc!="")) 
       echo $name_danhmuc;
      ?>"
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4">
      </div>
      <div class="space-x-4 mt-10">
      <input type="hidden" name="id_danhmuc" value="<?php
       if(isset($id_danhmuc)&&($id_danhmuc>0)) 
       echo $id_danhmuc;
      ?>">
     <input type="submit" value="Update" name="add" 
     class="bg-white rounded-sm    shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <input type="reset" value="Nhập lại" class="bg-white rounded-sm shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="bg-white rounded-sm shadow-2xl   shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  /></a>
     <span class="text-white"><?php
     
     if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
     
  ?></span>
    
  </form>
  
  
  </div>
 
</div>