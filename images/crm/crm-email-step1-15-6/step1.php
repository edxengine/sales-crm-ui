<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('marketing/header'); ?>
<?php $this->load->view('common/header_nav'); ?>
<div class="container-fluid mg-b-40">
	<?php $this->load->view('marketing/emailcampaign/steps/steps_menu'); ?>
		<div class="error_msg_display"></div>
		<div class="pd-15">
			<div class="">
				<form>
					<div class="form-group row">
						<label class="col-3 tx-semibold tx-14" for="create_campaign_1">Email Campaign Name <span class="tx-danger">*</span></label>
						<div class="col-9">
							<input type="text" class="form-control"  name="email_campaign_name" id="email_campaign_name" placeholder="Email Campaign" id="create_campaign_1" value="<?php echo (!empty($this->session->userdata['emailcamp_first_step_data']) ? $this->session->userdata['emailcamp_first_step_data']['email_camp_name'] : ''); ?>">
						</div>
					</div>
				</form>
			
			</div>
			<div>
				<h6>How would you like to create Email? <span class="tx-danger">*</span></h3>
			</div>
			<div class="row row-xs">
				<div class="col-xl-3 col-12">
					<ul class="nav nav-tabs flex-column tx-14 blue-border" id="create_email_campagin_step1" role="tablist">
						<li class="nav-item">
							<a class="nav-link active bg-gray-100 justify-content-start rounded-0 bd-t-0-f" id="email_template-tab" data-toggle="tab" href="#email_template-details" role="tab" aria-controls="email_template-details" aria-selected="false">Use Email Template</a>
						</li>
						<li class="nav-item mg-t-0-f">
							<a class="nav-link justify-content-start rounded-0" id="use_html-details-tab" data-toggle="tab" href="#use_html-details" role="tab" aria-controls="use_html-details" aria-selected="true">Use Html</a>
						</li>
						
					</ul>
				</div>
				<div class="col-xl-9">
					<div class="tab-content pd-x-10" id="create_email_campagin_step1_content">
						<div class="tab-pane fade show active" id="email_template-details" role="tabpanel" aria-labelledby="email_template-tab">
							<input type="hidden" name="template_id" id="template_id" value="<?php echo (!empty($this->session->userdata['emailcamp_first_step_data']) ? $this->session->userdata['emailcamp_first_step_data']['temp_id'] : ''); ?>">
							<input type="hidden" name="template_type" id="template_type" value="<?php echo (!empty($this->session->userdata['emailcamp_first_step_data']) ? $this->session->userdata['emailcamp_first_step_data']['temp_type'] : ''); ?>">
							<div class="campaign_cards">
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_img_2.png" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_img_2">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Email Automation CS Free program - Click - Mail 1</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="collections" data-temp-id = "1" data-temp-type = "use_template">
														<a class="fa fa-check-circle  mg-r-5 change_i"  data-id="collections"></a>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_template.jpg" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_template">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Blank Email Template</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="blank" data-temp-id = "2" data-temp-type = "use_template">
														<i class="fa fa-check-circle  mg-r-5 change_i"  data-id="blank"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_img_2.png" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_img_2">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Email Automation CS Free program - Click - Mail 1</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" data-temp-id = "3" data-temp-type = "use_template">
														<i class="fa fa-check-circle mg-r-5 change_i"  data-id="emailCollections"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_template.jpg" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_template">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Blank Email Template</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="look" data-temp-id = "4" data-temp-type = "use_template">
														<i class="fa fa-check-circle mg-r-5 change_i" data-id="look"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_img_2.png" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_img_2">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Email Automation CS Free program - Click - Mail 1</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" data-temp-id = "5" data-temp-type = "use_template">
														<i class="fa fa-check-circle  mg-r-5 change_i"  data-id="billing"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_template.jpg" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_template">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Blank Email Template</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="payments" data-temp-id = "6" data-temp-type = "use_template">
														<i class="fa fa-check-circle  mg-r-5 change_i" data-id="payments"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_img_2.png" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_img_2">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Email Automation CS Free program - Click - Mail 1</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="money" data-temp-id = "7" data-temp-type = "use_template">
														<i class="fa fa-check-circle  mg-r-5 change_i" data-id="money"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<div class="card_hover">
									<div class="card">
										<div class="card-body tx-center">
										
											<div class="pd-y-15">
												<img src="<?php echo base_url();?>assets/img/email_landing_pages/blank_template.jpg" class="card-img-top  rounded-0 wd-150 ht-100 blank_img"  alt="blank_template">
												
											</div>
											<h6 class="mg-b-0 clamp_card">Blank Email Template</h6>
										</div>
										<div class="card-footer">
											<div class="row row-xs">
												<div class="col-6 bd-r">
													<div class="change_success" id="cash" data-temp-id = "8" data-temp-type = "use_template">
														<i class="fa fa-check-circle  mg-r-5 change_i" data-id="cash"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												<div class="col-6">
													<div class="tx-right">
														<i class="fa fa-eye tx-gray-500 mg-r-5"></i>
														<span >Preview</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
									
							</div>
							<div class="pd-5">
								<div class="row row-xs">
									<div class="col-12 bg-transparent pd-5">
										<div class="">
											<nav aria-label="Page navigation example">
												<ul class="pagination pagination-space pagination-filled float-right mg-b-0">
													<li class="page-item disabled">
														<a class="page-link page-link-icon" href="#"><i data-feather="chevron-left"></i></a>
														
													</li>
												
													<li class="page-item">
														<a class="page-link" href="#">
															<i data-feather="chevron-right"></i>
														</a>
													</li>
												</ul>
											</nav>
											
										</div>			
									</div>
								</div>
							</div>
						</div>
						
						<div class="tab-pane fade" id="use_html-details" role="tabpanel" aria-labelledby="use_html-details-tab">
							<div class="row row-xs">
								<div class="col-12">
									<div class="mg-b-15">
										
											<div class="tab-content" id="pills-tabContent">
												<div class="tab-pane fade show active" id="html_message_auto" role="tabpanel" aria-labelledby="html_message_auto_tab">
													<div class="">
														<div id="common_campagin_toolbar" class="ql-toolbar ql-snow">
															<span class="ql-formats">
																<select class="ql-font"></select>
																<select class="ql-size"></select>
															</span>
															<span class="ql-formats">
																<button class="ql-bold"></button>
																<button class="ql-italic"></button>
																<button class="ql-underline"></button>
																<button class="ql-strike"></button>
															</span>
															<span class="ql-formats">
																<select class="ql-color"></select>
																<select class="ql-background"></select>
															</span>
															<span class="ql-formats">
																<button class="ql-script" value="sub"></button>
																<button class="ql-script" value="super"></button>
															</span>
															<span class="ql-formats">
																<button class="ql-header" value="1"></button>
																<button class="ql-header" value="2"></button>
																<button class="ql-blockquote"></button>
																<button class="ql-code-block"></button>
															</span>
															<span class="ql-formats mg-t-5">
																<button class="ql-list" value="ordered"></button>
																<button class="ql-list" value="bullet"></button>
																<button class="ql-indent" value="-1"></button>
																<button class="ql-indent" value="+1"></button>
															</span>
															<span class="ql-formats mg-t-5">
																<button class="ql-direction" value="rtl"></button>
																<select class="ql-align"></select>
															</span>
															<span class="ql-formats mg-t-5">
																<button class="ql-link"></button>
																<button class="ql-image"></button>
																<button class="ql-video"></button>
																<button class="ql-formula"></button>
															</span>
															<span class="ql-formats">
																<button class="ql-clean"></button>
															</span>
														</div>

														<div id="campaign_container_html" class="ql-toolbar ql-snow">
															<?php echo (!empty($this->session->userdata['emailcamp_second_step_data']) ? $this->session->userdata['emailcamp_second_step_data']['email_body_html'] : ''); ?>
														</div>
													</div>
												</div>
												<input type="hidden" name="email_body_html" id="email_body_html" value="<?php echo (!empty($this->session->userdata['emailcamp_second_step_data']) ? $this->session->userdata['emailcamp_second_step_data']['email_body_html'] : ''); ?>">
												<div class="tab-pane fade" id="text_message_auto" role="tabpanel" aria-labelledby="text_message_auto_tab">
													<div class="ht-300">
														<div id="common_campagin_toolbar">
															
															
														</div>

														<div id="common_campagin_editor">
															
														</div>
													</div>
												</div>
												
											</div>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pd-15 bg-gray-100">
			<div class="d-flex justify-content-end ">
				<div class="mg-r-5">
					<button type="button" class="btn btn-xs btn-white rounded-0">Cancel</button>
				</div>
				
				<div class="mg-r-5">
					<button type="button" class="btn btn-xs btn-white rounded-0">Save and Exit</button>
				</div>
				
				<div class="mg-r-5">
					<button type="button" class="btn btn-xs btn-white rounded-0 step_1_save">Save</button>
				</div>
				
				<div class="mg-r-5 no_hover">
					<button type="button" class="btn btn-xs btn-primary rounded-0 no_hover step_1_save"><a href="#" class="tx-white">Next</a></button>
				</div>
			</div>
		</div>
		
</div>




<!-- Confirm Navigation  modal -->
<div class="modal fade select-modal-parent" id="confirm_navigation" tabindex="-1" role="dialog" aria-labelledby="confirm_navigationtitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title tx-primary" id="confirm_navigationtitle">Confirm</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		  
			<div class="modal-body">
				<div>
					Do you want to save changes before navigating?
				</div>
				
			</div>
			<div class="modal-footer bg-light justify-content-center">
				
				<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal"></i>Cancel</button>
				<button type="button" class="btn btn-white btn-xs rounded-0">No</button>
				<button type="button" class="btn btn-primary btn-xs rounded-0">Yes</button>
			</div>
		</div>
	</div>
</div>

<!-- Confirm Navigation  modal End-->

<!-- Enter the Subject of Email Campaign.  modal -->
<div class="modal fade select-modal-parent" id="warning_enter_subject" tabindex="-1" role="dialog" aria-labelledby="warning_enter_subjecttitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title tx-primary" id="warning_enter_subjecttitle">Warning</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		  
			<div class="modal-body">
				<div>
					Please enter the Subject of Email Campaign.
				</div>
				
			</div>
			<div class="modal-footer bg-light justify-content-center">
				
				<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal"></i>Cancel</button>
				<button type="button" class="btn btn-white btn-xs rounded-0">No</button>
				<button type="button" class="btn btn-primary btn-xs rounded-0">Yes</button>
			</div>
		</div>
	</div>
</div>

<!-- Confirm Navigation  modal End-->
<?php $this->load->view('marketing/footer'); ?> 
<script>
var templ_id = "<?php echo $this->session->userdata['emailcamp_first_step_data']['temp_id']; ?>";
$("div[data-temp-id='" + templ_id + "']").addClass("tx-success");
$("div[data-temp-id='" + templ_id + "']").removeClass("tx-gray-500");

//var active_id = $('div[data-temp-id="'+ templ_id +'"]').parent().parent().parent().parent().attr('class');
var active_id = $('div[data-temp-id="'+ templ_id +'"]').closest('.tab-pane').attr('id');
$('#email_template-details').removeClass('active show');
$('#use_html-details').removeClass('active show');
$('#copy_emails-details').removeClass('active show');
$('#'+active_id).addClass('active show');
$('[href*="email_template-details"]').removeClass('active');
$('[href*="use_html-details"]').removeClass('active');
$('[href*="copy_emails-details"]').removeClass('active');
$('[href*="'+active_id+'"]').addClass('active');
</script>
