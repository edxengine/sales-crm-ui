<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="whychoose-section pt-4" id="why_choose_skill_lync">
	<div class="container">
		<div class="row row-xs">
			<div class="col-12">
				<div class="icon-div">           
					<img class="triangle-icon" src="<?php echo base_url();?>images/placement.svg" alt="">             
				</div>
				<div class="title">
					<h3 class="w-100 d-inline-flex">Advantage of The Skill-Lync Online Campus-Lync</h3>
					<a href="javascript:void(0);" class="seeallowl" id="target-whychoose"> 
					  <span id="targets-why">See all</span> 
					  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div> 
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="whychoose-data owl-top-picks owl-carousel owl-theme owl-media owl-theme mt-4 mt-4">
					
					<?php foreach($advantage as $keyadvantaget=>$valueadvantage) { ?>
					<div class="item">
						<div class="card">
							<div class="card-body">
								<div class="rounded-circle">
									<img src="<?php echo $valueadvantage->image_path; ?>" alt="">
								</div>
								<h5 class="card-title"><?php echo $valueadvantage->title; ?></h5>
								<p class="card-text"><?php echo $valueadvantage->short_desc; ?></p>  
							</div>
						</div>
					</div>
					<?php } ?>
										
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="line-width">
