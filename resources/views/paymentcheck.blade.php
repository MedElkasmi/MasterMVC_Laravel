@extends('Layouts.Master')

@section('content')

<div id="block-print" class="container">
    <form action="{{route('preview')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group find-form">
            <input type="text" name="employe">
            <button type="submit">Preview</button>
        </div>
     </form>
    <h2>Payment Check</h2>
</div>

<div id="block-print" class="container">

    <table class="table table-bordered text-center" >
        <thead>
            <tr style="background-color:#e91e63;font-size:18px;color:white;">
                <th colspan="2">Company Address
                Tel : 00 00 00 00 00 </th>
                <th colspan="2">Payment Check</th>
                <th colspan="3"></th>
            </tr>
        </thead>

            
        <tr style="background-color:#999;color:white">
            <td colspan="2">Non & Prenom</td>
            <td colspan="2">Qualification</td>
            <td>M/H</td>
            <td>Matricule</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="background-color:#999;color:white">
            <td colspan="2">Date d'embauche</td>
            <td>N C.N.S.S</td>
            <td>Date de Naissance</td>
            <td>Salaire de base</td>
            <td>Periode de Paie</td>
        </tr>
        <tr>
            <td colspan="2" ></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="background-color:#999;color:white">
            <td colspan="2">Libelle</td>
            <td>Base/Nombre</td>
            <td>Taux</td>
            <td>A Payer</td>
            <td>A Retenir</td>
        </tr>
        <tr>

            <td colspan="2">Salaire<br><br>Salaire brut<br><br>Retenue AMO <br><br>Retenue C.N.S.S<br><br>Retenue I.G.R<br><br>Primes</td>
            <td><?php ?><br><br><?php ?><br><br><?php ?><br><br><?php ?><br><br><?php ?></td>
            <td>26j<br><br> <br><br>2.26%<br><br>4.48%<br><br>10.00%</td>
            <td><?php ?></td>
            <td><br><br> <br><br><?php ?><br><br><?php ?><br><br><?php ?></td>
        </tr>
        <tr>
            <td colspan="2"> </td>
        </tr>
        <tr style="background-color:#999;color:white">
            <td>Cuml J</td>
            <td>Cuml base conges</td>
            <td colspan="2" style="background-color:white;border:none;"></td>
            <td>Cuml Gains</td>
            <td>Cuml Retenue</td>
        <tr >
            <td>26.00</td>
            <td>0.00</td>
            <td colspan="2" style="background-color:white;border:none;"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2"  colspan="4">Paye Par Virement</td>
            <td>Signature</td>
            <td>Net a paye</td>
            
        </tr> 
        <tr>
            <td> </td>
            <td></td>  
        </tr>   
        
    </table>
</div><!--end div -->

@endsection