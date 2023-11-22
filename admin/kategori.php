<?php 
    if($id !=""){
        $hapus = $dbo->delete('kategori', 'idkategori='.$id);
        if($hapus){
            ?>
<script>
alert('Hapus berhasil');
location.href = '?hal=kategori'
</script>
<?php
        }
    }
?>
<div class="judul">
    <a href="?hal=add_kategori" class="btn-add"><i class="fa fa-plus"> Tambah Data </i></a>
    <h3 class="keterangan">Data Kategori</h3>
</div>
<div class="data">
    <table class="tb-kategori" cellpadding="0" cellspacing="0" style="border-collapse: collapse;
    width: 86%;">
        <tr>
            <td>NO</td>
            <td>Nama Kategori</td>
            <td>Edit</td>
            <td>Hapus</td>
        </tr>
        <?php 
        $no=1;
        $data=$dbo->select('kategori');
        foreach($data as $row){
            ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['kategori']?></td>
            <td>
                <a class="btn-edit" href="?hal=edit_kategori&id=<?=$row['idkategori']?>"><i class="fa fa-edit"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Yakin akan Dihapus?')" class="btn-hapus"
                    href="?hal=kategori&id=<?=$row['idkategori']?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
        }
            
        ?>

    </table>
</div>