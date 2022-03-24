<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!---  Sales Group --->
<h5 class="tx-semibold mg-t-5">
	Sales Groups
	<a href="#">
		<i class="fa fa-question-circle tx-14 tx-gray-500" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
	</a>
</h5>		

<p class="mg-b-10">Manage user Sales Groups and control access to leads</p>
<p class="bd-b"></p>

<!--table-->
<div class="alert alert-warning tx-16 mg-b-5">
	You have created 1 of 5 available sales groups.
</div>
<div class="bd bg-light tx-right pd-y-5 pd-r-5">
	<button class="btn btn-primary btn-xs rounded-0" data-toggle="modal" data-target="#salesModal">Create</button>
</div>
	
<table class="table mg-t-5 bd">
	<thead  class="bg-gray-100">
		<tr>
			<th><h6 class="bd-r">Name</h6></th>
			<th><h6 class="bd-r">Managers</h6></th>
			<th><h6 class="bd-r">Sales Users</h6></th>
			<th><h6 class="bd-r">Modified On</h6></th>
			<th><h6 class="tx-center">Actions</h6></th>
		</tr>
	</thead>  
	<tbody class="tx-13">
		
		<tr class="row-hover content">
		  <td>HEV</td>
		  <td>1 Skill Lync Support</td>
		  <td></td>
		  <td class="tx-right">11/24/20</td>
		  <td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="sales-dropdown" data-toggle="dropdown"></i>
			<div class="dropdown-menu tx-11" aria-labelledby="sales-dropdown">
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal">Edit</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#setpermissionModal">Set Permissions</a>
			</div>
		  </td>
		</tr>
		
		
  </tbody>
</table>
<!--/table-->
	
	
<!-- Modal-->
<div class="modal fade bd-example-modal-lg" id="salesModal" tabindex="-1" role="dialog" aria-labelledby="salesModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title tx-bold" id="salesModalLabel">Create Team</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			<div class="modal-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
					<a class="nav-link active" id="salesgroup-tab" data-toggle="tab" href="#salesgroup" role="tab" aria-controls="salesgroup" aria-selected="true">Sales Group Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="manager-tab" data-toggle="tab" href="#manager" role="tab" aria-controls="manager" aria-selected="false">Managers</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="salesuser-tab" data-toggle="tab" href="#salesuser" role="tab" aria-controls="salesuser" aria-selected="false">Sales Users</a>
				  </li>
				</ul>
				<div class="tab-content bd-gray-300 bd-t-0 pd-20" id="myTabContent">
					<div class="tab-pane fade show active" id="salesgroup" role="tabpanel" aria-labelledby="salesgroup-tab">
						<form>
							<div class="form-group row">
								<label for="inputEmail3" class="col-md-3 col-form-label">Sales Group Name</label>
									<div class="col-md-9">
										<input type="email" class="form-control" id="inputEmail3">
									</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-md-3 col-form-label">Description</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="2"></textarea>
									</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="manager" role="tabpanel" aria-labelledby="manager-tab">
						<table class="table bd">
							<thead  class="bg-gray-200">
								<tr>
									<th>Name</th>
									<th>View Leads</th>
									<th>Modify Leads</th>
									<th>Add User</th>
									<th></th>
								</tr>
							</thead>  
							<tbody>
								
							</tbody>
						</table>
						<div>
							<button class="btn btn-light tx-black btn-xs rounded-0" data-toggle="modal" data-target="#addmanagerModal">Add Manager</button>
						</div>
					
					</div>
					<div class="tab-pane fade" id="salesuser" role="tabpanel" aria-labelledby="salesuser-tab">
						<div class="row">
							<div class="col-5">
								<h6>Available User</h6>
									<div class="input-group">
									  <input type="text" class="form-control rounded-0" placeholder="Type here to search" aria-label="Recipient's username" aria-describedby="button-addon2">
									  <div class="input-group-append">
										<button class="btn btn-light form-control rounded-0" type="button" id="button-addon2"><i class="fa fa-search fa-xs"></i></button>
									  </div>
									</div>
									<div class="bd ht-200">
										<select class="form-control rounded-0">
											<option selected>Skill Lync</option>
										</select>
									</div>
							</div>
							<div class="col-2 mg-t-auto mg-b-auto">
								<div>
									<i class="fa fa-chevron-circle-right fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move right"></i>
								</div>
								<div>
									<i class="fa fa-chevron-circle-left fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move left"></i>
								</div>
							</div>
							<div class="col-5">
								<h6>Assigned User</h6>
									<div class="input-group">
									  <input type="text" class="form-control rounded-0" placeholder="Type here to search" aria-label="Recipient's username" aria-describedby="button-add">
									  <div class="input-group-append">
										<button class="btn btn-light form-control rounded-0" type="button" id="button-add"><i class="fa fa-search fa-xs"></i></button>
									  </div>
									</div>
									<div class="bd ht-200">
								
									</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="modal-footer bg-light justify-content-center">
					<div>
						<button type="button" class="btn btn-primary btn-xs rounded-0" data-dismiss="modal">Save and Add New</button>
						<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Save and Close</button>
						<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Cancel</button>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
<!--/modal-->

<!--Add manager modal-->
<div class="modal fade" id="addmanagerModal" tabindex="-1" role="dialog" aria-labelledby="addmanagerModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title" id="addmanagerModalLabel">Add Manager to this group</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			<div class="modal-body mg-b-10">
				<div>
					<input class="col-1" type="checkbox">
					<a href="#">View all leads of a group</a>
				</div>
				<div>
					<input class="col-1" type="checkbox">
					<a href="#">Modify all leads of a group</a>
				</div>
				<div>
					<input class="col-1" type="checkbox">
					<a href="#">Add user to group</a>
				</div>
					
			</div>
				<div class="modal-footer bg-light justify-content-center">
					<div>
						<button type="button" class="btn btn-primary btn-xs rounded-0">Save</button>
					</div>
				
				</div>
		</div>
	</div>
</div>
<!--/Add manager modal-->

<!--edit modal-->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title tx-bold" id="editModalLabel">Edit Sales Group</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			<div class="modal-body mg-b-10">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
					<a class="nav-link active" id="groupdetails-tab" data-toggle="tab" href="#groupdetails" role="tab" aria-controls="groupdetails" aria-selected="true">Sales Group Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="editmanager-tab" data-toggle="tab" href="#editmanager" role="tab" aria-controls="editmanager" aria-selected="false">Managers</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="editsalesuser-tab" data-toggle="tab" href="#editsalesuser" role="tab" aria-controls="editsalesuser" aria-selected="false">Sales Users</a>
				  </li>
				</ul>
				<div class="tab-content bd-gray-300 bd-t-0 pd-20" id="myTabContent">
					<div class="tab-pane fade show active" id="groupdetails" role="tabpanel" aria-labelledby="groupdetails-tab">
						<form>
							<div class="form-group row">
								<label for="salesgroup" class="col-md-3 col-form-label">Sales Group Name</label>
									<div class="col-md-9">
										<input type="email" class="form-control" id="salesgroup">
									</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label">Description</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="2"></textarea>
									</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="editmanager" role="tabpanel" aria-labelledby="editmanager-tab">
						<table class="table bd">
							<thead  class="bg-gray-200">
								<tr>
									<th>Name</th>
									<th>View Leads</th>
									<th>Modify Leads</th>
									<th>Add User</th>
									<th></th>
								</tr>
							</thead>  
							<tbody>
								
							</tbody>
						</table>
						<div>
							<button class="btn btn-light tx-black btn-xs rounded-0" data-toggle="modal" data-target="#addmanagerModal">Add Manager</button>
						</div>
					
					</div>
					<div class="tab-pane fade" id="editsalesuser" role="tabpanel" aria-labelledby="editsalesuser-tab">
						<div class="row">
							<div class="col-5">
								<h6>Available User</h6>
									<div class="input-group">
									  <input type="text" class="form-control rounded-0" placeholder="Type here to search" aria-label="Recipient's username" aria-describedby="button-addon">
									  <div class="input-group-append">
										<button class="btn btn-light form-control rounded-0" type="button" id="button-addon"><i class="fa fa-search fa-xs"></i></button>
									  </div>
									</div>
									<div class="bd ht-200">
										<select class="form-control rounded-0">
											<option selected>Skill Lync</option>
										</select>
									</div>
							</div>
							<div class="col-2 mg-t-auto mg-b-auto">
								<div>
									<i class="fa fa-chevron-circle-right fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move right"></i>
								</div>
								<div>
									<i class="fa fa-chevron-circle-left fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move left"></i>
								</div>
							</div>
							<div class="col-5">
								<h6>Assigned User</h6>
									<div class="input-group">
									  <input type="text" class="form-control rounded-0" placeholder="Type here to search" aria-label="Recipient's username" aria-describedby="button-addon2">
									  <div class="input-group-append">
										<button class="btn btn-light form-control rounded-0" type="button" id="button-addon2"><i class="fa fa-search fa-xs"></i></button>
									  </div>
									</div>
									<div class="bd ht-200">
								
									</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="modal-footer bg-light justify-content-center">
					<div>
						<button type="button" class="btn btn-primary btn-xs rounded-0" data-dismiss="modal">Save and Add New</button>
						<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Save and Close</button>
						<button type="button" class="btn btn-white btn-xs rounded-0" data-dismiss="modal">Cancel</button>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
		
<!--/edit modal-->
<!--Delete modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title" id="exampleModalLabel">Delete Sales Group</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			<div class="modal-body mg-b-10">
				<p>'HEV' Sales Group has 1 user(s) assigned under it. Please un-assign them before you delete the Sales Group.</p>
			</div>
				<div class="modal-footer bg-light justify-content-center">
					<div>
						<button type="button" class="btn btn-primary btn-xs rounded-0">OK</button>
					</div>
				
				</div>
		</div>
	</div>
</div>
<!--/Delete modal-->

<!--set permission modal-->
<div class="modal fade bd-example-modal-lg" id="setpermissionModal" tabindex="-1" role="dialog" aria-labelledby="setpermissionModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title" id="exampleModalLabel">Apply Permission Template for HEV</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			<div class="modal-body mg-b-10">
				<div class="row">
							<div class="col-5">
								<h6>Templates Available</h6>
									<div class="bd ht-300">
										<div class="pd-10 bd-b">
										<span>Export permission for ashok and ashwin</span>
										<a href="" class="float-right">Add</a>
										</div>
										<div class="pd-10 bd-b">
										<span>FB Lead Connector</span>
										<a href="" class="float-right">Add</a>
										</div>
										<div class="pd-10 bd-b">
										<span>Export permission for ashok and ashwin</span>
										<a href="" class="float-right">Add</a>
										</div>
									
									</div>
							</div>
							<div class="col-2 mg-t-auto mg-b-auto">
								<div>
									<i class="fa fa-chevron-circle-right fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move right"></i>
								</div>
								<div>
									<i class="fa fa-chevron-circle-left fa-2x text-secondary d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Move left"></i>
								</div>
							</div>
							<div class="col-5">
								<h6>Applied Templates for Group</h6>
									
									<div class="bd ht-300">
								
									</div>
							</div>
						</div>
			
			</div>
				<div class="modal-footer bg-light">
					
					<div>
						<button type="button" class="btn btn-xs bd-0" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary btn-xs rounded-0" data-dismiss="modal">Save</button>
					</div>
					
				
				</div>
		</div>
	</div>
</div>
<!--/set permission modal-->

<!--/Sales Group-->
