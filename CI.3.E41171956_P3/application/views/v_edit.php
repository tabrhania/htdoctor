<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($products as $u){ ?>
	<form action="<?php echo site_url(). '/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Name</td>
				<td>
					<input type="hidden" name="product_id" value="<?php echo $u->product_id ?>">
					<input type="text" name="name" value="<?php echo $u->name ?>">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?php echo $u->price ?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $u->description ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
	</body>
</html>
