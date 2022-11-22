@extends('Layouts.Master')

@section('content')

<div class="container history">
    <form action="" method="POST">
        @csrf
        @method('POST')
        <h2>Parameters :</h2>
        <h4>Choose an employee to add following informations :</h4>
        <input type="text" name="history">
        <br><br>
        <h4>Add salaire brut $:</h4>
        <h6>(Leave blank if not require)</h6>
        <input type="text" name="sbrut">
        <input type="submit" value="Add To List"><br><br>
    </form>
    <table class="table table-bordered text-center">
        <tr>
            <td>Employee</td>
            <td>Skills</td>
            <td>Entity</td>
            <td>Upgrade Date</td>
            <td>Salaire Brut</td>
            <td>Salaire Net</td>
            <td>Control</td>
        </tr>
  
        <tr>
            <td>Med</td>
            <td>IT</td>
            <td>IT</td>
            <td>2020/10/10</td>
            <td>4100</td>
            <td>3900</td>
            <td>

            </td>
        </tr>
    </table>

</div>

@endsection