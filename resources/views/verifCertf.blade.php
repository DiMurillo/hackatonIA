@extends('master')


@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Verificacion de Informacion</h2>
        </div>
    </div>
<div class="row">
    <div class="col-sm-5">
    <div class="ibox-content">
                        <form action="" method="post">
                           

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nro de Certificado de Nacimiento:<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="C" value="" required="">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">C.I.::<i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="Data" value="" required="">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Verificar</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
</div>
<div class="col-sm-7">
<img src="https://www.segipbolivia.com/wp-content/uploads/2022/04/partes-de-un-certificado-de-nacimiento-1.jpg" height ="250" width="350"> </a>
</div>
</div>
@stop