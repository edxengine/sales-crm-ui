
<?php if(sizeof($allData)>0){ foreach($allData as $key=>$value){ ?>
<tr>
	<td> 
		<div>
			<input class="select-check" type="checkbox">
				
			<i class="fa fa-file-alt pd-x-10"></i>
				
			<a href="#"><?php echo $value->ListName;?></a>
				
		</div>
	</td>
	<td>3 
		<i class="fa fa-refresh" data-toggle="tooltip" data-placement="top" title="Update member count for list 'Starred Leads.'"></i>
	</td>
	<td>Static</td>
	<td><?php echo $value->user;?>, <?php echo timeToDate($value->CreatedOn);?></td>
	<td><?php echo $value->user;?>, <?php echo timeToDate($value->ModifiedOn);?></td>
	<td>
		<span class="dropdown dropleft pos-absolute">
			<i class="fa fa-cog fa-lg text-secondary pd-l-15 dropdown-link delepopover_<?php echo $value->id; ?>" id="dropdownMenuButton" data-toggle="dropdown" data-poload="popover_<?php echo $value->id; ?>"></i>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" style="cursor:pointer;" onclick="editManagelist(<?php echo $value->id;?>,'<?php echo $value->ListName;?>', '<?php echo $value->ListDescription;?>');">Edit</a>
					<a class="dropdown-item" style="cursor:pointer;" onclick="deletePopover(<?php echo $value->id;?>);">Delete</a>
					<a class="dropdown-item" href="#">Send Email</a>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kaleyra_msg">Kaleyra Send Message</a>
					<div class="dropdown dropleft">
						<a class="dropdown-item dropdown-toggle" href="#" id="message_drop-left" data-toggle="dropdown">
						Messaging
						</a>
						<div class="dropdown-menu" aria-labelledby="message_drop-left">
							<a class="dropdown-item"  href="#"  data-toggle="modal" data-target="#send_sms_modal">Send SMS</a>
							<a class="dropdown-item"  href="#" data-toggle="modal" data-target="#whatsapp_sms">Whatsapp</a>
						</div>
					</div>
					
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#manage_add_tags_modal">Add Tag</a>
					
					
				</div>
		</span>
	</td>
</tr>

<?php } } ?>
