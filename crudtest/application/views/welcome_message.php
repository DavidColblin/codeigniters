<html>
<head>
<title>Welcome to CodeIgniter</title>

</head>
<body>

<h1>CRUD Testing page</h1>

<p> Data is: <?php echo $message; ?></p>

	<?php echo form_open('site/create');?>
			<h3>Insert</h3>
			<input type="text" name="insert"/>
			<input type="submit" />
		</form>
		<form action="delete" method="get">
			<h3>Delete</h3>
			<input type="text" name="delete"/>
			<input type="submit" />
		</form>
		<form action="update" method="get">
			<h3>Update</h3>
			<input type="text" name="update"/>
			<input type="submit" />
	<?php echo form_close();?>

<style type="text/css">

body {
 background-color: #000;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: silver;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</html>