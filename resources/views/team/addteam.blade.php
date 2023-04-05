@extends('layouts.template')
@section('main')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Add Team</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="{{route('saveteam')}}" class="col-lg-12" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputname">Nama Team</label>
                        <input type="text" name="nama" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control @error('jabatan')is-invalid @enderror" value="{{old('jabatan')}}">
                        @error("jabatan")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control @error('deskripsi')is-invalid @enderror" value="{{old('deskripsi')}}">
                        @error("deskripsi")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputimage">Image</label><br>
                        <img id="preview_image" width="20%" src="#" alt="Preview Image" style="display:none;"/>
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image" onchange="previewImage(this);">
                          <label class="custom-file-label" for="image" id="image-label">Choose image</label>
                          @error("image")
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    <div class="form-group">
                        <label for="inputname">Linkedin</label>
                        <input type="text" name="linkedin" class="form-control @error('linkedin')is-invalid @enderror" value="{{old('linkedin')}}">
                        @error("linkedin")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Facebook</label>
                        <input type="text" name="facebook" class="form-control @error('facebook')is-invalid @enderror" value="{{old('facebook')}}">
                        @error("facebook")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputname">Instagram</label>
                        <input type="text" name="instagram" class="form-control @error('instagram')is-invalid @enderror" value="{{old('instagram')}}">
                        @error("instagram")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputketerangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan')is-invalid @enderror" value="{{old('keterangan')}}">
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
                                    <input name="status" type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-6">
                                <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                            </div>
                            <div class="col col-6">
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewteam')}}"><i class="fa-solid fa-angles-left"></i> Back</a><br><br>
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
        // Membuat variabel imageInput yang menunjuk pada input file gambar
        const imageInput = document.getElementById('image');

        // Menambahkan event listener pada saat gambar dipilih
        imageInput.addEventListener('change', function() {
          // Mengambil nama file gambar yang dipilih
          const imageName = imageInput.files[0].name;
          // Mengubah teks pada label "Choose image" menjadi nama file gambar
          document.getElementById('image-label').innerHTML = imageName;
        });
      </script>
</main>
@endsection
