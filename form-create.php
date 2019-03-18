<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Data Matakuliah</title>
  </head>
  <body>
    <form method="POST" action="create.php" >
        Kode  :<input type="text" name="kode">
        <br>
        Matakuliah:<input type="text" name="nama_matkul">
        <br>
        SKS       :<input type="text" name="sks">
        <br>
        Semester  :<input type="text" name="semester">
        <br>
        Dosen pengajar:<select name="id_dosen" id="nama_dosen">
        <option value="0">--Pilih salah satu--</option>
        <?php
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
            <option value="<?php echo $data['id_dosen']; ?>">
                <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
            }
        ?>
        </select>
        <br>
        <input type="submit" name="btnSimpan" value="Simpan">
    </form>
  </body>
</html>

      