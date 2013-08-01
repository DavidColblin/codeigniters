<html>
<head>
	<style>
		h1 {
			font-family: tahoma;
		}
		body {
			background: silver;
			font-family: tahoma;
			padding: 0;
			margin: 0;
		}
		input{
			border: 2px solid grey;
			padding: 1em;
			font-size: 15px;
			-webkit-border-radius: 5px;
			display: block;
			margin: 1em
		}
		form{
			margin: 100px 100px;
		}
	</style>
</head>
<body>
	<h1>Form Validation Test</h1>
	<?php
	
		echo form_open('site/login');
		echo form_input('name',set_value('name'));
		echo form_input('email','');
		echo form_password('password');
		echo form_submit('submit', 'Submit Form');
		echo form_close();
	
	
		echo validation_errors();
		echo $message;
	?>
</body>

</html>