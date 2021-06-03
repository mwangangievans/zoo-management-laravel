
    @extends('layouts.app')

@section('title', '| Add  Ticket')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h4 class="visit"> Book a visit </h4>
    <hr class="line">
<div class="ticket">
    {{-- @include ('errors.list') --}}
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
            
@endsection
       
