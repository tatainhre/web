<?php
require 'koneksi.php';

$id = $_GET['id_prodi'];
$query = "DELETE FROM prodi WHERE id_prodi='$id'";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
            <script>
            alert('Data Berhasil Dihapus');
            document.location.href='Prodi.php';
            </script>
    ";
} else {
    echo "
    <script>
    alert ('Data gagal dihapus');
    </script>

";
    echo mysqli_error($conn);
}
;

?>