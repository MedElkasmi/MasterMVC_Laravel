@include('Master.content')

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
        <form method="post" action="update">
            <input type="hidden" name="id" value="">
            <button>update</button>
        </form>
        <form method="post" action="delete">
            <input type="hidden" name="id" value="">
            <button>delete</button>
        </form>
        </td>
      </tr>

      @endforeach
      
  </table>

</div>

@include('Master.footer')