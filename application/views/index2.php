<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Archive</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Student Management</h1>

	<div id="body">
	<form action="" method="POST">
	<table>
		<thead>
			<tr>
				<th></th>
				<th align="left"> Student Name </th>
				<th align="left"> Created Date </th>
			</tr>
		</thead>
	<tbody>
	<?php foreach ($results as $students) { ?>
		<tr>
			<td>
				<input type="checkbox" name="stud_id" value="<td><?php echo $students['id']?></td>"				/>
			</td>
			<td><?php echo $students['fname']?></td>
			<td><?php echo $students['mname']?></td>
			<td><?php echo $students['lname']?></td>
			<td><?php echo $students['bday']?></td>
			<td><?php echo $students['address']?></td>
			<td><?php echo $students['contact']?></td>
			<td><?php echo $students['pog']?></td>
			<td><?php echo $students['date_created']?></td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>
	<button type="submit" name="archive" value="archive" class="archive"> Archive </button>
	</form>
		
	</div>

	
</div>

</body>
</html>