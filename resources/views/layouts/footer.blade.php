<!-- Essa parte é referente ao rodapé do site e que é exibido em todas as páginas-->
<footer class="page-footer  teal darken-1">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <a id="logo-container" href="{{url('/')}}" class="brand-logo">
          <img class="responsive" src="{{asset('images/tivitaeLogo.png')}}" style="height:45px; margin-top:10px; " alt="">
        </a>
        <p class="grey-text text-lighten-4">
          Trabalho final de Tecnologias Web que traz como proposta uma plataforma de currículos
          com um diferencial estético, onde textos longos sobre a qualificação do candidato
          podem ser traduzidos em gráficos com aparência simples e informativa.
        </p>


      </div>
      <div class="col l4 s12">
        <h5 class="white-text">Conteúdo</h5>
        <ul>
          <!-- Links que são rotas do laravel-->
          <li><a class="white-text" href="{{url('/')}}">Início</a></li>
          <li><a class="white-text" href="{{url('/cadastro')}}">Cadastre-se</a></li>
          <li><a class="white-text" href="{{url('/listagem')}}">Lista de Profissionais</a></li>
        </ul>
      </div>

    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
    </div>
  </div>
</footer>
