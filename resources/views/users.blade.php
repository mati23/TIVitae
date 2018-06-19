<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page Users</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/additional.css')}}"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/Chart.js')}}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript">
      jQuery(document).ready(function($){
        var container_height = $('#side-div').height();
        $("#right-div, #left-div").height(container_height);
      });
    </script>

  </head>

  <body>
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="{{url('/')}}" class="brand-logo">
          <img class="responsive" src="{{asset('images/tivitaeLogo.png')}}" style="height:45px; margin-top:10px; " alt="">
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <!-- Toda a pagina deve ser construida dentro dessas divs-->
  <div class="row" id="side-div">
    <div class="col s3 card-panel teal lighten-2" style="float-left;" id="left-div "  >

      <div >
        <div class="center-align">
          <img class="responsive circle" src="{{asset('images/generic.png')}}" style="height:200px; margin-top:100px; " alt="">
        </div>
        <br><br>
        <div class="card-panel teal center ">
                <span class="white-text">
                  <h5>{{$programador_nome}}</h5>
                </span>
              </div>

        <div class="items-cv">
          <i class="fa fa-phone fa-2x" style="margin:10px 20px;"></i> <span style="font-size:20px; font-weight: 300;">({{$telefone_ddd}}){{$telefone_restante}}</span>
        </div>
        <div class="items-cv">
          <i class="fa fa-envelope fa-2x"></i> <span style="font-size:20px; font-weight: 300;" name='email'>{{$programador_email}}</span>
        </div>
        <div class="items-cv">
          <i class="fa fa-home fa-2x"></i> <span style="font-size:20px; font-weight: 300;">{{$programador_email}}</span>
        </div>


      </div>


    </div>
    <div class="col s9 card-panel grey lighten-8" style="float-right;" id="right-div" >
      <div class="center">
        <h3>Sobre Mim</h3>
      </div>
      {{$programador_descricao}}





      @foreach($proglin_id as $prog)
      <div class="container" style="height:200px;width:200px;">
          <canvas id="{{$prog}}" width="100" height="100"></canvas>
      </div>
      <script >
      var ctx = document.getElementById("{{$prog}}").getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: ["Red", "Blue"],
              datasets: [{
                  label: '# of Votes',
                  data: [12, 19],
                  backgroundColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)'

                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)'

                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      </script>
      @endforeach







    </div>
  </div>
    @include('layouts.footer')



    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>



  </body>
</html>
