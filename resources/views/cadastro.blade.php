@include('layouts.header')

<div class="center" >
  <h2 style="font-weight:300;">Cadastro</h2>
</div>
<div class="container">
  <div class="row">
      <form class="col s12" method="post" action="{{url('cadastro')}}" >
        @csrf
        <div class="row">

          <div class="input-field col s12">
            <label for="nome">Nome:</label><br>
            <input value="" id="nome" type="text" class="validate" name="nome">
          </div>

          <div class="input-field col s12">
            <label for="nome">Telefone:</label><br>
            <input value="" id="telefone" type="text" class="validate" maxlength="11" name="telefone">
          </div>

          <div class="input-field col s12">
            <label for="nome">Email:</label><br>
            <input value="" id="telefone" type="text" class="validate" name="email">
          </div>

          <div class="input-field col s12">
            <label for="nome">Endereço:</label><br>
            <input value="" id="endereco" type="text" class="validate" name="endereco">
          </div>


          <div class="input-field col s12">
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" class="materialize-textarea" name="descricao"></textarea>
          </div>
          <p>


          <div class="input-field col s6 offset-s2">
            <!--Este trecho pega todas as linguagens do banco de dados e joga nas checkboxes-->
            @foreach($linguagens as $lang)
              <p>
               <label>
                 <input type="checkbox" class="filled-in" name="check_linguagem"/>
                 <span>{{$lang->linguagem_nome}}</span>
               </label>
              </p>

            @endforeach
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
          <i class="material-icons right">check</i>
        </button>
      </form>
    </div>
</div>
@include('layouts.footer')
