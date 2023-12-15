@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')
    <h1>ini halaman user</h1>

    <div class="upper-btn mt-3 d-flex justify-content-end">
        <a href="/user-registered" class="btn btn-primary me-3">
            <div><i class="bi bi-list-ul"></i>Registered users</div>
        </a>
        <a href="/user-deleted-list" class="btn btn-danger">
            <div><i class="bi bi-trash"></i>Deleted users</div>
        </a>
    </div>
    
    @if(session('status'))
    <div class="my-5 alert alert-success">
        {{ session('status') }}
    </div>  
    @endif
    
    <div class="my-5 table-list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th style="text-align: center">Phone</th>
                    <th style="text-align: center">Actions</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td style="text-align: center">
                            @if($item->phone )
                                {{ $item->phone }}
                                
                            @else
                                -
                            @endif
                        </td>
                        <td style="text-align: center">
                            <a style="color: white" href="/user-detail/{{ $item->slug }}" class="btn btn-info col-3">
                                <i class="bi bi-info-circle"></i>Details</a>
                            <a href="/user-delete/{{ $item->slug }}" class="btn btn-danger col-3">
                                <i class="bi bi-trash3"></i>Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </div>
@endsection


