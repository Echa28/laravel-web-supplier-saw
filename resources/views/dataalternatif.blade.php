@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('alternatif/add') }}" class="btn-sm btn-success">Tambah Data supplier</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>nama supplier</th>
                    <th>deskripsi supplier</th>
                    <th>presentase keuntungan</th>
                    <th>tempo pembayaran</th>
                    <th>kualitas produk</th>
                    <th>layanan keluhan</th>
                    <th>bonus</th>
                    <th>ketepatan waktu</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $alternatif)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $alternatif->nama }}</td>
                    <td>{{ $alternatif->deskripsi }}</td>
                    <td>{{ $alternatif->presentase_keuntungan }}</td>
                    <td>{{ $alternatif->tempo_pembayaran }}</td>
                    <td>{{ $alternatif->kualitas_produk }}</td>
                    <td>{{ $alternatif->layanan_keluhan }}</td>
                    <td>{{ $alternatif->bonus }}</td>
                    <td>{{ $alternatif->ketepatan_waktu }}</td>
                    <td>
                      <a href="{{ url('alternatif/edit/'.$alternatif->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('alternatif/delete/'.$alternatif->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
