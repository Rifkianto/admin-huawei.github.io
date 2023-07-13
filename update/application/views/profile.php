<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Admin">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>assets/dist/img/<?php echo $userdata->foto; ?>" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><?php echo $userdata->nama; ?></h3>

                <p class="text-muted text-center">Web Developer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Setting</a></li>
                  <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Ubah Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="settings">
                  <form class="form-horizontal" action="<?php echo base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id= placeholder="Username" name="username" value="<?php echo $userdata->username; ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Password</label>
                    <input type="text" class="form-control" placeholder="Name" name="nama" value="<?php echo $userdata->nama; ?>">
                  </div>
                  <div class="form-group">
                    <label for="inputFoto">Upload Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                      </div>
                    </div>
                  </div>
            
            
            <div class="card-footer">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>           
                  </div>
                  
                  <div class="tab-pane" id="password">
                  <form class="form-horizontal" action="<?php echo base_url('Profile/ubah_password') ?>" method="POST">
            <div class="form-group">
              <label for="passLama">Password Lama</label>
                <input type="password" class="form-control" placeholder="Password Lama" name="passLama">
            </div>
            <div class="form-group">
              <label for="passBaru">Password Baru</label>
                <input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
            </div>
            <div class="form-group">
              <label for="passKonf">Konfirmasi Password</label>
                <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
            </div>
            
            <div class="card-footer">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

