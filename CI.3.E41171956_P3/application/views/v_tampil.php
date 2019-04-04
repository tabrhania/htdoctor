<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Image</th>
			<th>Description</th>
		</tr>
		<?php 
		$no = 1;
		foreach($products as $u){ 
		?>
		<tr>
            <td><?php echo $no++ ?></td>
			<td><?php echo $u->name ?></td>
			<td><?php echo $u->price ?></td>
            <td><?php echo $u->image ?></td>
            <td><?php echo $u->description ?></td>
            <td>
            <?php echo anchor('crud/edit/'.$u->product_id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->product_id,'Hapus'); ?>		
			</td>
		</tr>
		</tr>
        <?php } ?>
	</table>
</body>
</html>