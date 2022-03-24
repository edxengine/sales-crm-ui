<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	#contact_form input{
		height:40px;
	}
	
	#recruit_form textarea{
		height:100px;
	}
</style>

<section class="form-widget" id="recruit_from_skill_lync">
	<div class="container">
		<div class="row row-xs justify-content-center">
			<div class="col-12 mb-5">
				<h1 class="mt-3 text-center">CONTACT US</h1>
			</div>             
		
			<div class="col-12 col-md-12 col-lg-12 col-xl-12">
				<form id="contact_form" autocomplete="off">
				<div id="contact_alert"></div>
				
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>Your First Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="fname" required="">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
					</div>
					<div class="col-md-6 mb-3">
						<label>Your Last Name  <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="lname" required="">
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control" name="email" required="">
					</div>
					<div class="col-md-6 mb-3">
						<label>Mobile Number <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-prepend " style="width:40%; ">
								<select id="select_country" class="form-control custom-input country" name="country" required="" style="border-top-right-radius:0px; border-bottom-right-radius:0px; height:100%;">
								
								</select>
								<span class="input-group-text country_code_display d-none">+91</span>
								<input type="hidden" name="code" required>
							</div>
							<input type="text" class="form-control custom-input" style="width:60%;" name="phone" required="" autocomplete="off" >
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>Department <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="department" required="">
					</div>
					<div class="col-md-6 mb-3">
							<label>Designation <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="designation" required="">
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>Institute / University <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="insuniv" required="">
					</div>
					
				</div>
				
				
				<div class="row">
					<div class="col-md-12 mb-3 text-center">
						<button type="submit" class="btn btn-view mr-0 mt-3 submit">Quick Enquiry</button>
					</div>      
				</div>
				</form>
			</div>
		</div>
    </div>
</section>
<hr class="line-width">