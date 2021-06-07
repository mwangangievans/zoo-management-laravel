@extends('layouts.app')

@section('title', '| booking')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
  <h3 class="info">Animals posted</h3>
  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AnimalAdd">
  Add Animal
</button>

<!-- Modal -->
<div class="modal fade" id="AnimalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add animal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="ticket">
   <form method="POST" action="{{ route('animals.store') }}"  enctype="multipart/form-data" class="addAnimal">   

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
            </div>
      </div>
    </div>
  </div>
</div>
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr class="wildlifeme">
                    <th >Animal Name</th>
                    <th >Animal image</th>
                    <th >Description</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($animals) > 0)
                    @foreach ($animals as $animal)
                        <tr>
                            <td >{{ $animal->name }}</td>
                            <td >   <div class="image-container">
            <img src="/storage/image/{{$animal->image}}" alt="Animal picture" class="centered-image">
            
                          </div></td>
                            <td >{{ $animal->description }}</td>
                          
                            <td>
                   {{-- <td> <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-info pull-right" style="margin-right: 3px;">Edit</a> --}}
                    <button type="button" class="btn btn-primary pull-left " data-toggle="modal" data-target="#exampleModal{{$animal->id}}">
                    Edit
                    </button>
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal{{$animal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <div class="modal-body">
              {{ Form::model($animal, array('route' => array('animals.update', $animal->id), 'method' => 'PUT','enctype'=>"multipart/form-data")) }} 
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div>
                    <div class="form-group">
                            <label  for="Name">
                                Name 
                            </label>
                            <input  type="text" name="name" id="name" class="form-control" placeholder="enter name" value="{{ $animal->name }}">
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
                          <textarea class="form-control" name="description" id="Description" placeholder="enter Description"  rows="6"  >{{ ucfirst($animal->description) }}</textarea>
                        </div>
                      
                    <div class="form-group">
                            <label  for="Image">
                                Image
                            </label>
                            <input  type="file" name="image" id="Image"  value="{{ $animal->image }}">
                    </div>
                </div>
                        <button class="btn btn-success">Update</button>
              </form>


                    {{-- /////delete modal --}}
                   

{{--                     
                    </div> --}}

                {{-- <a href="{{ route('animals.destroy', $animal->id) }}" class="btn btn-danger pull-right" style="margin-right: 3px;">Delite</a></td> --}}

                                    {{-- $diff=date_diff($date3,$date2);

                            $days = substr($diff->format("%R%a "),1); --}}
                            {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['animals.destroy', $animal->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger  pull-left']) !!}
                    {!! Form::close() !!}  --}}

                        </tr>
                    @endforeach
                @else
                @endif
            </tbody>

        </table>
    </div>
</div>

@endsection