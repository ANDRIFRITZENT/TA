@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>DATA UJIAN PTK</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Ujian</th>
                    <th>Pendaftaran</th>
                    <th>Penutupan</th>
                    <th>Tanggal Ujian</th>
                    <th>Pengumuman</th>
                    <th>Penyelenggara</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->namaujian }}</td>
                        <td>{{ $d->pendaftaran }}</td>
                        <td>{{ $d->penutupan }}</td>
                        <td>{{ $d->tanggalujian }}</td>
                        <td>{{ $d->pengumuman }}</td>
                        <td>{{ $d->penyelenggara }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection