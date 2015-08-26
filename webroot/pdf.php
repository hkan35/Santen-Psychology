<html>
<head>
	<style>
	body {font-family:Helvetica, Arial, sans-serif; font-size:10pt;}
	table {width:100%; border-collapse:collapse; border:1px solid #CCC;}
	td {padding:5px; border:1px solid #CCC; border-width:1px 0;}
	</style>
</head>
<body>

	<h1>Form Results</h1>
	
	<table>
		<tr>
			<td>Name:</td>
			<td><?php echo $post->name; ?></td>
			<td>Email:</td>
			<td><?php echo $post->email; ?></td>
		</tr>
		<tr>
			<td>Favorite Language:</td>
			<td colspan="3"><?php echo $post->language; ?></td>
		</tr>
		<tr>
			<td>About Yourself:</td>
			<td colspan="3"><?php echo $post->about; ?></td>
		</tr>
	</table>
	
	<p>You can make anything you want b/c dompdf accepts almost all 2.1 CSS attributes and selectors and almost all HTML elements.</p>

</body>
</html>