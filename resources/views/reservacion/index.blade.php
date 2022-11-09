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

thead{
    background-color: brown;
}
th{
    padding: 20px 75px;
    font-weight: 700;

}
td{
    padding: 15px 30px;
    border-top:solid 2px white;




      
}
li{
    display: inline-block;
    text-align: center;
    justify-content: center;
}
header{
    display: flex;
    justify-content: space-between;
}
.logo{
width: 50px;
height: 50px;
}
.exitoso{
    color: rgb(0, 0, 0);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30px;
}
</style>

  <header>
  
<div class="A">
    <img class="logo" src="https://cdn-icons-png.flaticon.com/512/984/984284.png" alt="">
    <span>ViajaConDriner</span>
</div>
<nav class="menu">
    <li><a href="{{url('reservacion/reserva')}}">NUEVA RESERVACION</a></li>
    <li><a href="#">Contactos</a></li>
</nav>
</header>
<div class="exitoso">
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}

@endif
</div>
<div class="contenedor">
    <h1>Reservacion de viajes</h1>

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