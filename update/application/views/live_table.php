    <div class="container">
        <h3 align=center>SI Mahasiswa STIKI</h3>
        
        <br />
        <div class="table-responsive">
            <br />
            <form class="d-flex" style="padding-bottom: 10px;">
                <input class="form-control me-2" style="width:27%;" type="search" placeholder="Cari mahasiswa" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUK</th>
                        <th>GAMBAR</th>
                        <th>SPEK</th>
                        <th>JENIS</th>
                        <th>HARGA</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="row" style=" margin-left:1040px;">
            <button type="button" class="btn btn-light btn_logout"> Keluar </button>        
        </div>
    </div>
<script>
    $(document).on('click', '.btn_logout', function() {

if (confirm("Yakin untuk keluar?")) {
  $.ajax({
    url: "<?= base_url(); ?>login/logout",
    // method: 'POST',
    // data: {
    //   id: id
    // },
    success: function() {
      alert('Berhasil keluar');
      location.reload();
    }
  });
}
});
    $(document).ready(function() {

        // load semua data
        function load_data() {
            $.ajax({
                url: "<?= base_url(); ?>/livetable/load_data",
                dataType: "JSON",
                success: function(data) {
                    // buat kolom inputan
                    var html = '<tr>';
                    html += '<td id="id" contenteditable placeholder="Masukkan id"></td>';
                    html += '<td id="produk" contenteditable placeholder="Masukkan Produk"></td>';
                    html += '<td id="gambar" contenteditable placeholder="Masukkan Gambar"></td>';
                    html += '<td id="spek" contenteditable placeholder="Masukkan Spek"></td>';
                    html += '<td id="jenis" contenteditable placeholder="Masukkan Jenis"></td>';
                    html += '<td id="harga" contenteditable placeholder="Masukkan Harga"></td>';
                    html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-sm btn-primary"><span class="fa fa-plus"></span> Tambah</td></tr>';
                    //data dalam bentuk json di looping disini
                    for (var count = 0; count < data.length; count++) {
                        html += '<tr>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="id" contenteditable>' + data[count].id +
                            '</td>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="produk" contenteditable>' + data[count].produk +
                            '</td>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="gambar" contenteditable>' + data[count].gambar +
                            '</td>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="spek" contenteditable>' + data[count].spek +
                            '</td>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="jenis" contenteditable>' + data[count].jenis +
                            '</td>';
                        html += '<td class="table_data" data-row_id="' +
                            data[count].id + '" data-column_name="harga" contenteditable>' + data[count].harga +
                            '</td>';
                        html += '<td><button type="button" name="delete_btn" id="' + data[count].id + '" class="btn btn-sm btn-danger btn_delete">Hapus</button></td></tr>';
                    }
                    // hasil looping masukan kesini
                    $('tbody').html(html);
                }
            });
        }
        load_data(); // panggil fungsi load data

        // simpan data
        $(document).on('click', '#btn_add', function() {
            var id = $('#id').text(); // ambil text dr id id
            var produk = $('#produk').text(); // ambil text dr id nama
            var gambar = $('#gambar').text(); // ambil text dr id ipk
            var spek = $('#spek').text();
            var jenis = $('#jenis').text();
            var harga = $('#harga').text();

            // cek jika inputan kosong
            if (id == '') {
                alert('masukkan id');
                return false;
            }
            if (produk == '') {
                alert('masukkan produk');
                return false;
            }
            if (gambar == '') {
                alert('masukkan gambar');
                return false;
            }
            if (spek == '') {
                alert('masukkan spek');
                return false;
            }
            if (jenis == '') {
                alert('masukkan jenis');
                return false;
            }
            if (harga == '') {
                alert('masukkan harga');
                return false;
            }

            // jika inputan ada isinya kirim request dengan ajax
            $.ajax({
                url: '<?= base_url(); ?>livetable/insert_data',
                method: 'POST',
                // data yg dikirim (name : value)
                data: {
                    id : id,
                    produk: produk,
                    gambar : gambar,
                    spek : spek,
                    jenis : jenis,
                    harga : harga
                },
                // callback jika data berhasil disimpan
                success: function(data) {
                    //panggil fungsi
                    alert('Success!!! data berhasil ditambah');
                    load_data();
                }
            });

        });

        // update data
        $(document).on('blur', '.table_data', function() {
            var id = $(this).data('row_id'); // ambil nilai attribut data row_id dari class table_data
            var table_column = $(this).data('column_name'); // ambil nilai attribut data column_name dari class table_data
            var value = $(this).text(); // ambil value text dari class table_data

            $.ajax({
                url: '<?= base_url(); ?>livetable/update_data',
                method: 'POST',
                // data yg dikirim ke server untuk update data (name:value)
                data: {
                    id: id,
                    table_column: table_column,
                    value: value
                },
                success: function(data) {
                    load_data(); // panggil fungsi load data jika berhasil update
                }
            });
        });

        // delete data
        $(document).on('click', '.btn_delete', function() {
            var id = $(this).attr('id'); // ambil nilai dr attribut id

            if (confirm("apakah anda yakin ingin hapus data ini?")) {
                $.ajax({
                    url: "<?= base_url(); ?>livetable/delete_data",
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        load_data();
                    }
                });
            }
        });
    });
    
</script>