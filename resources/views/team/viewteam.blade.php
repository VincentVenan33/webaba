@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Team</h2>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('addteam')}}"><i class="fa-solid fa-square-plus"></i> Add Team</a><br><br>
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $no = 1; @endphp

                    <tbody>
                        @foreach($team as $tm)
                            <tr>
                                <th>{{ ( $team->currentPage() - 1 ) * $team->perPage() + $loop->iteration }}</th>
                                <td>{{$tm->nama}}</td>
                                <td>{{$tm->jabatan}}</td>
                                <td>{{ strlen($tm->deskripsi) <= 15 ? $tm->deskripsi : substr($tm->deskripsi, 0, 15) . '...' }}</td>
                                <td><img src="{{url('').'/images/'.$tm->image}}" alt="{{$tm->nama}}" width="50"></td>
                                <td>{{($tm->status ==1 ? "AKTIF" : "NON AKTIF")}}</td>
                                <td>
                                <a href="{{route('changeteam', $tm->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('deleteteam', $tm->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <nav aria-label="Table Paging" class="mb-0 text-muted">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item{{ ($team->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $team->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $team->lastPage(); $i++)
                            <li class="page-item{{ ($team->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $team->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item{{ ($team->currentPage() == $team->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $team->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
              </div>
            </div> <!-- simple table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main>
@endsection
