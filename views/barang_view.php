<div class="static-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Data Barang</h1>
                            <div class="sparkline8-outline-icon">
                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="static-table-list">
                                <a href="#tambah" class="btn btn-success" data-toggle="modal">
                                <span class="glyphicon glyphicon-plus"></span> Tambah </a>
                                    
                                        <table class="table border-table">
                                                <tr>
                                                    <th>ID Barang</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Stok Barang</th>
                                                    <th>Harga Barang</th>
                                                    <th>Aksi</th>
                                                </tr>

                                                <?php
                                                $no=0;
                                                foreach ($arr as $dt_bar) {
                                                    $no++;
                                                    echo '<tr>
                                                    <td>'.$dt_bar->id_barang.'</td>
                                                    <td>'.$dt_bar->kode_barang.'</td>
                                                    <td>'.$dt_bar->nama_barang.'</td>
                                                    <td>'.$dt_bar->stok_barang.'</td>
                                                    <td>'.$dt_bar->harga_barang.'</td><td>

                                                    <a href="#" onclick="prepare_update_barang('.$dt_bar->id_barang.')" data-toggle="modal" data-target="#ubah" 
                                                    class="btn btn-info btn-md"> Edit </a>
                                                    <a href="'.base_url().'index.php/barang/hapus/'.$dt_bar->id_barang.'" 
                                                    class="btn btn-danger btn-md" onclick="return confirm(\'Anda yakin ingin menghapus data\')"> Hapus </a>
                                                    </tr>';
                                                 }
                                                ?>
                                        </table>
                                    </div>
                                        <?php if($this->session->flashdata('pesan')!=null): ?>
                                        <div class= "alert alert-danger"><?= $this->session->flashdata('pesan');?></div>
                                        <?php endif?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() ?>index.php/Barang/add_barang" method="post">
                Kode Barang
                <input type="text" name="kode_barang" class="form-control"><br>
                Nama Barang
                <input type="text" name="nama_barang" class="form-control"><br>
                Stok Barang
                <input type="text" name="stok_barang" class="form-control"><br>
                Harga Barang
                <input type="text" name="harga_barang" class="form-control"><br/>

                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                </form>
            </div>

                </table>
		</div>
	</div>
</div>

<div class="modal fade" id="ubah">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url() ?>index.php/Barang/ubah" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span></button><h4 class="modal-title" id="myModalLabel">Ubah Barang</h4>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id_barang_edit" id="id_barang_edit">

            Kode Barang
            <input type="text" id="kode_barang_edit" name="kode_barang_edit" class="form-control"><br>
            Nama Barang
            <input type="text" id="nama_barang_edit" name="nama_barang_edit" class="form-control"><br>
            Stok Barang
            <input type="text" id="stok_barang_edit" name="stok_barang_edit" class="form-control"><br>
            Harga Barang
            <input type="text" id="harga_barang_edit" name="harga_barang_edit" class="form-control"><br/>

          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>

        <script type="text/javascript">
          function prepare_update_barang(id_barang)
          {
            $.getJSON('<?php echo base_url() ?>index.php/Barang/json_barang_by_id/'+id_barang, function(data){

              $("#kode_barang_edit").val(data.kode_barang);
              $("#nama_barang_edit").val(data.nama_barang);
              $("#stok_barang_edit").val(data.stok_barang);
              $("#harga_barang_edit").val(data.harga_barang);
              $("#id_barang_edit").val(data.id_barang);

            });
          }
        </script>
    </div>
</div>