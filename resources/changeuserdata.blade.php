@extends('layouts.template')
@section('main')
<div class="wrapper vh-100 main-content">
    <div class="row align-items-center h-100">
        @foreach($user_data as $usr)
            <form method="post" action="{{route('saveuser')}}" class="col-lg-6 col-md-8 col-10 mx-auto">
                @csrf
                <div class="mx-auto text-center">
                    <h2 class="my-3">Update User Data</h2>
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$usr->id}}">
                </div>
                <div class="form-group">
                    <label for="inputname">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{$usr->nama}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputusername">Username</label>
                    <input type="text" name="username" value="{{$usr->username}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword5">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" value="{{$usr->email}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="selection">Permission</label>
                    <select class="form-control" name='permission' value="{{$usr->permission}}" required>
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
                                <input name="status" value="{{$usr->status}}" type="checkbox">
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
</div>
@endsection
