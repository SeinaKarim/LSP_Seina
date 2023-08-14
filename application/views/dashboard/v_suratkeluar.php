<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Surat Masuk
			
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-9">
				
				<a href="<?php echo base_url().'dashboard/kategori_tambah'; ?>" class="btn btn-sm btn-primary">Tambah Data</a>

				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Surat Masuk</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th width="1%">NO</th>
									<th>No Surat</th>
									<th>Pengirim</th>
									<th>Waktu</th>
									<th>Tempat</th>
									<th>Lampiran</th>
									<th>Perihal</th>
									<th width="10%">OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								foreach($surat_masuk as $sm){ 
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $sm->no_surat_sm; ?></td>
										<td><?php echo $sm->pengirim_sm; ?></td>
										<td><?php echo $sm->waktu_sm; ?></td>
										<td><?php echo $sm->tempat_sm; ?></td>
										<td><?php echo $sm->lampiran_sm; ?></td>
										<td><?php echo $sm->perihal_sm; ?></td>
										<td>
											<a href="<?php echo base_url().'dashboard/sm_edit/'.$sm->id_sm; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
											<a href="<?php echo base_url().'dashboard/sm_hapus/'.$sm->id_sm; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						

					</div>
				</div>

			</div>
		</div>

	</section>

</div>