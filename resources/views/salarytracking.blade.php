@extends('Layouts.Master')

@section('content')

<div style="padding-top:70px;" class="container history">
    <canvas id="SalaryChart"></canvas>
</div>



<div class="container history">
    <form action="{{route('salary.store')}}" method="POST">
        @csrf
        @method('POST')
        <h2>Parameters :</h2>
        <h4>Choose an employee to add following informations :</h4>
        <input type="text" name="employe_name">
        <br><br>
        <h4>Add salaire brut $:</h4>
        <h6>(Leave blank if not require)</h6>
        <input type="text" name="sbrut">
        <input type="submit" value="Add To List"><br><br>
    </form>


    @if(session()->has('Salary.added'))
        <div class="alert alert-success">{{ session()->get('Salary.added') }}</div>
    @endif

    @if(session()->has('Salary.notfound'))
        <div class="alert alert-danger">{{ session()->get('Salary.notfound') }}</div>
    @endif

    @if(session()->has('Salary.deleted'))
        <div class="alert alert-danger">{{ session()->get('Salary.deleted') }}</div>
    @endif

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
        @foreach ($data as $employe)
        
        <tr>
            <td>{{$employe->employe_name}}</td>
            <td>{{$employe->employe_skills}}</td>
            <td>{{$employe->employe_entity}}</td>
            <td>{{$employe->salary_upgrade}}</td>
            <td>{{$employe->salary_brut}}</td>
            <td>{{$employe->salary_net}}</td>
            <td>

            <form method="POST" action="{{route('salary.destroy',$employe->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </td>
        </tr>

        @endforeach
    </table>

</div>

@endsection