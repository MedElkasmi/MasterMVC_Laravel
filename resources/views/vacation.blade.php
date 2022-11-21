@extends('Layouts.Master')

@section('content')

<div style="padding-top:70px;" class="container holidays">
    <canvas id="VacationChart"></canvas>
  </div>
  
  <div class="container holidays">
    
    <form action="" method="POST" class="form-group">
    <h2>Parameters :</h2>
        <h4>Duration :</h4>
        <div class="form-group">
        <input type="radio" value=" + 0 day" name="duration"> Testing 0h<br>
            <input type="radio" value=" + 1 day" name="duration"> Emergency (24h)<br>
            <input type="radio" value=" + 2 day" name="duration"> Emergency (48h)<br>
            <input type="radio" value=" + 6 day" name="duration"> Vacation One Week (144h)<br>
            <input type="radio" value=" + 12 day" name="duration"> Vacation two Week (288h)<br>
        </div>
        <h4>Choose an employee to affect number of days :</h4>
        <input type="text" name="employe_name">
        <br>
        <h4>Entre days available :</h4>
        <input type="text" name="days_available">
        <br>
        <h6>(Vacation will start after one week from selected date.)</h6>
        <input type="submit" name="addtolist" value="Add to list">
        <input type="submit" name="refresh" value="Refresh Data">
    </form>
    <table class="table table-bordered text-center">
        
            <tr>
                <td>Employee</td>
                <td>Vacation Start</td>
                <td>Vacation end</td>
                <td>Vacation Estimated left</td>
                <td>Total of days available</td>
                <td>Vacation status</td>
                <td>Control</td>
            </tr>
  

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Action</td>
            </tr>

    </table>
  </div>

  @endsection