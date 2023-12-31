@extends('layouts.mainlayout')
@section('title', 'SportsEquip')
@section('content')

<form action="" method="get">
    <div class="row">
        <div class="col-12 col-sm-6">
            <select name="category" id="category" class="form-control">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 col-sm-6">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>

<div class="my-5">
    <div class="row">
        @foreach ($sportsequip as $item)
            <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100">
                    <img src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('images/cover-not-available.jpg') }}" class="card-img-top" alt="..." draggable="false">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->equip_code }}</p>
                        <ul class="card-text">
                            @foreach ($item->categories as $category)
                                <li>{{ $category->name }}</li>
                            @endforeach
                        </ul>
                        <p class="fw-bold card-text text-end {{ $item->status == 'In stock' ? 'text-success' : 'text-danger' }}">
                            {{ $item->status }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
