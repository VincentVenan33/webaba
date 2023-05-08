@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Inbox</h2>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <a class="btn btn-primary" href="{{ route('readAllcontact') }}"><i class="fa-solid fa-check-circle"></i> Mark All as Read</a><br><br>
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>E-mail</th>
                                            <th>Pesan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    <tbody>
                                        @foreach($contact as $ctc)
                                            <tr class="{{ $ctc->status == 0 ? 'table-secondary' : '' }}">
                                                <td>{{ ( $contact->currentPage() - 1 ) * $contact->perPage() + $loop->iteration }}</td>
                                                <td>{{$ctc->nama}}</td>
                                                <td>{{$ctc->email}}</td>
                                                <td>
                                                    {{$ctc->pesan}}
                                                </td>
                                                <td>
                                                    <a href="{{route('detailcontact', $ctc->id)}}" class="btn btn-{{ $ctc->status == 0 ? 'warning' : 'secondary' }} btn-sm">
                                                        <i class="fa {{ $ctc->status == 0 ? 'fa-envelope' : 'fa-envelope-open' }}"></i>
                                                    </a>
                                                    <a href="{{route('deletecontact', $ctc->id)}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                  <nav aria-label="Table Paging" class="mb-0 text-muted">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item{{ ($contact->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $contact->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $contact->lastPage(); $i++)
                            <li class="page-item{{ ($contact->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $contact->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item{{ ($contact->currentPage() == $contact->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $contact->nextPageUrl() }}" aria-label="Next">
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
