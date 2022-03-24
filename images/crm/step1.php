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
						<!--<li class="nav-item mg-t-0-f">
							<a class="nav-link justify-content-start rounded-0" id="copy_emails-details-tab" data-toggle="tab" href="#copy_emails-details" role="tab" aria-controls="copy_emails-details" aria-selected="false">Copy From Sent Emails</a>
						</li>-->
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
							
							<!--<div class="card-deck">
								
									<div class="card card_hover">
										<div class="card-body">
											<div class="pd-25 bd bd-primary tx-center">
												<div class="">
													<h6 class="pd-y-20"> Use Rich Text Editor </h6>
													<img src="<?php echo base_url();?>assets/img/email_landing_pages/rich-text.png" class="card-img-bottom ht-30 wd-30 rounded-0"  alt="rich-text">
												</div> 
											</div>
											
										</div>
										<div class="card-footer">
											<div class="change_success" id="money" data-temp-id = "9" data-temp-type = "use_html">
												<i class="fa fa-check-circle  mg-r-5 change_i" data-id="money"></i>
												<span class="tx-gray-500">Select</span>
											</div>
										</div>
									</div>
								
								
							
									<div class="card card_hover">
										<div class="card-body tx-center">
										
											<div class="pd-25 bd bd-primary tx-center">
												<div class="">
													<h6 class="pd-y-20"> Paste Your HTML </h6>
													<i class="fa fa-code tx-30 tx-gray-500"></i>
												</div> 
											</div>
											
										</div>
										<div class="card-footer">
											<div class="change_success" id="money" data-temp-id = "10" data-temp-type = "use_html">
												<i class="fa fa-check-circle  mg-r-5 change_i" data-id="money"></i>
												<span class="tx-gray-500">Select</span>
											</div>
										</div>
									</div>
							
								
								
									<div class="card card_hover">
										<div class="card-body tx-center">
										
											<div class="pd-25 bd bd-primary tx-center">
												<div class="">
													<h6 class="pd-y-20">Use Plain-Text Editor</h6>
													<img src="<?php echo base_url();?>assets/img/email_landing_pages/plain-text.png" class="card-img-bottom ht-30 wd-30 rounded-0"  alt="plain-text">
												</div> 
											</div>
										</div>
										<div class="card-footer">
											<div class="">
												<div class="">
													<div class="change_success" id="money" data-temp-id = "11" data-temp-type = "use_html">
														<i class="fa fa-check-circle  mg-r-5 change_i" data-id="money"></i>
														<span class="tx-gray-500">Select</span>
													</div>
												</div>
												
											</div>
										</div>
									</div>
							</div>-->
							
				<!-- 2nd editor -->
				
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
						
						<!--<div class="tab-pane fade" id="copy_emails-details" role="tabpanel" aria-labelledby="copy_emails-details-tab">
							
							<div class="bg-gray-100 pd-10 mg-b-15">
								<div class="row row-xs">
									<div class="col-4">
										<div class="d-flex align-items-center mg-b-0 small-dropdown">
											<div class="input-group">
												<input type="text" placeholder="Search" class="form-control">
												<div class="input-group-append">
													<button class="btn btn-light form-control" type="button">
														<i class="fa fa-search fa-xs"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="table-responsive">
								<table class="table bd" id="table_id">
									<thead  class="bg-gray-100">
										<tr>
											<th colspan="1">
												
											</th>
											<th class="bd-l">Sender</th>
											<th class="bd-l">Status</th>
											<th class="bd-l">Date</th>
											<th class="bd-l">
												<span class="tx-center line-clamp">Clicks
													<i class="fa fa-long-arrow-down mg-l-10"></i>
												</span>
											</th>
											<th class="bd-l tx-center">Preview</th>
										</tr>
									</thead>  
								
									<tbody class="clamp_body ">
										<tr class="hidden_icons_table">
											<td>
												<span class="">
													<i class="fa fa-check-circle mg-r-5 select_btn"></i>
														Email Campaign 02
												</span>
											</td>
											<td>Suriya P</td>
											<td>
												Complete
											</td>
											<td >
												11/14/17 06:00 PM
											</td>
											
											<td class="tx-center">
												0
											</td>
											
											<td class="tx-center">
												
												
													<a class="tx-dark" class="goes_to_4">
														<i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
													</a>
												<input type="hidden" id="jump_to_fourth_step" name="account_type" value="fourthStep">
											</td>
										</tr>
										
										<tr class="hidden_icons_table">
											<td>
												<span class="">
													<i class="fa fa-check-circle mg-r-5 select_btn"></i>
														Structural Analysis Scholarship Mail 1
												</span>
											</td>
											<td>Suriya P</td>
											<td>
												Complete
											</td>
											<td>
												11/14/17 06:00 PM
											</td>
											
											<td class="tx-center">
												0
											</td>
											
											<td class="tx-center">
												<a class="tx-dark" href="#">
													<i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
												</a>
											</td>
										</tr>
										
										<tr class="hidden_icons_table">
											<td>
												<span class="">
													<i class="fa fa-check-circle mg-r-5 select_btn"></i>
														Data Analytics WS Scholarship mail 2
												</span>
											</td>
											
											<td>Suriya P</td>
											<td>
												Complete
											</td>
											<td>
												11/14/17 06:00 PM
											</td>
											
											<td class="tx-center">
												0
											</td>
											
											<td class="tx-center">
												<a class="tx-dark" href="#">
													<i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
												</a>
											</td>
										</tr>
										
										<tr class="hidden_icons_table">
											
											<td>
												<span class="">
													<i class="fa fa-check-circle mg-r-5 select_btn"></i>
														Structural Analysis Scholarship Mail 2
												</span>
											</td>
											<td>Suriya P</td>
											<td>
												Complete
											</td>
											<td>
												11/14/17 06:00 PM
											</td>
											
											<td class="tx-center">
												0
											</td>
											
											<td class="tx-center">
												<a class="tx-dark" href="#">
													<i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
												</a>
											</td>
										</tr>
										
										<tr class="hidden_icons_table">
											
											<td>
												<span class="">
													<i class="fa fa-check-circle mg-r-5 select_btn"></i>
														BIW Lead engagement mailers
												</span>
											</td>
											<td>Suriya P</td>
											<td>
												Complete
											</td>
											<td>
												11/14/17 06:00 PM
											</td>
											
											<td class="tx-center">
												0
											</td>
											
											<td class="tx-center">
												<a class="tx-dark" href="#">
													<i class="fa fa-external-link" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="pd-5">
								<div class="row row-xs">
									<div class="col-12 bg-gray-100 pd-5">
										<div>
											<h6 class="float-left tx-bold pd-t-10">1-25 of 5923</h6>
											<nav aria-label="Page navigation example">
												<ul class="pagination pagination-space pagination-filled float-right mg-b-0">
													<li class="page-item disabled">
														<a class="page-link page-link-icon" href="#"><i data-feather="chevron-left"></i></a>
														
													</li>
													<li class="page-item active rounded">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">5</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">6</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">7</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">8</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">9</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">10</a>
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
						</div>-->
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
