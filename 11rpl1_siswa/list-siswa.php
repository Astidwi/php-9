<?php include("koneksi.php"); 

?>

<div class="container">
<a href="form_daftar.php" class="btn btn_primary">TAMBAH DATA</a><br><br>
        <h3>Siswa yang sudah mendaftar</h3>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa["tgl_lahir"]."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id'].
            "' class='btn btn-success btn-sm'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'
            onclick='return confirm (\"yakin ingin menghapus?\") ;'
            class='btn btn-danger btn-sm'>Hapus</a>";

           // <a href= 'hapus.php?id= " .$siswa["id"]."'
            // onclick='return confirm (\ "yakin ingin menghapus?\") ;'> Hapus </a>

            echo "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    </div>