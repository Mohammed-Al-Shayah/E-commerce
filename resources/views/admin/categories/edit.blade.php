@extends('admin.master')

@section('title', 'Edit Categories | ' . env('APP_NAME'))

@section('content')

    <h1 class="h3 mb-4 text-gray-800">Edit Category</h1>

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    @include('admin.errors')

    <form action="{{ route('admin.categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-3">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ $category->en_name }}">
        </div>

        <div class="mb-3">
            <label>Arabic Name</label>
            <input type="text" name="name_ar" placeholder="Arabic Name" class="form-control" value="{{ $category->ar_name }}">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
            <img width="80" src="{{ asset('uploads/categories/'.$category->image) }}" alt="">
        </div>

        <div class="mb-3">
            <label>Parent</label>
            <select name="perant_id" class="form-control">
                <option value="">Select</option>
                @foreach ($categories as $item )
                <option {{ $category->perant_id==$item->id?'Selected':''}} value="{{ $item->id }}">{{ $item->trans_name }}</option>
                @endforeach

            </select>
        </div>

        <button class="btn btn-success px-5">Edit</button>
    </form>




@stop
