<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

      <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Indie Flower', cursive;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }

            .content {
                margin-top: 20px;
                text-align: center;
                display: inline-block;

            }

            .title {
                font-size: 76px;
                font-weight: bold;
                color: #3F51B5;
            }

            .button {
                display: inline-block;
                border-radius: 10px;
                background-color: #009688;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 20px;
                padding: 10px;
                width: 300px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 10px;
                font-family: 'Indie Flower', cursive;
              }

              .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }

              .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
              }

              .button:hover span {
                padding-right: 25px;
              }

              .button:hover span:after {
                opacity: 1;
                right: 0;
              }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Albumnes del Artista:</div>



               <div class="title", style="color:#000000; font-size: 60px;">{{ $artistas[0]->Name }}</div>



                <div style="border-style: solid;  padding: 1cm 2cm 1cm 2cm;
                color: #009688;">



        <table class="table">
 			  <thead>
 			    <tr>
            <h1 style="color:#000000" >Album</h1>
          </tr>
 			  </thead>
 			  <tbody>



 				@foreach ($artistas as $artista)
 					<form name="form" action= "/buscarArtista" method="POST" >
 					{!! csrf_field() !!}
 					<tr scope="row" style="color: #00695C;"><h3>{{$artista->Title}}</h3>

 				    </tr>
 				    </form>
 				@endforeach

 			  </tbody>
 			</table>


                </div>
            </div>
        </div>
    </body>
</html>
