 $(document).ready(function(){

	/*$("#user_modal_next").click(function () {
		$("#user_modal_step1").addClass('d-none');
		$("#user_modal_step2").removeClass('d-none');
	});
	$("#user_modal_next_2").click(function () {
		$("#user_modal_step2").addClass('d-none');
		$("#user_modal_step3").removeClass('d-none');
	});
			
	$("#user_modal_prev").click(function () {
		$("#user_modal_step1").removeClass('d-none');
		$("#user_modal_step2").addClass('d-none');
	});
	$("#user_modal_prev_2").click(function () {
		$("#user_modal_step2").removeClass('d-none');
		$("#user_modal_step3").addClass('d-none');
	});*/
	
	
	$('.select2').select2();
	//Collapsible panel
	$('.panel_grid').on('click', '.collapse_panel', function(e){
		$('.panel_grid').toggleClass('col-xl-3 col-lg-3');
		$('.panel_grid').toggleClass('col-1');
		$('.collapse_list_div').toggle();
		$('.collapse_div').toggleClass('col-xl-9 col-lg-9 col-md-12 col-sm-12');
		$('.collapse_div').toggleClass('col-11');
		$('.button_div').toggle();
		$('.button_icon_div').toggleClass('d-none');
		$('.collapse_panel').find('span').toggle();
		$('.collapse_panel').parent().toggleClass('tx-right');
		$(this).find('i').toggleClass('fa-rotate-180');
		e.preventDefault();
		
	})
	 $('.change_table').change(function(){
		$('.hide-content').toggle();
		$('#show_content').toggleClass('d-none');
	 });

	$( function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	} );

	 $(".drop-hide").click(function(){
		$(".cust-modal-content").slideToggle();
	 });

	 $('#show').click(function(){
		$('#automation_details').removeClass('d-none');
	 });
	 $("#hide").click(function(){
		$("#automation_details").addClass('d-none');
	});
	$('#btn_quota_yes').click(function(){
		$('#assign_step_modal2').removeClass('d-none');
		$('#assign_step_modal1').addClass('d-none');
		$(this).addClass('active_btn');
		$('#btn_quota_no').removeClass('active_btn');
	});
			
	$('#btn_quota_no').click(function(){
		$('#assign_step_modal2').addClass('d-none');
		$('#assign_step_modal1').removeClass('d-none');
		$(this).addClass('active_btn');
		$('#btn_quota_yes').removeClass('active_btn');
	});



	$('.yes_btn_domain button').click(function(e){
		$('.no_btn_domain button').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		$('#landing_host').addClass('d-none');
		$('#web_tracking').removeClass('d-none');
		$('.inp-flag').val('1');
		e.preventDefault();
	});
			
	$('.no_btn_domain button').click(function(e){
		$('.yes_btn_domain button').removeClass('btn-primary');
		$(this).addClass('btn-primary');
		$('#landing_host').removeClass('d-none');
		$('#web_tracking').addClass('d-none');
		$('.inp-flag').val('0');
		e.preventDefault();
	});

	$('#tab-btn a').click(function(){
		$('#tab-btn a').removeClass('active');
		$(this).show('active');
	});
		
	$('.show_dash_drop').hover(function(){
		$(this).find('div').toggleClass('d-none');
	});
	
		
	$('.show_more_dash').click(function(){
		$('#spinner_dash').removeClass('d-none');
		$(this).parent().hide();
	});

 	$('.example-getting-started').multiselect({
		includeSelectAllOption:true,
		enableFiltering: true,
		enableCaseInsensitiveFiltering: true,
		filterPlaceholder: 'Search for something...'	
	 });

	$('.select2Multiple').select2({
	  placeholder: 'Choose one',
	  multiple:true,
	  dropdownParent: $('.select-modal-parent'),
	  searchInputPlaceholder: 'Search options'
	  
	});
	
	$('.smallselect2').select2({
	  placeholder: 'Choose one',
	 searchInputPlaceholder: 'Search options',
	});
		
	
//Step3 Criteria modal
	$(function(){
	  'use strict'
	$(".dropdown_select_status").change(function(){
		$(this).find("option:selected").each(function(){
			var optionValue = $(this).attr("value");
				if(optionValue){
					$(".status_col").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else{
				$(".status_col").hide();
						}
					});
				}).change();
		
			$('.combine_add').on('click', function(event){
				
				var concart = $('#combine1').val() + ' ' + $('#combine2').val() + ' ' + $('#year').val() + ' ' +$('#combine3').val()+ ' ' +$('#combine4').val()+ ' '+$('#combine5').val()+ ' '+$('#combine6').val();
				$('#concart_here').html(concart +'<div class="float-right"><i class="fa fa-edit tx-primary mg-r-10 btn_pointer"></i><i class="fa fa-trash tx-danger delete_combine btn_pointer"></i>');
				$('#concart_before').hide();
				
				$('.delete_combine').click(function(){
					$('#concart_here').hide();
					$('#concart_before').show();
				});
				event.stopPropagation();
			});
			$('.reset_all').click(function(e){
				let select2_parent = $('.select2_parent');
				let select2 = $('.select2');
				$('#concart_here').hide();
				$('#concart_before').show();
				$(this).prev(select2_parent).find(select2).empty();
				e.preventDefault();
			});
	});

	$('#select-all').change(function() {   
		$('.select-check').prop('checked',$(this).prop('checked'));
		
	});

	$('.tagselect').select2({
		dropdownParent: $('.select-modal-parent_1'),
		placeholder: 'Add a Tag',
		 multiple: true,
		searchInputPlaceholder: 'Search options'
	});
	
	
	$(function (){
		$(".check_class").change(function (e) {
			if($(this).is(":checked")){
				$(this).closest('.box_row').removeClass('not_checked_boxes');
			}else if ($(this).not('.checked')){
				$(this).closest('.box_row').addClass('not_checked_boxes');
			}
		});
	})

	$('.checked_boxes').click(function(){
		$('.not_checked_boxes').hide();
	});
			
	$('.cheched_all').click(function(){
		$('.checkboxes').children().show();
	});
	$('.add_task_show').click(function(){
		$(this).next('div').toggle();
		$(this).find('i').toggleClass('fa-rotate-270');
	})

	
 })	;
$(document).ready(function(){ 
	
	
	
			
	$('.clockpicker').clockpicker({
		'default': 'now',
		placement: "top",
		align: "left",
		autoclose: false,
		donetext:'Done',
		twelvehour: true
	});
	//Modal Hide Show Stackable Modals
	$('.modal_child').on('show.bs.modal', function () {
		var modalParent = $(this).attr('data-modal-parent');
		$(modalParent).css('opacity', 0.5);
	});
 
	$('.modal_child').on('hidden.bs.modal', function () {
		var modalParent = $(this).attr('data-modal-parent');
		$(modalParent).css('opacity', 1);
	});
	$(".dropdown_dashboard").hover(function(event){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().addClass("open");
		}
		event.preventDefault();
	});
	
	$('.show_dash_drop').hover(function(){
		$(this).find('div').toggleClass('d-none');
		});
	
	$('.hidden_icons_dash').hover(function(){
		$(this).find('span').toggleClass('d-none');
	});
	
	$('.hidden_customer').hover(function (){
		$(this).find('.span_dnone').toggleClass('d-none');
	});
	
	//Email campaign landing page
	 $(".checkBoxAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
    
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $(".checkBoxAll").prop("checked",false);
        }
    });
	
	$(function (){
		'use strict'
		$('.owl-carousel').owlCarousel({
				loop:false,
				dots: false,
				responsive:{
					0:{
						items:5
					},
					600:{
						items:5
					},
					1000:{
						items:5
					}
				}
			});
	
	
			var owl = $('.owl-carousel');
			owl.owlCarousel();
			
			$('#owl-next').click(function(){
				owl.trigger('next.owl.carousel');
				 $('.panel').slideToggle('slow');
			});
			$('#owl-prev').click(function() {
			
			owl.trigger('prev.owl.carousel', [900]);
			$('.tab-btn').addClass('active');
			});
			
			var hide_table = $('#hide_table_row');
			var show_table = $('#show_table_row');
		
			$(hide_table).click(function(e){
				$('.empty_table td').each(function(){
					var empty_rows = $.trim($(this).text());
					if(empty_rows.length ==0){
						$(this).parent().hide();
					}
				});
				$(show_table).removeClass('btn-primary');
				$(show_table).removeClass('active_btn');
				$(this).addClass('btn-primary');
				e.preventDefault();
			});
			
			$(show_table).click(function(e){
				$('.empty_table td').each(function(){
					var empty_rows = $.trim($(this).text());
					if(empty_rows.length ==0){
						$(this).parent().show();
					}
				});
				$(hide_table).removeClass('btn-primary');
				$(this).addClass('btn-primary');
				e.preventDefault();
			});
	});
	
	//User permission 
	
	//Users page 
	
	 /*User Page Modal cancel and save button create user tabs */
		$('#work-details-tab').click(function(){
			$('#cancel-save').next('div').removeClass('modal-footer-hide')
			$('#modal-buttons-toggle').css('display', 'none'); 
			
		});
		$('.create-user').click(function(){
			$('#create-user').hide();
			$('#create-details').show();
		});
		
	
		
		$('#hover_pencil').click(function(){
			$(this).removeClass('d-none');
			
		});
		
		$('.select_page_modal').change(function(){
			$('#view_permission').toggle();
			
		});
		
		$('.pencil_hover').hover(function(){
			$(this).find('.fa-edit').toggleClass('d-none');
		})
	$(function(){
			'use strict'	
			var wrapper         = $(".add_and"); //Fields wrapper
			var add_button      = $("#add_group_and"); //Add button ID
		   
			var index_and = 1;
			var and_id = 1;
		   $(add_button).click(function(e){ //on add input button click
			
				//text box increment
				$(wrapper).append("<div class='pos-relative'><a href='#' class='tx-right remove_field pos-absolute b-50 t-35 r-0'>&times;</a><div class='tx-center mg-b-15'><span class='badge badge-dark'><i>AND</i></span></div><div id='add_and'><div class='and_cond'><form><div class='form-row align-items-end pd-10 bg-gray-100 mg-b-15'><div class='form-group col-8'><label class='tx-semibold tx-13  d-block' id='add_group'>Condition Group"+ " " + (++index_and) + "</label><select class='custom-select select2' style='width:50%;' id='user_details_and-"+(++ and_id)+"'><optgroup label='User Details'><option>First Name</option><option>Last Name</option><option>Email Address</option><option>User Type</option><option>Role</option><option>Status</option><option>Phone (Main)</option><option>Phone (Mobile)</option><option>Phone (Others)</option><option>TimeZone</option><option>Availability Status</option><option>Date Of Birth</option></optgroup></select></div><div class='form-group col-md-4 tx-right '><button class='btn btn-light btn-xs mg-r-25 add_and' id='add_new_andcondition' type='button'>+AND</button><a href='#' class=' tx-danger'><i class='fa fa-trash-o'></i></a></div></div></form></div></div></div>"); //add input box
				e.preventDefault();
			 
			});
		   
			$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
			   
				e.preventDefault(); 
				$(this).parent('div').remove();  
				
			});
			
			// Add And button
			var wrapper_new        = $(".new_and_field"); //Fields wrapper
			var add_button_new      = $("#add_new_andcondition"); //Add button ID
		   
			
			
		   $(add_button_new).click(function(e){ //on add input button click
				
				
					
			//text box increment
			$(wrapper_new).append("<div class='pos-relative'><a href='#' class='tx-right remove_field pos-absolute b-50 t-35 r-0'>&times;</a><form><div class='form-row align-items-end pd-10 bg-gray-100 mg-b-15'><div class='form-group col-8'><select class='custom-select select2' style='width:50%;'><optgroup label='User Details'><option>First Name</option><option>Last Name</option><option>Email Address</option><option>User Type</option><option>Role</option><option>Status</option><option>Phone (Main)</option><option>Phone (Mobile)</option><option>Phone (Others)</option><option>TimeZone</option><option>Availability Status</option><option>Date Of Birth</option></optgroup></select></div><div class='form-group col-md-4 tx-right '><button class='btn btn-light btn-xs mg-r-25 add_and' id='add_new_andcondition' type='button'>+AND</button><a href='#' class=' tx-danger'><i class='fa fa-trash-o'></i></a></div></div></form></div>"); //add input box
			e.stopPropagation();
			console.log('working');
			});
		   
			$(wrapper_new).on("click",".remove_field", function(e){ //user click on remove text
			   
				e.preventDefault(); 
				$(this).parent('div').remove();  
				
			});
			
			
			$('#any_condit input').click(function(){
				$('#or_step').removeClass('d-none');
				$('#add_and_d_none').addClass('d-none');
			});
			
			$('#all_condit input').click(function(){
				$('#or_step').addClass('d-none');
				$('#add_and_d_none').removeClass('d-none');
			});
			
			$('#any_condit input').click(function(){
				$('#or_content_btn').removeClass('d-none');
				$('#and_content_btn').addClass('d-none');
			});
			
			$('#all_condit input').click(function(){
				$('#or_content_btn').addClass('d-none');
				$('#and_content_btn').removeClass('d-none');
			});
			
			
			 var wrapper_or        = $("#add_or"); //Fields wrapper
			var or_button      = $("#add_group_or"); //Add button ID
		   
			var index_or = 1;
			var or_id =1;
		   $(or_button).click(function(e){ //on add input button click
				
			//text box increment
			$(wrapper_or).append("<div class='pos-relative'><a href='#' class='tx-right remove_field_or pos-absolute b-50 t-35 r-0'>&times;</a><div class='tx-center mg-b-15'><span class='badge badge-dark'><i>or</i></span></div><div id='add_or'><div class=''><form><div class='form-row align-items-end pd-10 bg-gray-100 mg-b-15'><div class='form-group col-8'><label class='tx-semibold tx-13  d-block'>Condition Group"+ " " + (++index_or) + "</label><select class='custom-select select2' style='width:50%;' id='user_details_or-"+(++ or_id)+"'><optgroup label='User Details'><option>First Name</option><option>Last Name</option><option>Email Address</option><option>User Type</option><option>Role</option><option>Status</option><option>Phone (Main)</option><option>Phone (Mobile)</option><option>Phone (Others)</option><option>TimeZone</option><option>Availability Status</option><option>Date Of Birth</option></optgroup></select></div><div class='form-group col-md-4 tx-right '><button class='btn btn-light btn-xs mg-r-25' type='button'>+OR</button><a href='#' class=' tx-danger'><i class='fa fa-trash-o'></i></a></div></div></form></div></div></div>"); //add input box
			e.preventDefault();
			 
			});
		   
			$(wrapper_or).on("click",".remove_field_or", function(e){ //user click on remove text
			   
				e.preventDefault(); 
				$(this).parent('div').remove();  
				
			});
	});	
		$(function(){
			'use strict'

			$('.img-caption').on('mouseover mouseout', function(){
			  $(this).find('figcaption').toggleClass('op-0');
			});

		  });
		  
		  
		var substringMatcher = function(strs) {
			return function findMatches(q, cb) {
			  var matches, substrRegex;

			  // an array that will be populated with substring matches
			  matches = [];

			  // regex used to determine if a string contains the substring `q`
			  substrRegex = new RegExp(q, 'i');

			  // iterate through the pool of strings and for any string that
			  // contains the substring `q`, add it to the `matches` array
			  $.each(strs, function(i, str) {
				if (substrRegex.test(str)) {
				  matches.push(str);
				}
			  });

			  cb(matches);
			};
			};

			var states = ['Telephone Agent Id', 'Gender', 'DNP', 'custom 1', 'custom 2', 'custom 3', 'custom 4', 'custom 5', 'custom 6', 'custom 7', 'custom 8', 'custom 9', 'custom 10'
			];

			$('#search_user_fields').typeahead({
			hint: true,
			highlight: true,
			minLength: 1
			},
			{
			name: 'states',
			source: substringMatcher(states)
			});
		
		
		$('.btn-group #yes-gray-btn').click(function(){
			$('.btn-group #no-blue-btn').removeClass('active');
			$(this).addClass('active');
			$('#inp-flag').val('1');
		});
		
		$('.btn-group #no-blue-btn').click(function(){
			$('.btn-group #yes-gray-btn').removeClass('active');
			$(this).addClass('active');
			$('#inp-flag').val('0');
		});
		
		
		
	
 });
 
// for header main search
 $(document).ready(function(){ 
	$(".header_main_search").on("keyup change", function(e) {
		var search_val = $('.header_main_search').val();
		if(search_val!=""){
			$.post('/leadsettings/leadMainSearch',{[csrftoken]: csrfhash,search_val:search_val},function(response){
				var result = response.msg;
				var length = result.length;
				if(length>0){
					$('.recentsearchs').hide();
					var html_out ='';
					$.each(response.msg, function( index, value ) {
					   html_out += '<li><a href="#">'+value.EmailAddress+'</a></li>'; 
					  //console.log(value.EmailAddress);
					});
					$('.search_header_suggestion').html(html_out);
				}else{
					html_out = '<li><a href="#">No Result Found</a></li>'; 
					$('.search_header_suggestion').html(html_out);
				}
			},'json');
		}
	});
 });
 
 $(document).ready(function(){
	 //Lead Assignment Quota
		
		// User assignment 
		$('#add_exec_switch').click(function(){
			$('#dis_div').toggleClass('disabled_div');
			
			
		});
		
		$("#btnNextStep1").click(function () {
			$("#step1").addClass('d-none');
			$("#step2").removeClass('d-none');
		});
		
		$("#btnPrevStep2").click(function () {
			$("#step1").removeClass('d-none');
			$("#step2").addClass('d-none');
		});
		
		$('.accordion').accordion({
			  heightStyle: 'content',
			  collapsible: true
			});
			
		
			
		$(function (){
			var limit_in  = 10;
			var leads_own_in   = $("#leads_own"); //Fields wrapper
			var add_own_btn    = $("#addLeadsOwn"); //Add button ID
			var index_in = 1;
		   $(add_own_btn).click(function(e){ //on add input button click
				
				
				if(index_in < limit_in){
					 //text box increment
					$(leads_own_in).append("<li class='list-group-item pd-5 bd-0' ><div class='row row-xs'><div class='form-group col-md-3 mg-t-auto mg-b-0'><label class='tx-italic'># of leads they own in</label></div><div class='form-group col-md-3 d-flex align-items-end mg-b-0'><select class='form-control' id='leads_per'><option value='Dis'>Discovery</option><option value='Prosp'>Prospect</option><option value='New' selected>New</option><option value='OP'>Opportunity</option></select></div><div class='form-group col-md-3 mg-t-auto mg-b-0'><label> stage exceeds </label></div><div class='form-group col-md-3 d-flex align-items-ecenter mg-b-0'><input type='number' class='form-control'id='leads_key' value='20'><div class='tx-center'><a href='#' class='remove_field_li'><i class='fa fa-times tx-gray-500'></i></a></div></div></div></li>"); //add input box
					e.preventDefault();
				}
			});
		   
			$(leads_own_in).on("click",".remove_field_li", function(e){ //user click on remove text
			   
				e.preventDefault(); 
				$(this).closest('li').remove();  
				
			});
			
			
			var max_fields  = 10;
			var config_key  = $("#config_key"); //Fields wrapper
			var create_key_btn  = $("#create_new_key"); //Add button ID
		   
			var index_key = 1;
			
		   $(create_key_btn).click(function(e){ //on add input button click
				
				
				if(index_key < max_fields){
					 //text box increment
					$(config_key).append("<tr id='config_key'><td>Custom Quota"+ " " + (++index_key) + "</td><td><select class='form-control' id='cus_quota'><option>DNP</option></select></td><td><input type='number' class='form-control' id='leads_key'></td><td cass='tx-center'><a href='#' class='remove_field_tr'><i class='fa fa-times tx-gray-500'></i></a></td></tr>"); //add input box
					e.preventDefault();
				}
			});
		   
			$(config_key).on("click",".remove_field_tr", function(e){ //user click on remove text
			   
				e.preventDefault(); 
				$(this).closest('tr').remove();  
				
			});
		});
		
		//User Check In
		 
	 $('.example-getting-started').multiselect({
			 includeSelectAllOption: true
		 });
	$(document).on('change', '.check_switch_modal', function(){
		var id = $(this).data('id');
		var ref = $(this).data('ref');
		// $('#'+ref+id).text('Enabled');
		if($(this).is(":checked")){
			$('#'+ref+id).text('Enabled')
		}
		else{
			$('#'+ref+id).text('Disbaled')
		}
	});
	 $("#user_modal_prev").click(function () {
			$("#user_modal_step1").addClass('d-none');
			$("#user_modal_step2").removeClass('d-none');
			
		});
		
		$("#user_modal_next").click(function () {
			$("#user_modal_step1").removeClass('d-none');
			$("#user_modal_step2").addClass('d-none');
		});
		
		
		$('#roles_primary').click(function(){
			$(this).removeClass('tx-dark');
			$('#groups_divmodal').removeClass('tx-primary');
			$('#groups_divmodal').addClass('tx-dark');
		})
		$('#groups_divmodal').click(function(){
			$(this).removeClass('tx-dark');
			$(this).addClass('tx-primary');
			$('#roles_primary').removeClass('tx-primary');
			$('#roles_primary').addClass('tx-dark');
		});
		
			$('#user_checkin_switch').click(function(){
				$('#dis_div_1').toggleClass('disabled_div');
		});
		$('.check_switch').change(function (){
			if($(this).is(':checked')){
				$('.toggle_text').text('Enabled');
				$('#configure_btn').removeClass('btn-secondary');
				$('#configure_btn').addClass('btn-primary');
			}
			else{
				$('.toggle_text').text('Diabled');
				$('#configure_btn').removeClass('btn-primary');
				$('#configure_btn').addClass('btn-secondary');
			}
		});
			$('#lead_quota_switch').click(function(){
				$('#dis_div_2').toggleClass('disabled_div');
		});
		$(function(){
		$('.datepicker1').datepicker(
		{
           format: "dd.mm.yyyy",
           todayBtn: "linked",
           language: "de"
		});
		
	});
	$('.move-right').click(function () {
	  $('.first-list option:selected').appendTo('.second-list');
	 
	});

	$('.move-left').click(function () {
	  $('.second-list option:selected').appendTo('.first-list');
	 
	});
	$('.move-all-right').click(function(){
		$('.first-list option').appendTo('.second-list');
		
		
	})
	$('.move-all-left').click(function(){
		$('.second-list option').appendTo('.first-list');
		
	})
	//
	
	
	$('.move-all-right-one').click(function(){
		$('.first-list-one div').appendTo('.second-list-one');
		$('.add-link').addClass('d-none');
		$('.times-link').removeClass('d-none');
		
	})
	$('.move-all-left-one').click(function(){
		$('.second-list-one div').appendTo('.first-list-one');
		$('.add-link').removeClass('d-none');
		$('.times-link').addClass('d-none');
		
	})
	
	$('.move-left-one').click(function (e) {
	  $(this).closest('.move-left-div').appendTo('.first-list-one');
	 e.preventDefault();
	});
	
	//Permission Tempate create and edit options
	
	$('.create-permission-btn').click(function(){
		$('.create-permission').removeClass('d-none');
		$('.permission-front').addClass('d-none');
	})
 })