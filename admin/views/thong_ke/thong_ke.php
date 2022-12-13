<div class=" col-span-4  bg-gray-800 p-16 " >
<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Thống kê</h3>
    </div>
</div>
<table class="table-auto w-full">
      
      <tr class="bg-blue-500 text-white shadow-lg">
             <th class="py-3 px-4 text-left"></th>
          <th class="py-3 px-4 text-left">Mã danh mục</th>
          <th class="py-3 px-4 text-left">Tên danh mục</th>
          <th class="py-3 px-4 text-left">Số lượng</th>  
          <th class="py-3 px-4 text-left">Giá cao nhất</th>
          <th class="py-3 px-4 text-left">Giá thấp nhất</th>         
          <th class="py-3 px-4 text-left">Giá trung bình</th>
          
      </tr>
      <?php
      foreach ($list_tk as $thong_ke){
       extract($thong_ke);
//        $suasp="index.php?act=suasp&id_pro=".$id_pro;
//        $xoasp="index.php?act=xoasp&id_pro=".$id_pro;
//        $img_pro="../upload/".$img_pro;
//        if(is_file($img_pro)){
//          $img_pro="<img src='".$img_pro."' height='50'> ";
//        }else{
//         $img_pro="Không có hình ảnh";
//        }
       echo ' <tr class="hover:bg-gray-100">
        <td class="py-3 px-4 text-left"><input type="checkbox" name="" id=""></td>
         <td class="px-4 py-3">'.$id_danhmuc.'</td>
         <td class="px-4 py-3">'.$name_danhmuc.' </td>
         <td class="px-4 py-3 w-32">'.$count_pro.'</td>
         <td class="px-4 py-3">'.$max_price.' </td>
         <td class="px-4 py-3">'.$min_price.'</td>
         <td class="px-4 py-3">'.$avg_price.'</td>
         

         
        
     </tr>';
     
      }
  ?>
     
  
</table>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="myChart" style="width:100%; max-width:100%; height:500px;"></div>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng'],
  ['Áo ấm',55],
  ['Balo kaki',2],
  ['Túi xách',2],
  ['Phụ kiện khách',2],
  ['Giày cao cổ',6],
  ['Giày cổ thấp',8]
  
 
  // <?php
  // $tongdm=count($list_tk);
  // $i=i;
  // foreach($list_tk as $thong_ke){
  //   extract($thong_ke);
  //   if($i==$tongdm) $dauphay="" ; else $dauphay=",";
  //    echo "['".$thong_ke['name_danhmuc']."',".$thong_ke['count_pro']."]".$dauphay;
  //    $i+=1;
  // }
  // ?>
  
]);



var options = {
  title: 'Thống kê danh mục'
};

var chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

