<h3>Data Kehadiran</h3><hr>

<div class="col-md-12">
	<div class="table-responsive">
		
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<td>No</td>
					<td>NIP</td>
					<td>Nama</td>
					<td>tanggal masuk</td>
					<td>tanggal selesai</td>
					<td>Jenis Keterangan</td>
					<td>Sub Jenis Keterangan</td>
					<td>No Surat cuti</td>
					<td>keterangan</td>
					<td>Tanggal</td>
					<td>act</td>
				</tr>
			</thead>
			<tbody>
			<?php $nomor=1; ?>
			<?php $ambil = $connection->query("SELECT * FROM kehadiran"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah ['nip']; ?></td>
					<td><?php echo $pecah ['nama']; ?></td>
					<td><?php echo $pecah ['tanggal_m']; ?></td>
					<td><?php echo $pecah ['tanggal_s']; ?></td>
					<td><?php echo $pecah ['jenis_ket']; ?></td>
					<td><?php echo $pecah ['sub_ket']; ?></td>
					<td><?php echo $pecah ['no_surat_cuti_tugas']; ?></td>
					<td><?php echo $pecah ['keterangan']; ?></td>
					<td><?php echo $pecah ['tanggal_input']; ?></td>
					<td width="90">
							
						<a href="index.php?halaman=edit-kehadiran&idm=<?php echo $pecah ['id_auto']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
						<a href="index.php?halaman=hapus-kehadiran&idm=<?php echo $pecah ['id_auto']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus" onclick="return confirm('yakin ingin menghapus data <?php echo $pecah['nip']; ?> akan anda hapus?')"><i class="fa fa-trash-o"></i></a>

					</td>
				</tr>
				<?php $nomor++; ?>
			<?php } ?>
			</tbody>
		</table>
		<a href="index.php?halaman=tambah-kehadiran" class="btn btn-theme">Tambah</a>


	</div>
</div>