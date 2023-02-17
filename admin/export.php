<?php
include "../koneksi.php";
?>
<html>
<head>
  <title>Survey Kepuasan Masyarakat BPSDM Sumatera Barat </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<style>
    body{
        margin: 10px 20px 10px 20px;
    }
</style>
<body>
<div>
			<h2 align="center">Rekap Survey Kepuasan Masyarakat BPSDM Sumatera Barat</h2>
            <br>
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0" >
                        <thead>  
                            <tr>
                                <th><b>NO</b></th>
                                <th><b>Nama</b></th>
                                <th><b>E-mail</b></th>
                                <th><b>Usia</b></th>
                                <th><b>Pendidikan</b></th>
                                <th><b>Pekerjaan</b></th>
                                <th><b>Jenis Kelamin</b></th>
                                <th><b>Sumber Layanan</b></th>
                                <th><b>Perbaikan</b></th>
                                <th><b>Saran</b></th>
                                <th><b>Rating</b></th>
                                <th><b>Tanggal Pengisian</b></th>
                            </tr>
                        </thead>  
                        <tbody>
                            <?php
                            $hasil = mysqli_query($koneksi,"SELECT * FROM jawaban_skm");
                            $date = date('Y-m-d');
                            $no = 1;
                            while($oke = mysqli_fetch_array($hasil)){
                            ?>
                            <tr><td><?php echo $no; ?></td>
                                <td><?php echo $oke['nama']; ?></td>
                                <td><?php echo $oke['email']; ?></td>
                                <td><?php echo $oke['usia']; ?></td>
                                <td><?php echo $oke['pendidikan']; ?></td>
                                <td><?php echo $oke['pekerjaan']; ?></td>
                                <td><?php echo $oke['jenis_kelamin']; ?></td>
                                <td><?php echo $oke['sumber_layanan']; ?></td>
                                <td><?php echo $oke['perbaikan']; ?></td>
                                <td><?php echo $oke['saran']; ?></td>
                                <td><?php echo $oke['rating']; ?></td>
                                <td><?php echo $oke['CreatedDate']; ?></td>
                            </tr> 
                            <?php  
                            $no++;
                            }
                            ?>
                        </tbody>
                    </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>