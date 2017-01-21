<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Student and Update</title>

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
	.error{
		color: #f00;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Student Management</h1>

	<div id="body">
	<form action="" method="POST">
	<table>
	<tbody>
	<tr>
		<td>
	<input type="text" name="stud_id" placeholder="ID Number" />
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_username" placeholder="Student Username" /><?php echo form_error('stud_username', '<p class="error">', '</p>'); ?> Sample Format: lastname.firstname123
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_fname" placeholder="Enter First Name" /><?php echo form_error('stud_fname', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_mname" placeholder="Enter Middle Name" /><?php echo form_error('stud_mname', '<p class="error">', '</p>'); ?>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_lname" placeholder="Enter Last Name" /><?php echo form_error('stud_lname', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	<input type="password" name="stud_pass" placeholder="Enter Password" /><?php echo form_error('stud_pass', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	Date of Birth<br><input type="date" name="stud_bday" /><?php echo form_error('stud_bday', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_address" placeholder="Enter Address" /><?php echo form_error('stud_address', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_contact" placeholder="Enter Contact" /><?php echo form_error('stud_contact', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td>
	<input type="text" name="stud_pog" placeholder="Enter Parent/Guardian" /><?php echo form_error('stud_pog', '<p class="error">', '</p>'); ?>
		</td>
	</tr>
	<tr>
		<td> <br>
	<button type="submit" name="submit" value="save"> ADD </button>
		</td>
	</tr>
	
	</form>
		
	</div>

	
</div>

</body>
</html>