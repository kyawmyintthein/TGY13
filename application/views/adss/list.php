
<html>
<head>
<title>Car</title>
<script type="text/javascript">
	function show_confirm(act,gotoid)
	{
		if(act=="editform"){
			var r=true;
		
		}else if(act =="show"){ 
			var r=true;
		}else{
			var r=confirm("Do you really want to Delete?");
		}
		if (r==true)
		{
			window.location="<?php echo base_url();?>car_controller/"+act+"/"+gotoid;
		}
}
</script>

</head>

<body>
<h2>Cars List</h2>
<table width="600" border="1" cellpadding="5">
<tr>
<th scope="col">company_name</th>
<th scope="col">owner_name</th>
<th scope="col">phone</th>
<th scope="col">email</th>
<th scope="col">logo</th>
<th scope="col">created_by</th>
<th scope="col">created_at</th>
<th scope="col" colspan="3">Action</th>
</tr>

<?php foreach ($adss as $ads){ ?>

<tr>
<td><?php echo $ads->company_name; ?></td>
<td><?php echo $ads->owner_name; ?></td>
<td><?php echo $ads->phone; ?></td>
<td><?php echo $ads->email; ?></td>
<td><?php echo $ads->logo; ?></td>
<td><?php echo $ads->created_by; ?></td>
<td><?php echo $ads->created_at; ?></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('show',<?php echo $ads->ads_id;?>)">Detail	</a></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('editform',<?php echo $ads->ads_id;?>)">Edit</a></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('remove',<?php echo $ads->ads_id;?>)">Delete </a></td>
</tr>

<?php } ?>
<tr>
<td colspan="7" align="right"> <a href="<?php echo base_url(); ?>ads_controller/newform">Insert New User</a></td>
</tr>
</table>
</body>
</html>
