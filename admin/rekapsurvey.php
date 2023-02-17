<style>
	.btn {
  display: inline-block;
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: #5cb85c; 
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
  margin-top:10px;
  margin-bottom: 10px;
  color: white;
}
@font-face {
  font-family: 'Glyphicons Halflings';

  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;

  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
</style>
<br>
<br>
<?php
error_reporting(0);


include "../koneksi.php";

$hasil = mysqli_query($koneksi,"SELECT * FROM jawaban_skm");
$date = date('Y-m-d');


echo "<center><table border=0 cellpadding=10 cellspacing=5 bgcolor= #e6e6e6>
		<tr >
			<td colspan='8'  bgcolor=#337ab7 style='border: none ;color:white;'>
			<a href='index.php?p=jawaban'>
			<button style='margin-right:230px;' class='btn'><span class='glyphicon glyphicon-arrow-left'></span> Kembali</button>
			</a>
			<b><font size=5>REKAP KUISIONER RESPONDEN</font></b>
			<a target='_blank' href='export.php'>
			<button style='margin-left:230px;' class='btn'><span class='glyphicon glyphicon-print'></span> Cetak</button></a>
			</td>
		</tr>
		<tr>
			<td colspan=2>Dicetak : <b>$date</b></td>
		</tr>
		
		<tr>
			<td>
				<table cellpadding=2 border=2 bgcolor='#fff'>
					<tr>
					<td bgcolor=#c6e1f2 align=center><b>NO</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Nama</b></td>
					<td bgcolor=#c6e1f2 align=center><b>E-mail</b></td>
					<td bgcolor=#c6e1f2 align=center><b>Usia</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Pendidikan</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Pekerjaan</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Jenis Kelamin</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Sumber Layanan</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Perbaikan</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Saran</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Rating</b></td>
                    <td bgcolor=#c6e1f2 align=center><b>Tanggal Pengisian</b></td>
					<tr>
		";
$no = 1;
while($oke = mysqli_fetch_array($hasil)){
		echo "<tr valign=top>
			<td align='center'>$no</td>
			<td align='center'>$oke[nama]</td>
            <td align='center'>$oke[email]</td>
			<td align='center' >$oke[usia]</td>
            <td align='center' >$oke[pendidikan]</td>
            <td align='center' >$oke[pekerjaan]</td>
            <td align='center' >$oke[jenis_kelamin]</td>
            <td align='center' >$oke[sumber_layanan]</td>
            <td align='center' >$oke[perbaikan]</td>
            <td align='center' >$oke[saran]</td>
            <td align='center' >$oke[rating]</td>
			<td align='center'>$oke[CreatedDate]</td>
		  </tr>";	 
		$no++;
}
$data = mysqli_query($koneksi,"SELECT SUM(rating) AS total_rating FROM jawaban_skm"); 
$hitung = mysqli_fetch_array($data);
$rating = $hitung['total_rating'];
$total_rating = $rating/$no;

?>
<tr align='center'>
	
		<td bgcolor=#c6e1f2 colspan='10'><b>Total</b></td>
		<td bgcolor=#c6e1f2><b> <?php echo round( $total_rating,1); ?> </b></td>
        <td bgcolor=#c6e1f2><b></b></td>
		</tr>
	</table>
	</td>
	</tr>
	</table>
	<center>
