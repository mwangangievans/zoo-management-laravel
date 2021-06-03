@extends('layouts.app')

@section('title', '| booking')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
  <h3 class="info">recent bookings</h3>
    <div class="table-responsive">
        <table id="example" class="table table-bordered table-striped">

            <thead>
                <tr class="wildlifeme">
                    <th >Check in</th>
                    <th >Check out</th>
                    <th >phone</th>
                    <th >Age</th>
                    <th >Gender</th>
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


                                    {{-- $diff=date_diff($date3,$date2);

                            $days = substr($diff->format("%R%a "),1); --}}

                        </tr>
                    @endforeach
                @else
                @endif
            </tbody>

        </table>
    </div>
</div>

@endsection