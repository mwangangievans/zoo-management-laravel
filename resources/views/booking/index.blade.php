@extends('layouts.app')

@section('title', '| booking')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
  <h3 class="info">recent bookings</h3>
  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BookVisit">
  Book a visit
</button>

<!-- Modal -->
<div class="modal fade" id="BookVisit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book a Visit to our Zoo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="ticket">
    <form method="POST" action="{{ route('bookings.store') }}" class="formless" >   

             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <div class="form-group">
                            <label  for="Name">
                                Check in date
                            </label>
                            <input  type="date" name="check_in" id="datepicker-sc" class="form-control" placeholder="enter check in dates">
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                         Check out date                            </label>
                            <input  type="date" name="check_out" id="datepicker-sc" class="form-control" placeholder="enter chech out dates">
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                                Phone 
                            </label>
                            <input  type="text" name="phone" id="phone" class="form-control" placeholder="enter phone">
                    </div>
                     <div class="form-group">
                            <label  for="Name">
                                Age 
                            </label>
                            <input  type="text" name="age" id="age" class="form-control" placeholder="enter age">
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
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="male">
                                <span class="text-sm">Male</span>
                            </label>
                            <label class="ml-4 block text-gray-500 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="female">
                                <span class="text-sm">Female</span>
                            </label>
                            <label class="ml-4 block text-gray-500 font-bold">
                                <input name="gender" class="mr-2 leading-tight" type="radio" value="other">
                                <span class="text-sm">Other</span>
                            </label>
                        </div>
                    
                    </div>
                </div>
            <button class="btn btn-primary">Save</button>
                    </div>
    </form>
            </div>
      </div>
    </div>
  </div>
</div>
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr class="wildlifeme">
                    <th >Check in</th>
                    <th >Check out</th>
                    <th >phone</th>
                    <th >Age</th>
                    <th >Gender</th>
                     <th >Duration in days</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($user->booking) > 0)
                    @foreach ($user->booking as $booking)
                        <tr>
                            <td >{{ $booking->check_in }}</td>
                            <td>{{ $booking->check_out}}</td>
                            <td>{{$booking->phone }}</td>
                            <td>{{$booking->age}}</td>
                            <td>{{$booking->gender }}</td>
                            <td>{{$booking->Duration }}</td>
                            <td>
                   {{-- <td> <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-info pull-right" style="margin-right: 3px;">Edit</a> --}}
                    <button type="button" class="btn btn-primary pull-left " data-toggle="modal" data-target="#exampleModal{{$booking->id}}">
                    Edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$booking->userBooking->name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           {{ Form::model($booking, array('route' => array('bookings.update', $booking->id), 'method' => 'PUT')) }} {{-- Form model binding to automatically populate our fields with user data --}}

                            <div class="form-group">
                                {{ Form::label('check_in', 'Checkin dates') }}
                                {{ Form::date('check_in', null, array('class' => 'form-control')) }}
                            </div>
                             <div class="form-group">
                                {{ Form::label('check_out', 'check_out') }}
                                {{ Form::date('check_out', null, array('class' => 'form-control')) }}
                            </div>
                             <div class="form-group">
                                {{ Form::label('phone', 'Phone') }}
                                {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            </div>
                             <div class="form-group">
                                {{ Form::label('age', 'Age') }}
                                {{ Form::text('age', null, array('class' => 'form-control')) }}
                            </div>
                             <div class="form-group">
                                {{ Form::label('gender', 'Gender') }}
                                {{ Form::text('gender', null, array('class' => 'form-control')) }}
                            </div>

                    

                            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

                            {{ Form::close() }}
                        </div>
                        </div>
                    </div>
                    </div>

                    {{-- /////delete modal --}}
                   

                    
                    </div>

                {{-- <a href="{{ route('bookings.destroy', $booking->id) }}" class="btn btn-danger pull-right" style="margin-right: 3px;">Delite</a></td> --}}

                                    {{-- $diff=date_diff($date3,$date2);

                            $days = substr($diff->format("%R%a "),1); --}}
                             {!! Form::open(['method' => 'DELETE', 'route' => ['bookings.destroy', $booking->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger  pull-left']) !!}
                    {!! Form::close() !!}

                        </tr>
                    @endforeach
                @else
                @endif
            </tbody>

        </table>
    </div>
</div>

@endsection