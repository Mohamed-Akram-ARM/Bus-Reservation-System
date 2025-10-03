@extends('layouts.home')

@section('content')

<div class="container-fluid">

  <h1 class="h3 mb-0 text-gray-800">Home </h1>
  <p>Search available buses here.</p>

  <div class="row align-items-center">

    <div class="col-xl-6 col-md-12 mb-4 small">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          
          <form action="{{route('home.search')}}" method="GET">
            
            <div class="form-group">
              <label for="">
                <i class="fas fa-map-marker-alt"></i>
                From :
              </label>
              <input type="text" placeholder="Arrival location" name="arrivalLocation" class="form-control">
            </div>
            <div class="form-group">
              <label for="">
                <i class="fas fa-map-marker-alt"></i>
                To :
              </label>
              <input type="text" placeholder="Destination" name="destination" class="form-control">
            </div>
      

            <div class="form-group">
  <label for="">
    <i class="fas fa-calendar-alt"></i>
    Date :
  </label>

  <input type="date" name="Date" value="{{ request('Date') ?? $date }}" class="form-control col-sm-6 col-md-4" required/>
  
</div>
            <button type="submit" class="btn btn-primary">Search</button>
            
          </form>
        
        </div>
      </div>
    </div>


    <div class="col-xl-6 col-md-12 mb-4 ">
      <div class="w-50 mx-auto">
        <img src="{{asset('images/home2.gif')}}" class="img-fluid" alt="">        
      </div>
    </div>

  </div>

  <hr class="line-divider">

  <br>

  <div class="row">
    @foreach($buses as $bus)
    <div class="col-sm-6 col-md-3">
      <div class="card text-center shadow h-100">
        <img src="{{asset($bus->img)}}" class="img-fluid" alt="Bus img">
        <div class="card-body">
          <p class="card-header">{{$bus->name}}</p>

         <div class="d-flex flex-column justify-content-center"> 
           <p class="text-primary">{{$bus->from}}</p>
           <i class="fas fa-angle-double-down"></i>
           <p class="text-primary">{{$bus->to}}</p>
             <span>Arrival time: </span>
                    <span class="text-primary">{{$bus->arrival_time}}</span>
        </div>




        <a href="{{ route('home.show', [
        'bus' => $bus,
        'date' => request('Date') ?? now()->toDateString()
    ]) }}" class="btn btn-primary">
    Buy tickets
</a>

        </div>
      </div>
    </div>
    @endforeach
  </div>

  <br>
  <br>

</div>
@endsection