<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$thumb_width = 360;
$thumb_height = 360;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <ul class ="notice_event_wrapper position-relative my-5">
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
         <li class='notice_textbox<?php echo $i ?>  notice_textbox'>     
                <div class="col-md-6 col-12 d-flex p-4 notice_textbox10">
                    <div class ="notice_left_text col-3 ">
                        <p class ="text-center notice_wr"> 0<?php echo $i+1?> </p>
                        <p> <?php echo $list[$i]['datetime']?></p>
                    </div>
                    <div class ="notice_right_text col-9">
                        <p><?php echo $list[$i]['subject']; ?></p>
                        <p><?php echo $list[$i]['content']; ?></p>
                    </div>
                </div>
                <div class="notice_img  position-absolute "> 
                        <?php echo $img_content; ?>
                </div>
         </li>
                 
      <?php }  ?> 
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
