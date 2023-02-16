<html>
    <head>
</head>
      <body>
        <h1>from tambah<h1>
        <form action ="proses-tambah.php" method="POST">
            <form>
                <fieldset>
                    <p>
                        <label for="nama_user">Nama User :</label>
                        <input type="text" name="nama_user" />
                    </p>
                    <p>
                        <label for="jabatan">Jabatan :</label>
                        <input type="text" name="jabatan" />
                    </p>
                    <p>
                        <label for="nama_bahan">Nama Bahan :</label>
                        <input type="text" name="nama_bahan" />
                    </p>
                    <p>
                        <label for="jenis_bahan">Jenis Bahan :</label>
                        <input type="text" name="jenis_bahan" />
                    </p>
                    <p>
                        <label for="stok"> Stok :</label>
                        <input type="number" name="stok" />
                    </p>
                    <p>
                        <label for="harga">harga :</label>
                        <input type="number" name="harga" />
                    </p>
                    <p> 
                        <label for="kondisi">Kondisi:</label>
                        <label><input type="radio" name="kondisi" value="baik" />Baik</label>
                        <label><input type="radio" name="kondisi" value="rusak" />Rusak</label>   
                    </p>
                    <p>
                        <label for="tanggal_masuk"> Tanggal Masuk :</label>
                        <input type="date" name="tanggal_masuk" />
                    </p>
                    <input type="submit" name="tambah" value="Tambah" />
 </fieldset>                                      
</form>
</body>
</html>
                    