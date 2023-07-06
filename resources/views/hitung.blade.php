@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ $widget1['kriteria'] }}</th>
                    <th>{{ $widget2['kriteria'] }}</th>
                    <th>{{ $widget3['kriteria'] }}</th>
                    <th>{{ $widget4['kriteria'] }}</th>
                    <th>{{ $widget5['kriteria'] }}</th>
                    <th>{{ $widget6['kriteria'] }}</th>
                  </tr>
                  </thead>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>Presentase Keuntungan</th>
                    <th>Tempo Pembayaran</th>
                    <th>Kualitas Produk</th>
                    <th>Layanan Keluhan</th>
                    <th>Bonus</th>
                    <th>Ketepatan Waktu</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nama }}</td>
                        <td>{{$alternatif->presentase_keuntungan / $C1max['alternatif']}}</td>
                        <td>{{$alternatif->tempo_pembayaran / $C2max['alternatif']}}</td>
                        <td>{{$alternatif->kualitas_produk / $C3max['alternatif']}}</td>
                        <td>{{$alternatif->layanan_keluhan / $C4max['alternatif']}}</td>
                        <td>{{$alternatif->bonus / $C5max['alternatif']}}</td>
                        <td>{{$alternatif->ketepatan_waktu / $C6max['alternatif']}}</td>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->nama}}</td>
                        {{-- Hasil --}}
                        <td>
                            {{(($alternatif->presentase_keuntungan / $C1max['alternatif'])*$widget1['kriteria'])+
                            (($alternatif->tempo_pembayaran / $C2max['alternatif'])*$widget2['kriteria'])+
                            (($alternatif->kualitas_produk / $C3max['alternatif'])*$widget3['kriteria'])+
                            (($alternatif->layanan_keluhan / $C4max['alternatif'])*$widget4['kriteria'])+
                            (($alternatif->bonus / $C4max['alternatif'])*$widget5['kriteria'])+
                            (($alternatif->ketetapan_waktu / $C4max['alternatif'])*$widget6['kriteria'])}}
                            
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