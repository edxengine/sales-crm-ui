<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!---  Roles Content --->
<h5 class="tx-semibold mg-t-5">
	Roles
	<a href="#">
		<i class="fa fa-question-circle tx-14 tx-gray-500" data-toggle="tooltip" data-placement="top" title="Help Documentation for this page"></i>
	</a>
</h5>		

<p class="mg-b-10">Manage permission template for roles</p>
<p class="bd-b"></p>
<!--/roles-->
 
<!--table-->
<table class="table tx-gray-700 bd">
	<thead  class="bg-gray-100">
		<tr>
			<th><h6 class="bd-r">Roles</h6></th>
			<th><h6 class="bd-r">Permission Template</h6></th>
			<th class="tx-center"><h6>Action</h6></th>
		</tr>
	</thead>  
	<tbody class="tx-13">
		<tr>
			<td>Sales Manager</td>
			<td>Sales Manager Permission</td>
			<td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="roles-dropdown" data-toggle="dropdown"></i>
				<div class="dropdown-menu tx-11" aria-labelledby="roles-dropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#rolespermissionModal">Set Permission</a>
				</div>
			</td>
		</tr>
		<tr>
			<td>Sales Manager</td>
			<td>Sales Manager Permission</td>
			<td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="roles-dropdown" data-toggle="dropdown"></i>
				<div class="dropdown-menu tx-11" aria-labelledby="roles-dropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#permissionModal">Set Permission</a>
				</div>
			</td>
		</tr>
		<tr>
			<td>Sales Manager</td>
			<td>Sales Manager Permission</td>
			<td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="roles-dropdown" data-toggle="dropdown"></i>
				<div class="dropdown-menu tx-11" aria-labelledby="roles-dropdown">
					<a class="dropdown-item" href="#">Set Permission</a>
				</div>
			</td>
		</tr>
		<tr>
			<td>Sales Manager</td>
			<td>Sales Manager Permission</td>
			<td class="tx-center"><i class="fa fa-cog fa-lg text-secondary" id="roles-dropdown" data-toggle="dropdown"></i>
				<div class="dropdown-menu tx-11" aria-labelledby="roles-dropdown">
					<a class="dropdown-item" href="#">Set Permission</a>
				</div>
			</td>
		</tr>
				
	</tbody>
</table>
<!--/table-->
	
 
<!--set permission modal-->
<div class="modal fade bd-example-modal-lg" id="rolespermissionModal" tabindex="-1" role="dialog" aria-labelledby="rolespermissionModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			  <div class="modal-header pd-y-10">
				<h5 class="modal-title" id="rolespermissionModalLabel">Apply Permission Template for Marketing User</h5>
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
								<h6>Applied Templates for User</h6>
									
									<div class="bd ht-300">
								
									</div>
							</div>
				</div>
			
			</div>
				<div class="modal-footer bg-light">
					
					<div>
						<button type="button" class="btn btn-xs bd-0" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary btn-xs rounded-0">Save</button>
					</div>
				</div>
		</div>
	</div>
</div>
<!--/set permission modal-->