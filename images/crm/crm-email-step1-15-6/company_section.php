<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Compaines   -->
<section class="compaines" id="placement_company" style="margin-top:3rem;">
    <div class="container">
		<div class="row row-xs">
			<div class="col-12">
				<div class="icon-div">
					<img class="triangle-icon" src="<?php echo base_url();?>images/placement.svg" alt="">             
				</div>
				<div class="title">
				   <h3 class="w-100 d-inline-flex pr-0">Companies where our students got jobs</h3>
				</div>
			</div>
		</div>
              
		<div class="compaines-slider mt-5">
			<?php foreach($companysection as $key=>$value){ ?>
			<div class="panel-slider">
				<div style="width:100px; height:100px;">
					<img src="<?php echo $value->logo; ?>" class="testimonial-logo mt-2" alt="<?php echo $value->name; ?>">
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-lg-12 mt-3">
			<div style="display:flex; justify-content:center;">
				<a href="<?php echo base_url(); ?>companieswhereourstudentsgotjobs" class="btn btn-glow hvr-bounce-to-right float-right">View more</a>
			</div>
		</div>
    </div>
</section>