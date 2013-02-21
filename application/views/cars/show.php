<html>
<head>
	<title>Car Detaail</title>
</head>
<body>
<table>
	<tr>
			<th width="213" align="right" scope="row">Car Type</th>
			<td width="161"><?php echo $car->type ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">min_price</th>
				<td><?php echo $car->min_price ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">min_price</th>
				<td><?php echo $car->min_price ?></td>	
			</tr>
			<tr>
				<th align="right" scope="row">owner_name</th>
					<td><?php echo $car->owner_name ?></td>
			</tr>
			<tr>
				<th width="213" align="right" scope="row">description</th>
				<td><?php echo $car->description ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">phone</th>
				<td><?php echo $car->phone ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">email</th>
				<td><?php echo $car->email ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">created_by</th>
				<td><?php echo $car->created_by ?></td>	
			</tr>
			<tr>
				<th align="right" scope="row">created_at</th>
					<td><?php echo $car->created_at ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">&nbsp;</th>
				<td>
					<a href="<?php echo base_url(); ?>/car_controller/"/><input type="submit" name="submit" value="Ok" </a></td>
			</tr>
</table>
</body>
</html>