<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses_edit_pelanggan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from data_pelanggan where id_pelanggan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                        <input type="number" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_barang">jenis_barang</label>
                        <select name="jenis_barang" class="form-control">
                            <option value="<?php echo $row['jenis_barang']?>" selected><?php echo $row['jenis_barang']?></option>
                            <option value="skincare">skincare</option>
                            <option value="makeup">makeup</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">jumlah_barang</label>
                        <textarea name="jumlah_barang" class="form-control"><?php echo $row['jumlah_barang']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <textarea name="total_harga" class="form-control"><?php echo $row['total_harga']?></textarea>
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>