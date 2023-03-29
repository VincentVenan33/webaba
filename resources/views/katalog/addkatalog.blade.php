@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Add Katalog</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="{{route('savekatalog')}}" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputname">Nama Katalog</label>
                        <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
                        <label for="inputketerangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan')is-invalid @enderror" value="{{old('keterangan')}}">
                        @error("keterangan")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputimage">Image</label>
                        <img id="preview_image" width="20%" src="#" alt="Preview Image" style="display:none;"/>
                        <input type="file" name="image" class="form-control @error('image')is-invalid @enderror" id="image" onchange="previewImage(this);">
                        @error("image")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputfile">File</label>
                        <input type="file" name="file" class="form-control @error('file')is-invalid @enderror">
                        @error("file")
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
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewkatalog')}}"><i class="fa-solid fa-angles-left"></i> Back</a><br><br>
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
    <script>
        function previewImage(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview_image')
                        .attr('src', e.target.result)
                        .show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
</main>
@endsection
