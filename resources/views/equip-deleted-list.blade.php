@extends('layouts.mainlayout')
 
@section('title', 'Deleted equipment')
 
@section('content')

<div>
    <h2>Deleted Equipment</h2>
</div>

@if(session('status'))
<div class="my-5 alert alert-success">
    {{ session('status') }}
</div>  
@endif

<div class="upper-btn my-5 d-flex justify-content-end">
    <a href="/sportsequip" class="btn btn-primary">
        <div><i class="bi bi-arrow-left"></i>Equipment list</div>
    </a>
</div>

<div class="my-5 deleted-list">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                <th style="text-align: center">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($deletedEquip as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->equip_code }}</td>
                    <td>{{ $item->title }}</td>
                    <td style="text-align: center">
                        <a href="/equip-restore/{{ $item->slug }}" class="btn btn-secondary col-5">
                            <i class="bi bi-arrow-counterclockwise"></i>Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection