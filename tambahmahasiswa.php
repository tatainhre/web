<?php
include 'template/header.php';
include 'template/sidebar.php';

require 'koneksi.php';

$query = "SELECT * FROM prodi";
$hasil = mysqli_query($conn, $query);

$dayaProdi = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
  $dataProdi[] = $baris;
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="tambahaksimahasiswa.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nimmahasiswa">NIM</label>
                    <input type="text" name="nimmahasiswa" class="form-control" id="nimmahasiswa" placeholder="Masukan NIM Mahasiswa">
                  </div>
                  <div class="form-group">
                    <label for="namamahasiswa">Nama Mahasiswa</label>
                    <input type="text" name="namamahasiswa" class="form-control" id="namamahasiswa" placeholder="Masukan Nama Mahasiswa">
                  </div>
                  <div class="form-group">
                  <label for="namaprodi">Prodi</label>
                  <select name="namaprodi" id="namaprodi" class="form-control">
                    <?php
                    foreach ($dataProdi as $data) {
                      ?>
                      <option id="<?php echo $data['nama_prodi'] ?>" value="<?php echo $data['id_prodi'] ?>">
                        <?php echo $data['nama_prodi'] ?>
                      </option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Masukan No HP">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="photo">Foto</label>
                    <input type="file" name="photo" class="container-fluid" id="photo" name="photo" accept="image/*">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>