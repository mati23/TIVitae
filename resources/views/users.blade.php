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

    <script src="{{asset('js/jquery.js')}}"></script>
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
  <!-- DIV ESQUERDA-->
  <div class="row" id="side-div">
    <div class="col s3 card-panel teal lighten-2" style="float-left;" id="left-div "  >

      <div >
        <div class="center-align">
          <img class="responsive circle" src="{{asset('images/generic.png')}}" style="height:200px; margin-top:100px; " alt="">
        </div>
        <br><br>
        <div class="card-panel teal center ">
                <span class="white-text ">
                  <h5>{{$programador_nome}}</h5>
                </span>
              </div>

        <div class="items-cv">
          <i class="fa fa-phone fa-2x" style="margin:10px 20px;"></i> <span style="font-size:15px; font-weight: 300;">({{$telefone_ddd}}){{$telefone_restante}}</span>
        </div>
        <div class="items-cv">
          <i class="fa fa-envelope fa-2x" style="margin:10px 20px;"></i> <span style="font-size:15px; font-weight: 300;" name='email'>{{$programador_email}}</span>
        </div>
        <div class="items-cv">
          <i class="fa fa-home fa-2x" style="margin:10px 20px;"></i> <span style="font-size:15px; font-weight: 300;">{{$programador_email}}</span>
        </div>


      </div>


    </div>
    <!--DIV DIREITA-->
    <div class="col s9 card-panel grey lighten-1 center" style="float-right;" id="right-div" >
      <div class="center">
        <h3 style="color:white;">Sobre Mim</h3>
      </div>
      {{$programador_descricao}}
      <br> <br>
      <script type="text/javascript" src="{{asset('js/divGenerator.js')}}">
      </script>



      @foreach($proglin_id as $prog)

      <div class="col s12 m4 l4">
          <canvas id="{{$prog}}" width="100" height="100"></canvas>
      </div>

      <script >
      var cores = [
          '#FB8C00',
          '#00838F',
          '#1B5E20',
          '#37474F',
          '#3949AB',
          '#5E35B1',
          '#8E24AA',
          '#D81B60',
          '#7CB342',
          '#C0CA33',
          '#FDD835',
          '#F4511E',
          '#6D4C41',
          '#039BE5',
          '#00ACC1',
          '#00897B'
        ];

          Chart.pluginService.register({
          beforeDraw: function (chart) {
          if (chart.config.options.elements.center) {
            //Get ctx from string
            var ctx = chart.chart.ctx;

            //Get options from the center object in options
            var centerConfig = chart.config.options.elements.center;
            var fontStyle = centerConfig.fontStyle || 'Arial';
            var txt = centerConfig.text;
            var color = centerConfig.color || '#000';
            var sidePadding = centerConfig.sidePadding || 20;
            var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2);
            //Start with a base font of 30px
            ctx.font = "30px " + fontStyle;


            //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
            var stringWidth = ctx.measureText(txt).width;
            var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

            // Find out how much the font can grow in width.
            var widthRatio = elementWidth / stringWidth;
            var newFontSize = Math.floor(30 * widthRatio);
            var elementHeight = (chart.innerRadius * 2);

            // Pick a new font size so it will not be larger than the height of label.
            var fontSizeToUse = Math.min(newFontSize, elementHeight);

            //Set font settings to draw it correctly.
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
            var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
            ctx.font = fontSizeToUse+"px " + fontStyle;
            ctx.fillStyle = color;

            //Draw text in center
            ctx.fillText(txt, centerX, centerY);
          }
        }
      });

      var cor = cores[Math.floor(Math.random()*(cores.length-1))];
        var config = {
          type: 'doughnut',
          data: {
            labels: [

            ],
            datasets: [{
              data: [300, 50],
              backgroundColor: [
                cor,
                "#546E7A",

              ],
              borderColor: [
                cor,
                "#546E7A"

            ],
              hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",

              ]
            }]
          },
        options: {
          elements: {
            center: {
              text: '{{$prog}}',
              color: '#FFFFFF', // Default is #000000
              fontStyle: 'Arial', // Default is Arial
              sidePadding: 20 // Defualt is 20 (as a percentage)
            }
          }
        }
      };


        var ctx = document.getElementById("{{$prog}}").getContext("2d");
        var myChart = new Chart(ctx, config);
        genDivs('{{$prog}}');
      </script>

      <?php ++$contador ?>



      @if ($contador >2)

      <?php $contador = 0; ?>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      @endif

      @endforeach








    </div>
  </div>
    @include('layouts.footer')



    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>



  </body>
</html>
