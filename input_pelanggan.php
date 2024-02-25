<?php include "header.php"; ?>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <center> <h1><i><b> input data penjualan </i></b></h1></center>
            <br>
                <form action="proses-input-pelanggan.php" method="POST">
                <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="number" name="id_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_barang">jenis_barang</label>
                        <input type="text" name="jenis_barang"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">jumlah_barang</label>
                        <input type="text" name="jumlah_barang"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga"  class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

</body>
<?php include "footer.php"; ?>