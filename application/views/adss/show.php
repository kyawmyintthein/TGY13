<html>
<head>
	<title>Car Detaail</title>
</head>
<body>
<table>
	<tr>
			<th width="213" align="right" scope="row">Ads Type</th>
			<td width="161"><?php echo $ads->company_name ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">owner_name</th>
				<td><?php echo $ads->owner_name ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">phone</th>
				<td><?php echo $ads->phone ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">email</th>
					<td><?php echo $email->email ?></td>
			</tr>
			<tr>
				<th width="213" align="right" scope="row">logo</th>
				<td><?php echo $ads->logo ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">created_by</th>
				<td><?php echo $ads->created_by ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">created_at</th>
					<td><?php echo $ads->created_at ?></td>
			</tr>
			<tr>
				<th align="right" scope="row">&nbsp;</th>
				<td>
					<a href="<?php echo base_url(); ?>ads_controller/"/><input type="submit" name="submit" value="Ok" </a></td>
			</tr>
</table>
</body>
</html>
