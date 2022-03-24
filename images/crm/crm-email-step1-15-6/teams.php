<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!---  Teams Content --->
<h5 class="tx-semibold mg-t-5">
	Teams
	<a href="#">
		<i class="fa fa-question-circle tx-14 tx-gray-500" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
	</a>
</h5>		

<p class="mg-b-10">View and Manage Teams</p>
<p class="bd-b"></p>

<!--topbar-->
<div class="dropdown tx-right mg-b-5">
	<button type="button" class="btn-xs bg-light bd rounded-0"  data-toggle="dropdown">
		<i class="fa fa-bars"></i>
			Actions
		<i class="fa fa-chevron-down"></i>
	</button>
			<div id="teams-dropdown" data-toggle="dropdown">
				<div class="dropdown-menu tx-11" aria-labelledby="teams-dropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#actionModal">Apply Holiday Calendar</a>
					<a class="dropdown-item" href="#">Apply Dashboard</a>
					<a class="dropdown-item" href="#">Apply Holiday Calendar</a>
					<a class="dropdown-item" href="#">Apply Dashboard</a>
				</div>
			</div>
</div>
<!--/topbar-->
<!--table-->
<div class="row bd bg-light pd-t-5 mg-x-0 align-items-center">
	<div class="col-sm-4 pd-x-5">
		<div class="input-group mg-b-5">
			<input type="text" placeholder="Search Teams" class="form-control rounded-0">
			<div class="input-group-append">
				<button class="btn btn-light form-control pd-t-5 rounded-0" type="button"><i class="fa fa-search fa-xs"></i></button>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4 offset-sm-4">	
		<div class="pull-right">
			<button class="btn btn-primary btn-xs rounded-0 mg-r-10" data-toggle="modal" data-target="#teamcreateModal">Create</button>
			<a href="#" data-toggle="tooltip" data-placement="top" title="Select columns"><i class="fa fa-bars fa-lg fa-rotate-90 text-secondary"  data-toggle="modal" data-target="#iconModal"></i></a>
		</div>
	</div>
</div>
	
<table class="table mg-t-5 bd">
	<thead  class="bg-gray-100">
		<tr>
			<th><h6 class="bd-r">Teams</h6></th>
			<th><h6 class="bd-r">Code</h6></th>
			<th><h6 class="bd-r">Users</h6></th>
			<th><h6 class="bd-r tx-center">Cummulative Users</h6></th>
			<th><h6 class="tx-center">Actions</h6></th>
		</tr>
	</thead>  
	<tbody class="tx-11">
		<tr class="tx-gray-700 ">
		  <td>
		  <a href="#" class="toggle fa fa-chevron-down"></a>
		  <span class="pd-l-5">Skill Lync</span></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="teams-dropdown" data-toggle="dropdown"></i>
			<div class="dropdown-menu" aria-labelledby="teams-dropdown">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal-2">Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#teamcreateModal">Add Team</a>
			</div>
		  </td>
		</tr>
		<tr class="content">
		  <td>
			  <i class="fa fa-circle fa-xs tx-success pd-l-20"></i>
			  <span>L1</span></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary tx-center" id="teams-dropdown" data-toggle="dropdown"></i>
			<div class="dropdown-menu" aria-labelledby="teams-dropdown">
				<a class="dropdown-item" href="#">Edit</a>
				<a class="dropdown-item" href="#">Add Team</a>
				<a class="dropdown-item" href="#">Delete Team</a>
			</div>
		  </td>
		</tr>
		<tr class="content">
		  <td><i class="fa fa-circle tx-success pd-l-20"></i>
		  <label>L2</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
		<tr class="content">
		 <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
		  <label>L3</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
		<tr class="content">
		  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
		  <label>L4</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
		<tr class="content">
		  <td><i class="fa fa-circle tx-success pd-l-20"></i>
		  <label>L5</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
		<tr class="content">
		  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
		  <label>L6</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
		<tr class="content">
		  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
		  <label>L7</label></td>
		  <td>1</td>
		  <td>291</td>
		  <td class="tx-center">321</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary"></i></td>
		</tr>
	</tbody>
</table>

<!--/table-->
	
<!--pagination-->
<div class="bd bg-light pd-10">
	<a href="#" class="tx-black tx-semibold">1-8 of 8</a>
</div>
<!--/pagination-->
	
<!-- icon-modal -->

<div class="modal fade" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="iconModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header pd-y-10">
			<h5 class="modal-title" id="iconModalLabel">Select Columns To View</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		<div class="modal-body">
			<div>
				<input class="col-1" type="checkbox" id="b23">
				<a href="#">All</a>
			</div>
			<div>
				<input class="col-1" type="checkbox" id="b23">
				<a href="#">Users</a>
			</div>
			<div>
				<input class="col-1" type="checkbox" id="b23">
				<a href="#">Cumulative Users</a>
			</div>
			<div>
				<input class="col-1" type="checkbox" id="b23">
				<a href="#">Work Day Template</a>
			</div>
			<div>
				<input class="col-1" type="checkbox" id="b23">
				<a href="#">Holiday Calendar</a>
			</div>
		</div>
			<div class="modal-footer bg-light justify-content-center">
				<div>
					<button type="button" class="btn btn-primary btn-xs rounded-0" data-dismiss="modal">Show Selected</button>
					<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Restore Default</button>
					<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Cancel</button>
				</div>
			
			</div>
		</div>
	  </div>
	</div>
<!--/icon-modal-->

<!-- create-modal -->
<div class="modal fade" id="teamcreateModal" tabindex="-1" role="dialog" aria-labelledby="teamcreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header pd-y-10">
		<h5 class="modal-title tx-bold" id="teamcreateModalLabel">Create Team</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	<div class="modal-body mg-b-10">
		<div class="row mg-b-20">
			<div class="col-3">Name
			<span class="tx-danger">*</span></div>
			<div class="col-9"><input type="text" class="form-control"></div>
		</div>
		<div class="row mg-b-20">
			<div class="col-3">Description</div>
			<div class="col-9"><textarea class="form-control" rows="2"></textarea></div>
		</div>
		<div class="row mg-b-20">
			<div class="col-3">Parent Team</div>
			<div class="col-9"><select class="form-control">
				  <option selected>Skill Lync</option>
				  <option value="1">L1</option>
				  <option value="2">L2</option>
				  <option value="3">L3</option>
				  <option value="1">Intern</option>
				  <option value="2">Electrical</option>
				  <option value="3">Civil</option>
				  <option value="3">Computer Science</option>
				</select>
			</div>
		</div>
			
	</div>
		<div class="modal-footer bg-light">
			<div>
				<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				<button type="button" class="btn btn-primary btn-xs rounded-0">Save</button>
			</div>
			
		
		</div>
	</div>
  </div>
</div>
<!--/create-modal-->

<!-- Modal 3-->	
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header pd-y-10">
		<h5 class="modal-title tx-bold" id="exampleModalLabel">Edit Team</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	<div class="modal-body mg-b-10">
		<div class="row mg-b-20">
			<div class="col-3">Name<span class="tx-danger">*</span></div>
			<div class="col-9"><input type="text" class="form-control"></div>
		</div>
		<div class="row mg-b-20">
			<div class="col-3">Description</div>
			<div class="col-9"><textarea class="form-control" rows="2"></textarea></div>
		</div>
		
			
	</div>
		<div class="modal-footer bg-light">
			<div>
				<button class="btn" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary btn-xs rounded-0" data-dismiss="modal">Save</button>
			</div>
		
		</div>
	</div>
  </div>
</div>
<!--/modal 3-->
	
<!--modal4-->
<div class="modal fade bd-example-modal-lg" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="actionModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
				<div class="modal-header pd-y-10">
					<h5 class="modal-title tx-bold" id="actionModalLabel">Apply Holiday Calendar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body mg-b-10">
						<div class="row bd bg-light pd-t-5 mg-x-0">
							<div class="col pd-x-5">
								<div class="input-group mg-b-5">
									<input type="text" placeholder="Search Teams" class="form-control rounded-0">
									<div class="input-group-append">
										<button class="btn btn-light form-control pd-t-5 rounded-0" type="button"><i class="fa fa-search fa-xs"></i></button>
									</div>
								</div>
							</div>
						</div>
		
						<table class="table mg-t-5 bd">
							<thead  class="bg-gray-200">
								<tr>
									<th scope="col">Teams</th>
									<th scope="col" class="bd-l">Calendar</th>
									<th scope="col" class="bd-l">Actions</th>
								</tr>
							</thead>  
							<tbody>
								<tr class="row-hover tx-gray-700 ">
									<td>
									  <a href="#" class="toggle fa fa-chevron-down"></a>
									  <span class="pd-l-5">Skill Lync</span>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="row-hover content">
									<td>
									  <i class="fa fa-circle fa-xs tx-success pd-l-20"></i>
									  <span>L1</span>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="row-hover content">
									<td><i class="fa fa-circle tx-success pd-l-20"></i>
										<label>L2</label>
									</td>
									<td></td>
									<td></td>
								</tr>
								<tr class="row-hover content">
								  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
								  <label>L3</label></td>
								  <td></td>
								  <td></td>
								</tr>
								<tr class="row-hover content">
								  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
								  <label>Intern</label></td>
								  <td></td>
								  <td></td>
								  
								</tr>
								<tr class="row-hover content">
								  <td><i class="fa fa-circle tx-success pd-l-20"></i>
								  <label>Electrical</label></td>
								  <td></td>
								  <td></td>
								</tr>
								<tr class="row-hover content">
								  <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
								  <label>Civil</label></td>
								  <td></td>
								  <td></td>
								</tr>
								<tr class="row-hover content">
								 <td><i class="fa fa-circle tx-gray-300 pd-l-20"></i>
								  <label>Computer Science</label></td>
								  <td></td>
								  <td></td>
								</tr>
							</tbody>
						</table>	
					</div>
					<div class="modal-footer bg-light">
						<div>
							<button class="btn" data-dismiss="modal">Cancel</button>
						</div>
					</div>
		</div>
	</div>
</div>
<!--/modal-->
 
<!---content end -->
 

 