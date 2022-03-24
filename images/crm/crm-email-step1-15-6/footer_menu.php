<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('frontend/common/popups'); 

$topindcourses = $this->common_model->getindcourses();
$topmastercourses = $this->common_model->getmastercourses();
$latestblogs = $this->common_model->getlatestblogs();
 
?>

<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 course-list">
				<h6>Top Individal Courses</h6>
				<ul>
					<?php foreach($topindcourses as $key=>$value){ ?>
					<li><a href="<?php echo base_url().$value->domain_permalink.'-courses/'.$value->permalink; ?>"><?php echo $value->title; ?></a></li>
					<?php } ?>            
				</ul>
			</div>
			<div class="col-md-3 course-list">
				<h6>Top Master Courses</h6>
				<ul>
					<?php foreach($topmastercourses as $key=>$value){ ?>
					<li><a href="<?php echo base_url().$value->domain_permalink.'-courses/'.$value->permalink; ?>"><?php echo $value->title; ?></a></li>
					<?php } ?>            
				</ul>
			</div>
			<div class="col-md-3  course-list">
				<h6>Our Company</h6>
				<ul>
				   <li><a href="<?php echo base_url(); ?>news"> News & Events</a></li>
				   <li><a href="<?php echo base_url(); ?>blogs"> Blog</a></li>
				   <li><a href="<?php echo base_url(); ?>all-jobreports"> Job reports</a></li>
				   <li><a href="<?php echo base_url(); ?>careers"> Careers</a></li>
				   <li><a href="<?php echo base_url(); ?>terms"> Terms</a></li>
				   <li><a href="<?php echo base_url(); ?>privacy"> Privacy Policy</a></li>            
				</ul>
			</div>
			<div class="col-md-3">
				<div class="footer-widget">
					<img src="<?php echo base_url();?>images/header_logo.png" class="img-fluid mg-b-20" style="height:20px;" alt="Skill-Lync Inc.">
					<p class="mt-3"><?php echo shortDescText(); ?></p>
					<div class="contact-info">
					  <ul class="list-unstyled">
						 <li><i class="fa fa-map-marker"></i><?php echo addressText(); ?></li>
						 <li><i class="fa fa-phone"></i><?php echo mobileText(); ?></li>
						 <li><i class="fa fa-envelope"></i> <a class="dark-gray" href="mailto:info@skill-lync.com">info@skill-lync.com</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12  course-list our-company">
				<h6>Our Blogs</h6>
				<ul>
					<?php foreach($latestblogs as $key=>$value){ ?>
					<li><a href="<?php echo base_url().'blogs/'.$value->permalink; ?>"><?php echo $value->title; ?></a></li>       
					<?php } ?> 					
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="border-top">
   <div class="container">
      <div class="d-flex pd-t-10 pd-b-13 justify-content-between align-items-center copyright">
         <p class=""><?php echo copyrightText(); ?></p>
         <div class="">
            <a href="<?php echo gotoYoutube(); ?>" class="social-footer you"></a>
            <a href="<?php echo gotoInstagram(); ?>" class="social-footer insta"></a>
            <a href="<?php echo gotoLinkedin(); ?>" class="social-footer in"></a>
			<a href="<?php echo gotoFacebook(); ?>" class="social-footer fb"></a>
			
         </div>
      </div>
   </div>
</div>

<?php 

$thisRouter = $this->router->class; 

$pageref = array("home", "courses", "projects", "skillcenters");

$showchat = false;
$chat["prechatopen"] = 'true';
$chat["chatview"] = 'desktop';

if(in_array($thisRouter, $pageref)){ 

	$showchat = true;

	if($thisRouter=="courses"){

		$thisSegment = $this->uri->segment(2); 

		$pagedisallowsegtwo = array("electric-vehicle-ansys");

		if(in_array($thisSegment, $pagedisallowsegtwo)){ 
			$showchat = false;
		}
	}

	if($this->agent->is_mobile()){
		
		$chat["prechatopen"] = 'false';	
		$chat["chatview"] = 'mobile';
	}else{
		
		$chat["prechatopen"] = 'true';
		$chat["chatview"] = 'desktop';
	}
}
?>

<!-- Mobile Footer Menu -->
<div class="fixed-bottom mob-bt-fixed" style="background: #f1f1f1;">
	<nav class="nav">
		<a class="nav-link" href="#" data-toggle="modal" data-target="#callus">
			<span> <img src="<?php echo base_url();?>images/phone-call.svg" alt="call"> </span>
			Call
		</a>
		<a class="nav-link header_search" href="#" id="searched">
			<span> <img src="<?php echo base_url();?>images/loupe.svg" alt="search"> </span>
			Search
		</a>
		<a class="nav-link" href="<?php echo base_url();?>all-workshop">
			<span> <img src="<?php echo base_url(); ?>images/workshop.svg" alt="workshop"> </span>
			Workshops
		</a>
		<?php if($showchat){ ?>
		<a class="nav-link" href="javascript: window.fcWidget.open(); window.fcWidget.show();" tabindex="-1" aria-disabled="true">
			<span> <img src="<?php echo base_url();?>images/surya-bubbule_1.png" alt="chat" style="width: 35px; height: 35px; margin-bottom: 4px;"> </span>
			Chat
		</a>
		<?php }else{ ?>
		<a class="nav-link" href="<?php echo base_url();?>all-projects">
			<span> <img src="<?php echo base_url(); ?>images/project.svg" alt="projects"> </span>
			Projects
		</a>
		<?php } ?>
	</nav>
</div>

<?php
if($showchat){
	$this->load->view('frontend/common/thirdparty_chat', $chat); 
}

$this->load->view('frontend/common/thirdparty');
?>
