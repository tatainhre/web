<?php
require 'koneksi.php';

$prodi = $_POST['namaprodi'];

// echo 'nama prodinya adalah: ' . $prodi ;

// Menggunakan placeholder untuk nama tabel
$query = 'INSERT INTO prodi (nama_prodi) VALUES ("' .$prodi. '")';

if (mysqli_query($conn, $query))  {
    echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='Prodi.php';
            </script>
    ";
    echo "Data berhasil disimpan";
} else {
    echo "
            <script>
                alert ('Data gagal dihapus');
            </script>

    ";
    echo mysqli_error($conn);
}
?>