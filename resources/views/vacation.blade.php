@extends('Layouts.Master')

@section('content')

  <div class="container">
    @if(session()->has('vacation.added'))
    <div class="alert alert-success">{{ session()->get('vacation.added') }}</div>
    @endif
  
    @if(session()->has('vacation.notfound'))
    <div class="alert alert-danger">{{ session()->get('vacation.notfound') }}</div>
    @endif
  
    @if(session()->has('Vacation.Cancelled'))
    <div class="alert alert-danger">{{ session()->get('Vacation.Cancelled') }}</div>
    @endif
  </div>


  <div style="padding-top:70px;" class="container holidays">
      <canvas id="VacationChart"></canvas>
  </div>
    
  <div class="container holidays">
    
    <form action="{{route('vacation.store')}}" method="POST" class="form-group">
      @csrf
      @method('POST')
    <h2>Parameters :</h2>
        <h4>Duration :</h4>
        <div class="form-group">
        <input type="radio" value="0" name="duration"> Testing 0h<br>
            <input type="radio" value="1" name="duration"> Emergency (24h)<br>
            <input type="radio" value="2" name="duration"> Emergency (48h)<br>
            <input type="radio" value="6" name="duration"> Vacation One Week (144h)<br>
            <input type="radio" value="12" name="duration"> Vacation two Week (288h)<br>
        </div>
        <h4>Choose an employee to affect number of days :</h4>
        <input type="text" name="employe_name">
        <br>
        <h4>Entre days available :</h4>
        <input type="text" name="days_available">
        <br>
        <h6>(Vacation will start after one week from selected date.)</h6>
        <input type="submit" name="addtolist" value="Add to list">
    </form>

    <table class="table table-bordered text-center">
        
            <tr>
                <td>Employee</td>
                <td>Vacation Start</td>
                <td>Vacation end</td>
                <td>Total of days available</td>
                <td>Vacation status</td>
                <td>Control</td>
            </tr>
  

            @foreach ($data as $employe)
              
            <tr>
              <td>{{$employe->employe_name}}</td>
              <td>{{$employe->vacation_start}}</td>
              <td>{{$employe->vacation_end}}</td>
              <td>{{$employe->days_available}}</td>
              <td>{{$employe->vacation_status}}</td>
              <td>
                <form method="POST" action="{{route('vacation.destroy',$employe->id)}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Cancel</button>
                </form>
              </td>
            </tr>

            @endforeach


    </table>

    <div>
      {{ $data->links() }}
    
    </div>


  </div>

  @endsection