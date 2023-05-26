@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Pengunjung Data</h2>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('addpengunjung')}}"><i class="fa-solid fa-square-plus"></i> Add Pengunjung</a><br><br>
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Ip</th>
                        <th>Page</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $no = 1; @endphp

                    <tbody>
                        @foreach($pengunjung as $pgg)
                            <tr>
                                <th>{{ ( $pengunjung->currentPage() - 1 ) * $pengunjung->perPage() + $loop->iteration }}</th>
                                <td>{{$pgg->ip}}</td>
                                <td>{{$pgg->page}}</td>
                                <td>
                                <a href="{{route('changepengunjung', $pgg->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('deletepengunjung', $pgg->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <nav aria-label="Table Paging" class="mb-0 text-muted">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item{{ ($pengunjung->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $pengunjung->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $pengunjung->lastPage(); $i++)
                            <li class="page-item{{ ($pengunjung->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $pengunjung->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item{{ ($pengunjung->currentPage() == $pengunjung->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $pengunjung->nextPageUrl() }}" aria-label="Next">
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
