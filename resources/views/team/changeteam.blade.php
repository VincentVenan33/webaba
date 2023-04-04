@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit Team</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="{{route('updateteam')}}" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$team->id}}">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="inputname">Nama</label>
                        <input type="text" name="nama" value="{{$team->nama}}" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Jabatan</label>
                        <input type="text" name="jabatan" value="{{$team->jabatan}}" class="form-control @error('jabatan')is-invalid @enderror" value="{{old('jabatan')}}">
                        @error("jabatan")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{$team->deskripsi}}" class="form-control @error('jabatan')is-invalid @enderror" value="{{old('deskripsi')}}">
                        @error("deskripsi")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Linkedin</label>
                        <input type="text" name="linkedin" value="{{$team->linkedin}}" class="form-control @error('linkedin')is-invalid @enderror" value="{{old('linkedin')}}">
                        @error("linkedin")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Facebook</label>
                        <input type="text" name="facebook" value="{{$team->facebook}}" class="form-control @error('facebook')is-invalid @enderror" value="{{old('facebook')}}">
                        @error("facebook")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Instagram</label>
                        <input type="text" name="instagram" value="{{$team->instagram}}" class="form-control @error('instagram')is-invalid @enderror" value="{{old('instagram')}}">
                        @error("instagram")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputketerangan">Keterangan</label>
                        <input type="text" name="keterangan" value="{{$team->keterangan}}" class="form-control @error('keterangan')is-invalid @enderror" value="{{old('keterangan')}}">
                        @error("keterangan")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <div class="row mt-4">
                            <div class="col">
                                <label for="status">Status</label>
                            </div>
                            <div class="col col-xl"></div>
                            <div class="col status-swith">
                                <label class="form-control switch">
                                    <input name="status" value="{{$team->status}}" type="checkbox" {{ ($team->status == 1 ? 'checked' : '') }}>
                                    <span class="slider round"></span>
                                </label>
                                {{-- <td> <input data-id="{{$s->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $s->status ? 'checked' : '' }}> --}}
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                            </div>
                            <div class="col col-6">
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewteam')}}"><i class="fa-solid fa-angles-left"></i> Cancel</a><br><br>
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

