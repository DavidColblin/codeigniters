<html>
<head>
<title>Welcome to CodeIgniter</title>


</head>
<body>

<h1>Trial no2</h1>

<?php echo form_open('site/insert');?>
	<input type='text' name='insert'/>
	<input type='submit'/>
</form>

<?php

	
	foreach($data2 as $row){
		print "<a href='". site_url(). "/site/delete/".$row->id ."/dsa'>";
		print $row->id . " : " .$row->name. "</a><br/>";
	}
	
?>


<a href=<?php echo site_url(); ?>>back to index</a>
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
a{
	text-decoration: none;
	padding: 1em;
}

</style>
</body>
</html>