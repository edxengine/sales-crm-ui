<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="whychoose-section pt-4" id="why_choose_skill_lync">
	<div class="container">
		<div class="row row-xs">
			<div class="col-12">
				<div class="icon-div">           
					<img class="triangle-icon" src="<?php echo base_url();?>images/placement.svg" alt="">             
				</div>
				<div class="title">
					<h3 class="w-100 d-inline-flex">Trusted By</h3>
					<a href="javascript:void(0);" class="seeallowl" id="target-whychoose"> 
					  <span id="targets-why">See all</span> 
					  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div> 
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="whychoose-data owl-top-picks owl-carousel owl-theme owl-media owl-theme mt-4 mt-4" >
				<?php foreach($trustedby as $keytrust=>$valuetrust) { ?>
					<div class="item">
						<div class="card" style="width:270px;">
							<div class="card-body" style="height:180px; width:270px;">
								<div class="image-project">
									<img src="<?php echo $valuetrust->image_path; ?>" alt="">
								</div>
								<h5 class="card-title"><?php echo $valuetrust->title; ?></h5>
							<!--	<p class="card-text"></p>  -->
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