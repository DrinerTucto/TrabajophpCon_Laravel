

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}

@endif

<style>

img{
    width: 100px;
    height: 100px;
}
body{
    display: flex;
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
    border: solid 2px white;

}
thead{
    background-color: brown;
}
th{
    padding: 20px 15px;
    font-weight: 700;

}
td{
    padding: 15px;
    border-bottom:solid 2px white;

}
.holas{
    display: flex;
}

</style>



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
<a href="{{url('reservacion/reserva')}}">NUEVA RESERVACION</a>

</div>
