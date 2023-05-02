@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Contact Data</h2>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('addcontact')}}"><i class="fa-solid fa-square-plus"></i> Add Contact</a><br><br>
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Pesan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $no = 1; @endphp

                    <tbody>
                        @foreach($contact as $ctc)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{$ctc->nama}}</td>
                                <td>{{$ctc->email}}</td>
                                <td>{{ strlen($ctc->pesan) <= 15 ? $ctc->pesan : substr($ctc->pesan, 0, 15) . '...' }}</td>
                                <td>{{($ctc->status ==1 ? "AKTIF" : "NON AKTIF")}}</td>
                                <td>
                                <a href="{{route('changecontact', $ctc->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('deletecontact', $ctc->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- simple table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main>
@endsection
