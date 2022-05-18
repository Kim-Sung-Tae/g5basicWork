<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
    <?php
    for ($i=0; $i<$list_count; $i++) {
    ?>



        <iframe width="100%" height="720" 
        src="https://www.youtube.com/embed/<?php echo $list[$i]['subject'];?>?rel=0&amp;autoplay=1&mute=1&amp;loop=1;playlist=<?php echo $list[$i]['subject'];?>&amp;playlist=<?php echo $list[$i]['subject'];?>&loop=1 " 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
        </iframe>
 
            
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
  
    <?php }  ?>
    
   

