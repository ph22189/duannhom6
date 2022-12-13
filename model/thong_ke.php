<?php
function load_thong_ke(){
        $sql= "select danhmucsp.id_danhmuc as id_danhmuc,danhmucsp.name_danhmuc as name_danhmuc , count(tour.id_pro) as count_pro , min(tour.price_pro) as min_price , max(tour.price_pro) as max_price,
        avg(tour.price_pro) as avg_price from tour left join danhmuc on danhmuc.id_danhmuc = tour.id_danhmuc group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc desc";
        $list_tk=pdo_query($sql);
        return $list_tk;
}


?>