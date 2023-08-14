<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Surat Masuk
		</h1>
	</section>

	<section class="content">

		<div class="row">
			<div class="col-lg-6">
				<a href="<?php echo base_url().'dashboard/suratmasuk'; ?>" class="btn btn-sm btn-primary">Kembali</a>
				
				<br/>
				<br/>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Surat Masuk</h3>
					</div>
					<div class="box-body">
						
						
						<form method="post" action="<?php echo base_url('dashboard/kategori_aksi') ?>">
							<div class="box-body">
								<div class="form-group">
									<label>No Surat</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="Masukkan no surat ..">
									<?php echo form_error('suratmasuk'); ?>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Pengirim</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="Masukkan  pengirim..">
									<?php echo form_error('suratmasuk'); ?>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Waktu</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="waktu ..">
									<?php echo form_error('suratmasuk'); ?>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Tempat</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="Tempat ..">
									<?php echo form_error('suratmasuk'); ?>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Lampiran</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="Lampiran ..">
									<?php echo form_error('Lampiran'); ?>
								</div>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>Perihal</label>
									<input type="text" name="suratmasuk" class="form-control" placeholder="Perihal ..">
									<?php echo form_error('kategori'); ?>
								</div>
							</div>

							<div class="box-footer">
								<input type="submit" class="btn btn-success" value="Simpan">
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>

	</section>

</div>