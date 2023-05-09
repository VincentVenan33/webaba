@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Inbox</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$contact->id}}">
                    </div>
                    <div class="form-group">
                        <label for="inputname">Nama</label>
                        <input type="text" name="nama" value="{{$contact->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" value="{{$contact->email}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputpesan">Pesan</label>
                        <textarea name="pesan" class="form-control" readonly>{{$contact->pesan}}</textarea>
                    </div>
                    <div class="form-group col">
                        <div class="row mt-4">
                            <div class="col"></div>
                            <div class="col col-xl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-6 text-right"></div>
                            <div class="col col-6 text-right">
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewcontact')}}"><i class="fa-solid fa-angles-left"></i> Back</a><br><br>
                            </div>
                        </div>
                    </div>

                  </form>
                </div>
                </div>
              </div>
            </div> <!-- /.col -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main>
@endsection
