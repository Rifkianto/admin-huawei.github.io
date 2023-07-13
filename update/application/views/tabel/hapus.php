<form method="post" id="form">
    <p>Yakin ingin menghapus data <?php echo $hasil->produk;?> - <?php echo $hasil->produk;?> </p>
    <input type="hidden" name="produk" value="<?php echo $hasil->produk;?>">
    <button id="prosesHapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#prosesHapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/Tabel/prosesHapus",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/Tabel/index");
                      
                    }
                });
            });
        });
</script> 