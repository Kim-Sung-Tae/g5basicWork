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
    <div class="open_intro container-lg position-relative mb-5" data-aos="fade-up" data-aos-duration="1500" >
        <?php  echo latest('open_intro', 'open_intro', 10, 200);?>
    </div>

<!-- pic_block 의 ul 이 가로 스크롤을 만듦 유의 -->

<!-- swiper 처리 indicate -->

<div class ="container-lg position-relative mb-5">
         <div class ="row main_notice_event">
            <div class="swiper mySwiper">
                <div class="tabstitle px-5"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide slide-bg" data-name="Notice">  
                        <div class ="main_notice">
                            <?php  echo latest('main_notice', 'main_notice', 4, 200);?>   
                        </div>
                    </div>

                    <div class="swiper-slide slide-bg" data-name="Event">
                        <div class ="main_notice">
                            <?php  echo latest('main_event', 'main_event', 4, 200);?>  
                        </div>
                    </div> 
                </div>            
            </div>
        </div>
</div>

    <div class="movie mb-5">
        <h2 class="sound_only">유트브 22년 광고영상</h2>
            <?php
                echo latest('youtube', 'main_youtube', 2, 50);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
    </div>
    <div class ="movie_list mb-5">
          <?php
                echo latest('main_youtube2', 'main_youtube2', 3, 50);		// 리안헤어 동영상 리스트 
            ?>
    </div>

    <div class = "sns_instagram">
        <div class = "container">
            <div class ="row">
                <div class ="sns_left col-12 col-md-4">
                    <h3 class = "d-flex">
                        <div>
                            <img src= "<?php echo G5_IMG_URL;?>/Instagram.png" alt="">
                        </div>
                         <p class ="instagram_head">
                            INSTAGRAM
                        </p>
                    </h3>     
                    <div class ="mt-5 instagram_content">
                         <p>
                            @riahn_official
                         </p>
                         <p class = "mt-2 C777">
                            리안헤어 SNS계정을 통해 다양한 소식을 만나보세요!
                         </p>
                    </div>
                  
                </div>

                <div class ="sns_right col-12 col-md-8 row">
                    <?php
                    echo latest('sns_instagram', 'sns_instagram', 6, 50);		// 리안헤어 동영상 리스트 
                    ?>
                </div>

            </div>
        </div>
        
    </div>


    


    

   <script src="/zy/js/kstJS/main.js?ver=<?php echo time(); ?>"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');