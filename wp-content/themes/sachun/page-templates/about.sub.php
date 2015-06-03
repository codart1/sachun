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
							<li role="presentation"><a role="menuitem" tabindex="-1" onclick="$('#underconstruction').modal()">후원사</a>
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

		<div class="sc-subnav-title">단체소개</div>
		<div class="sc-subnav-nav">
			<div class="sc-nav">
				<ul>
					<!-- Chairman’s Vision -->
					<li><a href="<?php sachun_the_page('chairman-vision'); ?>">회장인사말</a></li>
					<!-- Success Story -->
					<li><a href="<?php sachun_the_page('success-story'); ?>">활동연혁</a></li>
					<!-- Organization Chart -->
					<li><a href="<?php sachun_the_page('organization-chart'); ?>">조직편성도</a></li>
					<!-- Contact -->
					<li><a href="<?php sachun_the_page('contact'); ?>">오시는 길</a></li>
					<!-- Sponsor -->
					<li><a onclick="" href="javascript:$('underconstruction').modal()">후원사</a></li>
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

<div id="underconstruction" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		    <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title invi">Message</h4>
            </div>
			<div class="modal-body">
				<p class="text-center">준비중</p>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php wp_footer(); ?>
<?php get_footer("sachun-sub"); // Loads the footer.php template. ?>