@extends('layouts.app')

@section('title', '| Edit Category')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">
    
        <h1>Edit Category</h1>
        <hr>
        @include ('errors.list')
            {{ Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}<br>

            

            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div>

@endsection