<?php
/**
 * Template Name: Sub pages template (Business)
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

		<div class="sc-subnav-title">사업소개</div>
		<div class="sc-subnav-nav">
			<div class="sc-nav">
				<ul>
					<!-- Namildae -->
					<li><a href="<?php sachun_the_page('namildae'); ?>">남일대보존사업</a>
					</li>
					<!-- Goun -->
					<li><a href="<?php sachun_the_page('goun'); ?>">고운최치원선생 계승사업</a>
					</li>
					<!-- Volunteer -->
					<li><a href="<?php sachun_the_page('volunteer'); ?>">사회봉사사업</a>
					</li>
					<!-- Eco -->
					<li><a href="<?php sachun_the_page('eco'); ?>">자연환경보전사업</a>
					</li>
					<!-- Ritual -->
					<li><a href="<?php sachun_the_page('ritual'); ?>">연중제례행사</a>
								</li>
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



<?php wp_footer(); ?>
<?php get_footer("sachun-sub"); // Loads the footer.php template. ?>