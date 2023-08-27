@extends('master')


@section('content')
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />

</head>




<body style="background-color:#010b24;">
<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Toma de Fotografia de Carnet de Identidad Reverso</h2>
        </div>
    </div>

    

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <img src="https://boliviaverifica.bo/wp-content/uploads/2023/03/WhatsApp-Image-2023-03-06-at-14.58.59-1.jpeg" alt="" style="width:400px">
        </div>

<p> Toma una fotografia de su carnet de identidad de manera reversa poder validar la informacion </p>

        <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Capturar</button>
                                
                                </div>
                            </div>
        
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>



</body>


@stop