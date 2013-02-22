
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
<th scope="col">type</th>
<th scope="col">min_price</th>
<th scope="col">max_price</th>
<th scope="col">owner_name</th>
<th scope="col">description</th>
<th scope="col">phone</th>
<th scope="col">email</th>
<th scope="col">created_by</th>
<th scope="col">created_at</th>
<th scope="col" colspan="3">Action</th>
</tr>

<?php foreach ($cars as $car){ ?>

<tr>
<td><?php echo $car->type; ?></td>
<td><?php echo $car->min_price; ?></td>
<td><?php echo $car->max_price; ?></td>
<td><?php echo $car->owner_name; ?></td>
<td><?php echo $car->description; ?></td>
<td><?php echo $car->phone; ?></td>
<td><?php echo $car->email; ?></td>
<td><?php echo $car->created_by; ?></td>
<td><?php echo $car->created_at; ?></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('show',<?php echo $car->car_id;?>)">Detail	</a></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('editform',<?php echo $car->car_id;?>)">Edit</a></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('remove',<?php echo $car->car_id;?>)">Delete </a></td>
</tr>

<?php } ?>
<tr>
<td colspan="7" align="right"> <a href="<?php echo base_url(); ?>car_controller/newform">Insert New User</a></td>
</tr>
</table>
</body>
</html>
