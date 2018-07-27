        @extends('layouts.site-master')

        @section('titulo')
        Apresentação
        @stop

        @section('conteudo')
        <h1>Hello World</h1>
        <br><br>
        <div id="flipbook">
            <div class="hard"> Turn.js </div> 
            <div class="hard"></div>
            <div> Page 1 </div>
            <div> Page 2 </div>
            <div> Page 3 </div>
            <div> Page 4 </div>
            <div class="hard"></div>
            <div class="hard"></div>
        </div>

        @stop 

        @section('codigos-javascript')
        <script type="text/javascript">
        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });
        </script>
        @stop

