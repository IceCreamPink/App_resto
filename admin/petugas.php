<?php 
if($id != ""){
    $del = $dbo->delete("petugas", "idpetugas=$id");
    if($del){
        ?>
<script>
alert('Hapus Berhasil');
location.href = '?hal=petugas'
</script>
<?php
    }
}
?>

<div class="judul">
    <a href="?hal=add_petugas" class="btn-add"><i class="fa fa-menu"> Tambah Data </i></a>
    <h3 class="keterangan">Data Petugas</h3>
</div>
<div class="data">
    <table cellspacing='0' cellpadding='0' style="border-collapse: collapse;
    width: 86%;">
        <tr>
            <th>No</th>
            <th>Nama Petugas</th>
            <th>Alamat</th>
            <th>NO HP</th>
            <th>Username</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        <?php 
$no =1;
$data =$dbo->select("petugas" );
foreach($data as $row){
    ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['nama_petugas']?></td>
            <td><?=$row['alamat']?></td>
            <td><?=$row['no_hp']?></td>
            <td><?=$row['username']?></td>
            <td><?=$row['role']?></td>
            <td><a class="btn-edit" href="?hal=edit_petugas&id=<?=$row['idpetugas']?>"><i class="fa fa-edit"></i></a>
            </td>
            <td><a class="btn-hapus" href="?hal=petugas&id=<?=$row['idpetugas']?>"><i class="fa fa-trash"></i></a></td>
        </tr>
        <?php
}
?>
    </table>
</div>