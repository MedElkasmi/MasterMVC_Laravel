@include('Includes.header')

<body id="login">
    <div class="leftHalf_register">
        <div class="content">

        </div>
    </div>
    <div class="righthalf">
        <h1 style="text-align:center;margin-top:32%;"><i class="fa fa-dashboard"></i> Add New Admin</h1>

        <form action="{{ route('admin.post')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">

                @if(session()->has('password.wrong'))
                    <div class="alert alert-danger">{{ session()->get('password.wrong') }}</div>
                @endif

                @if ($errors->has('username'))
                  <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif

                <input type="text" class="form-control"  placeholder="Entre your username" name="username">
            </div>
            <div class="form-group">

                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <input type="password" class="form-control"  placeholder="Entre your password" name="password">
            </div>

            <div class="form-group">

                @if ($errors->has('repassword'))
                <span class="text-danger">{{ $errors->first('repassword') }}</span>
                @endif

                <input type="password" class="form-control"  placeholder="Retype password" name="repassword">
            </div>

            <button type="submit" name="submit" class="btn btn-info">Create <i class="fa fa-plug"></i></button>
        </form>
    </div>


</body>

@include('Includes.footer')