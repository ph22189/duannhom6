<div class=" col-span-4  bg-gray-800 p-16" >
  <h1 class="text-4xl text-white font-bold mb-14">Thêm mới Tour </h1>
  <form action="index.php?act=addsp" method="post" class="space-y-6" enctype="multipart/form-data">
        <div>
        <label for="" class="text-2xl font-bold text-white">Danh mục</label> <br>
        <select name="id_danhmuc" id="" class="w-[20%] bg-gray-700 text-white p-2 ">
          <option value="0" class="font-bold ">Chọn loại Tour</option>
          <?php
          foreach ($listdm as $key => $danhmuc) {
            extract($danhmuc);
            echo ' <option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
          }
          ?>

         
        </select>
        </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Tour</label> <br>
      <input type="text" name="name_pro" 
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4">
      </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Giá </label> <br>
      <input type="text" name="price_pro" 
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4">
      </div>
      <div>
      <label for="" class="text-2xl font-bold text-white ">Hình </label> <br>
      <input type="file" name="img_pro" 
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4 p-2">
      </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Lịch tour</label> <br>
      <input type="text" name="date" 
      id="" class="w-[40%] h-[42px] bg-gray-700 text-white rounded-md pl-4">
      </div>
      <div>
      <label for="" class="text-2xl font-bold text-white">Mô tả tour</label> <br>
      
      <textarea class="w-[40%]  bg-gray-700 text-white rounded-md pl-4" name="desc" id="" cols="30" rows="10"></textarea>
      </div>
      




      <div class="space-x-4 mt-10">
     <input type="submit" value="Thêm mới" name="add" 
     class="bg-white rounded-sm    shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <input type="reset" value="Nhập lại" class="bg-white rounded-sm shadow-2xl shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  />
     <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="bg-white rounded-sm shadow-2xl   shadow-cyan-500/70 p-2 bg-cyan-500 text-white font-bold"  /></a>
     <span class="text-white"><?php
     
     if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
     
  ?></span>
    
  </form>
  
  
  </div>
 
</div>