<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="header">

	<?php  $this->load->view('frontend/common/announcement'); ?>       

	<?php  $this->load->view('frontend/common/incompleteprofile'); ?>  

    <!-- Navbar -->     
	<section id="navbar_top" class="bg-white desktop-menu">
        <div class="container">			
			<nav class="navbar navbar-icon-top navbar-expand-md">          
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item logo-skill">
							<a class="nav-link" href="<?php echo base_url(); ?>">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/logo-new-01.png" alt="logo" class="logo-newMenu" />

								</div>
								SKILL-LYNC
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>courses">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/courses.svg" alt="courses" class="icons" />
								</div>
								
								Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>projects">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/project.svg" alt="projects" class="icons" />
									<span class="badge badge-orange">New</span>
								</div>

								Projects
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>workshop">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/workshop.svg" alt="workshops" class="icons" />
								</div>

								Workshops
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header_search" href="#" id="myBtn2">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/search_new.svg" alt="search" class="icons" />
								</div>

								Search
							</a>
						</li>

					</ul>
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#callus">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/call_new.svg" alt="call-us" class="icons" />
								</div>
								<?php echo mobileText(); ?>
							</a>

						</li>
						<?php if(sizeof($loginuser)>0){ 
							$count = $this->common_model->getunreadnotificationcount($loginuser[0]->id);
							$data = $this->common_model->getcustomernotifications($loginuser[0]->id);
						?>
						<li class="nav-item">
							<a class="nav-link" href="#" id="dLabel" role="button" data-toggle="dropdown" data-target="#" aria-expanded="true">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/notification.svg" alt="notifications" class="icons notification_image <?php echo $count > 0 ? 'notification_bellshake' : '; '?>" />
									<span class="badge badge-warning bell notification_count" style="display:<?php echo $count > 0 ? 'block' : 'none; '?>;"><?php echo $count; ?></span>
								</div>

								Notifications
							</a>
							<div class="dropdown">
								<ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">
									<div class="notification-heading">
										<h4 class="menu-title">Notifications</h4>
									</div>
									<li class="divider"></li>
									<div class="notifications-wrapper notifications_list">
									<?php 
										if(sizeof($data)>0){foreach($data as $key=>$value){ ?>
										<a class="content" id="notification_link" href="" data-id="<?php echo $this->encryption->encrypt($value->id); ?>" data-url="<?php echo $value->url; ?>">                               
											<div class="notification-item <?php echo $value->status == 1 ? 'read' : ''; ?>">
												<div class="notifi-img">
													<img src="<?php echo $value->photo;?>" alt="<?php echo $value->fname;?>"/>
												</div>
												<h4 class="item-title"><?php echo $value->subject; ?></h4>
												<p class="item-info"><?php echo date('d M Y h:i a', $value->crdatetime); ?></p>
											</div>                                
										</a>
									<?php }	}else{ ?>
										<div class="notification-item read mb-0">
											<h4 class="item-title text-center mb-0">No new notifications found</h4>
										</div>    
									<?php } ?>
									</div>
									<li class="divider"></li>
									<div class="notification-footer border-top">
										<h4 class="view-all-not text-center text-muted"><a href="<?php echo base_url(); ?>notifications">View all notifications</a></h4>
									</div>
								</ul>
							</div>
						</li>
						<li class="nav-item username-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#profile-dashboard">
								<div class="image-newNav">
									<img src="<?php echo $loginuser[0]->photo; ?>" class="icons rounded-circle" alt="<?php echo $loginuser[0]->fname; ?>" />
								</div>
								<?php echo explode(" ",ucfirst($loginuser[0]->fname))[0]; ?>
								
							</a>
						</li>
						<?php }else{ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>auth/login?redirect=<?php echo current_url(); ?>">
								<div class="image-newNav">
									<img src="<?php echo base_url(); ?>images/login.svg" alt="login" class="icons" />
								</div>
								Login | Sign Up
							</a>
						</li>
						<?php } ?>
					</ul>
					
				</div>
			</nav>
		</div>
	</section>

	<!-- Mobile Navbar -->

	<div class="main-menu mobile-side">
		<nav id="navbar_top" class="navbar navbar-expand-md">
			<div class="container">

				<a class="navbar-brand" href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>images/header_logo.png" alt="" class="img-fluid">
				</a>
				<a href="" class="callus hvr-bounce-to-right" data-toggle="modal" data-target="#callus">Call Us</a>
				<a href="<?php echo base_url(); ?>courses" class="courses_mobile">Courses</a>
				
				<?php if(sizeof($loginuser)>0){ ?>
				<a class="mobile-hammer" data-toggle="modal" data-target="#profile-dashboard" style="position:relative;">
					<img class="rounded-circle" src="<?php echo $loginuser[0]->photo; ?>" alt="<?php echo ucfirst($loginuser[0]->fname); ?>">
					<span class="badge badge-danger bell notification_count" style="display:<?php echo $count > 0 ? 'inline' : 'none; '?>;"><?php echo $count; ?></span>
				</a>
				<?php }else{ ?>
				<a class="mobile-hammer" data-toggle="modal" data-target="#profile-dashboard">
					<img src="<?php echo base_url(); ?>images/hambar.png" alt="">
				</a>
				<?php } ?>
			</div>
		</nav>

	</div>
</section>


<!-- profile-menu -->
<div class="modal fade desktop-model" id="profile-dashboard" tabindex="-1" aria-labelledby="profile-dashboardLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header dash-header common-header">
				<a href="" data-dismiss="modal" aria-label="Close" class="arrow-left"> <img src="<?php echo base_url();?>images/right-arrow.svg" alt="back"></a>
				<h5 class="modal-title" id="profile-dashboardLabel"></h5>
			   
				<a href=""  class="btn-cls-desk" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url();?>images/error.svg" alt="close"></a>
			</div>
			<div class="modal-body">
			  <!-- tabs -->
				<div class="mobile-profile">
					<?php if(sizeof($loginuser)>0){ ?>
					<div style="text-align:center;">
						<img class="profile-title rounded-circle" src="<?php echo $loginuser[0]->photo; ?>" >
					</div>
					<div class="dashboard-name">
					   <?php echo ucwords(strtolower($loginuser[0]->fname.' '.$loginuser[0]->lname)); ?>
					</div>
					<?php }else{ ?>
						<div class="profile-title rounded-circle"> G </div>
						<div class="dashboard-name">
						   Welcome Guest
						</div>
					<?php } ?>
					<div class="dashboard-link">
						<ul>
						
						    <?php if(sizeof($loginuser)>0){ 
							$purchasecount = $this->common_model->getUserPurchaseCount($loginuser[0]->id);
							if($purchasecount > 0){?>
							
						    <li><a href="<?php echo base_url(); ?>dashboard" class="<?php echo $this->uri->segment(1)=='dashboard' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/Blogs.svg" alt="">Dashboard</a> </li>
							
							<li><a href="<?php echo base_url(); ?>forums" class="<?php echo $this->uri->segment(1)=='forums' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/choose.svg" alt=""> Forums</a> </li>
							
						    <?php } }else{ ?>
						    <li><a href="<?php echo base_url().'auth/login'?>"><img src="<?php echo base_url();?>images/choose.svg" alt="">Login/Signup</a> </li>
						    <?php } ?>
						  
						  <li><a href="<?php echo base_url(); ?>courses" class="<?php echo $this->uri->segment(1)=='courses' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/placement.svg" alt="">Courses </a> </li>
						  <li><a href="<?php echo base_url(); ?>projects" class="<?php echo $this->uri->segment(1)=='projects' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/Blogs.svg" alt="">Projects </a> </li>
						  <li><a href="<?php echo base_url(); ?>workshop" class="<?php echo $this->uri->segment(1)=='workshop' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/placement.svg" alt="">Workshops</a> </li>
						  <li><a href="<?php echo base_url(); ?>blogs" class="<?php echo $this->uri->segment(1)=='blogs' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/handpick.svg" alt="">Blogs</a> </li>
						  <?php if(sizeof($loginuser)>0){ ?>
						  <li><a href="<?php echo base_url(); ?>notifications" class="<?php echo $this->uri->segment(1)=='notifications' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/Blogs.svg" alt="">Notifications <span class="badge badge-warning bell notification_count" style="display:<?php echo $count > 0 ? 'inline' : 'none; '?>;"> <?php echo $count; ?></span></a></li>
						  <?php } ?>
						  <li class="d-none"><a href="<?php echo base_url(); ?>aboutus" class="<?php echo $this->uri->segment(1)=='aboutus' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/choose.svg" alt="">About us</a> </li>
						  <li><a href="<?php echo base_url(); ?>careers" class="<?php echo $this->uri->segment(1)=='careers' ? 'active': ''; ?>"><img src="<?php echo base_url();?>images/Blogs.svg" alt="">Careers</a> </li>
						  <?php if(sizeof($loginuser)>0){ ?>
						  <li><a href="<?php echo base_url().'auth/logout'?>"><img src="<?php echo base_url();?>images/placement.svg" alt="">Logout</a> </li>
						  <?php } ?>
						</ul>
					</div>
				</div>
			</div>      
		</div>
	</div>
</div>