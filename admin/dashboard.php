<?php 
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.dashboard {
			padding: 20px 15px;
			width: 85%;
			margin: auto;
			
		}

		@media (max-width: 1280px) {
			.dashboard {
				width: 100%;
			}
		}

		.dashboard .card {
			cursor: pointer
		}

		.dashboard .card .row {
			margin-bottom: 0;
		}

		.dashboard .card-stats-number {
			margin: 0;
			font-weight: bold;
		}

		.dashboard .icon {
			height: 140px;
		}

		.dashboard .icon {
			width: 100px;
		}

		.dashboard .icon i {
			width: 100%;
			text-align: center;
			color: rgba(0,0,0,.25)
		}
	</style>
</head>
<body>


	<div class="row" style="margin-top:20px;">

		<div class="col s12 m6 l4" >
			<div class="card " >
				<!-- card text content -->
				<div class="card-content activator putih">
					<span class="card-title">
						<p>Responden</p>
					</span>
					<?php 
					$data = mysqli_query($koneksi,"SELECT * FROM jawaban_skm"); 
					$jumlah = mysqli_num_rows($data);?>
					<h5><i class='material-icons'>people</i> <?php echo $jumlah; ?></h5>
				</div>

				<!--   card reveal content -->
					<div class="card-content">
						<div class="card-action ">
							<a href="index.php?p=inventaris " class="waves-effect waves-light btn oren">view</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 m6 l4">
				<div class="card premium z-depth-2">
					<!-- card text content -->
					<div class="card-content activator putih">
						<span class="card-title">
							<p>Rating</p>
						</span>
						<?php 
						$data = mysqli_query($koneksi,"SELECT SUM(rating) AS total_rating FROM jawaban_skm"); 
						$hitung = mysqli_fetch_array($data);
					// menghitung data barang
						$rating = $hitung['total_rating'];
						$total_rating = $rating/$jumlah;
						?>
						<h5><i class='material-icons'>star</i> <?php echo round( $total_rating,1); ?></h5>
					</div>
						<div class="card-content">
							<div class="card-action">
								<a href="index.php?p=inventaris" class="waves-effect waves-light btn oren">view</a>
							</div>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card premium z-depth-2">
						<div class="card-content activator putih">
							<span class="card-title">
								<p>Perbaikan</p>
							</span>
							<?php 
							$sql = mysqli_query($koneksi,"SELECT perbaikan, count(perbaikan) as jumlah FROM jawaban_skm GROUP BY perbaikan ORDER BY jumlah DESC"); 
							$data = mysqli_fetch_array($sql);
							$perbaikan = $data['perbaikan'];
							?>
							<h5><i class='material-icons'>supervisor_account</i> <?php echo $perbaikan; ?></h5>
						</div>

						<!--   card reveal content -->
						<div class="card-reveal" style="font-family: helvetica;">
							<span class="card-title">
								<i class='fa fa-times right'></i>
								<div>Rekap Survey</div>
							</span>
							<?php 
							$no = 1;
							$query = mysqli_query($koneksi,"SELECT * FROM petugas where id_level=2;
								"); 

								while ($r = mysqli_fetch_array($query)) { ?>
									<tr>

										<p> <?php echo $no++,". ",  $r['nama_petugas'];?></p>
									</tr>
								<?php } ?>

							</div>
							<div class="card-content">
								<div class="card-action">
									<a href="index.php?p=petugas" class="waves-effect waves-light btn oren">view</a>
								</div>
							</div>

						</div>
					</div>

				</div>

				<script type="text/javascript" src="../js/materialize.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('.fixed-action-btn').openFAB();
						$('.fixed-action-btn').closeFAB();
					});


					$(".card").mouseenter(function (e) {
						if ($(this).find('> .card-reveal').length) {
							if ($(e.target).is($('.card .activator')) || $(e.target).is($('.card .activator i'))) {

								$(this).find('.card-reveal').css({display: 'block'}).velocity("stop", false).velocity({translateY: '-100%'}, {duration: 300, queue: false, easing: 'easeInOutQuad'});
							}
						}

						$('.card-reveal').closest('.card').css('overflow', 'hidden');

					});

					$(".card").mouseleave(function () {
    				// Make Reveal animate down and display none
    				$(this).find('.card-reveal').velocity(
    					{translateY: 0},
    					{
    						duration: 225,
    						queue: false,
    						easing: 'easeInOutQuad',
    						complete: function () {
    							$(this).css({display: 'none'});
    						}
    					});
    			});
    		</script>
    	</body>
    	</html>