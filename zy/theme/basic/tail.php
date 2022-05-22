<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}


?>

    </div>
   
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
        <div class ="footerwrap container-lg">
            
             <div class ="footer_content row d-flex justify-content-center align-items-center">
                <div class ="footer_left col-12 col-md-6">
                    <div class ="footer_info mb-5 text-left">
                        <h3 class ="text-left mb-5">INFORMATION</h3>
                        <?php echo latest('footer_info','footer_info',4,200);?>
                    </div>
                    <div class ="footer_sns mb-5">
                        <?php echo latest('footer_sns','footer_sns',4,200);?>
                    </div>
                </div>
                <div class ="footer_right col-12 col-md-6">
                    <?php echo latest('footer_map','footer_map',4,200);?>
                </div>
            </div>
        </div>



    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    
    <div class="quickmenu">
        <ul>
            <li><a href="#"> <div><img src="<?php echo G5_IMG_URL; ?>/right_icon1.png"></div>  <div class="margin-right10 quick_text">MCZONE</div> </a></li>
            <li><a href="#"> <div><img src="<?php echo G5_IMG_URL; ?>/right_icon2.png"></div>  <div class="margin-right10 quick_text">MCMART</div> </a></li>
            <li><a href="#"> <div><img src="<?php echo G5_IMG_URL; ?>/right_icon3.png"></div>  <div class="margin-right10 quick_text">MCCON</div> </a></li>
            <li><a href="#"> <div><img src="<?php echo G5_IMG_URL; ?>/right_icon4.png"></div>   <div class="margin-right10 quick_text">가맹문의</div> </a></li>
        </ul>
    </div>

    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");