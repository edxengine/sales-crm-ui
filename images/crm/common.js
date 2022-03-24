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

	$('.select2').select2({
	  placeholder: 'Choose one',
	  dropdownParent: $('.select-modal-parent'),
	  searchInputPlaceholder: 'Search options'
	  
	});
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

	$('.checked_boxes').click(function(){
		$('.not_checked_boxes').hide();
	});
			
	$('.cheched_all').click(function(){
		$('.checkboxes').children().show();
	});


	
 })	;
$(document).ready(function(){ 
	
	
	$('.datepicker1').datepicker();
			
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