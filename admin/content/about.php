<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php
$query = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id DESC");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $delete = mysqli_query($koneksi, "DELETE FROM about WHERE id = '$id'");
    header("location:?pg=about&hapus-berhasil");
}
?>
<div align="right" class="mb-3">
    <a href="?pg=update-about" class="btn btn-primary">Update About</a>
</div>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                <div class="content d-flex flex-column justify-content-center">
                    <h3>Riwayat Pekerjaan</h3>
                    <p>
                        Berawal dari melakukan pekerjaan - pekerjaan sampingan di luar belajar dan berorganisasi di masa
                        perkuliahan hingga terjun ke dunia konstruksi serta forum diskusi keamanan.
                    </p>
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Kepuasan Klien</strong> Klien yang melakukan kerjasama kembali setelah pekerjaan pertama
                                    selesai. </p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="33" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Proyek</strong> Aneka proyek yang dikerjakan dan terselesaikan selama 18 tahun terakhir.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                                <p><strong>Pengalaman kerja</strong> selama 7 tahun di bidang konstruksi sebagai staf administrasi
                                    dan pengawas lapangan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <tbody>
                    <?php $no = 1;
                    while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['riwayat_pekerjaan'] ?></td>
                            <td><?php echo $row['kepuasan_klien'] ?></td>
                            <td><?php echo $row['proyek'] ?></td>
                            <td><?php echo $row['pengalaman_kerja'] ?></td>
                            <td>
                                <a href="?pg=update-about&&edit=<?php echo $row['id'] ?>" class="btn btn-success"><box-icon name='pencil'></box-icon></a>
                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href=" ?pg=about&delete=<?php echo $row['id'] ?>" class="btn btn-danger"><box-icon type='solid' name='trash'></box-icon></a>
                            </td>

                        </tr>
                    <?php endwhile ?>
                </tbody>
            </div><!-- End .content-->
        </div>
    </div>

    </div>
</section><!-- End About Section -->