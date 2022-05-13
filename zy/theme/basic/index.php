<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 첫번쨰 섹션 슬라이드  캐러셀 가져오는 부분  -->
<div class="mainSlider">
    <?php  echo latest('mainSlider', 'carousel', 3, 200);?>
</div>

    <!-- 가게 소개  -->
    <div class="open_intro container-lg">
        <?php  echo latest('open_intro', 'open_intro', 10, 200);?>
    </div>

<!-- pic_block 의 ul 이 가로 스크롤을 만듦 유의 -->

    <div class ="main_notice">
        <?php  echo latest(' ', 'main_notice', 4, 200);?>
        <?php  echo latest(' ', 'main_event', 4, 200);?>
    </div>


    <div class="movie">
    <h2 class="sound_only">유트브 22년 광고영상</h2>
        <?php
        echo latest('youtube', 'main_youtube', 1, 23);		// 최소설치시 자동생성되는 갤러리게시판
        ?>
    </div>

    <div class = "main_youtube2">
         <?php  echo latest('', 'main_youtube2', 4, 200);?>
    </div>


    

   <script src="/zy/js/kstJS/main.js"></script>





<?php
include_once(G5_THEME_PATH.'/tail.php');