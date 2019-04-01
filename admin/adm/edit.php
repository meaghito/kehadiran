<h3>Edit Data</h3>
<hr>
<div class="col-md-12">
<?php $pecah = $connection->query("SELECT * FROM kehadiran WHERE id_auto='$_GET[idm]'");
		$ambil = $pecah->fetch_assoc();

 ?>

<div class="col-md-12">
	
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">NIP</label>
                      <input type="number" name="nip" value="<?php echo $ambil ['nip']; ?>" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Nama Lengkap</label>
                      <input type="text" name="nama" value="<?php echo $ambil ['nama']; ?>" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label>Tanggal Masuk</label>
                      <input type="text" name="tanggal_m" value="<?php echo $ambil ['tanggal_m']; ?>" id="m_date" class="form-control">
                  	</div>
                    </div>
					<div class="col-md- form-group">
                      <label for="m_phone">Tanggal selesai</label>
                      <input type="text" name="tanggal_s" value="<?php echo $ambil ['tanggal_s']; ?>" class="form-control" id="m_tanggal">
                    </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="">Jenis Ket.</label>
                       <select name="jenis_ket"  id="pukul" class="form-control">
                       	<option ><?php echo $ambil ['jenis_ket']; ?></option>

                      <?php $jenisket = $connection->query("SELECT * FROM jenis_keterangan ");
                      	while ($pecah = $jenisket->fetch_assoc())
                      	 {

                      	 ?>
                        <option value="<?php echo $pecah ['id_auto']; ?>">
                            	<?php echo $pecah ['ket']; ?>
                        </option>
                        <?php } ?>
                      </select>                     
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="">Sub Ket.</label>

                       <select name="sub_ket" id="pukul" class="form-control">
                       	       <option ><?php echo $ambil ['sub_ket']; ?></option>
                      <?php $subket = $connection->query("SELECT * FROM sub_jenis_ket");
                      	while ($pecah = $subket->fetch_assoc())
                      	 {
                      	 ?>
                        <option value="<?php echo $pecah ['id_auto']; ?>">
                            	<?php echo $pecah ['keterangan']; ?>
                        </option>
                        <?php } ?>
                      </select> 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">No Surat/Cuti/Tugas/</label>
                      <input type="text" name="no_surat" value="<?php echo $ambil ['no_surat_cuti_tugas']; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Keterangan</label>
                      <textarea class="form-control" name="keterangan"  id="m_message" cols="30" >
                      	<?php echo $ambil ['keterangan'] ; ?>
                      </textarea>
                    </div>
                  </div>
                  
                    <div class="col-md-12 form-group">
                      <button class="btn btn-theme btn-lg" name="simpan">tambahkan</button>
                    </div>
                  </div>

                </form>

                <?php

                	if (isset($_POST['simpan'])) 
                	{
                	$nip = mysqli_real_escape_string($connection, $_POST['nip']);
                	$nama = mysqli_real_escape_string($connection, $_POST['nama']);
                	$tanggal_m = mysqli_real_escape_string($connection, $_POST['tanggal_m']);
                	$tanggal_s = mysqli_real_escape_string($connection, $_POST['tanggal_s']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
                	$jenis_ket = mysqli_real_escape_string($connection, $_POST ['jenis_ket']);
                	$ambil = $connection->query("SELECT * FROM jenis_keterangan WHERE id_auto ='$jenis_ket' ");
                	$pecah = $ambil->fetch_assoc();

                	$jenis_ket_fix = mysqli_real_escape_string($connection, $pecah ['ket']);
                	///////////////////////////////////////////////////////////////////////////////////////////
                	$sub_ket = mysqli_real_escape_string($connection, $_POST ['jenis_ket']);
                	$ambil = $connection->query("SELECT * FROM sub_jenis_ket WHERE id_auto ='$sub_ket' ");
                	$pecah = $ambil->fetch_assoc();

                	$sub_ket_fix = mysqli_real_escape_string($connection, $pecah ['keterangan']);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
                	$no_surat = mysqli_real_escape_string($connection, $_POST['no_surat']);
                	$ket = mysqli_real_escape_string($connection, $_POST ['keterangan']);

					date_default_timezone_set('Asia/Jakarta');
                    $tanggal_input = mysqli_real_escape_string($connection, date("y-m-d H:i:s"));

               		$connection->query("UPDATE kehadiran SET id_auto, nip ='$nip', nama = '$nama', tanggal_m = '$tanggal_m', tanggal_s = '$tanggal_s', jenis_ket = '$jenis_ket_fix', sub_ket = '$sub_ket_fix', no_surat_cuti_tugas = '$no_surat', keterangan ='$ket', $tanggal_input = '$tanggal_input' WHERE id_auto='$_GET[idm]' ");

                   	echo "<script>alert('Terimakasih,  Data Telah di perbaharui');</script>";
                    echo "<script>location='index.php?halaman=kehadiran-data';</script>";
                    }
                 ?>
</div>

</div>