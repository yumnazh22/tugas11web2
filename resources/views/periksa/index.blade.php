@include('layouts.header')
@include('layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Hasil Pemeriksaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hasil Pemeriksaan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Berat Badan</th>
                  <th>Tinggi Badan</th>
                  <th>Tensi</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list_periksa as $periksa)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$periksa->tanggal}}</td>
                  <td>{{$periksa->berat}}</td>
                  <td>{{$periksa->tinggi}}</td>
                  <td>{{$periksa->tensi}}</td>
                  <td>{{$periksa->keterangan}}</td>
                  <td>
                    <a href=""><button class="btn btn-success">detail</button></a>
                    <a href=""><button class="btn btn-warning">Edit</button></a>
                    <a href=""><button class="btn btn-danger">Hapus</button></a>

                  </td>
                </tr>
                <!-- Add more rows if needed -->
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.footer')