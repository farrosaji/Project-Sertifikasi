@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')
    <h1>ini halaman alat olahraga</h1>

    <div class="upper-btn mt-3 d-flex justify-content-end">
        <a href="equip-deleted" class="me-3 btn btn-primary">
            <div><i class="bi bi-arrow-left"></i>View Deleted Data</div>
        </a>
        <a href="equip-add" class="me-3 btn btn-primary">
            <div><i class="bi bi-plus-lg"></i>Alat olahraga baru</div>
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
            <th>Code</th>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            
            

            {{-- <th style="text-align: center">Status</th>
            <th style="text-align: center">Actions</th> --}}
        </tr>
    </thead>

    <tbody>
        @foreach ($sportsequip as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->equip_code }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    @foreach ($item->categories as $category)
                    <li>{{ $category->name }} </li>
                    @endforeach
                </td>
                <td>{{ $item->status }}</td>
                <td style="text-align: center">{{ $item->status }}</td>
                <td style="text-align: center">
                    <a style="color: white" href="equip-edit/{{ $item->slug }}" class="btn btn-info col-6 mb-2">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="equip-delete/{{ $item->slug }}" class="btn btn-danger col-6">
                        <i class="bi bi-trash3"></i>Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

</div>