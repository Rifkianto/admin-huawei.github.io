  <!-- Button to Open the Modal -->
  <button type="button" class="tambah btn btn-warning" data-toggle="modal" data-target="#myModal">Tambah</button>
  <a href="<?php echo base_url(); ?>index.php/user/home" class="btn btn-success" style="float:right">Profile</a>
  <br>
  <br>
  
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Status</th>
            <th>Cita-cita</th>
            <th>Hobi</th>
            <th colspan='2'>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no=1;
            foreach ($hasil as $item)
            {
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $item->nama;?></td>
            <td><?php echo $item->umur;?></td>
            <td><?php echo $item->status;?></td>
            <td><?php echo $item->cita;?></td>
            <td><?php echo $item->hobi;?></td>
            <td> <button type="button" nama="<?php echo $item->nama; ?>" class="edit btn btn-primary">Edit</button></td>
            <td><button type="button" nama="<?php echo $item->nama; ?>" class="hapus btn btn-danger">Delete</button></td>
        </tr>
        <?php
                $no++;
                }
                 ?>
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

        <script>
            $(document).ready(function(){

                $('.tambah').click(function(){
                var aksi = 'Tambah Mahasiswa';
                $.ajax({
                    url: '<?php echo base_url(); ?>/mahasiswa/tambah',
                    method: 'post',
                    data: {aksi:aksi},
                    success:function(data){
                        $('#myModal').modal("show");
                        $('#tampil_modal').html(data);
                        document.getElementById("judul").innerHTML='Tambah Data';

                    }
                });
                });

                $('.edit').click(function(){

                    var nama = $(this).attr("nama");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/mahasiswa/edit',
                        method: 'post',
                        data: {nama:nama},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var nama = $(this).attr("nama");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/mahasiswa/hapus',
                        method: 'post',
                        data: {nama:nama},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>