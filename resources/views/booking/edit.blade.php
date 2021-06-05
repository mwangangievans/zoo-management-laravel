{{-- @extends('layouts.app')

@section('title', '| Add  Ticket')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>
<h2>Edit booking</h2>
    <hr class="line">
<div class="ticket">
    <form method="PATCH" action= "{{ route('bookings.update',$booking->id) }}" class="formless">   

             {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <div>
                    <div class="form-group">
                            <label  for="Name">
                                Check in date
                            </label>
                            <input  type="date" name="check_in" id="datepicker-sc" class="form-control" placeholder="enter check in dates"  value="{{ $booking->check_in }}">
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                         Check out date </label>
                            <input  type="date" name="check_out" id="datepicker-sc" class="form-control" placeholder="enter chech out dates" value="{{ $booking->check_out }}" >
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                                Phone 
                            </label>
                            <input  type="text" name="phone" id="phone" class="form-control" placeholder="enter phone"value="{{ $booking->phone }}" >
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                                Age 
                            </label>
                            <input  type="text" name="age" id="age" class="form-control" placeholder="enter age" value="{{ $booking->age }}" >
                    </div>
               <div class="form-group">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Gender
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="flex flex-row items-center">
                            <label class="block text-gray-500 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio"   value="male" {{ ($booking->gender == 'male') ? 'checked' : '' }}>
                                <span class="text-sm">Male</span>
                            </label>
                            <label class="ml-4 block text-gray-500 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio"  value="female" {{ ($booking->gender == 'male') ? 'checked' : '' }}>
                                <span class="text-sm">Female</span>
                            </label>
                            <label class="ml-4 block text-gray-500 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio"   value="other" {{ ($booking->gender == 'other') ? 'checked' : '' }}>
                                <span class="text-sm">Other</span>
                            </label>
                        </div>
                    
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Edit</button>
                    </div>

            </form>
            </div>
            
@endsection
        
@extends('layouts.app')

@section('title', '| Edit User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
    <hr>
    {{-- @include ('errors.list') --}}

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }} {{-- Form model binding to automatically populate our fields with user data --}}

    
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Give Role</b></h5>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection