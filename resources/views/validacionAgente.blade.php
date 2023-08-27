@extends('master')


@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Validar Informacion</h2>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">
                        <form >
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Completo: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">C.I.:</label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha de Nacimiento: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lugar de Nacimiento: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nacionalidad: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Completo Padre: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">C.I. Padre: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nombre Completo Madre: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">C.I. Madre: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Direccion: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Profesion: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Telefono: </label>
                                <div class="col-sm-10"><input type="text" class="form-control" value="" disabled=""></div>
                            </div>

                        </form>
                    </div>
                    <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-success " type="submit">Validar</button>
                                    
                                </div>
                            </div>
                </div>
            </div>
        </div>

    </div>
@stop