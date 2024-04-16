<?php
require 'koneksi.php';

$nim = $_POST['nimmahasiswa'];
$nama = $_POST['namamahasiswa'];
$prodi = $_POST['namaprodi'];
$nomorhp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$namaFile = $_FILES['photo']['name'];
$tmpName = $_FILES['photo']['tmp_name'];
move_uploaded_file($tmpName, "C:/xampp/htdocs/web/dist/img/" . $namaFile);

//echo 'nama prodinya adalah: ' . $prodi ;

// $query = "INSERT INTO prodi (Nama_Prodi) VALUES ('$prodi')";

$query = 'INSERT INTO mahasiswa (NIM, Nama, No_HP, Alamat, Password, id_prodi, Foto)
             VALUES ("' . $nim . '", "' . $nama . '", "' . $nomorhp . '", "' . $alamat . '", "NULL", "' . $prodi . '", "' .$namaFile. '")';

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
            <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='Mahasiswa.php';
            </script>
    ";
} else {
    echo "
    <script>
    alert ('Data gagal ditambahkan');
    </script>
";
    echo mysqli_error($conn);
}
;