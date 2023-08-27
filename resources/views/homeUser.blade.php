@extends('master')


@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Bienvenido</h2>
        </div>
    </div>
    <form>
    <div class="form-group row">
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Logo_segip.jpg/640px-Logo_segip.jpg"  style="width:400px">
    </div>

    <p>Bienvenido al portal virtual de carnetización... </p>
    <p> ¿Qué acción deseas realizar?</p>
</form>

<div class="container">        
            <br>
            <br>
            <div class="row">
                <div class="col-sm">                
                    <a href="" class="btn btn-success btn-sm ">
                    <img src="https://cvigo.cancilleria.gob.ar/userfiles/2018/cvigo_-_dnis.jpg" height ="80" width="100"> Nuevo</a>
                </div>
                <div class="col-sm">
                    <a href="" class="btn btn-success btn-sm">
                    <img src="https://cvigo.cancilleria.gob.ar/userfiles/2018/cvigo_-_dnis.jpg" height ="80" width="100"> Renovacion</a>
                </div>
                <div class="col-sm">
                    <a href="" class="btn btn-success btn-sm">
                    <img src="https://cvigo.cancilleria.gob.ar/userfiles/2018/cvigo_-_dnis.jpg" height ="80" width="100"> Perdida o Robo</a>
                </div>
                <div class="col-sm">
                    <a href="" class="btn btn-success btn-sm">
                    <img src="https://cvigo.cancilleria.gob.ar/userfiles/2018/cvigo_-_dnis.jpg" height ="80" width="100"> Otros tramites</a>
                </div>
            </div>
            <br>
            <br>
        </div>
@stop