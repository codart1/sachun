<?php
/**
 * Template Name: Sub pages template (About)
 *
 * @package ThemeGrill
 * @subpackage Esteem
 * @since Esteem 1.0
 */
?>

<?php get_header("sachun-sub"); // Loads the header.php template. ?>

<div class="sc-logo">
	<div class="container">
		<img src="<?php echo ESTEEM_IMAGES_URL ?>/logo.png" alt="">
		<div class="sc-nav">
			<ul>
				<li class="sc-nav-legend"><a href="#" class="pwebcontact1_toggler">백일장 신청하기</a></li>
				

				<!-- About Sachun -->
				<li> 
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							단체소개
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<!-- Chairman’s Vision -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('chairman-vision'); ?>">회장인사말</a>
							</li>
							<!-- Success Story -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('success-story'); ?>">활동연혁</a>
							</li>
							<!-- Organization Chart -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('organization-chart'); ?>">조직편성도</a>
							</li>
							<!-- Contact -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('contact'); ?>">오시는 길</a>
							</li>
							<!-- Sponsor -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('sponsor'); ?>">후원사</a>
							</li>
						</ul>
					</div>			
				</li>


				<!-- Business introdution -->
				<li> 
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							사업소개
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<!-- Namildae -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('namildae'); ?>">남일대보존사업</a>
							</li>
							<!-- Goun -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('goun'); ?>">고운최치원선생 계승사업</a>
							</li>
							<!-- Volunteer -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('volunteer'); ?>">사회봉사사업</a>
							</li>
							<!-- Eco -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('eco'); ?>">자연환경보전사업</a>
							</li>
							<!-- Ritual -->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php sachun_the_page('ritual'); ?>">연중제례행사</a>
							</li>
						</ul>
					</div>			
				</li>


				<li><a href="">협회활동</a></li>
				<li><a href="">최치원의 발자취</a></li>
				<li><a href="">회원게시판</a></li>
				

			</ul>
		</div>
	</div>
</div>



<div class="sc-subnav">
	<div class="container">

		<div class="sc-subnav-title"></div>
		<div class="sc-subnav-nav">
			<div class="sc-nav">
				<ul>
					<li><a href="">협회활동</a></li>
					<li><a href="">최치원의 발자취</a></li>
					<li><a href="">회원게시판</a></li>
				</ul>
			</div>
		</div>

	</div>
</div>




<?php 
	// TO SHOW THE PAGE CONTENTS
	while ( have_posts() ) : the_post(); 
        the_content();
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
?>

<!-- CONTENT 4 -->
<div class="container">
	<div class="sc-content" id="content4">
		<div class="sc-content-no">4</div>	
		<div class="sc-content-text">
			<div class="sc-content-text-title">안녕하십니까? 최상화입니다.</div>
			<div class="sc-content-text-detail">
				<div id="content4-img">
					<img src="<?php echo ESTEEM_IMAGES_URL ?>/img-c4.jpg" alt="">
				</div>	
				<div id="content4-text">
					<p>사단법인남일대보존회 회장 최상화입니다. <br/>
	                사천의 자랑거리 ‘남일대’가 세인들에게 <br/>
	                그저 흔한 해수욕장으로 인식되고, <br/>
	                천재문장가 고운 최치원 선생과의 깊은 인연 역시 <br/>
	                역사 속으로 잊혀 가고 있는 현실이 안타까워, <br/>
	                지난 2010년부터 뜻 있는 분들과 함께 힘을 모아 <br/>
	                ‘고운 최치원 선생 남일대유적비’를 세웠고, <br/>
	                그 이래 수년동안 미약하나마 남일대를 보존하고, <br/>
	                고운 최치원 선생의 업적을 기리기 위한 활동을 이어왔습니다. <br/> 
	                <br/>
	                <br/>
	                남일대가 사천을 넘어 대한민국과 세계의 자랑거리가 <br/>
	                될 수 있도록 사단법인 남일대보전회가 노력하겠습니다. <br/>
	                우리 후손들의 마음속에 오랫동안 남을 수 있도록 <br/>
	                더욱 다양한 사업을 진행할 것입니다. <br/>
	                이를 통해 우리고장 사천은 언제나 그래왔지만 <br/>
	                더욱 아름답게 빛나게 될 것입니다. <br/>
	                처음의 마음 그대로 우직하게 노력하겠습니다. <br/>
	                많은 격려 부탁드립니다. <br/>
	                <br/>
	                <br/>
	                </p>
	                <p class="text-center">
	                사단법인남일대보존회 회장 최상화 올림.
				    </p>
				</div>
			</div>   <!-- sc-content-text-detail -->
		</div>	<!-- sc-content-text -->
	</div> <!-- sc-content -->
</div>

<?php wp_footer(); ?>
<?php get_footer("sachun-sub"); // Loads the footer.php template. ?>