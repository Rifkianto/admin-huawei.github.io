<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/lte/admin">Home</a></li>
              <li class="breadcrumb-item active">Tabel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-orange">
      
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                  <th style="width: 1%" class="text-center">
                          #
                      </th>
                      <th style="width: 15%" class="text-center">
                          Produk
                      </th>
                      <th style="width: 35%" class="text-center">
                          Spek
                      </th>
                      <th  style="width: 5%" class="text-center">
                         Jenis
                      </th>
                      <th style="width: 20%" class="text-center">
                         Gambar
                      </th>
                      <th style="width: 5%" class="text-center">
                         Harga
                      </th>
                      <th style="width: 0%">
                      </th>
                      <th colspan='2' class="text-center">
                        Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php
              $no=1;
            foreach ($hasil as $item){
        ?>
                <td><?php echo $no;?></td>
            <td><?php echo $item->produk;?></td>
            <td><?php echo $item->spek;?></td>
            <td><?php echo $item->jenis;?></td>
            <td><Img src="<?= base_url(); ?>assets/dist/img/<?php echo $item->gambar;?>" class="img-thumbnail"> </td>
            <td><p>Rp.<?php echo $item->harga;?> </p></td>
            <td class="project-actions text-right">
                           <td><a class="btn btn-warning btn-sm" href="<?php echo site_url('tabel/edit2/'. $item->id);?>">
                              <i class="fas fa-edit">
                              </i>
                              </td>
                          </a>
                          <td><a class="btn btn-danger btn-sm" href="<?php echo site_url('tabel/hapus/'. $item->id);?>">
                              <i class="fas fa-trash">
                              </i>
                              </td>
                          </a>
                      </td>
            </tr>
        <?php       $no++; }?>
        </tbody>
          </table>
           <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="judul"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="tampil_modal">
                        <!-- Data akan di tampilkan disini-->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                </div>

                </div>
            </div>
        </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    // fungsi javascript untuk memunculkan peringatan sebelum data dihapus
    function deletechecked()
    {
        if(confirm("Apakah yakin akan menghapus data?"))
        {
            return true;
        }
        else
        {
            return false;  
        } 
    }
    </script>