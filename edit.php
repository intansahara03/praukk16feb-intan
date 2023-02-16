<?php
include("koneksi.php");
if(!isset($_GET['id_user'])){
    header("Location:tampil.php?");
}
   $id=$_GET['id_user'];
   $sql="SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan WHERE tb_user.id_user";
   $query = mysqli_query($koneksi,$sql);
   $row = mysqli_fetch_assoc($query); 

   if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
   }

?>     
<html>
    <head>
    </head>
    <body>
        <h1>Form Edit Iventaris</h1>
        <form action="proses-edit.php" method="POST">
        <a href="tampil.php"><input type="button" value="kembali"></a>
            <fieldset>
                <input type="hidden" name="id_user" value="<?php echo $row['id_user']?>" />
                <p>
                            <label for="nama_user">Nama User :</label>
                            <input type="text" name="nama_user" value="<?php echo $row['nama_user']?>" />
                        </p>
                        <p>
                            <label for="jabatan">Jabatan :</label>
                            <input type="text" name="jabatan" value="<?php echo $row['jabatan']?>" />
                        </p>
                        <p>
                            <label for="nama_bahan">Nama Bahan :</label>
                            <input type="text" name="nama_bahan" value="<?php echo $row['nama_bahan']?>" />
                        </p>
                        <p>
                            <label for="jenis_bahan">Jenis Bahan :</label>
                            <input type="text" name="jenis_bahan" value="<?php echo $row['jenis_bahan']?>" />
                        </p>
                        <p>
                            <label for="stok">Stok :</label>
                            <input type="number" name="stok" value="<?php echo $row['stok']?>" />
                        </p>
                        <p>
                            <label for="harga">Harga :</label>
                            <input type="number" name="harga" value="<?php echo $row['harga']?>" />
                        </p>
                        <p> 
                            <label for="kondisi">Kondisi:</label>
                            <label><input type="radio" name="kondisi" value="baik" value="<?php echo $row['kondisi']?>" />Baik</label>
                            <label><input type="radio" name="kondisi" value="rusak" value="<?php echo $row['kondisi']?>" />Rusak</label>
                        </p>
                        <p>
                            <label for="tanggal_masuk">Tanggal Masuk :</label>
                            <input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk']?>" />
                        <p>
                            <input type="submit" name="edit" value="Edit" />
                        </p>
</fieldset>
</form>
</body>
</html>