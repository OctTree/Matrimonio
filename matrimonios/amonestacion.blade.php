@extends('pdfs.pdf')
@section('css-styles')
@parent
<style>

    .datos {
        position: relative;
        left: 5% !important;
        background:rgb(255, 255, 255);
        padding: 1% ;
        width: 90% !important;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 12pt;
        overflow: auto;
    }

    .linea {
        border-bottom-style: solid;
        border-bottom-color: #C0C0C0;
        border-bottom-width: 1px;
        width: 100% !important;
        margin: 1.5% 1% !important;
    }

    .dia-solicitud {
        text-align: center;
        margin-top: 200px;
        margin-bottom: 50px;
    }

    .notificacion {
        margin-top: 6mm;
        margin-bottom: 4mm;
        text-align: center;
        font-family: 'Roboto Condensed';
        font-weight: bold;
        font-size: 16pt;
    }
    .atencion {
        font-family: "Roboto Condensed";
        font-size: 12pt;
        line-height: 1.2em;
        text-align: center;
        margin-top: 4mm;
    }
    .novio {
        margin: 2mm 1cm;
        text-align: center;
        font-family: "Roboto Condensed";
        font-size: 15pt;
        font-weight: bold;
        line-height: 1.5em;
        padding: 1mm;
    }

    .intencion {
        margin: 3mm 0 5mm 0;
        text-align: center;
        font-family: "Roboto";
        font-size: 15pt;
        line-height: 1.5;
    }

    .datospublicacion {
        padding: 3mm 1.3cm;
        text-align: justify;
        font-family: "Roboto Condensed";
        font-size: 10pt;
        line-height: 2em;
    }

    .datospublicacion p {
        padding-bottom: 1cm;
    }

    .fecha-firma {
        width: 100%;
        padding-top: 7mm;
    }

    .fecha {
        float: left;
        width: 60%;
        text-align: center;
        font-family: "Roboto Condensed";
        font-size: 10pt;
    }

    .firma {
        width: 20%;
        margin: 10px 10%;
        float: left;
        text-align: center;
        border-top: 1pt solid gray;
        font-family: "Roboto Condensed";
        font-size: 9pt;
        line-height: 1.5em;
    }

    .firma span {
        font-size: 10pt;
    }
    .informe {
        padding: 4mm 1cm;
        height: 3.2cm;
    }

    .informe p {
        padding-top: 3mm;
    }

</style>
@endsection

@section('content')
<div class="pagina">
    @include('pdfs.partials._cabeceraconreferencia')

    <div class="bloque fondo-blanco notificacion">
        NOTIFICACIÓN DE AMONESTACIÓN
    </div>

    <div class="bloque fondo-gris shadow">
        <div class="atencion">
            Al Rvdo. Sr. Cura Párroco de <br />
            <strong> {{ $diocesis['nombreDA'] }} </strong>  <br />
            <strong> {{ $diocesis['nombreInstitucion'] }} </strong>  <br />
            <strong> {{ $diocesis['localidad'] }} - {{ $diocesis['provincia'] }} </strong>
        </div>

        <div class="novio fondo-blanco shadow">
                <strong>D. {{ $pareja['el']['nombre'] }} {{ $pareja['el']['apellido1'] }} {{ $pareja['el']['apellido2'] }} </strong>
        </div>
        <div class="novio fondo-blanco shadow">
            <strong> Dª. {{ $pareja['ella']['nombre'] }} {{ $pareja['ella']['apellido1'] }} {{ $pareja['ella']['apellido2'] }} </strong>
        </div>

        <div class="intencion">
            Intentan contrarer Matrimonio Canónico
        </div>
    </div>

    <div class="bloque fondo-blanco datospublicacion">
    <p>Ruego publique del día <strong> {{ $data['fechaPublicacion']['desde']['dia'] }} </strong> de <strong> {{ $data['fechaPublicacion']['desde']['mes'] }} </strong> de <strong> {{ $data['fechaPublicacion']['desde']['annio'] }} </strong> al día <strong> {{ $data['fechaPublicacion']['hasta']['dia'] }} </strong> de <strong> {{ $data['fechaPublicacion']['hasta']['mes'] }} </strong> de<strong> {{ $data['fechaPublicacion']['hasta']['annio'] }} </strong> según mana el Código de Derecho Canónico a <strong> {{ $pareja['el']['nombre'] }} {{ $pareja['el']['apellido1'] }} {{ $pareja['el']['apellido2'] }} </strong> de estado <strong> {{ $pareja['el']['estadocivil'] }} </strong>, feligrés de esa parroquia de su cargo por haber residido en <strong> {{ $pareja['el']['domicilio'] }} </strong>. Hijo de <strong> {{ $pareja['el']['padre']['nombre'] }} {{ $pareja['el']['padre']['apellido1'] }} {{ $pareja['el']['padre']['apellido2'] }} </strong> y de <strong> {{ $pareja['el']['madre']['nombre'] }}  {{ $pareja['el']['madre']['apellido1'] }}  {{ $pareja['el']['madre']['apellido2'] }} </strong>.</p>
    <p>Que intenta contraer matrimonio canónico con Dª <strong> {{ $pareja['ella']['nombre'] }} {{ $pareja['ella']['apellido1'] }} {{ $pareja['ella']['apellido2'] }} </strong> de estado civil <strong> {{ $pareja['ella']['estadocivil'] }} </strong>, hija de <strong> {{ $pareja['ella']['padre']['nombre'] }} {{ $pareja['ella']['padre']['apellido1'] }}  {{ $pareja['ella']['padre']['apellido2'] }} </strong> y de
    <strong> {{ $pareja['ella']['madre']['nombre'] }} {{ $pareja['ella']['madre']['apellido1'] }}{{ $pareja['ella']['madre']['apellido2'] }} </strong>. Feligresa actualmente de esta Parroquia.
    </p>
    </div>

    <div class="bloque fecha-firma fondo-blanco">
        <div class="fecha">
            <strong>{{$data['localidad']}}</strong>, a <strong>{{$data['fecha']['dia']}}</strong> de <strong>{{$data['fecha']['mes']}}</strong> de <strong>{{$data['fecha']['annio']}}</strong>.
        </div>
        <div class="firma">
            Firma y sello </br>
            <span>Encargado del Archivo</span>
        </div>
    </div>


    <div class="bloque fondo-gris informe shadow">
        <h3>INFOME DEL PÁRROCO</h3>
        <p>Amonestados por edicto, fijado a la puerta del Templo Parroquial:</p>
    </div>


    <div class="bloque fecha-firma fondo-blanco">
        <div class="fecha">
            <strong>{{$data['localidad']}}</strong>, a <strong>{{$data['fecha']['dia']}}</strong> de <strong>{{$data['fecha']['mes']}}</strong> de <strong>{{$data['fecha']['annio']}}</strong>.
        </div>
        <div class="firma">
            Firma y sello </br>
            <span>Encargado del Archivo</span>
        </div>
    </div>

    <div class="bloque bottomshadow" style="height: 9mm;">
        &nbsp;
    </div>

    @include('pdfs.partials._piedatosdiocesis')

</div>
@endsection
