<form method="post" id="form">
    <div class="form-group">
        <label for="email">ID:</label>
        <input type="text" class="form-control"  name="id" placeholder="Masukan ID">
    </div>
    <div class="form-group">
         <label for="email">Produk:</label>
        <input type="text" class="form-control"  name="produk" placeholder="Masukan Produk" >
    </div>
    <div class="form-group">
         <label for="email">Spek:</label>
        <input type="text" class="form-control"  name="spek" placeholder="Masukan Spek" >
    </div>
    <div class="form-group">
         <label for="email">Jenis:</label>
        <input type="text" class="form-control"  name="jenis" placeholder="Masukan Jenis" >
    </div>
    <div class="form-group">
         <label for="email">Gambar:</label>
        <input type="text" class="form-control"  name="gambar" placeholder="Masukan Gambar" >
    </div>
    <div class="form-group">
         <label for="email">Harga:</label>
        <input type="text" class="form-control"  name="harga" placeholder="Masukan Harga" >
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/Produk/simpanProduk",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/Produk/tampilProduk");
                    }
                });
            });
        });
</script> 