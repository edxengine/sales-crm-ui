 /* USer page select2 */
	$(document).ready(function(){
		
		$('[data-toggle="tooltip"]').tooltip();
		 
		$('.select2').select2({
		  placeholder: 'Choose one',
		  dropdownParent: $('.select-modal-parent'),
		  searchInputPlaceholder: 'Search options'
		  
		});
		
		$('.select2Multiple').select2({
		  placeholder: 'Choose one',
		  multiple: true,
		  dropdownParent: $('.select-modal-parent'),
		  searchInputPlaceholder: 'Search options'
		  
		});
		 $('.example-getting-started').multiselect({
			 includeSelectAllOption: true
		 });
		 // List Details
		 // Tag select not on modal 
		
		 
		// Tag Select Modal
		$('.tagselect').select2({
			dropdownParent: $('.select-modal-parent_1'),
			placeholder: 'Add a Tag',
			 multiple: true,
			searchInputPlaceholder: 'Search options'
		});
		
		$('.smallselect2').select2({
		  placeholder: 'Choose one',
		  searchInputPlaceholder: 'Search options',
		});
		
		$('.modalselect').select2({
			dropdownParent: $('.select-modal-parent'),
			placeholder: 'Choose one',
			searchInputPlaceholder: 'Search options'
		});
		$('.datepicker1').datepicker();
		
		$('.clockpicker').clockpicker({
				'default': 'now',
				placement: "top",
				align: "left",
				autoclose: false,
				donetext:'Done',
				twelvehour: true
			});
		
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
			
		})
	$(function(){
			'use strict'	
			var wrapper         = $(".add_and"); //Fields wrapper
			var add_button      = $("#add_group_and"); //Add button ID
		   
			var index_and = 1;
			
		   $(add_button).click(function(e){ //on add input button click
			
				//text box increment
				$(wrapper).append("<div class='pos-relative'><a href='#' class='tx-right remove_field pos-absolute b-50 t-35 r-0'>&times;</a><div class='tx-center mg-b-15'><span class='badge badge-dark'><i>AND</i></span></div><div id='add_and'><div class='and_cond'><form><div class='form-row align-items-end pd-10 bg-gray-100 mg-b-15'><div class='form-group col-8'><label class='tx-semibold tx-13  d-block' id='add_group'>Condition Group"+ " " + (++index_and) + "</label><select class='custom-select select2' style='width:50%;'><optgroup label='User Details'><option>First Name</option><option>Last Name</option><option>Email Address</option><option>User Type</option><option>Role</option><option>Status</option><option>Phone (Main)</option><option>Phone (Mobile)</option><option>Phone (Others)</option><option>TimeZone</option><option>Availability Status</option><option>Date Of Birth</option></optgroup></select></div><div class='form-group col-md-4 tx-right '><button class='btn btn-light btn-xs mg-r-25 add_and' id='add_new_andcondition' type='button'>+AND</button><a href='#' class=' tx-danger'><i class='fa fa-trash-o'></i></a></div></div></form></div></div></div>"); //add input box
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
			e.preventDefault();
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
			
		   $(or_button).click(function(e){ //on add input button click
				
			//text box increment
			$(wrapper_or).append("<div class='pos-relative'><a href='#' class='tx-right remove_field_or pos-absolute b-50 t-35 r-0'>&times;</a><div class='tx-center mg-b-15'><span class='badge badge-dark'><i>or</i></span></div><div id='add_or'><div class=''><form><div class='form-row align-items-end pd-10 bg-gray-100 mg-b-15'><div class='form-group col-8'><label class='tx-semibold tx-13  d-block'>Condition Group"+ " " + (++index_or) + "</label><select class='custom-select select2' style='width:50%;'><optgroup label='User Details'><option>First Name</option><option>Last Name</option><option>Email Address</option><option>User Type</option><option>Role</option><option>Status</option><option>Phone (Main)</option><option>Phone (Mobile)</option><option>Phone (Others)</option><option>TimeZone</option><option>Availability Status</option><option>Date Of Birth</option></optgroup></select></div><div class='form-group col-md-4 tx-right '><button class='btn btn-light btn-xs mg-r-25' type='button'>+OR</button><a href='#' class=' tx-danger'><i class='fa fa-trash-o'></i></a></div></div></form></div></div></div>"); //add input box
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
		
		// Teams page user permission 
		$(".toggle").click(function(){
			$(".content").slideToggle("slow");
		  });
		// Lead stages 
		$('.add-lead').click(function(){
			$('.add-new').removeClass('d-none');
		});

		$('.show-settings').click(function(){
			$('#setting-show').removeClass('d-none');
		});
		
		$('.field-show').click(function(){
			$(this).next('i').removeClass('d-none');
		});
		
		$('.show-dropdown').change(function(){
			$('#setting-dropdown').toggleClass('d-none');
		});
		
		//Lead Soucre Page 
		$(function(){
			'use strict'
			$("#lead_soruce_dropDown").change(function(){
				$(this).find("option:selected").each(function(){
					var optionValue = $(this).attr("value");
					if(optionValue){
						$(".drop_col").not("." + optionValue).hide();
						$("." + optionValue).show();
					} else{
						$(".drop_col").hide();
					}
				});
			}).change();
		});
		
		
		// Profile page 
		
		
		
		$('.show-upload-dropdown').click(function(){
			$('#radio-option').toggle();
			$('#show-upload').toggleClass('d-none');
		});
		
		
		// My Leaves
		$('.show-date-dropdown').change(function(){
			$('#show_date').toggle();
			$('#show-time').toggleClass('d-none');
		});
		
		// Report Subscriptions
		var substringMatcher = function(strs) {
			return function findMatches(q, cb) {
			  var matches, substrRegex;

			  
			  matches = [];

			  
			  substrRegex = new RegExp(q, 'i');

			  
			  $.each(strs, function(i, str) {
				if (substrRegex.test(str)) {
				  matches.push(str);
				}
			  });

			  cb(matches);
			};
			};

			var fields = ['Additional details', 'Address 2', 'Age', 'C1 First installment Amount', 'C1 First Installment Due Date'
			];

			$('.search_fields').typeahead({
			hint: true,
			highlight: true,
			minLength: 1
			},
			{
			name: 'fields',
			source: substringMatcher(fields)
			});
		$('.checked_boxes').click(function(){
			$('.not_checked_boxes').hide();
		});
		
		$('.cheched_all').click(function(){
			$('.checkboxes').children().show();
		});
		
		//Advanced Configuration
		$('.checked_show').click(function(){
			$('#reflected').toggleClass('d-none');
			
			$('#inp-flag').val('1');
			
		});
		
		$(".showPaletteOnly").spectrum({
			showPaletteOnly: true,
			togglePaletteOnly: true,
			togglePaletteMoreText: 'more',
			togglePaletteLessText: 'less',
			color: 'blanchedalmond',
			palette: [
				["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
				["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
				["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
				["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
				["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
				["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
				["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
				["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
			]
		});
		
		// Custom Logo 
		$('.show-upload-logo').click(function(){
			$('#upload_img').toggle();
			$('#upload_btn').toggleClass('d-none');
			$('.upload_logo_div').toggle();
		});
		
		//My Leaves
		
		
		//Email signature
		var quill = new Quill('#editor-container', {
		  modules: {
			toolbar: '#toolbar-container'
		  },
		  theme: 'snow'
		});
		
		// User permission Lead Assignment Quota 
		$('.show_dis_div').click(function(){
			$('#dis_div').toggleClass('disabled_div');
			
		})
		
		// User check in
		
		
		  
		 $("#user_modal_prev").click(function () {
			$("#user_modal_step1").addClass('d-none');
			$("#user_modal_step2").removeClass('d-none');
			
		});
		
		$("#user_modal_next").click(function () {
			$("#user_modal_step1").removeClass('d-none');
			$("#user_modal_step2").addClass('d-none');
		});
		
		
		
		// User checkin End
		// User assignment 
		
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
		// Lead forms	
		$( function() {
			$( "#sortable_sec" ).sortable();
			$( "#sortable_sec" ).disableSelection();
		  } );
		
		$('.remove_grid').click(function(){
			$('#sortable_sec').toggleClass('.lead_forms_collapse ');
			console.log('working');
		});
		
		// Lead assignment configuration keys
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
			
		// Depended lead fields
		$(function(){
			
			$('#yes_fullvalue').click(function(){
				$('#no_letter').addClass('d-none');
				$('#yes_letter').removeClass('d-none');
			});
			
			$('#no_fullvalue').click(function(){
				$('#no_letter').removeClass('d-none');
				$('#yes_letter').addClass('d-none');
			})
		});
		 
		// Lead Forms
		
		$(function(){
			'use strict'
			$(".lead_forms_dropdown").change(function(){
				$(this).find("option:selected").each(function(){
					var optionValue = $(this).attr("value");
					if(optionValue){
						$(".content_col").not("." + optionValue).hide();
						$("." + optionValue).show();
					} else{
						$(".content_col").hide();
					}
				});
			}).change();
			
		 
		$(function(){
			 var x = $(".toggle_text");
			 var toggle_inp = $('.check_switch')
			$(toggle_inp).click(function(e){
				$(this).each(function(){
					 if (x.innerHTML === "Disabled") {
					x.innerHTML = "Enabled";
					x.style.color = "#0168fa";
				  } else {
					x.innerHTML = "Disabled";
					x.style.color = "#1b2e4b";
				  }
				});
			});
			 
		})
		
		$(function(){
			 var x_1 = $(".toggle_text_modal");
			 var toggle_inp_1 = $('.check_switch_modal')
			$(toggle_inp_1).click(function(e){
				$(this).closest('div').each(function(){
					 if (x_1.innerHTML === "Disabled") {
					x_1.innerHTML = "Enabled";
					x_1.style.color = "#0168fa";
				  } else {
					x_1.innerHTML = "Disabled";
					x_1.style.color = "#1b2e4b";
				  }
				});
			});
			 
		})
			
		});
			$('#groups_divmodal').click(function(){
				$(this).removeClass('tx-dark');
				$(this).addClass('active');
				$('#roles_primary').removeClass('active');
				console.log('active');
			});
		//leads-sales activity//
		 $( function() {
			$( "#sortable" ).sortable();
			$( "#sortable" ).disableSelection();
		  } );
		  //leads-manage custom field,manage product,custom activity//
		  $('.change_table').change(function(){
		  $('.hide-content').toggle();
		  $('#show_content').toggleClass('d-none');
		 });
		  $('.change_content').change(function(){
		  $('.active-content').toggle();
		  $('#inactive_content').toggleClass('d-none');
		 });
		  $('.change_field').change(function(){
		  $('.active-table').toggle();
		  $('#inactive-table').toggleClass('d-none');
		 });
		 
		 
		 
		 $('#disable-content input').click(function(){
		  $('#content-hidden').toggle();
		 });
		 
		 //leads-configure custom field//
		 $(function(){
			'use strict'
			$("#change_custom_option").change(function(){
		  $(this).find("option:selected").each(function(){
		   var optionValue = $(this).attr("value");
		   if(optionValue){
			$(".hidable_content").not("." + optionValue).hide();
			$("." + optionValue).show();
		   } else{
			$(".hidable_content").hide();
		   }
		  });
			}).change();
		  });
		  
		 //leads-custom activity(delete modal)//
		 $('#show').click(function(){
		  $('#automation_details').removeClass('d-none');
		  
		 });
		  $("#hide").click(function(){
		  $("#automation_details").addClass('d-none');
		  });
		  
		 
		  $(".drop-hide").click(function(){
			$(".cust-modal-content").slideToggle();
		  });
		 //leads-leave tracker//
		 
		 $('.leavedate').datepicker();
		 
		 $('#leave-modaldate').datepicker();
		 
		 $('#leave-modaldate2').datepicker();
		 
		 //leads-leadsquared access support//
		 
		  $('.lead-access-date').datepicker();
		  
		  
		  $('.lead-access-date2').datepicker();
		  
		/*  $('.lead-access-clock').clockpicker({
			placement: 'bottom',
			align: 'left',
			twelvehour: true,
			donetext: 'Done'
		}); */
		 
		 //leads-manage custom field set(modal)//
		 
		 $("#btnNextStep1").click(function () {
		   $("#step1").addClass('d-none');
		   $("#step2").removeClass('d-none');
		  });
		  
		  $("#btnPrevStep2").click(function () {
		   $("#step1").removeClass('d-none');
		   $("#step2").addClass('d-none');
		  });
		  
		  $("#btnNextStep2").click(function () {
			 $("#step2").addClass('d-none');
		   $("#step3").removeClass('d-none');
		  });
		 $("#btnPrevStep3").click(function () {
		   $("#step2").removeClass('d-none');
		   $("#step3").addClass('d-none');
		  });
		 
		  //user permission-teams//
		  $(".toggle").click(function(){
			$(".content").slideToggle();
		  });
		  $(".electrical").click(function(){
			$(".content1").slideToggle();
		  });
		  $(".civil").click(function(){
			$(".content2").slideToggle();
		  });
		  $(".computer_science").click(function(){
			$(".content3").slideToggle();
		  });
		  $(".cfd").click(function(){
			$(".content4").slideToggle();
		  });
		  $(".cae").click(function(){
			$(".content5").slideToggle();
		  });
		  $(".design").click(function(){
			$(".content6").slideToggle();
		  });
		   $(".hev").click(function(){
			$(".content7").slideToggle();
		  });
		  $(".us").click(function(){
			$(".content8").slideToggle();
		  });
		 
		 //user permission -teams(modal)//
		 $('#select-all').click(function() {   
			if(this.checked) {
				// Iterate each checkbox
				$(':checkbox').each(function() {
					this.checked = true;                        
				});
			} else {
				$(':checkbox').each(function() {
					this.checked = false;                       
				});
			}
		 
		});
		  
		 
		  
		  //leads-holiday calendar//
		 
		$(function (){
		  'use strict'
			var holiday_wrapper = $("#holiday_tb"); 
			var add_holiday_btn = $("#add_holiday_list");
			 
			var holiday_index = 10;
		   
			$(add_holiday_btn).click(function(e){ 
				e.preventDefault();
			  
			$(holiday_wrapper).append("<tr><td>"+" "+(++holiday_index)+ "</td><td><input type='text' placeholder='Holiday'></td><td><input type='text'  placeholder='Date'><span class='remove_field_tr'><i class='fa fa-trash' data-toggle='tooltip' data-placement='top' title='Remove holiday'></i></span></td></tr>"); //add input box
			 
			});
			 
			$(holiday_wrapper).on("click",".remove_field_tr", function(e){ 
			  
			e.preventDefault(); 
			$(this).closest('tr').remove();  
			
		   });
		});
		   
			// Dashboard Scripts
		
			
		// Description Content
		$('#description_area').click(function(){
			$(this).closest('div').hide();
			$('#text_editor').removeClass('d-none');
			console.log('working');
		});
		
		// Dashboard Hoverable Dropdown
		
		  $(".dropdown_dashboard").hover(function(event){
			var dropdownMenu = $(this).children(".dropdown-menu");
			if(dropdownMenu.is(":visible")){
				dropdownMenu.parent().addClass("open");
			}
			event.preventDefault();
		});
		
		// clone page Dashboard ScrollSpy
		$('[data-spy="scroll"]').each(function () {
		  var $spy = $(this).scrollspy('refresh')
		})
		
		$(function (){
		  'use strict'
			var quill = new Quill('#add_notes_container', {
			  modules: {
				toolbar: '#add_notes_toolbar'
			  },
			  placeholder: 'Compose an epic...',
			  theme: 'snow'
			});
			
			
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
		$('#tab-btn a').click(function(){
			$('#tab-btn a').removeClass('active');
			$(this).show('active');	
			
		});
		
		$('.show_dash_drop').hover(function(){
			$(this).find('div').toggleClass('d-none');
		});
		
		$('.hidden_icons_dash').hover(function(){
			$(this).find('span').toggleClass('d-none');
		});
		
		$('.show_more_dash').click(function(){
			$('#spinner_dash').removeClass('d-none');
			$(this).parent().hide();
		});
		
		
	// Send Email In a new window
	
	$(function (){
		'use strict'
		$('.open_text_editor_window').click(function(){
			 var newWindow = window.open("<?php echo base_url(); ?>dashboard/send_email", "", "width=1000,height=600");
			
		});
	});
	
	//Add Notable Activity Modal script
	$(function(){
			
			$('.add_task_show').click(function(){
				$('.show_less_details').find('form').toggleClass('d-none');
				$(this).prev('i').toggleClass('fa-rotate-270');
			})
				
			
			
			$('.less_options').click(function(){
				$('.content_1').hide();
				$('.less_div').next('div').removeClass('d-none');
				$('.less_div').addClass('d-none');
			});
			
			$('.more_options').click(function(){
				$('.content_1').show();
				$(this).parent('div').addClass('d-none');
				$('.less_div').removeClass('d-none');
			});
	});	
		
		// List Details
		
		// Radio button modal
		$('#export_lead_radio_2').click(function(){
			$('.choose_fileds_div a').removeClass('disable-cursor');
		});
		$('#export_lead_radio_1').click(function(){
			$('.choose_fileds_div a').addClass('disable-cursor');
		});
		
		$('.choose_fileds_div a').click(function(){
			$('#show_export_lead').toggleClass('d-none');
		});
		
		//Lead Prioritization
		
		$(".criteria_modal_next").click(function () {
			$("#criteria_modal_step2").removeClass('d-none');
			$("#criteria_modal_step1").addClass('d-none');
			console.log('working');
		});
		
		$("#criteria_modal_prev").click(function () {
			$("#criteria_modal_step1").removeClass('d-none');
			$("#criteria_modal_step2").addClass('d-none');
		});
		// Email Settings
		
		// Email Categories
		
		$('.yes_btn button').click(function(e){
			$('.no_btn button').removeClass('btn-primary');
			$(this).addClass('btn-primary');
			
			$('.inp-flag').val('1');
			e.preventDefault();
		});
		
		$('.no_btn button').click(function(e){
			$('.yes_btn button').removeClass('btn-primary');
			$(this).addClass('btn-primary');
			
			$('.inp-flag').val('0');
			e.preventDefault();
		});
		
		$('.slide_subs').click(function(){
			$(this).next('textarea').removeClass('d-none').slideUp(1000);
			$(this).hide();
		})
		
		//From Address Restrictions
		$('.show_table').click(function(){
			$('#table_1_none').removeClass('d-none');
			$('#table_2_none').addClass('d-none');
		});
		$('.cancel_table').click(function(){
			$('#table_1_none').addClass('d-none');
			$('#table_2_none').removeClass('d-none');
		})
		
		// Lead Tracking
		// Web-site landing page domains
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
		
		// Email Settings
		//From submission Notification
		$(function(){
			'use strict'
			
			var quill = new Quill('#submission-editor-container', {
			  modules: {
				toolbar: '#submission-toolbar-container'
			  },
			  theme: 'snow'
			});
		});
		
		//Landing Page Autoresponse
		$(function(){
			'use strict'
			
			var quill = new Quill('#auto_response-editor-container', {
			  modules: {
				toolbar: '#auto_response-toolbar-container'
			  },
			  theme: 'snow'
			});
		});
		
		//Landing Page – Download-File Email to Lead
		$(function(){
			'use strict'
			
			var quill = new Quill('#download_response-editor-container', {
			  modules: {
				toolbar: '#download_response-toolbar-container'
			  },
			  theme: 'snow'
			});
		});
		
		//Manage Subscriptions Email Categories Inner Page
		$('.slide_subs').click(function(){
			if($('#manage_subs_1').is(':checked')){
				$('#manage_subs_2').removeClass('d-none');
				$(this).prev('div').slideUp(1000);
				$(this).show();
			} else{
				$('#manage_subs_2').addClass('d-none');
				$(this).prev('div').slideDown(1000);
				$(this).show();
			}
			
		});
		//Data Protection Cookie Modal Bar
		
		$(function (){
			'use strict'
			$('#cookie_consent_1').click(function(){
				$('.deny_btn').hide();
			});
			
			$('#cookie_consent_2').click(function(){
				$('.deny_btn').show();
			});
			
			$('#cookie_consent_4').click(function(){
				$('#cookie_modal_div').removeClass('fixed-top');
				$('#cookie_modal_div').addClass('fixed-bottom');
			});
			
			$('#cookie_consent_3').click(function(){
				$('#cookie_modal_div').removeClass('fixed-bottom');
				$('#cookie_modal_div').addClass('fixed-top');
				
			});
			
		
			
			$('input[name="Headline"]').keyup(function(event){
			  var input_headline = $(this).val();
			  $('.head_line').empty();
			  $('.head_line').html(input_headline);
			  event.preventDefault();
			});
			
			 
			 
			$('input[name="LinkName"]').keyup(function(event){
			  var input_linkName = $(this).val();
			  $('.learn_more').empty();
			  $('.learn_more').html(input_linkName);
			  event.preventDefault();
			});
			
			$('.show_link').click(function(){
				$('.learn_more').toggle();
				$('.show_label').html("Show Link");
				
			});
			
			$('input[name="AcceptCookie"]').keyup(function(event){
			  var input_cookie = $(this).val();
			  $('.got_it').empty();
			  $('.got_it').html(input_cookie);
			  event.preventDefault();
			});
			
			$('input[name="denyCookie"]').keyup(function(event){
			  var input_cookie = $(this).val();
			  $('.deny_btn').empty();
			  $('.deny_btn').html(input_cookie);
			  event.preventDefault();
			});
			
			
			$('.close_cookie_bar').click(function(){
				$('.hide_cookie_fa').toggle();
			});
			
			$('.hide_cookie_fa').click(function(event){
				$('.row_hide').toggle();
				$('#chev_cookie').toggleClass('fa-rotate-180');
				$(this).show();
				event.preventDefault();
			});
			
		
			
			
			$('.apply_color_primary').click(function(){
				$('#row_color_change').removeClass('bg-danger bg-success bg-info bg-secondary bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-primary');
			});
			
			$('.apply_color_success').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-danger bg-info bg-secondary bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-success');
			})
			
			$('.apply_color_secondary').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-danger bg-info bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-secondary');
			});
			
			$('.apply_color_warning').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-secondary bg-success bg-danger bg-info  bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-warning');
			});
			
			
			$('.apply_color_danger').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-info bg-warning  bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-danger');
			});
			
			
			$('.apply_color_info').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-info');
			});
			
			$('.apply_color_indigo').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-purple bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-indigo');
			});
			
			
			$('.apply_color_purple').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-indigo  bg-pink bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-purple');
			});
			
			$('.apply_color_pink').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-indigo bg-purple bg-teal bg-orange bg-dark');
				$('#row_color_change').addClass('bg-pink');
			});
			
			$('.apply_color_teal').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-indigo bg-purple bg-pink  bg-orange bg-dark');
				$('#row_color_change').addClass('bg-teal');
			});
			
			$('.apply_color_orange').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal  bg-dark');
				$('#row_color_change').addClass('bg-orange');
			});
			
			
			$('.apply_color_dark').click(function(){
				$('#row_color_change').removeClass('bg-primary bg-success bg-secondary bg-danger bg-info bg-warning bg-danger bg-indigo bg-purple bg-pink bg-teal bg-orange');
				$('#row_color_change').addClass('bg-dark');
				
			});
			
			
			$(".cookie_pallets").spectrum({
				showPaletteOnly: true,
				togglePaletteOnly: true,
				 hideAfterPaletteSelect: true,
				color: 'blanchedalmond',
				palette: [
					["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
					["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
					["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
					["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
					["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
					["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
					["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
					["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
				]
				
			});
			
		});
	
		// Security Page 
		//Authentication Provider
		
		$('.hover_card').hover(function(event){
			$(this).toggleClass('bd-primary');
			$(this).find('button').toggleClass('select_btn');
			event.preventDefault();
		});
	
		$('.criteria_modal_next').one('click',function(event){
			var this_footer = $('.footer_hover');
			$(this).find(this_footer).hide();
			$(this).append("<div class='card-footer bd-t-0'><i class='fa fa-check-circle tx-primary fa-3x'></i></div>");
			event.stopPropagation();
		});
		
	/*	$('.apply_color').click(function(){
			var elts = $('*[class*="bg-"]')
				.filter(function () {
			$(this).remove.className.match(/(?:^|\s)bg-/);
				});
		}); */
		
		
		//Session Management
		
		$('#session_mgnt_2').click(function(){
			$('#session_btn_2').toggleClass('select_btn');
		});
		
		$('#session_mgnt_1').click(function(){
			$('#session_btn_1').toggleClass('select_btn');
		})
	
	
	//Settings page Active
	
		$('#gray-bg li a').click(function() {
			$('#gray-bg li.active').removeClass('active');
			var $parent = $(this).parent();
			$parent.addClass('active');
			
		});
		
	// Rules and Notification
	
	$(function(){
		'use strict'
		var rules_1 = $('.rules-and-notif-1');
		var rules_2 = $('.rules-and-notif-2');
		var rules_3 = $('.rules-and-notif-3');
		var rules_4 = $('.rules-and-notif-4');
		$('.first_rule_next').click(function(){
			$(rules_1).hide();
			$(rules_2).children().removeClass('d-none');
		});
		
		$('.second_rule_next').click(function(){
			$(rules_2).children().addClass('d-none');
			$(rules_3).children().removeClass('d-none');
		});
		
		$('.third_rule_next').click(function(){
			$(rules_3).children().addClass('d-none');
			$(rules_4).children().removeClass('d-none');
		});
		
		$('.fourth_rule_prev').click(function(){
			$(rules_4).children().addClass('d-none');
			$(rules_3).children().removeClass('d-none');
			
		});
		
		$('.third_rule_prev').click(function(){
			$(rules_3).children().addClass('d-none');
			$(rules_2).children().removeClass('d-none');
			
		});
		
		$('.second_rule_prev').click(function(){
			$(rules_2).children().addClass('d-none');
			$(rules_1).show();
			
		});
		
		
			
		$(".field_drop_select").change(function(){
			$(this).find("option:selected").each(function(){
				var optionValue = $(this).attr("value");
				if(optionValue){
					$(".field_col").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else{
					$(".field_col").hide();
				}
			});
		}).change();
		
	});
			
		$('.cc_trigger').click(function(){
				$('#cc_content').toggleClass('d-none');
			});
			
			$('.bcc_trigger').click(function(){
				$('#bcc_content').toggleClass('d-none');
			});
					
			
			//Editor 
			
			var quill = new Quill('#email_editor-container', {
			  modules: {
				toolbar: '#email_container_toolbar'
			  },
			  placeholder: 'Compose an epic...',
			  theme: 'snow'
			});
			
		$('.add_activity_field').click(function(){
			$('.content_container').append("<form class='pd-15'><div class='form-group row align-items-center'><div class='col-3'><select class='custom-select lead_forms_dropdown'><option selected>Select Field</option><option value='notes_activity'>Notes</option></select></div><div class='col-9'><div class='notes_activity content_col'><div class='row row-xs align-items-center'><div class='col-8'><textarea class='form-control' Placeholder='Type @ to mail merge fields' id='add_activity_rules_modal_2'></textarea></div><div class='col-4'><div class='d-flex justify-content-between'><a href='#'>Add Mail Merge</a><span class='remove_field_here'><i class='fa fa-times'></i></span></div></div></div></div></div></div></form>");
			
			
		});
		
		$('.content_container').on("click",".remove_field_here", function(e){ 
				e.preventDefault(); 
				$(this).closest('form').remove();  
				
			});
			
		$('.add_updated_list').click(function(){
			$('.update_lead_list_here').append("<tr><td><div><select class='custom-select lead_forms_dropdown' id><option value='update_list_option_0'>Select a field</option><option value='update_list_option_1'>Task Schedule Demo</option></select></div></td><td class='update_list_option_1 content_col'><input type='text' class='form-control' value='' Placeholder='Rule Execution Time'></td><td class='update_list_option_1 content_col tx-center pd-15-f'><span class=''><i class='fa fa-floppy-o tx-primary'></i></span><span class='mg-x-10 remove_update_list'><i class='fa fa-times tx-danger '></i></span></td></tr>");
			
			$('.no_fields_config').hide();
			
		});
		
		$('.update_lead_list_here').on("click",".remove_update_list", function(e){ 
			e.preventDefault(); 
			$(this).closest('td').remove(); 
		});
		
		//Authentication Provider
		$(".criteria_modal_next").click(function () {
			$("#criteria_modal_step2").removeClass('d-none');
			$("#criteria_modal_step1").addClass('d-none');
		});
		
		//Security Two factor authendication
		
		$(".two-factor-modal-next").click(function () {
			$("#two-factor-modal-step2").removeClass('d-none');
			$("#two-factor-modal-step1").addClass('d-none');
			
		});
		$("#two-factor-prev").click(function () {
			$("#two-factor-modal-step1").removeClass('d-none');
			$("#two-factor-modal-step2").addClass('d-none');
			
		});
		
		$('.two-factor-modal-next').one('click',function(event){
			var this_footer = $('.footer_hover');
			$(this).find(this_footer).hide();
			$(this).append("<div class='card-footer bd-t-0'><i class='fa fa-check-circle tx-primary fa-3x'></i></div>");
			event.stopPropagation();
		});
		
		
		//Create Email Campaign Page
	
	
		$('.change_success').click(function(){
			$('.change_success').removeClass('tx-success');
			$('.change_success').addClass('tx-gray-500');
			$(this).removeClass('tx-gray-500');
			$(this).addClass('tx-success');
		});
	
		$(function (){
		'use script'
			var fa_circle = $('.fa-check-circle');
			$('.hidden_icons_table').hover(function(){
				
				$(this).find(fa_circle).toggleClass('select_btn');
			});
			
			$('.hidden_icons_table').click(function(){
				
				$('.hidden_icons_table').removeClass('bg-primary tx-white');
				$('.hidden_icons_table').addClass('tx-dark');
				$(this).removeClass('tx-dark');
				$(this).addClass('bg-primary tx-white');
				
				$(this).find(fa_circle).addClass('tx-success');
			});
		
			var quill = new Quill('#campaign_container_1', {
			  modules: {
				toolbar: '#campaign_tool_1'
			  },
			  placeholder: 'Compose an epic...',
			  theme: 'snow'
			});
			
			var quill = new Quill('#common_container', {
			  modules: {
				toolbar: '#common_editor'
			  },
			  placeholder: 'Compose an epic...',
			  theme: 'snow'
			});
			
			var quill = new Quill('#common_campagin_editor', {
			  modules: {
				toolbar: '#common_campagin_toolbar'
			  },
			  placeholder: 'Compose an epic...',
			  theme: 'snow'
			});
		});
		
		
		
		$('.hide_all_btn_blocks').click(function(){
		$('.hideAllBtns').children().toggle();
		$('.hide_search_form').toggle();
		$('#no_hide').show();
		$('#no_hide2').show();
		$(this).text(function(bef, aft){
			return aft === 'Hide All Fields' ? "Show All Fields" : 'Hide All Fields'
		});
	});
	
	$('.resulted_select').on('change', function(){
		$('.resulted_options').html($(this).val());
	});
	$(function (){
		'use strict'
		
		var recipent_list = $('.add_recipient_list');
		$(recipent_list).click(function(event){
			$('.append_recipient_list').append('<form class=""><div class="form-group row align-items-center "><div class="col-4 "><select class="custom-select  resulted_select"><option value="Starred Leads">Starred Leads</option><option value="All Leads">All Leads</option><option value="3D Printing Workshop">3D Printing Workshop</option></select></div><div class="col-8"><div class="d-flex justify-content-between"><a class="resulted_options" href="<?php echo base_url(); ?>dashboard/list_details" target="_blank"> Starred Leads</a><a href="javascript:void(0)" class="tx-danger close_options tx-22">&times;</a></div></div></div></form>');
			event.preventDefault();
		});

	
		$(recipent_list).on("click",".close_options", function(e){
			   
			e.preventDefault(); 
			$(this).closest('form').remove();  
				
		});
	})
	
	
	$('.resulted_select_suppression').on('change', function(){
		$('.resulted_option_suppression').html($(this).val());
	});
	
	$(function (){
		'use strict'
		
		var recipent_list_supp = $('.add_recipient_list_supp');
		$(recipent_list_supp).click(function(event){
			$('.append_recipient_list').append('<form class=""><div class="form-group row align-items-center "><div class="col-4 "><select class="custom-select  resulted_select_suppression"><option value="Starred Leads">Starred Leads</option><option value="All Leads">All Leads</option><option value="3D Printing Workshop">3D Printing Workshop</option></select></div><div class="col-8"><div class="d-flex justify-content-between"><a class="resulted_option_suppression" href="<?php echo base_url(); ?>dashboard/list_details" target="_blank"> Starred Leads</a><a href="javascript:void(0)" class="tx-danger close_options_supp tx-22">&times;</a></div></div></div></form>');
			event.preventDefault();
		});

	
		$(recipent_list_supp).on("click",".close_options_supp", function(e){ //user click on remove text
			   
			e.preventDefault(); 
			$(this).closest('form').remove();  
				
		});
	});
	
	$(function (){
		'use strict'
		
		var add_list_supp = $('.add_suppresion_list');
		$(add_list_supp).click(function(event){
			$('.append_recipient_list').append('<form class=""><div class="form-group row align-items-center "><div class="col-4 "><select class="custom-select  resulted_select_suppression"><option value="Starred Leads">Starred Leads</option><option value="All Leads">All Leads</option><option value="3D Printing Workshop">3D Printing Workshop</option></select></div><div class="col-8"><div class="d-flex justify-content-between"><a class="resulted_option_suppression" href="<?php echo base_url(); ?>dashboard/list_details" target="_blank"> Starred Leads</a><a href="javascript:void(0)" class="tx-danger suppresion_close tx-22">&times;</a></div></div></div></form>');
			event.preventDefault();
		});

	
		$(add_list_supp).on("click",".suppresion_close", function(e){ //user click on remove text
			   
			e.preventDefault(); 
			$(this).closest('form').remove();  
				
		});
	});

	 $('.tagselectDom').select2({
			placeholder: 'Add a Tag',
			 multiple: true,
			searchInputPlaceholder: 'Search options'
		});
		
	
	// Step5 Radio Toggle
	
	$('.slide_up_step5').click(function(){
		if($(this).find('input').is(':checked')){
			$(this).next('div').removeClass('d-none');
		}
		
		else{
			$(this).next('div').addClass('d-none');
		}
	});
	
	$('#email_campagin_step5_1').click(function(){
		$('#step5_date_hide').addClass('d-none');
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
	
	$('.tooltip_dynamic').tooltip({
		
		title:function(){
			return " " + $(this).text();
		}
	});
	
	$('.show_hidden_box').click(function(){
		$('.table_body tr').each(function(){
			if($(this).hasClass('hidden') && $('.show_hidden_box').is(':checked')){
				$(this).toggle();
			}
			else{
				$('.table_body tr').remove();
				$('.table_body').html('<tr><td class="bg-white" colspan="10">No Records Found</td></tr>');
			
			}
		});
	});
	
	$(function(){
		'use strict'
		var ctx = $('#myChart');
		var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Target Recipients', 'Excluded Recipients'],
			datasets: [{
				label: '# of Votes',
				data: [28660, 22061],
				backgroundColor: [
					'#00cccc',
					'#fd7e14',
				],
				borderColor: [
					'#00cccc',
					'#fd7e14',
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		},
		legend: {
			labels: {
			   boxWidth: 0,
			}
		}
		});
		
		
		
		
	});
	//2nd chart
	$(function(){
		var ctx = $('#myChart2');
		var myChart2 = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Bounce', 'Deferred'],
			datasets: [{
				label: '# of Votes',
				data: [99, 2.5],
				backgroundColor: [
					'#FF4069',
					'#059BFF',
				],
				borderColor: [
					'#FF4069',
					'#059BFF',
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		},
		legend: {
			labels: {
			   boxWidth: 0,
			}
		}
		});
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
	
		$('.combine_add').on('click', function(){
			var concart = $('#combine1').val() + ' ' + $('#combine2').val() + ' ' + $('#year').val() + ' ' +$('#combine3').val()+ ' ' +$('#combine4').val()+ ' '+$('#combine5').val()+ ' '+$('#combine6').val();
			$('#concart_here').html(concart +'<div class="float-right"><i class="fa fa-pencil tx-primary mg-r-10"></i><i class="fa fa-trash-o tx-danger delete_combine"></i>');
			$('#concart_before').hide();
			
			$('.delete_combine').click(function(){
				$('#concart_here').hide();
				$('#concart_before').show();
			})
		});
	});
	
	//Landing Page actions
	$(document).on('click', '#landing_actions_tab li a', function(){
		$('#landing_actions_tab li a').addClass('bg-light');
		$(this).removeClass('bg-light');
	})
	
	$('.change_msg_text_2').click(function(){
		$('.changed_text').text(" on popup after form submission.");
	});
	$('.change_msg_text_1').click(function(){
		$('.changed_text').text(" above the form after form submission.");
	});
	
	$(function(){
		'use strict'
		var maxlength = 300;
		$('.show_here_rem_char').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char').keyup(function(){
			var text_area = $('.show_rem_char').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	$(function(){
		'use strict'
		var maxlength = 300;
		$('.show_here_rem_char_1').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char_1').keyup(function(){
			var text_area = $('.show_rem_char_1').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char_1');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	$(function(){
		'use strict'
		var maxlength = 300;
		$('.show_here_rem_char_2').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char_2').keyup(function(){
			var text_area = $('.show_rem_char_2').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char_2');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	
	$('.hide_next_elm').click(function(){
		$(this).parent('div').next('div').toggleClass('d-none');
	});
	
	$(function (){
		'use strict'
		function formatData (data) {
		  if (!data.id) { return data.text; }
		  var $result= $(
			'<span><i class="fa fa-folder tx-warning"></i> ' + data.text + '</span>'
		  );
		  return $result;
		};

		$(".selectFont").select2({
			 dropdownParent: $('.select-modal-parent'),
		  templateResult: formatData,
		  templateSelection: formatData

		});
	});
		
	$('.hidden_icons_here').hover(function(){
			$(this).find('#hidden_icons_fa').toggleClass('select_btn');
		});
	$('.remove_tr').click(function(){
		$(this).closest('.hidden_icons_here').remove();
	});
	
	$('.parselyForm').parsley();
	$(function(){
		'use strict'
		$('#upload_content_actions').hide();
			$('.upload_actions').click(function(event){
			event.preventDefault();
			$('#upload_content_actions').slideToggle(1000);
		
		});
	});
	
	$('.chev_down').click(function(){
		$(this).find('i').toggleClass('fa-rotate-180');
	});
	//Landing Page
	$(function(){
		'use strict'
		$('.change_attr_tr').on('click', '#landing_page_delete_modal' ,function(){
			var input_box = $('.checkBoxClass');
			var input_td = $('.change_attr');
			var input_tr = $('.change_attr_tr')
			$(this).find("input").remove();
		});
	});
	
	//Landing page settings step4
	
	$(function(){
		'use strict'
		var maxlength = 70;
		$('.show_here_rem_char_settings_1').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char_settings_1').keyup(function(){
			var text_area = $('.show_rem_char_settings_1').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char_settings_1');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	$(function(){
		'use strict'
		var maxlength = 156;
		$('.show_here_rem_char_settings_2').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char_settings_2').keyup(function(){
			var text_area = $('.show_rem_char_settings_2').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char_settings_2');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	$(function(){
		'use strict'
		var maxlength = 156;
		$('.show_here_rem_char_settings_3').text(maxlength +" "+"characters remaining");
	
		$('.show_rem_char_settings_3').keyup(function(){
			var text_area = $('.show_rem_char_settings_3').val().length;
			var charactersLeft = maxlength - text_area;
			var count_char = $('.show_here_rem_char_settings_3');
			$(count_char).text(charactersLeft +" "+"characters remaining");
		});
		
	});
	
	$( function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	} );
	
});