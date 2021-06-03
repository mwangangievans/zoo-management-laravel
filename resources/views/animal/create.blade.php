@extends('layouts.app')

@section('title', '| Add  Animal')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h4> Add Animal</h4>
    <hr>

    {{-- @include ('errors.list') --}}
    <form method="POST" action="{{ route('animals.store') }}"  enctype="multipart/form-data">   

             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <div class="form-group">
                            <label  for="Name">
                                Name 
                            </label>
                            <input  type="text" name="name" id="name" class="form-control" placeholder="enter name">
                    </div>
                     <div class="form-group">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" >--Select Category--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                            <label  for="Description">
                                Description
                            </label>
                          <textarea class="form-control" name="description" id="Description" placeholder="enter name"  rows="6" ></textarea>
                        </div>
                    <div class="form-group">
                            <label  for="Image">
                                Image
                            </label>
                            <input  type="file" name="image" id="Image" >
                    </div>
                </div>
                        <button class="btn btn-primary">Save</button>

           
            </form>
@endsection