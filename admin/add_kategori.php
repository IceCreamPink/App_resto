<?php 
if(isset($_POST['simpan'])){
    extract($_POST);
   $ins = $dbo->insert("kategori", "null, '$kategori'");
    if($ins){
        ?>
<script>
alert('Simpan berhasil');
location.href = '?hal=kategori'
</script>
<?php
    }
}
?>
<div class="judul">
    <a href="?hal=kategori" class="btn-add"><i class="fa fa-list"> Lihat data</i></a>

</div>
<div class="data-input">
    <form action="?hal=add_kategori" method="post">
        <h3>Input keterangan</h3>
        <tr>
            <td>Nama Kategori</td>
            <td>:</td>
            <td>
                <input type="text" name="kategori" id="" placeholder="Nama Kategori" required>
            </td>
        </tr>
        <div class="btn-input">
            <td><button type="submit" class="btn-add" name="simpan"><i class="fa fa-save"></i> Simpan</button></td>
            <td><button type="reset" class="btn-reset">reset</button></td>
        </div>
</div>
</form>