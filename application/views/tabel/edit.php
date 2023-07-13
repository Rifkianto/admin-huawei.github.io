<!-- Content Wrapper. Contains page content -->

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
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Produk</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('Tabel/update') ?>" method="POST" enctype="multipart/form-data">
              
            </div>
            <div class="card-body">
            <?php foreach($produk as $item){ ?>
              <div class="form-group">
                <label for="inputName">Nama Produk</label>
                <input type="text" name="produk" class="form-control" value="<?php echo $item->produk; ?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Spek</label>
                <input type="text" name="spek" class="form-control" value="<?php echo $item->spek; ?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Jenis</label>
                <select name="jenis" class="form-control custom-select" >
                  <option selected disabled><?php echo $item->jenis; ?></option>
                  <option>smartphone</option>
                  <option>laptop</option>
                  <option>accessories</option>
                </select>
              </div>
              <div class="form-group">
                    <label for="inputGambar">Upload Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" >
                        <label class="custom-file-label" for="gambar">Choose file</label>
                      </div>
                    </div>
                  </div>
              <div class="form-group">
                <label for="inputProjectLeader">Harga</label>
                <input type="text" name="harga" value="<?php echo $item->harga; ?>" class="form-control">
              </div>
              <input type="hidden" name="id" value="<?php echo $item->id?>">
        
            </div>
  
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-4">
        <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Gambar Produk</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <img class="img-thumbnail" src="<?= base_url()?>assets/dist/img/<?php echo $item->gambar; ?>" alt="Responsive image">
            </div>
            <?php } ?>
            <!-- /.card-body -->
            
        </div>
        <div class="row">
        <div class="col-12">
          <a href="<?= site_url('admin/index')?>" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update Produk" class="btn btn-success float-center">
          </form>   
    
        </div>
      </div>
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->