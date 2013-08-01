<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
</head>
<body>
	<h1>Welcome to Codeigniter AJAX with fallback w/o script</h1>
	
	
	<h3 id="textMessage"><?php if(isset($data)) 
									echo $data;
								else
									echo "Please enter your name"; ?>
	</h3>
	<?php echo form_open('site/form');
			echo form_input(array('name' => 'name', 'id' => 'name'), 'Enter your Name');
			echo form_submit(array('name' => 'submitBtn', 'id' => 'submitBtn'), 'Submit Name!');
		  echo form_close();
	?>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#submitBtn').click(function(){
				
				 var data_form = {
					 name : $("#name").val(),
					 ajax : '1'
				};
					
				$.ajax({
				   type: "POST",
				   url: "<?php echo site_url();?>/site/form",
				   data: data_form,
				   success: function(msg){
					 $('#textMessage').html(msg);
				   }
				  });
				 
				
				return false;
			});
		});
	</script>
</body>
</html>