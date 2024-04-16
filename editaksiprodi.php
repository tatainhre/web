<?php
require 'koneksi.php';

$id =$_POST['id_prodi'];
$prodi = $_POST['nama_prodi'];





$query ="UPDATE prodi SET nama_prodi='$prodi' WHERE id_prodi =$id ";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
            <scrip>
            alert('Data Berhasil Ditambahkan');
            document.location.href='Prodi.php'
            </scrip>
    ";
}else {
    echo "
    <scrip>
    alert ('Data gagal di tambahkan');
    </script>
    ";
    echo mysqli_error($conn);
};
?>