<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	$this->load->view('frontend/courses/indpage_header'); 

	$this->load->view('frontend/common/headersearch'); 
	
	$this->load->view('frontend/courses/course_header'); 
		
		foreach($pageData as $key=>$value){
			$this->vData['key'] = $key;
			if($value->templ_id == 138){	
			
				$this->vData['introduction_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/overview_section');
				
			}elseif($value->templ_id == 136){
				
				$this->vData['id'] = $value->id; 
				$this->vData['coursesyllabus_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/syllabus_section'); 
				
			}elseif($value->templ_id == 99){
				
				$this->vData['test_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/testimonial_section'); 
				
			}elseif($value->templ_id == 120){
				
				$this->vData['whysklc_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/whychoosesklc_section'); 
				
			}elseif($value->templ_id == 123){ 
			
				$this->vData['certificate_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/certificate_section'); 
		
			}elseif($value->templ_id == 50){
				
				$this->vData['rel_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/relatedcourses_section'); 
				
			}elseif($value->templ_id == 98){ 
			
				$this->vData['placement_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/placement_section');
		
			}elseif($value->templ_id == 145){
				
				$this->vData['rte_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/rte_section');
				
			}elseif($value->templ_id == 139){
				
				$this->vData['faq_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/faq_section');
				
			}elseif($value->templ_id == 125){
				
				$this->vData['coursefeewithschol_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/coursefeewithschol_section');
				
			}elseif($value->templ_id == 171){
				
				$this->vData['coursefee_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/coursefee_section');
				
			}elseif($value->templ_id == 173){
				
				$this->vData['scholarship_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/scholarship_section');
				
			}elseif($value->templ_id == 141){
				
				$this->vData['coursecounselling_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/coursecounselling_section');
				
			}elseif($value->templ_id == 180){
				
				$this->vData['relproj_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/relatedprojects_section');
				
			}elseif($value->templ_id == 51){
				
				$this->vData['blog_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/blogs_section');
				
			}elseif($value->templ_id == 168){
				
				$this->vData['news_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/news_section');
				
			}elseif($value->templ_id == 179){
				$this->vData['id'] = $value->id;
				$this->vData['imgsliderprojdesc_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/imageslider_section');
				
			}elseif($value->templ_id == 177){
				
				$this->vData['projectdesc_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/projectdesc_section');
				
			}elseif($value->templ_id == 143){
				
				$this->vData['softwarecovered_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/softwarecovered_section');
				
			}elseif($value->templ_id == 175){
				
				$this->vData['hightlight_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/projecthighlights_section');
				
			}elseif($value->templ_id == 188){
				
				$this->vData['acknowledgement_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/acknowledgement_section');
				
			}elseif($value->templ_id == 127){
				
				$this->vData['formwithtimer_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/formwithtimer_section');
				
			}elseif($value->templ_id == 164){
				
				$this->vData['pricingplan_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/pricingplan_section');
				
			}elseif($value->templ_id == 142){
				
				$this->vData['formwithouttimer_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/formwithouttimer_section');
				
			}elseif($value->templ_id == 193){
				
				$this->vData['formwithresumeupload_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/formwithresumeupload_section');
				
			}elseif($value->templ_id == 137){ 
			
				$this->vData['project_jsonfile'] = '['.$value->json_data.']'; 
				$this->vData['id'] = $value->id; 
				$this->load->view('frontend/templates/projects_section');
		
			}elseif($value->templ_id == 199){ 
			
				$this->vData['leaderboard_jsonfile'] = '['.$value->json_data.']'; 
				$this->vData['course_id'] = $default->id; 
				$this->vData['course_permalink'] = $default->permalink; 
				$this->load->view('frontend/templates/leaderboard_section');
		
			}elseif($value->templ_id == 202){
				
				$this->vData['downloadsylsec_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/newdownloadsyllabus_section');
				
			}elseif($value->templ_id == 205){
				
				$this->vData['formwithdeptnew_jsonfile'] = '['.$value->json_data.']'; 
				$this->load->view('frontend/templates/formwithdeptnew_section');
				
			}
		
		}
		
?>

	<!-- Browse Button -->
    <div class="btn-group browse-btn">
        <label class="btn btn-primary rightdown-btn" id="browse-arrow">   </label>
        <label class="btn btn-primary btn-browsepop" id="buttonclick" href="#browse-pop" data-toggle="modal">
			Browse
		</label>
    </div>
	
	<div class="modal fade desktop-model" id="browse-pop" tabindex="-1" aria-labelledby="browsepopLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header common-header">
                    <a href="" data-dismiss="modal" aria-label="Close" class="arrow-left"> <img src="<?php echo base_url(); ?>images/right-arrow.png" alt=""></a>
                    <h5 class="modal-title" id="browsepopLabel">BROWSE</h5>

                    <a href="" class="btn-cls-desk" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url(); ?>images/error.png" alt=""></a>
                </div>
                <div class="modal-body">
					<ul class="course-ul pop-link">
					<?php foreach($pageData as $key=>$value){ ?>
                        <li><a href="#section_<?php echo $key; ?>"><span><?php echo $key < 9 ? '0'.($key+1) : $key+1; ?></span> <?php echo $value->templtitle; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
<script>
var Page_course_id = <?php echo $default->id; ?>;
</script>
	
<?php
	
	$this->load->view('frontend/common/footer_menu'); 
	
	$this->load->view('frontend/courses/footer'); 
	
?>

<script>
	var lead_branch = '<?php echo $default->main_domain;?>';
	var lead_domain = '<?php echo $default->lead_domain;?>';
	var csrftoken = '<?php echo $this->security->get_csrf_token_name(); ?>';
	var csrfhash = '<?php echo $this->security->get_csrf_hash(); ?>';
	var customer_name;
	var customer_email;
	var customer_phone;
	var customer_country;
	var customer_whatsapp;
	var success_note;
	
	var course_id = <?php echo $default->id; ?>;
	
	var country_option = '';
	<?php foreach($country as $key=>$value){ ?>
		country_option = country_option+"<option value='<?php echo $country[$key]->id; ?>' data-countycode='+<?php echo $country[$key]->phone_code; ?>'><?php echo $country[$key]->name.' (+'.$country[$key]->phone_code.')'; ?></option>";
	<?php } ?>
	
	var department = '<option label="--Select department--"></option>';
	<?php foreach($department as $k=>$v){ ?>
		department = department+"<option value='<?php echo $department[$k]->title; ?>'><?php echo $department[$k]->title; ?></option>";
	<?php } ?> 
	
	<?php if(array_key_exists('lead_name', $_COOKIE)){?>
		customer_name = '<?php echo $_COOKIE["lead_name"];?>';
	<?php } ?>
	
	<?php if(array_key_exists('lead_email', $_COOKIE)){?>
		customer_email = '<?php echo $_COOKIE["lead_email"];?>';
	<?php } ?>
	
	<?php if(array_key_exists('lead_phone', $_COOKIE)){?>
		customer_phone = <?php echo $_COOKIE["lead_phone"];?>;
	<?php } ?>
	
	<?php if(array_key_exists('lead_country', $_COOKIE) && $_COOKIE["lead_country"] > 0){?>
	customer_country = <?php echo $_COOKIE["lead_country"];?>;
	<?php }else{ ?>
	customer_country = 101;
	<?php } ?>
	
	<?php if(array_key_exists('lead_whatsapp', $_COOKIE)){
			if($_COOKIE["lead_whatsapp"] == 'on'){?>
				customer_whatsapp = true;
	<?php }else{ ?> 
		customer_whatsapp = false;
	<?php } }else{ ?>
		customer_whatsapp = false;
	<?php } ?> 
	
	$(function(){ 
		'use strict'
		$('select.country').append(country_option);
		$("input[name=name]").val(customer_name);
		$("input[name=email]").val(customer_email);
		$("input[name=phone]").val(customer_phone);
		$('select[name=department]').append(department);
		$("select[name=country] option[value="+customer_country+"]").attr('selected','selected');
		var countrycode = $('select.country').find(':selected').data('countycode');
		$(".country_code_display").html(countrycode);
		$("input[name=whatsapp]").prop('checked', customer_whatsapp);
		
		$("#previewcertform").submit(function(e){
			e.preventDefault();
			var data = {};
			$("#previewcertform").serializeArray().map(function(x){data[x.name] = x.value;});
			data['lead_branch'] = lead_branch;
			data['lead_domain'] = lead_domain;
			Updateformcontent(data);
			var customername = '<?php urlencode('+customer_name+');?>';
			if(course_id == 348){
			$("#sample-cert-box").html('<img src="https://skill-lync.com/security/samplecertvirginia?student='+customer_name+'" alt="Certification" />');
			}else{
			$("#sample-cert-box").html('<img src="https://skill-lync.com/security/samplecert?course=<?php echo urlencode($default->title);?>&student='+customer_name+'" alt="Certification" />');
			}
			saveLeadsandPreview(JSON.stringify(data), 'certpreviewmodal', 'previewcertform_info', 'certificationmodal');
		});
		
	});
	
</script>