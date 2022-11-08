<div class="container manage main-table table-responsive">
<div style="padding-top:70px;">
  <canvas id="myChart"></canvas>
</div>
  <table class="table table-bordered text-center">
    <h1>List of Employes</h1>
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

      @foreach ($data as $employe)
          
      <tr>
        <td>{{ $employe->full_name }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <form method="post" action="update">
            <input type="hidden" name="id" value="<?php echo $employe['id_employe'];?>">
            <button>update</button>
        </form>
        <form method="post" action="delete">
            <input type="hidden" name="id" value="<?php echo $employe['id_employe'];?>">
            <button>delete</button>
        </form>
        </td>
      </tr>
      @endforeach
  </table>

      <div id="team_leader" style="display: none;"> <?php echo $team_leader['teamleader'];?> </div>
      <div id="mailers" style="display: none;"> <?php echo  $mailers['mailers'];?> </div>
      <div id="offer_manager" style="display: none;"> <?php echo $offer_managers['offer_manager'];?> </div>
      <div id="securite" style="display: none;"> <?php echo $security_team['securite'];?> </div>
      <div id="count_it" style="display: none;"> <?php echo $cont_it['IT'];?> </div>


</div>