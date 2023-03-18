@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Katalog</h2>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('addkatalog')}}"><i class="fa-solid fa-square-plus"></i> Add Katalog</a><br><br>
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Image</th>
                        <th>File</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $no = 1; @endphp

                    <tbody>
                        @foreach($katalog as $ktg)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{$ktg->nama}}</td>
                                <td>{{$ktg->keterangan}}</td>
                                <td><img src="{{url('').'/images/'.$ktg->image}}" alt="{{$ktg->nama}}" width="50"></td>
                                <td><a href="{{url('').'/files/'.$ktg->file }}" download="{{ $ktg->file }}">{{ $ktg->file }}</a></td>
                                <td>{{($ktg->status ==1 ? "AKTIF" : "NON AKTIF")}}</td>
                                <td>
                                <a href="{{route('changekatalog', $ktg->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('deletekatalog', $ktg->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
