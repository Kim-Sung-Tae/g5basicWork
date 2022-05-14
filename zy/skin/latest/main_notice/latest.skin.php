<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 360;
$thumb_height = 360;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <div class="swiper mySwiper" >
      <div class="swiper-wrapper">
      <?php
          for ($i=0; $i<$list_count; $i++) {

            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid" >';
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    
      ?>               
      
                             <?php echo $img_content; ?>
    
                           <p><?php echo $list[$i]['ca_name']?> </p>

                         <?php echo $list[$i]['subject']; ?>
                          <?php echo $list[$i]['wr_content']; ?>
                           <?php echo $list[$i]['wr_link1']; ?>
                     
                       
                              <?php echo $list[$i]['subject']; ?>
                      
                        
          

      <?php }  ?>
      </div>

 
    </div>
            
    <div class="Swiper_button_box">
            <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
    </div>
      





    
   
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <p class="empty_li">게시물이 없습니다.</p>
    <?php }  ?>
 
    

</div>
