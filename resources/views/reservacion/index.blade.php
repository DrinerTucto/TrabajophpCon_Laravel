<html>
<body>


<style>

img{
    width: 100px;
    height: 100px;
}
body{
    display: inline-block;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image:url("https://lugardeviajes.com/wp-content/uploads/2020/07/REGI%C3%93N-CUYO.jpg");
    background-position: center center;
    background-size: 100%;
    background-repeat: no-repeat;
    background-size: cover;
}
.contenedor{

    text-align: center;
    margin-top: 20px;
    border: solid 2px white;
    margin-left: 30px;

}
h1{
    text-align: center;
    font-family:Arial, Helvetica, sans-serif;
}

thead{
    font-size: 15px;
    background-color: rgba(13, 150, 236, 0.45);
}
th{
    padding: 20px 75px;
    font-weight: 700;

}
td{
    padding: 15px 30px;
    border-top:solid 2px white;
    color: rgb(255, 255, 255);





}
li{
    display: inline-block;
    text-align: center;
    justify-content: center;
}
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    background-color: rgba(255, 255, 255, 0.331);



}
.logo{
width: 55px;
height: 55px;
}
.logo1{
width: 60px;
height: 60px;
}
.mundo{
margin-left:25px;
height: 40px;
width: 40px;
}
.exitoso{
    color: rgb(0, 0, 0);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30px;
}
li a{
    justify-content: center;
    font-family:fantasy;
    color: #000;
    margin: 50px;
    text-decoration: none;
    font-size: 20px;
}
li a:hover{
    background-color: rgb(193, 161, 223);
    padding: 20px;
    border-radius: 20px;

}
span{
    color: rgb(238, 90, 90);
}
a.{
    display: flex;
    align-items: center;
}
.a{
    display:flex;
    color: #000
}

</style>

  <header>

<div class="a">
    <img class="mundo" src="https://cdn-icons-png.flaticon.com/512/984/984284.png" alt="">
     <h4 class="driner">ViajaConDriner</h4>
</div>
<nav class="menu">
    <li><a href="{{url('reservacion/reserva')}}">NUEVA<span>   RESERVACION</span></a></li>
    <li><a href="#">CONTACTOS</a></li>
</nav>
</header>
<div class="exitoso">
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}

@endif
</div>
<div class="contenedor">
    <h1>
        <img class="logo" src="https://cdn-icons-png.flaticon.com/512/826/826070.png
" alt="">
        RESERVACION  DE  VIAJE
    <img class="logo1" src="https://cdn-icons-png.flaticon.com/512/1358/1358770.png " alt="">
</h1>
<table class="table table-light">
    <thead class="thead">

        <tr class="sepa">
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dni</th>
            <th>Numero</th>
            <th>Correo</th>
            <th>Foto de Verificacion</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($reservaciones as $reservacion)

        <tr class="thead-light">
            <td>{{$reservacion->id}}</td>
            <td>{{$reservacion->Nombre}}</td>
            <td>{{$reservacion->Apellidos}}</td>
            <td>{{$reservacion->Dni}}</td>

             <td>{{$reservacion->Numero}}</td>
            <td>{{$reservacion->Correo}}</td>

            <td>

                <img src="{{ asset('storage').'/'.$reservacion->Foto}}">
            </td>


        </tr>

        @endforeach

    </tbody>

</table>

</div>

</body>
</html>
