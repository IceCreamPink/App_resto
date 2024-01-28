<link rel="stylesheet" href="../css/style.css">
<div class="judul">
    <div class="judul">
        Data Transaksi
    </div>
</div>
<div class="data">
    <table class="tb-kategori" cellpadding="0" cellspacing="0" style="border-collapse: collapse;
    width: 86%;">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pelangan</th>
            <th>Total Bayar</th>
            <th>Status</th>
        </tr>
        <?php
            $no=1;
            $data = $dbo->select("orders a, pelanggan b where a.idpelanggan = b.idpelanggan ", "a.*, b.nama_pelanggan");
            foreach($data as $row){
                $datatotal = $dbo->select("orderdetail where idorder =".$row['idorder']);
                $total = 0;
                foreach($datatotal as $rowtotal){
                    $total += $rowtotal['jumlah'] * $rowtotal['harga'];
                }
                ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['tglorder']?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$total?></td>
            <td>
                <?php 
                    if($row['total']== null){
                        echo "<a href ='?hal=bayar&id=$row[idorder]'>Bayar</a>";
                    }else{
                        echo "Lunas";
                    }
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>