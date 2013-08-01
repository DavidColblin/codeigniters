<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home Page from Codeigniter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css" />
</head>
<body>
	<h1>Home Page</h1>
		
		<?php 
			$this->load->helper('form');
		?>
		
		<h1>Retrieved Records:</h1>
			<?php
			foreach($records as $rows){
				echo "<p><a href=". "site/delete/" . $rows->id . ">" . $rows->id ." : ".$rows->name ."</a></p>";
			}
			?>
			
		<h1>Create Records</h1>
			<?php 
				echo form_open('site/create/');
			?>
					<label for="name">Name:</label>
					<input type="text" name="createname"/>
					<input type="submit" />
				</form>
				
		<h1>Delete Records</h1>
			<p>to delete, click on the records links. thank yous.</p>
</body>
</html>