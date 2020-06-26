<div class="static-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Data User</h1>
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
                                    <th>ID USER</th>
                                    <th>EMAIL</th>
                                    <th>USERNAME</th>
                                    <th>AKSI</th>
                                </tr>
                                
                                <?php
                                $no=0;
                                foreach ($arr as $dt_us) {
                                  $no++;
                                  echo '<tr>
                                  <td>'.$dt_us->id_user.'</td>
                                  <td>'.$dt_us->email.'</td>
                                  <td>'.$dt_us->username.'</td><td>

                                  <a href="#" onclick="prepare_update_user('.$dt_us->id_user.')" data-toggle="modal" data-target="#ubah" 
                                  class="btn btn-info btn-md"> Edit </a>
                                  <a href="'.base_url().'index.php/user/hapus/'.$dt_us->id_user.'" 
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
          <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() ?>index.php/user/add_user" method="post">
          Email
          <input type="text" name="email" class="form-control"><br>
          Username
          <input type="text" name="username" class="form-control"><br>
          Password
          <input type="text" name="password" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
        </div>

            </table>
                                
			</div>
        </div>
    </div>
</div>
                           

    <div class="modal fade" id="ubah">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url() ?>index.php/user/ubah" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ubah Data</h4>
                    </div>

        <div class="modal-body">
        <input type="hidden" name="id_user_edit" id="id_user_edit">

          Email
          <input type="text" id="email_edit" name="email_edit" class="form-control"><br>
          Username
          <input type="text" id="username_edit" name="username_edit" class="form-control"><br>
          Password
          <input type="password" id="password_edit" name="password_edit" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
        </div>

        <script type="text/javascript">
          function prepare_update_user(id_user)
          {
            $.getJSON('<?php echo base_url() ?>index.php/user/json_user_by_id/'+id_user, function(data){

              $("#email_edit").val(data.email);
              $("#username_edit").val(data.username);
              $("#password_edit").val(data.password);
              $("#id_user_edit").val(data.id_user);

            });
          }
        </script>

        </div>
    </div>
</div>