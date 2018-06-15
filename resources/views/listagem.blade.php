@include('layouts.header')
<div class="center" >
  <h2 style="font-weight:300;">Listagem de Programadores</h2>

</div>
<div class="container">
  <div class="row">

    <!--Recupera a lista de programadores do banco de dados-->
    <div class="collection">
      <table class="highlight">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>

                </tr>
              </thead>

              <tbody>
    @foreach($programadores as $prog)

              <tr>
                <td>{{$prog->programador_id}}</td>
                <td><a href="{{url('users/'.$prog->programador_id)}}">{{$prog->programador_nome}}</a> </td>

              </tr>
    @endforeach
    </tbody>
  </table>
    </div>
    </div>
</div>
@include('layouts.footer')
