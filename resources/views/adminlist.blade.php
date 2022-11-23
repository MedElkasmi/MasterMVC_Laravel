@extends('Layouts.Master')

@section('content')

<div class="manage container main-table table-responsive">

<table class="table table-bordered text-center">
  <h1>List of Admins</h1>

  @if(session()->has('admin.created'))
    <div class="alert alert-success">{{ session()->get('admin.created') }}</div>
  @endif

  @if(session()->has('deleted'))
    <div class="alert alert-danger">{{ session()->get('deleted') }}</div>
  @endif
    <tr>
      <td>Admin</td>
      <td>email</td>
      <td>created_at</td>
      <td>Action</td>
    </tr>

    @foreach ($data as $admin)
      
    <tr>
      <td>{{ $admin->username }}</td>
      <td>{{ $admin->email }}</td>
      <td>{{ $admin->created_at }}</td>
      <td>
        <form method="GET" action="{{route('admin.edit',$admin)}}">
          @csrf
          <button type="submit">Update</button>
        </form>
      
        <form method="POST" action="{{route('admin.destroy',$admin->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit">delete</button>
        </form>
      </td>
    </tr>

    @endforeach

</table>
</div>

@endsection