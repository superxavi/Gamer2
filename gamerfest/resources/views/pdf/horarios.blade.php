<!DOCTYPE html>
<html lang="es">
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Horarios</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Videojuego</th>
    <th>Aula</th>
    <th>Tiempo inicio</th>
    <th>tiempo final</th>
    <th>Fecha</th>
    <th>Observacion</th>
  </tr>
  @foreach ($horarios as $horario)
  <tr>
    <td>{{$horario->id}}</td>
    <td>{{$horario->videojuego_id}}</td>
    <td>{{$horario->aula_id}}</td>
    <td>{{$horario->tiempo_inicio}}</td>
    <td>{{$horario->timepo_final}}</td>
    <td>{{$horario->fecha}}</td>
    <td>{{$horario->observacion}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>