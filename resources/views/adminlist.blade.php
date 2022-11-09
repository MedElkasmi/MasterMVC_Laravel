@include('Master.content');

<div class="manage container main-table table-responsive">

<table class="table table-bordered text-center">
  <h1>List of Admins</h1>
    <tr>
      <td>Admin</td>
      <td>email</td>
      <td>created_at</td>
      <td>Action</td>
    </tr>


    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
      <form method="post" action="">
          <input type="hidden" name="id" value="">
          <button>update</button>
      </form>
      <form method="post" action="">
          <input type="hidden" name="id" value="">
          <button>delete</button>
      </form>
      </td>
    </tr>

</table>
</div>