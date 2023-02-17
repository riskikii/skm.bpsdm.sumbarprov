<div class="card-panel white hoverable " style="margin-top: 20px;">
<h3 style="text-align:center;">Data Responden</h3>
<div class="horizontal_center" style="border-top: 2px solid #afacac29; height: 2px; border-radius: 20px;"></div><br>
<a target="_blank" class="btn white-text" href="export.php">Rekap Survey</a>
<br> </br>
<table border="2" class="responsive-table striped highlight">
	<tr>
		<td><b>No</b></td>
		<td><b>Nama</b></td>
		<td><b>Sumber Layanan</b></td>
		<td><b>Perbaikan</b></td>
		<td><b>Saran</b></td>
		<td><b>Rating</b></td>
		<td><b>Aksi</b></td>
	</tr>
<?php 
$no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM jawaban_skm
	");

while ($r=mysqli_fetch_array($query)) { ?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $r['nama']; ?></td>
		<td><?php echo $r['sumber_layanan']; ?></td>
		<td><?php echo $r['perbaikan']; ?></td>
		<td><?php echo $r['saran']; ?></td>
		<td><?php echo $r['rating']; ?></td>
		<td>
			<a class="tombol oren white-text" href="index.php?p=inventaris_edit&id_inventaris=<?php echo $r['id_inventaris'] ?>">Detail</a>
		</td>
	</tr>
<?php } ?>

	</tr>
</table>
</div>