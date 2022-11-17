@extends('Layouts.Master')

@section('content')

<div id="respond" class="container">
    <form action="{{ route('student.update',$employe->id) }}" method="POST">
    <div class="form-group">
        <h1><i class="fa fa-id-card"></i> Update Employee Information :</h1>
        <h3>Nom Complet</h3> 
            <input type="text" class="form-control" name="full_name" value="">
            <input type="hidden" class="form-control" name="id" value="">
            <i class="fa fa-user"></i>
            <br>
        <h3>Date d'embauche</h3> 
            <input type="date" class="form-control" name="hire_date" value="">
            <i class="fa fa-calendar"></i>
            <br>
        <h3>Numero CNSS</h3> 
            <input type="text" class="form-control" name="cnss_info" value="">
            <i class="fa fa-file"></i>
            <br>
        <h3>Date de Naissance</h3> 
            <input type="date" class="form-control" name="birth_date" value="">
            <i class="fa fa-calendar"></i>
            <br>
        <h3>Email</h3> 
            <input type="email" class="form-control" name="email" value="">
            <i class="fa fa-at"></i>
            <br>
        <h3>Numero Telephone</h3> 
            <input type="text" class="form-control" name="phone_number" value="">
            <i class="fa fa-phone"></i>
            <br>
        <div class="radiobox">
        <h3>Qualification</h3> 
            <input type="radio" name="skills" value="TeamLeader"> TeamLeader<br>
            <input type="radio" name="skills" value="Mailer"> Mailer<br>
            <input type="radio" name="skills" value="IT"> IT<br>
        </div>
        <hr>
        <div class="radiobox">
            <h3>Gender</h3> 
            <input type="radio" name="gender" value="Female"> Female<br>
            <input type="radio" name="gender" value="Male"> Male<br>
        </div>
        <hr>
        <div class="radiobox">
            <h3>Entity</h3> 
            <input type="radio" name="entity" value="IT TEAM"> IT TEAM<br>
            <input type="radio" name="entity" value="Support"> Support<br>
            <input type="radio" name="entity" value="HM1"> TEAM 1<br>
            <input type="radio" name="entity" value="HM2"> TEAM 2<br>
            <input type="radio" name="entity" value="HM3"> TEAM 3<br>
        </div>
        <hr>
        <br>

        <input type="hidden" name="updated_at">
        <br>

    </div>
    <button type="submit" name="submit" class="btn btn-info">Valid</button>
    </form>
</div> 

@endsection