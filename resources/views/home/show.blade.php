@extends('layouts.home')

@section('content')
<div class="container-fluid" style="min-height: 80vh">

  <div class="card">
    <div class="card-body">
      @if($errors->any())
       <div class="alert alert-danger">
          {{ implode('', $errors->all(':message')) }}
        </div>
      @endif

      <!-- Bus Information -->
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <img src="{{ asset('images/bus/1.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-12 col-md-8">
          <h3 class="text-primary">{{ $bus->name }}</h3>
          <p>Bus code : <span class="text-primary">{{ $bus->bus_code }}</span></p>
           <p>Arrival Time : <span class="text-primary">{{ $bus->arrival_time }}</span></p>
          <p>From: <span class="text-primary">{{ $bus->from }}</span></p>
          <p>To: <span class="text-primary">{{ $bus->to }}</span></p>
          <p>Fare: <span class="text-primary">Rs {{ $bus->fare }}</span></p>
        
        </div>
      </div>

      <!-- Seat Layout -->
      <h4 class="mt-4">Select Your Seat</h4>
      @php
          // example: [2, 5, 10] are booked from DB
          $bookedSeats = $bookedSeats ?? [];
      @endphp

      <form method="POST" id="form" action="{{ route('reservation.create', ['bus' => $bus]) }}">
          
          @csrf
          <table id="seatsDiagram" class="table table-bordered text-center">
              <tr>
                  @for ($seatNum = 1; $seatNum <= 14; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                      <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              </tr>
               <tr>
                  @for ($seatNum = 15; $seatNum <= 28; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                      <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              </tr>

@for ($seatNum=1; $seatNum<=14; $seatNum++)
  <td class="space"></td>
@endfor
               <tr>
                  @for ($seatNum = 29; $seatNum <= 39; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                     <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              

  <td class="space"></td>

              
               
                  @for ($seatNum = 40; $seatNum <= 41; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                      <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              </tr>

              <tr>
                  @for ($seatNum = 42; $seatNum <= 52; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                      <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              

  <td class="space"></td>

              
               
                  @for ($seatNum = 53; $seatNum <= 54; $seatNum++)
                      @php
                          $isBooked = in_array($seatNum, $bookedSeats);
                          $class = $isBooked ? "booked" : "available";
                          $clickable = $isBooked ? "true" : "false";
                      @endphp
                      <td id="seat-{{ $seatNum }}" 
    class="seat {{ $class }}" 
    data-seat="{{ $seatNum }}" 
    data-booked="{{ $isBooked ? 1 : 0 }}">
    {{ $seatNum }}
</td>
                  @endfor
              </tr>
            
          </table>


          <input type="hidden" name="bus_id" value="{{ $bus->id }}">
          <input type="hidden" name="src_name" value="{{ $bus->from }}">
          <input type="hidden" name="to_name" value="{{ $bus->to }}">
          <input type="hidden" name="Date" value="{{ $date }}">
          <input type="hidden" name="bus_name" value="{{ $bus->name }}">
         <input type="hidden" name="fare" value="{{ $bus->fare }}">

          <label id="selected_seat_l">Selected Seat:</label>
         <input type="number" id="seat_input" name="seat_no" min="1" max="54" required readonly>
          <br><br>

          <div class="my-4"> <div class="row align-items-center"> <div class="col-sm-6 col-md-4">
          <i class="fas fa-user"></i> name</div> <input value="{{old('')}}" name="name" class="form-control col-sm-6 col-md-4" required/>
         </div> </div>

         <div class="my-4"> <div class="row align-items-center"> <div class="col-sm-6 col-md-4">
          <i class="fas fa-phone"></i> Phone</div> <input value="{{old('phone')}}" name="phone" class="form-control col-sm-6 col-md-4" required/>
         </div> </div>

        

         <div class="my-2"> <div> <div><i class="fas fa-home"></i> Address</div> <textarea name="Address" class="form-control" rows="4"></textarea> <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
        <br>
         <div class="my-4"> <div class="row align-items-center"> <div class="col-sm-6 col-md-4">
        <label  class="fas fa-date"><i></i> Date</label>
<input type="date" name="Date" class="form-control col-sm-6 col-md-4" value="{{ $date }}" required/>
         </div> </div>
         <br>
         <button type="submit" class="btn btn-success">Confirm Booking</button>
          
      </form>

    </div>
  </div>

</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
  let selectedSeat = null;
  const seatInput = document.getElementById('seat_input');

  document.querySelectorAll('#seatsDiagram td.seat').forEach(td => {
    td.addEventListener('click', function () {
      const isBooked = td.dataset.booked === '1';
      const seatNum = td.dataset.seat;

      if (isBooked) {
        alert('Seat ' + seatNum + ' is already booked.');
        return;
      }

      // unselect previous
      if (selectedSeat && selectedSeat !== seatNum) {
        const prev = document.getElementById('seat-' + selectedSeat);
        if (prev) prev.classList.remove('selected');
      }

      if (selectedSeat === seatNum) {
        // unselect same seat
        td.classList.remove('selected');
        selectedSeat = null;
        seatInput.value = '';
      } else {
        td.classList.add('selected');
        selectedSeat = seatNum;
        seatInput.value = seatNum;
      }
    });
  });
});

</script>

<style>
#seatsDiagram td.available { background:#e6ffe6; }   /* green */
#seatsDiagram td.booked { background:#ffd6d6; cursor:not-allowed; } /* red */
#seatsDiagram td.selected { outline:3px solid #2d9cdb; }

</style>
@endsection
