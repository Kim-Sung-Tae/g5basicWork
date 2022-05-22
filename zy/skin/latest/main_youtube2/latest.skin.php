<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 250;
$thumb_height = 250;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



  

    <div class ="container text-center">
        <p class ="RIAHN_youtube p-5 mb-5"><img src="<?php echo G5_IMG_URL;?>/youtube_icon.png" alt="no image"> <?php echo $bo_subject;?></p>
        <div class ="row">
      <?php
          for ($i=0; $i<$list_count; $i++) {

            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }

            

            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid mb-2" >';
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
            
      ?> 

            <div id ="my-button" class ="col-12 col-md-4 my-button cursor-pointer">
              <?php echo $img_content; ?>                                                                                                                                                  
              <h3 class="text-md-left d-flex align-items-center">
                  <div>
                      <img src="<?php echo G5_IMG_URL; ?>/youtube_riahn_icon.png" alt="no image">
                  </div>
                  <p class="subject_youtube">
                      <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 14, '..')  ?>
                  </p>
              </h3>
              <div id="element_to_pop_up" class="element_to_pop_up">
                    <a class="b-close">닫기</a>
                    <iframe width="100%" height="720" 
                    src="https://www.youtube.com/embed/<?php echo $list[$i]['subject'];?>?rel=0&amp;autoplay=1&mute=1&amp;loop=1;playlist=<?php echo $list[$i]['subject'];?>&amp;playlist=<?php echo $list[$i]['subject'];?>&loop=1 " 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                    </iframe>
             </div>
            </div>      
      <?php }  ?>
        </div>
    </div>
 
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <p class="empty_li">게시물이 없습니다.</p>
    <?php }  ?>
 
    


