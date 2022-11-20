@extends('Layouts.Master')

@section('content')

<div class="container manage main-table table-responsive">
  
  <div style="padding-top:70px;">
    <canvas id="myChart"></canvas>
  </div>

  <div id="team_leader" style="display: none;">10</div>
  <div id="mailers" style="display: none;">2</div>
  <div id="offer_manager" style="display: none;">3</div>
  <div id="securite" style="display: none;">5</div>
  <div id="count_it" style="display: none;">10</div>

  <table class="table table-bordered text-center">
    <h1>List of Employes</h1>

    @if(session()->has('Added'))
      <div class="alert alert-success">{{ session()->get('Added') }}</div>
    @endif

    @if(session()->has('updated'))
      <div class="alert alert-success">{{ session()->get('updated') }}</div>
    @endif

    @if(session()->has('deleted'))
      <div class="alert alert-danger">{{ session()->get('deleted') }}</div>
    @endif

      <tr>
        <td>Full Name</td>
        <td>Start date</td>
        <td>CNSS</td>
        <td>Naissance</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Skills</td>
        <td>Gender</td>
        <td>Entity</td>
        <td>Control</td>
      </tr>

      @foreach ($data as $item)
              
      <tr>
        <td>{{ $item->full_name}}</td>
        <td>{{ $item->hire_date}}</td>
        <td>{{ $item->cnss_info}}</td>
        <td>{{ $item->birth_date}}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->phone_number}}</td>
        <td>{{ $item->skills}}</td>
        <td>{{ $item->gender}}</td>
        <td>{{ $item->entity}}</td>
        <td>

        <form method="GET" action="{{route('employe.edit',$item)}}">
            @csrf
            <button type="submit">Update</button>
        </form>

        <form method="POST" action="{{route('employe.destroy',$item->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
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


