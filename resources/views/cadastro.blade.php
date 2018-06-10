@include('layouts.header')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
          <p>


          <div class="input-field col s6 offset-s2">
            <!--Este trecho pega todas as linguagens do banco de dados e joga nas checkboxes-->
            @foreach($linguagens as $lang)
              <p>
               <label>
                 <input type="checkbox" class="filled-in"/>
                 <span>{{$lang->linguagem_nome}}</span>
               </label>
              </p>

            @endforeach
          </div>
        </div>

      </form>
    </div>
</div>
@include('layouts.footer')
