@extends('layouts.template')
@section('main')
<div class="main-content">
    <h3>User Data</h3>
    <a class="btn btn-success" href="{{route('adduser')}}"><i class="fa-solid fa-square-plus"></i> Add User</a><br><br>
    <table class="table table-bordered table-hover scroll-table">
    <tr class="">
        <th width="100px">No.</th>
        <th>Nama</th>
        <th>Username</th>
        <th>E-mail</th>
        <th>Permission</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($user as $usr)
    <tr>
        <th>{{ $no++ }}</th>
        <td>{{$usr->nama}}</td>
        <td>{{$usr->username}}</td>
        <td>{{$usr->email}}</td>
        <td>{{$usr->permission}}</td>
        <td>{{$usr->status}}</td>
        <td>
        <a href="changeuser/{{$usr->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
        <a href="delete/{{$usr->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    </table>
</div>
@endsection
