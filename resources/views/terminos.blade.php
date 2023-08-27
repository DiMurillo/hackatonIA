@extends('master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Terminos y Condiciones</h2>
        </div>
    </div>

    <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        
        <div class="widget-content widget-content-area rounded-pills-icon">
            
            <div class="tab-content" id="rounded-pills-icon-tabContent">
                <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                    <p class="mb-4">
                    1. El servicio estará disponible para todo ciudadano Boliviano, con Documento Nacional de Identidad vigente.</p>
                    <p> 2. Una vez realizado el trámite, no podrá solicitarse su anulación y/o devolución del pago </p>      
                    <p>  3. El Certificado Digital de Antecedentes Policiales que se emita como consecuencia del uso de este servicio, emplea los datos de identificación registrados en la Base de Datos del SEGIP y DIGEMIG. </p>
                    <p> 4. El Certificado Digital de Antecedentes Policiales, tiene una vigencia de 30 días calendario, contados a partir del día en que se realizó el trámite, periodo dentro del cual podrá ser utilizado.  </p>
                    <p>  5. El Certificado Digital de Antecedentes Policiales se encontrará disponible para su descarga durante el periodo de su vigencia. </p>
                </div>
              
            </div>

            

        </div>
        <button class="btn btn-success mb-6" href="/termino">Confirmar</button>
    </div>
    </div>

@stop