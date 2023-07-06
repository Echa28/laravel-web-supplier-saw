@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">nama supplier</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="nama supplier">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi supplier</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi supplier">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="presentasen_keuntungan" class="col-sm-2 col-form-label">presentase keuntungan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="presentase_keuntungan" placeholder="presentasen keuntungan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempo_pembayaran" class="col-sm-2 col-form-label">tempo pembayaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tempo_pembayaran" placeholder="tempo pembayaran">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kualitas_produk" class="col-sm-2 col-form-label">kualitas produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kualitas_produk" placeholder="kualitas_produk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="layanan_keluhan" class="col-sm-2 col-form-label">layanan keluhan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="layanan_keluhan" placeholder="layanan keluhan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bonus" class="col-sm-2 col-form-label">bonus</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bonus" placeholder="bonus">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ketepatan_waktu" class="col-sm-2 col-form-label">ketepatan waktu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ketepatan_waktu" placeholder="ketepatan waktu">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Tambahkan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection