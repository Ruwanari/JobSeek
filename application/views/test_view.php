<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $title;?>
<?php foreach($query as $row):?>
	<h2><?php echo $row->Name;?> </h2>
	<?php echo $row->Email; ?>
<?php endforeach;?>

</body>
</html>