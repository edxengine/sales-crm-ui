<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!---  Work Day Template --->
<h5 class="tx-semibold mg-t-5">
	Work Day Templates
	<a href="#">
		<i class="fa fa-question-circle tx-14 tx-gray-500" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
	</a>
</h5>		

<p class="mg-b-10">Manage Work Day Templates</p>
<p class="bd-b"></p>

<!--Topbar-->
<div class="dropdown tx-right mg-b-5">
	<button type="button" class="btn-xs bg-light bd rounded-0" data-toggle="dropdown">
		<i class="fa fa-bars"></i>
			Actions
		<i class="fa fa-chevron-down"></i>
	</button>
	<div id="teams-dropdown" data-toggle="dropdown">
		<div class="dropdown-menu" aria-labelledby="teams-dropdown">
			<a class="dropdown-item" href="#"Apply Holiday Calendar</a>
			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#workday-action-modal">Assign Team</a>
		</div>
	</div>
</div>

<div class="bd bg-gray-100">
	<div class="row row-xs  align-items-center">
	   <div class="col-md-8 col-lg-8 pd-l-10-f pd-t-5 col-sm-6">
		<form class="mg-b-0">
		   <div class="d-lg-flex align-items-center mg-b-10 mg-lg-b-0">
				<div class="input-group mg-b-5">
				<input type="text" placeholder="Search Work Day Template" class="form-control rounded-0">
				<div class="input-group-append">
					<button class="btn btn-light form-control pd-t-5 rounded-0" type="button"><i class="fa fa-search fa-xs"></i></button>
				</div>
			</div>
		   </div>
		</form>
	   </div>
	  
	   <div class="col-md-4 col-lg-4 col-sm-6"> 
		<div class="tx-right pd-y-5">
		 <button class="btn btn-primary btn-xs mg-r-5 pd-y-3 rounded-0" data-toggle="modal" data-target="#workday-create-modal">Create</button>
		</div>
	   </div>
	</div>
</div>
<!--/Topbar-->

<!--Table-->
<div class="table-responsive">
	<table class="table mg-t-5 bd">
		<thead  class="bg-gray-200">
			<tr>
				<th><h6 class="bd-r">Template Name</h6></th>
				<th><h6 class="bd-r">Code</h6></th>
				<th><h6 class="bd-r">Assigned Teams</h6></th>
				<th><h6 class="bd-r">Modified By</h6></th>
				<th><h6 class="bd-r">Modified On<i class="fa fa-long-arrow-down pd-l-5"></i></h6></th>
				<th><h6 class="tx-center">Actions</h6></th>
			</tr>
		</thead>  
		<tbody class="tx-13">
			
			<tr>
			  <td>Default Template</td>
			  <td>1</td>
			  <td></td>
			  <td>System</td>
			  <td>01/21/18 11:56 PM</td>
			  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="sales-dropdown" data-toggle="dropdown"></i>
				<div class="dropdown-menu" aria-labelledby="sales-dropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#workday-edit-modal">Edit</a>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#workday-delete-modal">Delete</a>
					
				</div></td>
			</tr>
			
	  </tbody>
	</table>
</div>
<!--Table-->

<!--Pagination-->
<div class="row bd bg-light mg-x-0">
	
	<div class="col-4 pd-t-5">
	<p class="pd-t-5 tx-bold">1-1 of 1</p>
	</div>
	<div class="col-8 pd-t-5">
		<nav aria-label="Page navigation example">
			<ul class="pagination pagination-filled pagination-space float-right mg-b-5">
				<li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i data-feather="chevron-left"></i></a></li>
				<li class="page-item active rounded"><a class="page-link pagination-clr bg-gray-200" href="#">1</a></li>
				<li class="page-item"><a class="page-link page-link-icon" href="#"><i data-feather="chevron-right"></i></a></li>
			</ul>
		</nav>
	</div>
</div>
<!--/Pagination-->
	
<!--Work Day Template Modal-->
<div class="modal fade bd-example-modal-lg" id="workday-action-modal" tabindex="-1" role="dialog" aria-labelledby="workday-action-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
				<div class="modal-header pd-y-10">
					<h5 class="modal-title tx-bold" id="workday-action-modalLabel">Apply Work Day Template</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body mg-b-10">
					<div class="bd pd-10 bg-gray-100">
						<div class="input-group mg-b-5">
					<input type="text" placeholder="Search Teams" class="form-control rounded-0">
					<div class="input-group-append">
						<button class="btn btn-light form-control pd-t-5 rounded-0" type="button"><i class="fa fa-search fa-xs"></i></button>
					</div>
				</div>
					</div>
		<table class="table mg-t-5 bd">
			<thead  class="bg-gray-100 tx-center">
				<tr>
					<th>Teams</th>
					<th class="bd-l">Template</th>
					<th class="bd-l">Actions</th>
				</tr>
			</thead>  
			<tbody>
				<tr class="tx-gray-700 ">
				  <td>
				  <a href="#" class="toggle fa fa-chevron-down"></a>
				  <span class="pd-l-5">Skill Lync</span></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td>
					  <i class="fa fa-circle tx-gray-300 pd-l-20"></i>
					  <span>L1</span></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td><i class="fa fa-circle tx-gray-300  pd-l-20"></i>
				  <label>L2</label></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				 <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
				  <label>L3</label></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
				  <label>Interns</label></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
				  <label>Electrical</label></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
				  <label>Civil</label></td>
				  <td></td>
				  <td></td>
				</tr>
				<tr class="content">
				  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
				  <label>Computer Science</label></td>
				  <td></td>
				  <td></td>
				</tr>
			</tbody>
		</table>
		
							
					</div>
					
		</div>
	</div>
</div>

<!--/Work Day Template Modal-->
	
<!--Create Work Day Template Modal-->
<div class="modal fade bd-example-modal-lg" id="workday-create-modal" tabindex="-1" role="dialog" aria-labelledby="workday-create-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		 <div class="modal-content">
			<div class="modal-header pd-y-10">
				<h5 class="modal-title tx-bold" id="workday-create-modalLabel">Create Work Day Template <i class="fa fa-question-circle text-secondary" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mg-b-10">
				<form>
					<div class="form-group row">
						 <label class="col-2" required>Name<span class="required tx-danger">*</span></label>
						 <div class="col-10">
						 <input type="text" class="form-control">
						 </div>
					</div>
					<div class="form-group row">
						 <label class="col-2" required>Type Zone</label>
						 <div class="col-10">
						 <select class="form-control show-date-dropdown" id="date_form04">
						  <option>(GMT-12:00) International Date Line West</option>
						  <option>(GMT-11:00) Midway Island, Samoa</option>
						  <option>(GMT-10:00) Hawaii</option>
						  <option>(GMT-09:00) Alaska</option>
						  <option>(GMT-08:00) Pacific Time (US and Canada), Tijuana</option>
						  <option>(GMT-07:00) Arizona</option>
						  <option>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
						  <option>(GMT-07:00) Mountain Time (US and Canada)</option>
						  <option>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
						  <option>(GMT-06:00) Central Time (US and Canada)</option>
						  <option>(GMT-06:00) Central America</option>
						  <option>(GMT-06:00) Saskatchewan</option>
						  <option>(GMT-05:00) Indiana (East)</option>
						  <option>(GMT-05:00) Bogota, Lima, Quito</option>
						  <option>(GMT-05:00) Eastern Time (US and Canada)</option>
						  <option>(GMT-04:00) Manaus</option>
						  <option>(GMT-04:00) Caracas, La Paz</option>
						  <option>(GMT-04:00) Santiago</option>
						  <option>(GMT-04:00) Atlantic Time (Canada)</option>
						  <option>(GMT-03:30) Newfoundland and Labrador</option>
						  <option>(GMT-03:00) Buenos Aires, Georgetown</option>
						  <option>(GMT-03:00) Greenland</option>
						  <option>(GMT-03:00) Brasilia</option>
						  <option>(GMT-02:00) Mid-Atlantic</option>
						  <option>(GMT-01:00) Cape Verde Islands</option>
						  <option>(GMT-01:00) Azores</option>
						  <option>(GMT-00:00) Casablanca, Monrovia</option>
						  <option>(GMT-00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
						  <option>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
						  <option>(GMT+01:00) West Central Africa</option>
						  <option>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
						  <option>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
						  <option>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
						  <option>(GMT+02:00) Windhoek</option>
						  <option>(GMT+02:00) Harare, Pretoria</option>
						  
						 </select>
					 </div>
					</div>
					<div class="form-group row">
						 <label class="col-2" required>Working Days</label>
						 <div class="col-10">
						<button class="btn btn-outline-primary btn-xs rounded-0">Mon</button>
						<button class="btn btn-outline-primary btn-xs rounded-0">Tue</button>
						<button class="btn btn-outline-primary btn-xs rounded-0">Wed</button>
						<button class="btn btn-outline-primary btn-xs rounded-0">Thurs</button>
						<button class="btn btn-outline-primary btn-xs rounded-0">Fri</button>
						<button class="btn btn-outline-secondary btn-xs rounded-0">Sat</button>
						<button class="btn btn-outline-secondary btn-xs rounded-0">Sun</button>
						 </div>
					</div>
					<div class="form-group row">
						 <label class="col-2" required>Day Wise</label>
						 <div class="col-10">
						<input type="checkbox">
					 </div>
					</div>
					<hr>
					<div class="form-group row">
						 <label class="col-2" required>Working Hours</label>
						 <div class="col-10 d-flex">
						 <select class="form-control">
						 <option>12:00 AM</option>
						 <option>12:15 AM</option>
						 <option>12:30 AM</option>
						 <option>12:45 AM</option>
						 </select>
						 <label class="mg-l-20 mg-t-10">To</label>
						 <select class="form-control mg-l-20">
						 <option>12:00 AM</option>
						 <option>12:15 AM</option>
						 <option>12:30 AM</option>
						 <option>12:45 AM</option>
						 </select>
						 <div class="dropdown mg-l-20">
						   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
						   <div class="dropdown-menu" aria-labelledby="modal-dropdown1">
						  <a class="dropdown-item" href="#">Add Time Block</a>
						  <a class="dropdown-item" href="#">Add Break</a>
						  
						   </div>
					 </div>
					 
					 </div>
					</div>
					<div class="d-none">
					<div class="form-group row">
					 <label class="col-2" required>Monday</label>
					 <div class="col-10 d-flex">
					 <select class="form-control">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <label class="mg-l-20 mg-t-10">To</label>
					 <select class="form-control mg-l-20">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <div class="dropdown mg-l-20 d-flex align-items-stretch">
					   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down"></i></button>
					   <div class="dropdown-menu" aria-labelledby="modal-dropdown">
					  <a class="dropdown-item" href="#">Add Time Block</a>
					  <a class="dropdown-item" href="#">Add Break</a>
					  
					   </div>
					 </div>
					 
					 </div>
					</div>
					<div class="form-group row">
					 <label class="col-2" required>Tuesday</label>
					 <div class="col-10 d-flex">
					 <select class="form-control">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <label class="mg-l-20 mg-t-10">To</label>
					 <select class="form-control mg-l-20">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <div class="dropdown mg-l-20">
					   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					   <div class="dropdown-menu" aria-labelledby="modal-dropdown2">
					  <a class="dropdown-item" href="#">Add Time Block</a>
					  <a class="dropdown-item" href="#">Add Break</a>
					  
					   </div>
					 </div>
					 
					 </div>
					</div>
					<div class="form-group row">
					 <label class="col-2" required>Wednesday</label>
					 <div class="col-10 d-flex">
					 <select class="form-control">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <label class="mg-l-20 mg-t-10">To</label>
					 <select class="form-control mg-l-20">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <div class="dropdown mg-l-20">
					   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					   <div class="dropdown-menu" aria-labelledby="modal-dropdown3">
					  <a class="dropdown-item" href="#">Add Time Block</a>
					  <a class="dropdown-item" href="#">Add Break</a>
					  
					   </div>
					 </div>
					 
					 </div>
					</div>
					<div class="form-group row">
					 <label class="col-2" required>Thursday</label>
					 <div class="col-10 d-flex">
					 <select class="form-control">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <label class="mg-l-20 mg-t-10">To</label>
					 <select class="form-control mg-l-20">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <div class="dropdown mg-l-20">
					   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					   <div class="dropdown-menu" aria-labelledby="modal-dropdown4">
					  <a class="dropdown-item" href="#">Add Time Block</a>
					  <a class="dropdown-item" href="#">Add Break</a>
					  
					   </div>
					 </div>
					 
					 </div>
					</div>
					<div class="form-group row">
					 <label class="col-2" required>Friday</label>
					 <div class="col-10 d-flex">
					 <select class="form-control">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <label class="mg-l-20 mg-t-10">To</label>
					 <select class="form-control mg-l-20">
					 <option>12:00 AM</option>
					 <option>12:15 AM</option>
					 <option>12:30 AM</option>
					 <option>12:45 AM</option>
					 </select>
					 <div class="dropdown mg-l-20">
					   <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					   <div class="dropdown-menu" aria-labelledby="modal-dropdown5">
					  <a class="dropdown-item" href="#">Add Time Block</a>
					  <a class="dropdown-item" href="#">Add Break</a>
					  
					   </div>
					 </div>
					 
					 </div>
					</div>
				</div>
		   </form>
			 
			  
			</div>
			<div class="modal-footer bg-light">
			   <button type="button" class="btn" data-dismiss="modal">Cancel</button>
			   <button type="button" class="btn btn-primary btn-xs">Save</button>
			</div>
			
		 </div>
	</div>
</div>

<!--/Create Work Day Template Modal-->
	
<!--Edit Work Day Template Modal-->

<div class="modal fade bd-example-modal-lg" id="workday-edit-modal" tabindex="-1" role="dialog" aria-labelledby="workday-edit-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
				<div class="modal-header pd-y-10">
					<h5 class="modal-title tx-bold" id="workday-edit-modalLabel">Edit Work Day Template <i class="fa fa-question-circle text-secondary" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body mg-b-10">
					<form>
 <div class="form-group row">
  <label class="col-2" required>Name<span class="required tx-danger">*</span></label>
  <div class="col-10">
	 <input type="text" class="form-control">
  </div>
 </div>
 <div class="form-group row">
  <label class="col-2" required>Type Zone</label>
  <div class="col-10">
	 <select class="form-control show-date-dropdown" id="date_form0_1">
			<option>(GMT-12:00) International Date Line West</option>
			<option>(GMT-11:00) Midway Island, Samoa</option>
			<option>(GMT-10:00) Hawaii</option>
			<option>(GMT-09:00) Alaska</option>
			<option>(GMT-08:00) Pacific Time (US and Canada), Tijuana</option>
			<option>(GMT-07:00) Arizona</option>
			<option>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
			<option>(GMT-07:00) Mountain Time (US and Canada)</option>
			<option>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
			<option>(GMT-06:00) Central Time (US and Canada)</option>
			<option>(GMT-06:00) Central America</option>
			<option>(GMT-06:00) Saskatchewan</option>
			<option>(GMT-05:00) Indiana (East)</option>
			<option>(GMT-05:00) Bogota, Lima, Quito</option>
			<option>(GMT-05:00) Eastern Time (US and Canada)</option>
			<option>(GMT-04:00) Manaus</option>
			<option>(GMT-04:00) Caracas, La Paz</option>
			<option>(GMT-04:00) Santiago</option>
			<option>(GMT-04:00) Atlantic Time (Canada)</option>
			<option>(GMT-03:30) Newfoundland and Labrador</option>
			<option>(GMT-03:00) Buenos Aires, Georgetown</option>
			<option>(GMT-03:00) Greenland</option>
			<option>(GMT-03:00) Brasilia</option>
			<option>(GMT-02:00) Mid-Atlantic</option>
			<option>(GMT-01:00) Cape Verde Islands</option>
			<option>(GMT-01:00) Azores</option>
			<option>(GMT-00:00) Casablanca, Monrovia</option>
			<option>(GMT-00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
			<option>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
			<option>(GMT+01:00) West Central Africa</option>
			<option>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
			<option>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
			<option>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
			<option>(GMT+02:00) Windhoek</option>
			<option>(GMT+02:00) Harare, Pretoria</option>
			
	 </select>
  </div>
 </div>
 <div class="form-group row">
  <label class="col-2" required>Working Days</label>
  <div class="col-10">
	<button class="btn btn-outline-primary btn-xs rounded-0">Mon</button>
	<button class="btn btn-outline-primary btn-xs rounded-0">Tue</button>
	<button class="btn btn-outline-primary btn-xs rounded-0">Wed</button>
	<button class="btn btn-outline-primary btn-xs rounded-0">Thurs</button>
	<button class="btn btn-outline-primary btn-xs rounded-0">Fri</button>
	<button class="btn btn-outline-secondary btn-xs rounded-0">Sat</button>
	<button class="btn btn-outline-secondary btn-xs rounded-0">Sun</button>
  </div>
 </div>
 <div class="form-group row">
  <label class="col-2" required>Day Wise</label>
  <div class="col-10">
	<input type="checkbox">
  </div>
 </div>
 <hr>
 <div class="form-group row">
  <label class="col-2" required>Working Hours</label>
  <div class="col-10 d-flex">
	 <select class="show-date-dropdown" id="date_form02">
		<option>12:00 AM</option>
		<option>12:15 AM</option>
		<option>12:30 AM</option>
		<option>12:45 AM</option>
	 </select>
	 <label class="mg-l-20 mg-t-10">To</label>
	 <select class="show-date-dropdown mg-l-20" id="date_form03">
		<option>12:00 AM</option>
		<option>12:15 AM</option>
		<option>12:30 AM</option>
		<option>12:45 AM</option>
	 </select>
		<div class="dropdown mg-l-20">
		  <button class="btn btn-white btn-xs dropdown-toggle" type="button" id="modal-dropdown6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		  <div class="dropdown-menu" aria-labelledby="modal-dropdown6">
			<a class="dropdown-item" href="#">Add Time Block</a>
			<a class="dropdown-item" href="#">Add Break</a>
			
		  </div>
		</div>
		
  </div>
 </div>
</form>
		
							
					</div>
<div class="modal-footer bg-light">
	<button type="button" class="btn" data-dismiss="modal">Cancel</button>
	<button type="button" class="btn btn-primary btn-xs">Save</button>
</div>
					
		</div>
	</div>
</div>

<!--/Edit Work Day Template Modal-->
	
<!--Work Day Delete Template Modal-->
	
<div class="modal fade" id="workday-delete-modal" tabindex="-1" role="dialog" aria-labelledby="workday-delete-modalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header pd-y-10">
					<h5 class="modal-title tx-bold" id="workday-delete-modalLabel">Confirm</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body mg-b-10">
					<p>Work day template will be deleted and removed from all associated teams and users. Do you want to continue?</p>
							
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary btn-xs">Yes</button>
					</div>
					
		</div>
	</div>
</div>
	
<!--/Work Day Delete Template Modal-->

<!---/Work Day Template --->