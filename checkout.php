<?php 
    session_start();
    include "config/classDB.php";
    if(!empty($_SESSION['cart'])){
        //simpan
        $insertorder = $dbo->insert("orders(idorder, idpelanggan,tglorder)","null,'1',now()");
        $idorder = $dbo->lastInsert();
        if($insertorder){
            foreach($_SESSION['cart'] as $id => $val){
                $menu = $dbo ->select('menu where idmenu='.$id);
                foreach($menu as $row){

                }
                $harga = $row['harga'];
                $insertdetail = $dbo->insert("orderdetail","null,'$idorder',$id,$val,$harga,''" );
                unset($_SESSION['cart'][$id]);
            }
        }
    }

?>
<script>
location.href = 'index.php';
</script>