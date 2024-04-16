<?php
include 'template/header.php';
include 'template/sidebar.php';
require 'koneksi.php';

$id = $_GET['id_prodi'];

$query = "SELECT * FROM prodi WHERE id_prodi=$id";
$hasil = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil);

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Prodi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Program Studi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Program Studi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="tambahaksi.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_prodi" class="form-control" value="<?= $data['id_prodi'] ?>">
                    <label for="namaprodi">Nama Prodi</label>
                    <input type="text" name="namaprodi" class="form-control" id="namaprodi" value="<?= $data['nama_prodi'] ?>">
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
    <!-- /.content -->
  </div>