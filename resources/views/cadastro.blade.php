@include('layouts.header')
<div class="center" >
  <h2 style="font-weight:300;">Cadastro</h2>
</div>
<div class="container">
  <div class="row">
      <form class="col s12">
        <div class="row">

          <div class="input-field col s12">
            <label for="nome">Nome:</label><br>
            <input value="" id="nome" type="text" class="validate">
          </div>

          <div class="input-field col s12">
            <label for="nome">Telefone:</label><br>
            <input value="" id="telefone" type="text" class="validate" maxlength="11">
          </div>

          <div class="input-field col s12">
            <label for="nome">Email:</label><br>
            <input value="" id="telefone" type="text" class="validate">
          </div>

          <div class="input-field col s12">
            <label for="nome">Endereço:</label><br>
            <input value="" id="endereco" type="text" class="validate">
          </div>


          <div class="input-field col s12">
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" class="materialize-textarea"></textarea>
          </div>

          @foreach($linguagens as $lang)
            <tr>
              <td>{{$lang->linguagem_nome}}</td>
            </tr>
          @endforeach
        </div>

      </form>
    </div>
</div>
@include('layouts.footer')
