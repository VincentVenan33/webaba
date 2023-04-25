@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit Produk</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <form method="post" action="{{route('updateproduk')}}" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$produk->id}}">
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
                        <label for="inputname">Nama Produk</label>
                        <input type="text" name="nama" value="{{$produk->nama}}" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputharga">Harga</label>
                        <input type="text" name="harga" value="{{$produk->harga}}" class="form-control @error('harga')is-invalid @enderror" id="inputharga">
                        @error("harga")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputimage">Image</label><br>
                        @if ($produk->image)
                            <img id="preview_image" width="20%" src="{{ asset('images/'.$produk->image) }}" alt="Preview Image">
                        @else
                            <img id="preview_image" width="20%" src="#" alt="Preview Image" style="display:none;">
                        @endif
                        <div class="custom-file">
                            <input type="file" name="newimage" value="" class="custom-file-input" id="image" onchange="previewImage(this);">
                            <input type="hidden" name="image" value="{{$produk->image}}" class="form-control @error('image')is-invalid @enderror" value="{{old('image')}}" id="image" onchange="previewImage(this);">
                            <label class="custom-file-label" for="image">{{$produk->image ?: 'Choose file'}}</label>
                        </div>
                        @error("image")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputketerangan">Keterangan</label>
                        <input type="text" name="keterangan" value="{{$produk->keterangan}}" class="form-control @error('keterangan')is-invalid @enderror" value="{{old('keterangan')}}">
                        @error("keterangan")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Whatsapp</label>
                        <input type="text" name="whatsapp" value="{{$produk->whatsapp}}" class="form-control @error('whatsapp')is-invalid @enderror" value="{{old('whatsapp')}}">
                        @error("whatsapp")
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
                                    <input name="status" value="{{$produk->status}}" type="checkbox" {{ ($produk->status == 1 ? 'checked' : '') }}>
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
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewproduk')}}"><i class="fa-solid fa-angles-left"></i> Cancel</a><br><br>
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
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_image').attr('src', e.target.result);
                    $('#preview_image').show();
                }
                reader.readAsDataURL(input.files[0]);

                // set label value to selected file name
                var filename = input.files[0].name;
                $(input).parent().find('.custom-file-label').text(filename);

                // update hidden input value for image or file
                var hiddenInputName = $(input).attr('name').replace('new', '');
                $('input[name='+hiddenInputName+']').val(filename);
            }
        }

        $(document).ready(function() {
            // Get the file name for image input
            var imageName = $('input[name=image]').val();
            if (imageName) {
                $('input[name=newimage]').parent().find('.custom-file-label').html(imageName);
            }

            // Get the file name for file input
            var fileName = $('input[name=file]').val();
            if (fileName) {
                $('input[name=newfile]').parent().find('.custom-file-label').html(fileName);
            }
        });

        $('input[type=file]').change(function(e){
            var fileName = e.target.files[0].name;
            $(this).parent().find('.custom-file-label').html(fileName);
        });
        </script>
</main>
@endsection

