@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Add Pengunjung</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="{{route('savepengunjung')}}" class="col-lg-12">
                    @csrf
                    <div class="form-group">
                        <label for="inputip">Ip</label>
                        <input type="text" name="ip" class="form-control @error('ip')is-invalid @enderror" value="{{old('ip')}}">
                        @error("ip")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputpage">Page</label>
                        <input type="text" name="page" class="form-control @error('page')is-invalid @enderror" value="{{old('page')}}">
                        @error("page")
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
                                    <input name="status" type="checkbox">
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
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewpengunjung')}}"><i class="fa-solid fa-angles-left"></i> Back</a><br><br>
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
