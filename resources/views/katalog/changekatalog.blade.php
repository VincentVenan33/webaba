@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit Katalog</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="{{route('updatekatalog')}}" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$katalog->id}}">
                    </div>
                    <div class="form-group">
                        <label for="inputname">Nama Katalog</label>
                        <input type="text" name="nama" value="{{$katalog->nama}}" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputketerangan">Keterangan</label>
                        <input type="text" name="keterangan" value="{{$katalog->keterangan}}" class="form-control @error('keterangan')is-invalid @enderror" value="{{old('keterangan')}}">
                        @error("keterangan")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputimage">Image</label><br>
                        @if ($katalog->image)
                            <img id="preview_image" width="20%" src="{{ asset('images/' . $katalog->image) }}" alt="Preview Image">
                        @else
                            <img id="preview_image" width="20%" src="#" alt="Preview Image" style="display:none;">
                        @endif
                        <div class="custom-file">
                            <input type="file" name="newimage" value="" class="custom-file-input" id="image" onchange="previewImage(this);">
                            <input type="hidden" name="image" value="{{$katalog->image}}" class="form-control @error('image')is-invalid @enderror" value="{{old('image')}}" id="image" onchange="previewImage(this);">
                            <label class="custom-file-label" for="image">{{ $katalog->image ? $katalog->image : 'Choose file' }}</label>
                        </div>
                        @error("image")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputfile">File</label>
                        <div class="custom-file">
                            <input type="file" name="newfile" value="" class="custom-file-input" onchange="previewImage(this);" data-default="{{ $katalog->file ?: 'Choose file' }}">
                            <input type="hidden" name="file" value="{{ $katalog->file }}" class="form-control @error('file')is-invalid @enderror" value="{{old('file')}}" id="file">
                            <label class="custom-file-label" for="file">{{ $katalog->file ?: 'Choose file' }}</label>
                            @if(!$katalog->file)
                                <input type="text" class="form-control" value="No file selected" readonly>
                            @endif
                        </div>
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
                                    <input name="status" value="{{$katalog->status}}" type="checkbox" {{ ($katalog->status == 1 ? 'checked' : '') }}>
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
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewkatalog')}}"><i class="fa-solid fa-angles-left"></i> Cancel</a><br><br>
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
    var old_image_url = '{{ $katalog->image ? asset($katalog->image) : "" }}';

    function previewImage(input) {
        var preview_id = $(input).attr('id') == 'image' ? 'preview_image' : 'preview_file';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#'+preview_id)
                    .attr('src', e.target.result)
                    .show();
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            $('#'+preview_id)
                .attr('src', old_image_url)
                .show();
        }

        var file_name = $(input).val().split('\\').pop();
        if(file_name){
            $(input).siblings('.custom-file-label').html(file_name);
        }else{
            $(input).siblings('.custom-file-label').html($(input).data('default'));
        }
    }
</script>
</main>
@endsection

