
	<div class="container main">
        <div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Edit Data Pelunasan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">

						<?= form_open('pelunasan/patch', ['class' => 'form-horizontal']) ?>
		 <?= validation_errors() ?>
		 <?= form_hidden('kode_pelunasan', $pelunasan->kode_pelunasan) ?>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">No. Surat Tugas</label>
									<div class="col-md-9">
                                        <input type="text" name="no_surat_tugas" value="<?= $pelunasan->no_surat_tugas ?>" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jenis Perjalanan</label>
									<div class="col-md-9">
                                        <?= form_dropdown('kode_jp', getDropDownList('jenis_perjalanan', ['kode_jp', 'nama_jp']), $pelunasan->kode_jp, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Kegiatan</label>
									<div class="col-md-9">
                                        <?= form_dropdown('kode_jk', getDropDownList('jenis_kegiatan', ['kode_jk', 'nama_jk']), $pelunasan->kode_jk, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Daerah Tujuan</label>
									<div class="col-md-9">
                                        <input type="text" class="form-control" name="daerah_tujuan" value="<?= $pelunasan->daerah_tujuan ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Waktu Berangkat</label>
									<div class="col-md-9">
                                        <input type="date" class="form-control" name="waktu_berangkat" value="<?= $pelunasan->waktu_berangkat ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Waktu Kembali</label>
									<div class="col-md-9">
                                        <input type="date" class="form-control" name="waktu_kembali" value="<?= $pelunasan->waktu_kembali ?>">
									</div>
								</div>
								<div class="form-group">
								    <p class="col-md-offset-1"> <strong>Pelunasan Kepada :</strong> </p>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama</label>
									<div class="col-md-9">
                                        <?= form_dropdown('kode_da', getDropDownList('data_anggota', ['kode_da', 'nama_da']), $pelunasan->kode_da, ['class' => 'form-control']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Waktu Pembayaran</label>
									<div class="col-md-9">
                                        <input type="date" class="form-control" name="waktu_pembayaran" value="<?= $pelunasan->waktu_pembayaran ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">No. Bukti</label>
									<div class="col-md-9">
                                        <input type="text" class="form-control" name="no_bukti" value="<?= $pelunasan->no_bukti ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Pelunasan (Rp.) </label>
									<div class="col-md-9">
                                        <input type="text" class="form-control" name="jumlah_pelunasan" value="<?= $pelunasan->jumlah_pelunasan ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Panjar (Rp.) </label>
									<div class="col-md-9">
                                        <input type="text" class="form-control" name="jumlah_panjar" value="<?= $pelunasan->jumlah_panjar ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Jumlah Sisa (Rp.) </label>
									<div class="col-md-9">
                                        <input type="text" class="form-control" name="jumlah_sisa" value="<?= $pelunasan->jumlah_sisa ?>">
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                                        <button type="submit" class="btn btn-default btn-md pull-right">Edit</button>
									</div>
								</div>
            <?= form_close() ?>

					</div>
				</div>
			</div>
		</div>

	</div>	<!--/.main-->
