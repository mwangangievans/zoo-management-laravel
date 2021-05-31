@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
   <h3> <i class="fa fa-check-square-o" aria-hidden="true"></i>Categories</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th><h4>ID</h4></th>
                     <th><h4>Category Name</h4></th>
                    <th><h4>Date Added</h4></th>
                     <th><h4>Action</h4></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                 <td><h4>{{ $category->id }}</h4></td> 

                <td><h4>{{ $category->name }}</h4></td> 
                <td><h4>{{ $category->created_at->format('F d, Y h:ia') }}</h4></td>

                <td>  
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger'] ) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('categories/create') }}" class="btn btn-success">Add Category</a>

</div>

@endsection