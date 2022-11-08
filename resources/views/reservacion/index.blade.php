<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dni</th>
            <th>Numero</th>
            <th>Correo</th>
            <th>Verificacion</th>
            <th>accion</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($reservaciones as $reservacion)
            
        <tr>
            <td>{{$reservacion->id}}</td>
            <td>{{$reservacion->Nombre}}</td>
            <td>{{$reservacion->Apellidos}}</td>
            <td>{{$reservacion->Dni}}</td>
            <td>{{$reservacion->Numero}}</td>
            <td>{{$reservacion->Correo}}</td>            
            <td>{{$reservacion->Foto}}</td>
            <td>Modificar</td>

        </tr>

        @endforeach
        
    </tbody>
</table>