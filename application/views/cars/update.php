<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Car</title>
	</head>

<body>
	<form method="post" action="<?php echo base_url(); ?>edit">
		<table width="400" border="0" cellpadding="5">
			<tr>
				<th width="213" align="right" scope="row">Car Type</th>
				<td><?php echo $car->type; ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">min_price</th>
				<td><input type="text" name="min_price" size="20" value="<?php echo $car->min_price; ?>"/></td>
			</tr>
			<tr>
				<th align="right" scope="row">min_price</th>
				<td><input type="text" name="min_price" size="20" value="<?php echo $car->max_price; ?>"/></td>	
			</tr>
			<tr>
				<th align="right" scope="row">owner_name</th>
					<td><input name="owner_name" value="<?php echo $car->owner_name; ?>"></input></td>
			</tr>
			<tr>
				<th width="213" align="right" scope="row">description</th>
				<td><textarea name="description" rows="5" cols="20" value="<?php echo $car->description; ?>"></textarea></td>
			</tr>
			<tr>
				<th align="right" scope="row">phone</th>
				<td><input type="text" name="phone" size="20" value="<?php echo $car->phone; ?>"/></td>
			</tr>
			<tr>
				<th align="right" scope="row">email</th>
				<td><input type="text" name="email" size="20" value="<?php echo $car->email; ?>"/></td>
			</tr>
			<tr>
				<th align="right" scope="row">created_by</th>
				<td><input type="text" name="created_by" size="20" value="<?php echo $car->created_by; ?>"/></td>	
			</tr>
			<tr>
				<th align="right" scope="row">created_at</th>
					<td><input name="created_at" value="<?php echo $car->created_at; ?>"></input></td>
			</tr>
			<tr>
				<th align="right" scope="row">&nbsp;</th>
				<td><input type="submit" name="submit" value="Save" /></td>
			</tr>
		</table>
	</form>
</body>
</html>