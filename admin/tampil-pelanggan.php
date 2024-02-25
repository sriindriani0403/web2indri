<?php include "header.php"; ?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <center> <h1><i><b> tampil data pelanggan </i></b></h1></center>
            <br>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>id_pelanggan</th><th>nama_pelanggan</th><th>jenis_barang</th><th>jumlah_barang</th><th>total_harga</th>
                <th>
                <a href="input_pelanggan.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from data_pelanggan order by id_pelanggan");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pelanggan']?></td>
                <td><?php echo $row['nama_pelanggan']?></td>
                <td><?php echo $row['jenis_barang']?></td>
                <td><?php echo $row['jumlah_barang']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>
                
                <a href="edit_pelanggan.php?id=<?php echo $row['id_pelanggan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pelanggan.php?id=<?php echo $row['id_pelanggan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>

<?php include "footer.php"; ?>