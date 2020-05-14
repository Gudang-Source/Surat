<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope-o"></i> Surat Keluar
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
              <a href="<?= base_url() ?>keluar/tambah" class="btn btn-primary" data-toggle="tooltip" title="klik untuk tambah data baru"><i class="fa fa-plus"></i> Tambah Data</a>
              <a id="#btnToE" href="#" class="btn btn-primary" data-toggle="tooltip" title="klik untuk memulai export"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
        					<th>NO</th>
        					<th>FILE</th>
        					<th>NOMOR SURAT</th>
        					<th>PERIHAL</th>
        					<th>KEPADA</th>
        					<th>TANGGAL SURAT</th>
        					<th>TANGGAL ARSIP</th>
        					<th>PILIHAN</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0 ; foreach($sk->result() as $d) { $no++;?>
        					<tr>
        						<td><?php echo $no; ?></td>
        						<td>
        							<?php if( empty($d->upload_surat_keluar) ){  ?>
        								<a href="<?= base_url() ?>keluar/upload/<?= $d->id_surat_keluar ?>" data-toggle="tooltip" title="Klik untuk memulai mengunggah scan surat" class="btn btn-primary" ><i class="fa fa-plus"></i></a>
        							<?php }else{ ?>

        								<a data-toggle="tooltip" title="Klik untuk melihat surat" href="<?= base_url() ?>arsip_keluar/<?= $d->upload_surat_keluar ?>" class="btn btn-primary popupwindow" rel="windowCenter" ><i class="fa fa-file-pdf-o"></i></a>
        								<a data-toggle="tooltip" class="delete pull-right btn btn-danger" href="keluar/hapusfile/<?= $d->id_surat_keluar ?>/<?= $d->upload_surat_keluar ?>" title="Klik untuk menghapus file arsip" ><i class="fa fa-trash-o"></i></a>

        							<?php } ?>
        						</td>
        						<td>
        							<?php echo $d->nomor_surat_keluar; ?> 
        						</td>	
        						
        						<td><?php echo $d->perihal_surat_keluar; ?></td>
        						<td><?php echo $d->kontak; ?></td>
        						<td><?php echo date('d-M-Y',strtotime($d->tgl_surat_keluar)); ?></td>
        						<td><?php echo date('d-M-Y',strtotime($d->tgl_arsip_surat_keluar)); ?></td>
        						
        						<td>
        							<a href="<?= base_url() ?>keluar/edit/<?= $d->id_surat_keluar ?>" data-toggle="tooltip" title="Klik untuk memulai edit data" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>

        							<a class="delete pull-right btn btn-danger" href="<?= base_url() ?>keluar/hapus/<?= $d->id_surat_keluar ?>/<?= $d->upload_surat_keluar ?>" data-toggle="tooltip" title="Klik untuk menghapus data arsip" ><i class="fa fa-trash-o"></i></a>
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
