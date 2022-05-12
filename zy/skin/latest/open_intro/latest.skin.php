<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 360;
$thumb_height = 360;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <?php
          for ($i=0; $i<$list_count; $i++) {

            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid" >';
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    
      ?> 
        <div class="swiper-slide"> 
            <div class ="slide_wrap">
                <div class= "container-lg position-realtive w-100">
                    <div class ="row justify-content-center">
                        <div class ="col-12 grandSlide">
                             <?php echo $img_content; ?>
                        </div>  
                        <div>
                            <?php echo $list[$i]['ca_name']?> 
                            <?php echo $list[$i]['subject']; ?>
                            <?php echo $list[$i]['wr_content']; ?>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

      <?php }  ?>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>





    <ul>
   
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    

</div>
