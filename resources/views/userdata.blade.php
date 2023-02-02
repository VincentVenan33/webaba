@extends('layouts.template')
@section('main')
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
        <form method="post" action="{{route('simpanuser')}}" class="col-lg-6 col-md-8 col-10 mx-auto">
            @csrf
            <div class="mx-auto text-center">
                <h2 class="my-3">ADD USER</h2>
            </div>
            <div class="form-group">
                <label for="inputname">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputusername">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputPassword5">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="selection">Permission</label>
                <select class="form-control" name='permission' required>
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
                            <input name="status" type="checkbox">
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
                        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    </div>
                    <div class="col col-2">
                        <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-angles-left"></i> Kembali</button>
                    </div>
                    <div class="col col-4">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection