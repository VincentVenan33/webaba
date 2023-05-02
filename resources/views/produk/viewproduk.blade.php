@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="mb-2 page-title">Produk</h2>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">
                    <a class="btn btn-success" href="{{route('addproduk')}}"><i class="fa-solid fa-square-plus"></i> Add Produk</a><br><br>
                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Image</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @php $no = 1; @endphp

                    <tbody>
                        @foreach($produk as $pdk)
                            <tr>
                                <th>{{ ( $produk->currentPage() - 1 ) * $produk->perPage() + $loop->iteration }}</th>
                                <td>{{$pdk->nama}}</td>
                                <td>{{$pdk->harga}}</td>
                                <td><img src="{{url('').'/images/'.$pdk->image}}" alt="{{$pdk->nama}}" width="50"></td>
                                <td>{{ strlen($pdk->keterangan) <= 15 ? $pdk->keterangan : substr($pdk->keterangan, 0, 15) . '...' }}</td>
                                <td>{{($pdk->status ==1 ? "AKTIF" : "NON AKTIF")}}</td>
                                <td>
                                <a href="{{route('changeproduk', $pdk->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('deleteproduk', $pdk->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <nav aria-label="Table Paging" class="mb-0 text-muted">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item{{ ($produk->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $produk->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $produk->lastPage(); $i++)
                            <li class="page-item{{ ($produk->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $produk->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item{{ ($produk->currentPage() == $produk->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $produk->nextPageUrl() }}" aria-label="Next">
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
