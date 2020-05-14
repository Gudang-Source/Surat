<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> Disposisi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo $this->session->flashdata('alert'); ?>
      <!-- Pencarian Default box -->
      
      <!-- /.box -->


      <!-- Tabel -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="masuk/tambah" class="btn btn-primary" data-toggle="tooltip" title="klik untuk tambah data baru"><i class="fa fa-plus"></i> Tambah Data</a>
              <button id="#btnToE" type="button" class="btn btn-primary" data-toggle="tooltip" title="klik untuk memulai export"><i class="fa fa-file-excel-o"></i> Export Excel</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
        					<th>NO</th>
        					<th>FILE SURAT MASUK</th>
        					<th>NOMOR SURAT MASUK</th>
        					<th>UPDATE</th>
        					<th>FILE DISPOSISI</th>
        					<th>NOMOR DISPOSISI</th>
        					<th>ISI DIPOSISI</th>
        					<th>PERIHAL SURAT MASUK</th>
        					<th>KE SUB BAGIAN</th>
        					<th>ASAL</th>
        					<th>TANGGAL TERIMA</th>
        					<th>TANGGAL ARSIP</th>
        					<th>PILIHAN</th>
				
                </tr>
                </thead>
                <tbody>
                <?php $no = 0 ; foreach($dis->result() as $d) { $no++;?>
        					<tr>
        						<td><?php echo $no; ?></td>
        						
        						<td>
        							<a href="<?= base_url() ?>arsip_masuk/<?= $d->upload_surat_masuk  ?>" title="Klik untuk melihat surat masuk" class="popupwindow btn btn-primary" rel="windowCenter"><i class="fa fa-file-pdf-o"></i></a>
        						</td>
        						<td>
        						    <?php echo $d->nomor_surat_masuk; ?>
        						</td>
        						<td>
        							<a href="<?= base_url() ?>disposisi/edit/<?= $d->nomor_disposisi ?>" title="Klik untuk memulai edit data" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
        						</td>
        						<td>
        							<?php if( !empty($d->perihal_disposisi) && empty($d->upload_disposisi) ){  ?>
        								<a href="<?= base_url() ?>disposisi/upload/<?= $d->id_disposisi ?>" title="Klik untuk memulai mengunggah scan surat" class="btn btn-primary" ><i class="fa fa-plus"></i></a>
        							<?php }elseif(!empty($d->upload_disposisi)){ ?>

        								<a title="Klik untuk melihat disposisi" class="popupwindow btn btn-primary" rel="windowCenter" href="<?= base_url() ?>disposisi/arsip_disposisi/<?php echo $d->upload_disposisi ?>" ><i class="fa fa-file-pdf-o"></i></a>
        								<a class="delete pull-right btn btn-danger" href="<?= base_url() ?>disposisi/hapusfile/<?= $d->id_disposisi ?>/<?= $d->upload_disposisi ?>" title="Klik untuk menghapus file arsip" ><i class="fa fa-trash"></i></a>

        							<?php } ?>
        						</td>
        						<td>
        							<?php echo $d->nomor_disposisi; ?> 
        						</td>
        						<td><?php echo $d->perihal_disposisi; ?></td>
        						<td><?php echo $d->perihal_surat_masuk; ?></td>
        						<td><?php echo $d->kontak2; ?></td>
        						<td><?php echo $d->kontak; ?></td>
        						<td><?php echo date('d-M-Y',strtotime($d->tgl_diterima_disposisi)); ?></td>
        						<td><?php echo date('d-M-Y',strtotime($d->tgl_arsip_disposisi)); ?></td>
        						
        						<td>

        							<a class="delete pull-right btn btn-danger" href="<?= base_url() ?>disposisi/hapus/<?= $d->id_disposisi ?>/<?= $d->upload_disposisi ?>" title="Klik untuk menghapus data arsip" ><i class="fa fa-trash"></i></a>
        						</td>
        					</tr>

        				<?php } ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
