<?php

if (isset($_POST['simpan'])) {
    $riwayat_pekerjaan = $_POST['riwayat_pekerjaan'];
    $kepuasan_klien = $_POST['kepuasan_klien'];
    $proyek = ($_POST['proyek']);
    $pengalaman_kerja = $_POST['pengalaman_kerja'];


    $insert = mysqli_query($koneksi, "INSERT INTO about (riwayat_pekerjaan, kepuasan_klien, proyek, pengalaman_kerja) VALUES ('$riwayat_pekerjaan','$kepuasan_klien','$proyek','$pengalaman_kerja')");


    if (!$insert) {
        header("location:?pg=update-about&pesan=tambah-gagal");
    } else {
        header("location:?pg=about&pesan=tambah-berhasil");
    }
}


if (isset($_GET['edit'])) {

    $id = $_GET['edit'];

    $edit = mysqli_query($koneksi, "SELECT * FROM about WHERE id ='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}

//jika button edit ditekan
if (isset($_POST['edit'])) {
    $riwayat_pekerjaan = $_POST['riwayat_pekerjaan'];
    $kepuasan_klien = $_POST['kepuasan_klien'];
    $proyek = ($_POST['proyek']);
    $pengalaman_kerja = $_POST['pengalaman_kerja'];

    $update = mysqli_query($koneksi, "UPDATE about SET riwayat_pekerjaan='$riwayat_pekerjaan' ,kepuasan_klien='$kepuasan_klien' , proyek='$proyek' , pengalaman_kerja='$pengalaman_kerja' WHERE id='$id'");
    header("location:?pg=about&update-berhasil");
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">riwayat_pekerjaan</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['riwayat_pekerjaan'] : '' ?>" type="text" class="form-control" placeholder="Masukkan riwayat_pekerjaan" name="riwayat_pekerjaan">
    </div>
    <div class="mb-3">
        <label for="">kepuasan_klien</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['kepuasan_klien'] : '' ?>" type="text" class="form-control" placeholder="Masukkan kepuasan_klien" name="kepuasan_klien">
    </div>
    <div class="mb-3">
        <label for="">proyek</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['proyek'] : '' ?>" type="text" class="form-control" placeholder="Masukkan proyek" name="proyek">
    </div>
    <div class="mb-3">
        <label for="">pengalaman_kerja</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['pengalaman_kerja'] : '' ?>" type="text" class="form-control" placeholder="Masukkan pengalaman_kerja" name="pengalaman_kerja">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>">
        <a href="?pg=about">Kembali</a>
    </div>


</form>