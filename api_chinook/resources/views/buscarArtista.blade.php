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
                <br><br>
                <div class="title">Buscar Artista por ID</div>
                <br>
                <div style="border-style: solid;  padding: 0.5cm 0.5cm 0.5cm 0.5cm; border-radius: 10px;
                color: #009688;">



                  {!! Form::open(['url' => 'artista/buscarArtistaID', 'method' => 'GET']) !!}

                   <br><br><br>
                   <div class="form-group">
                     <label for="id" style="font-size: 20px;">ID Artista</label>
                    <input type="number"  min="0" max="300" name="id" style="padding: 5px;">
                   </div>

                  <br><br>
                  {{ Form::submit('Buscar', array('class' => 'button')) }}

                  {{ Form::close() }}



                </div>
            </div>
        </div>
    </body>
</html>
