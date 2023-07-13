<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Produk</h3>
              <form class="form-horizontal" action="<?php echo base_url('Tabel/save') ?>" method="POST" enctype="multipart/form-data">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Produk</label>
                <input type="text" name="produk" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Spek</label>
                <input type="text" name="spek" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Jenis</label>
                <select name="jenis" class="form-control custom-select">
                  <option selected disabled>Pilih salah satu</option>
                  <option>handphone</option>
                  <option>laptop</option>
                  <option>accessories</option>
                </select>
              </div>
              <div class="form-group">
                    <label for="inputGambar">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                <label for="inputProjectLeader">Harga</label>
                <input type="text" name="harga" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="<?= site_url('admin/index')?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Smpan Produk Baru" class="btn btn-success float-center">
          </form>   
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->