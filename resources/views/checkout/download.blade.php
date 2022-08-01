<!--{{$date}}

@foreach ($products as $product)
<p>{{$product[0]}}</p>
<p>{{$product[1]}}</p>
<p>{{$product[2]}}</p>


@endforeach





{{$montant}}
{{$nom}}-->

<!--<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Date</b></td>
        <td><b>Nom</b></td>
        <td><b>Nom produit</b></td>
        <td><b>Prix</b></td>
        <td><b>Quantité</b></td>
        <td><b>Montant total</b></td>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
            {{$date}}
        </td>
        <td>
            {{$nom}}
        </td>
            @foreach ($products as $product)
            <td> <p>{{$product[0]}}</p></td>
           <td> <p>{{$product[1]}}</p></td>
            <td><p>{{$product[2]}}</p></td>
            @endforeach
        <td>
            {{$montant}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>-->



<!--<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <style>
    table, th, td {
    padding: 10px;
    border: 1px solid black;
    border-collapse: collapse;
    }
    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<p></p>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Nom du client</th>
        <th>Nom du produit</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Montant total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>{{$date}}</td>
      <td>{{$nom}}</td>
      @foreach ($products as $product)


        <td>{{$product[0]}}</td>
        <td>{{$product[1]}}</td>
        <td>{{$product[2]}}</td>
      @endforeach
      <td>{{$montant}}</td>
      </tr>

    </tbody>
  </table>
</div>

</body>
</html>-->





<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .float{
      float: left;
      text-align: center;
      font-size: xx-small;
    }
    .float_right{
      float: right;

    }
    .rep{

      text-align: center;
      font-size: x-small;
    }
    .rep1{
      font: bold;

      text-align: center;
      font-size: small;
    }
    .line1{
      border: 0.5px solid;
    }
    .line2{
      border: 1.5px solid;

    }
    .title{
            text-align: center;
            font: bold;

    }
    .fieldset1{
      border-radius: 10px;
      width: 350px;
      float: left;
      position: relative;
      top: 10px;
      bottom: 50px;
    }
    .fieldset2{
      border-radius: 10px;
      width: 200px;
      margin-left: 385px;
    }
    table{
      border-collapse: collapse;

    }
    td,th{
      border:2px solid black;
    }
    .br{
      line-height: 10px;
    }

    input {
      position: absolute;
    }

    #filigrane {
      position: fixed;
      top: 22%;
      text-align: center;

      transform: rotate(10deg);
      transform-origin: 50% 50%;
      z-index: -1000;
    }

    .tabcenter{
     margin-left:auto;
     margin-right:auto;
    }

    td
    {
      text-align: center;
    }

    th
    {
      text-align: center;
    }
    #MaTable {
     width: 100%;
     padding: 2px;
     border-spacing: 2px;
    }

    tbody {
      font-size: 90%;
      font-style: italic;
    }

    tfoot {
      font-weight: bold;
    }

    html {
  font-family: sans-serif;
}

table {
  border-collapse: collapse;
  border: 2px solid rgb(200,200,200);
  letter-spacing: 1px;
  font-size: 0.8rem;
}

td, th {
  border: 1px solid rgb(190,190,190);
  padding: 10px 20px;
}

th {
  background-color: rgb(235,235,235);
}

td {
  text-align: center;
}

tr:nth-child(even) td {
  background-color: rgb(250,250,250);
}

tr:nth-child(odd) td {
  background-color: rgb(245,245,245);
}

caption {
  padding: 10px;
}
  </style>
  <title></title>
</head>
<body>





&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp;  &nbsp;

<br>
<div style="float: left;">
 SOFTNET-TOGO <br> T&eacute;l : +228 93-07-21-73/ 70-35-15-84<br>
 E-mail : softnettogo@gmail.tg<br>
 Ventes de matériels informatiques

</div><br> <br> <br> <br>


<center></center> <br> <br>





<h3 style="float: right;">Facture N°{{$num}}</h3> <br><br>
<hr color="blue" size="4"> <br><h4 align="right">Date : {{$date}}</h4>
<h4>Nom du client : {{$nom}} </h4>
<h4>Téléphone : +228 70 35 15 84 </h4>
<h4>E-mail : sharifboukari68@gmail.com </h4>
<h4>Adresse :Agoè Koffi-Panou</h4>



<table id="MaTable" class="tabcenter" CELLPADDING="2" CELLSPACING="2" WIDTH="100%">

  <thead>
    <tr>
      <th>Nom produit</th>
      <th>Quantité achet&eacute;e</th>
      <th>Date de d'achat</th>
      <th>prix unitaire</th>
      <th>Total achat</th>

    </tr>
  </thead>



       @foreach($products as $product)
        <tr BGCOLOR="#CCCCCC">
          <td>{{ $product[0] }}</td>
          <td>{{ $product[2] }}</td>
          <td>{{ $date}}</td>
          <td>{{ $product[1] }}</td>
          <td>{{  $montant*10}}</td>
        </tr>
        @endforeach


    </tbody><tfoot>
      <tr>
        <td colspan="4">Somme</td>


        <td>{{ $montant*10 }}</td>

      </tr>
    </tfoot>

   <tbody>

</table> <br>
<div style="float: left;;" style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">

       <b>Arrêtée la présente facture à la somme de : {{$montant*10}} Franc CFA</b> <br>

       <h4 align="left"></h4>


  </div>
  <br> <br> <br> <br> <br>


  <div>
    <footer style="position: absolute; bottom: 0;width: 100%; padding-top: 50px; height: 50px;">
      <hr color="blue" size="4" align="center">
      <div style="float: left;;">

      </div>
      <div style="float: right;;">
        Tél : +228 93 07 21 73
      </div>

    </footer>
  </div>
</body>
</html>
