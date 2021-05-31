@extends('layouts.app')

@section('title', '| View Category')

@section('content')

<div class="container">
    
    <h1>{{ $category->name }}</h1>
    <hr>
    
    {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id] ]) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
    @can('Edit Post')
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection