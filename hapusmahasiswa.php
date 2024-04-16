<?php
require 'koneksi.php';

$id = $_GET['nim'];
$query = "DELETE FROM mahasiswa WHERE NIM='$id'";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
            <script>
            alert('Data Berhasil Dihapus');
            document.location.href='Mahasiswa.php';
            </script>
    ";
}else {
    echo "
    <script>
    alert ('Data gagal dihapus');
    </script>

";
echo mysqli_error($conn);
};
?>