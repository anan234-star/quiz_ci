<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo base_url().'Welcome' ?>">
		<h1>INPUT DATA BARANG</h1>
		<table>
			<tr>
				<td>
					KODE BARANG
				</td>
				<td>
					<input type="text" name="kdbarang">
				</td>
			</tr>
			<tr>
				<td>
					NAMA BARANG
				</td>
				<td>
					<input type="text" name="nmbarang">
				</td>
			</tr>
			<tr>
				<td>
					HARGA BARANG
				</td>
				<td>
					<input type="text" name="hrgbarang">
				</td>
			</tr>
			<tr>
				<td>
					JUMLAH BARANG
				</td>
				<td>
					<input type="text" name="jmlbarang">
				</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="kirim" value="KIRIM"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>