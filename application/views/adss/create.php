<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New ads</title>
	</head>

<body>
	<form method="post" action="<?php echo base_url(); ?>ads_controller/create">
		<table width="400" border="0" cellpadding="5">
			<tr>
				<th width="213" align="right" scope="row">company_name</th>
				<td width="161"><input type="text" name="company_name" size="20" /></td>
			</tr>
			<tr>
				<th align="right" scope="row">owner_name</th>
				<td><input type="text" name="owner_name" size="20" /></td>
			</tr>
			<tr>
				<th align="right" scope="row">phone</th>
				<td><input type="text" name="phone" size="20" /></td>	
			</tr>
			<tr>
				<th align="right" scope="row">email</th>
					<td><input name="email" ></input></td>
			</tr>
			<tr>
				<th width="213" align="right" scope="row">logo</th>
				<td><textarea name="logo" rows="5" cols="20"></textarea></td>
			</tr>
			<tr>
				<th align="right" scope="row">created_by</th>
				<td><input type="text" name="created_by" size="20" /></td>	
			</tr>
			<tr>
				<th align="right" scope="row">created_at</th>
					<td><input name="created_at"></textarea></td>
			</tr>
			<tr>
				<th align="right" scope="row">&nbsp;</th>
				<td><input type="submit" name="submit" value="Save" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
