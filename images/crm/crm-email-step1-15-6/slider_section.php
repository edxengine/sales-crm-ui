<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Home Banner -->

<section class="" style="margin-bottom:3rem;">
	<div class="carousel slide" id="home-carousel">
		<div class="carousel-inner">
			<?php foreach($slidersection as $key=>$value){ ?>
			<div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
				<section class="bg-new-slider">
					<div class="container">
						<div class="home-new-banner" style="background-image:url(<?php echo $value->backgroundimage_path; ?>);">
							<div class="bg-tec">
								<img src="<?php echo base_url(); ?>images/logox-slider.png" style="max-width:80px; margin:20px;">
								<h1><?php echo $value->title; ?></h1>
								<p><?php echo $value->short_desc; ?></p>
								<a href="<?php echo $value->btn_link; ?>" class="btn btn-glow hvr-bounce-to-right" target="<?php echo $value->btn_target; ?>"><?php echo $value->btn_txt; ?></a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php } ?>
		</div>
	</div>
</section>