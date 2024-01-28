 <?php 
if($id !=""){
$sel = $dbo->select('kategori where idkategori='.$id);
foreach($sel as $data){
    $kategori = $data['kategori'];
    $idkategori = $data['idkategori'];
}
}
if(isset($_POST['simpan'])){
    extract($_POST);
    $up = $dbo->update('kategori', "kategori='$kategori'", "idkategori=$idkategori");
    if($up){
                ?>
 <script>
alert('Update berhasil');
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
     <form action="?hal=edit_kategori" method="post">
         <h3>Edit keterangan</h3>
         <input type="hidden" name="idkategori" value="<?=$idkategori?>">
         <tr>
             <td>Nama Kategori</td>
             <td>:</td>
             <td>
                 <input type="text" value="<?=$kategori?>" name="kategori" id="" placeholder="Nama Kategori" required>
             </td>
         </tr>
         <div class="btn-input">
             <td><button type="submit" class="btn-add" name="simpan"><i class="fa fa-save"></i> Simpan</button></td>
             <td><button type="reset" class="btn-reset">reset</button></td>
         </div>
 </div>
 </form>