<div class=" col-span-4  bg-gray-800 p-16" >
  <h1 class="text-4xl text-white font-bold mb-14">Thêm mới loại Tour</h1>
  <form action="index.php?act=add" method="post" class="space-y-6">
        <div>
        <!-- <label for="" class="text-2xl font-bold text-white">Mã loại</label> <br> -->
      <input type="hidden" name="id
      "  id="" class="w-[40%] h-[42px] bg-gray-700 text-white pl-4  rounded-md"> 
        </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Tên loại</label> <br>
      <input type="text" name="name_danhmuc" 
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4">
      </div>
      <div class="space-x-4 mt-10">
     <input type="submit" value="Thêm mới" name="add" 
     class="bg-white rounded-sm    shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <input type="reset" value="Nhập lại" class="bg-white rounded-sm shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="bg-white rounded-sm shadow-2xl   shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  /></a>
     <span class="text-white"><?php
     
     if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
     
  ?></span>
    
  </form>
  
  
  </div>
 
</div>