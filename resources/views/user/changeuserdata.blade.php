@extends('layouts.template')
@section('main')
{{-- <div class="wrapper vh-100 main-content">
    <div class="row align-items-center h-100">
            <form method="post" action="{{route('updateuser')}}" class="col-lg-6 col-md-8 col-10 mx-auto">
                @csrf
                <div class="mx-auto text-center">
                    <h2 class="my-3">Update User Data</h2>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <label for="inputname">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{$user->nama}}" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                    @error("nama")
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputusername">Username</label>
                    <input type="text" name="username" value="{{$user->username}}" class="form-control @error('username')is-invalid @enderror" value="{{old('username')}}">
                    @error("username")
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}">
                    @error("email")
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword5">Password</label>
                    <input type="password" name="password" value="{{$user->password}}" class="form-control @error('password')is-invalid @enderror" value="{{old('password')}}">
                    @error("password")
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="selection">Permission</label>
                    <select class="form-control" name='permission' value="{{$user->permission}}">
                        <option value='{{$user->permission}}'>{{$user->permission}}</option>
                        <option value=''>-</option>
                        <option value='administrator'>administrator</option>
                        <option value='operator'>operator</option>
                    </select>
                </div>
                <div class="container form-group">
                    <div class="row">
                        <div class="col">
                            <label for="status">Status</label>
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col col-lg-1">
                            <label class="form-control switch">
                                <input name="status" value="{{$user->status}}" type="checkbox" {{ ($user->status == 1 ? 'checked' : '') }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-4">
                        </div>
                        <div class="col col-2">
                            <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                        </div>
                        <div class="col col-2">
                            <a class="btn btn-lg btn-primary btn-block" href="{{route('viewuserdata')}}"><i class="fa-solid fa-angles-left"></i> Cancel</a><br><br>
                        </div>
                        <div class="col col-4">
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div> --}}
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit User</h2>
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <p class="mb-3"><strong>Edit</strong></p>
                  <form method="post" action="{{route('updateuser')}}" class="col-lg-12">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$user->id}}">
                    </div>
                    <div class="form-group">
                        <label for="inputname">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{$user->nama}}" class="form-control @error('nama')is-invalid @enderror" value="{{old('nama')}}">
                        @error("nama")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputusername">Username</label>
                        <input type="text" name="username" value="{{$user->username}}" class="form-control @error('username')is-invalid @enderror" value="{{old('username')}}">
                        @error("username")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email')is-invalid @enderror" value="{{old('email')}}">
                        @error("email")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword5">Password</label>
                        <input type="password" name="password" value="{{$user->password}}" class="form-control @error('password')is-invalid @enderror" value="{{old('password')}}">
                        @error("password")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div  class="form-group">
                        <label for="selection">Permission</label>
                        <select class="form-control @error('permission')is-invalid @enderror" value="{{$user->permission}}" id="permission"  name='permission'>
                            <option value='{{$user->permission}}'>{{$user->permission}}</option>
                            <option value=''>-</option>
                            <option value='administrator'>administrator</option>
                            <option value='operator'>operator</option>
                        </select>
                        @error("permission")
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
                                    <input name="status" value="{{$user->status}}" type="checkbox" {{ ($user->status == 1 ? 'checked' : '') }}>
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
                                <a class="btn btn-lg btn-primary btn-block" href="{{route('viewuserdata')}}"><i class="fa-solid fa-angles-left"></i> Cancel</a><br><br>
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

