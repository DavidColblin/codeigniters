<html>
<head>
<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}


h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}
</style>
</head>
<body>

<h1>Welcome to The Test Page!</h1>
tests:
		<?php foreach($data as $row) : ?>
			<h1><?php echo "name:". $row->name;
						echo "<br/>id: " . $row->id; ?></h1>
		<?php endforeach; ?>

</body>
</html>