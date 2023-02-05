@extends('layouts.template')
@section('main')
<div class="wrapper vh-100 main-content">
    <div class="row align-items-center h-100">
        <form method="post" action="{{route('saveuser')}}" class="col-lg-6 col-md-8 col-10 mx-auto">
            @csrf
            <div class="mx-auto text-center">
                <h2 class="my-3">ADD USER</h2>
            </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="inputname">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="inputusername">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                </div>
            <div class="row">
                <div class="form-group col">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group col">
                    <label for="inputPassword5">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="selection">Permission</label>
                    <select class="form-control" name='permission' required>
                        <option value=''>-</option>
                        <option value='administrator'>administrator</option>
                        <option value='operator'>operator</option>
                    </select>
                </div>
                <div class="form-group col">
                    <div class="row mt-4">
                        <div class="col">
                            <label for="status">Status</label>
                        </div>
                        <div class="col col-xl"></div>
                        <div class="col">
                            <label class="form-control switch ml-5">
                                <input name="status" type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            {{-- <td> <input data-id="{{$s->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $s->status ? 'checked' : '' }}> --}}
                        </div>
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
                        <a class="btn btn-lg btn-primary btn-block" href="{{route('viewuserdata')}}"><i class="fa-solid fa-angles-left"></i> Back</a><br><br>
                    </div>
                    <div class="col col-4">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
