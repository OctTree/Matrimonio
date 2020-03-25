@extends('pdfs.pdf')
@section('css-styles')
@parent
<style>
    .vicaria-curia {
        padding: 15mm 0mm 0mm 0mm;
    }

    .vicaria,
    .curia {
        width: 50%;
        float: left;
        padding: 2mm 3mm 4mm 17mm;
        font-size: 14pt;
        font-family: 'Roboto Condensed', sans-serif;
    }

    .curia {
        padding: 2mm 17mm 4mm 3mm;
    }

    .vicaria div,
    .curia div {
        display: inline-block;
        float: left;
        padding: 1.5mm 0;
    }

    .logo-diocesis {
        text-align: center;
        margin-top: 1.5cm;
    }

    .imagen {
        width: 20% !important;
        margin: 10 auto;
    }

    .nombreDiocesis {
        text-align: center;
        font-size: 18pt;
        font-family: "Roboto Condensed";
        text-transform: uppercase;
        font-weight: bold;
        padding: 1cm 0;
    }

    .expediente {
        text-align: center;
        font-size: 14pt;
        font-family: "Roboto Condensed";
        font-weight: bold;
        padding: 4mm 0;
        box-shadow: 0pt 0pt 4pt 0.2pt rgba(0, 0, 0, 0.2);
    }

    .documentos {
        padding: 10mm 15mm 0 15mm;
    }

    .documentos h2 {
        font-family: "Roboto Condensed";
        font-size: 14pt;
    }

    .documentos p {
        margin-top: 4mm;
        font-family: "Roboto Condensed";
        font-size: 12pt;
    }

    .documentos p span.value {
        display: inline-block;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .datos {
        margin: 4mm 0;
    }

    p.pie {
        margin: 2mm 15mm;
        font-size: 9pt;
        font-family: "Roboto Condensed";
    }

    .tv1 {
        top: 403px;
    }

    .tv2 {
        top: 158px;
    }

    .tv3 {
        top: 144px;
    }

    .tv4 {
        top: 210px;
    }

    .tv5 {
        top: 116px;
    }

    .tv6 {
        top: 185px;
    }
    .tv7 {
        top: 188px;
    }
    .tv8 {
        top: 100px;
    }
    .tv9 {
        top: 383px;
    }
    .tv10 {
        top: 105px;
    }
    .tv11 {
        top: 300px;
    }
    .tv12 {
        top: 131px;
    }

    .cabecera {
        padding: 8mm 0 5mm 0;
    }

    .numero-pagina {
        margin-right: 11mm;
        text-align: right;
        font-size: 14pt;
        font-family: "Roboto Condensed";
    }

    .contrayente {
        margin-right: 11mm;
        text-align: center;
        font-size: 16pt;
        font-family: "Roboto Condensed";
        font-weight: bold;
    }

    .firma {
        width: 20%;
        margin: 21mm auto 0;
        text-align: center;
        border-top: 1pt solid gray;
    }

    .fecha {
        text-align: center;
        margin: 10mm 0 0 0;
    }

    .fecha strong {
        text-decoration: underline;
    }

    .firma {
        font-family: "Roboco Condensed";
        font-size: 9pt;
    }
    .firma span {
        font-size: 11pt;
    }
    .testigos .fecha {
        margin: 8mm 0 0 0;
    }
    .testigos .firma {
        width: 20%;
        margin: 18mm 15% 0;
        text-align: center;
        border-top: 1pt solid gray;
        float: left;
    }

    .diligencias .firma {
        width: 20%;
        margin: 18mm 6.6% 0;
        text-align: center;
        border-top: 1pt solid gray;
        float: left;
    }
    .otra-parroquia .firma {
        width: 20%;
        margin: 18mm 6.6% 2mm;
        text-align: center;
        border-top: 1pt solid gray;
        float: left;
    }

    .fecha-firma p {
        text-align: center;
        margin-top: 4mm;
        font-family: "Robto Condensed";
        font-size 11pt;
    }
    .diligencias .fecha {
        margin-top: 6mm;
    }
    .acuerdo .firma {
        width: 20%;
        margin: 25mm 15% 2mm;
        text-align: center;
        border-top: 1pt solid gray;
        float: left;
    }
    /*
    .referencia {
        font-size: 14pt;
        font-family: 'Roboto Condensed', sans-serif;
        color: rgb(255, 56, 56);
        line-height: 1.286;
        text-align: right;
        margin-right: 54pt;
    }

    .titulo {
        font-family: 'Roboto Condensed', sans-serif;
        font-style: bold;
        font-weight: 700;
        font-size: 10pt;
        position: relative;
        left: 2% !important;
        text-align: center;
    }

    .titulo-vertical {
        -ms-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -ms-transform-origin: left top 0;
        -moz-transform-origin: left top 0;
        -webkit-transform-origin: left top 0;
        transform-origin: left top 0;
        text-transform: uppercase;
    }

    .linea {
        border-bottom-style: solid;
        border-bottom-color: #C0C0C0;
        border-bottom-width: 1px;
        width: 100% !important;
        margin: 1.5% 1% !important;
    }

    .datos-bautismo {
        margin-bottom: 20pt;
    }

    .filiacion .datos {
        padding: 3% 1%;
        ;
    }

    .value {
        padding: 0.3em 1.5em;
    }

    .label {
        font-family: 'Roboto Condensed', sans-serif;
        font-style: bold;
        font-weight: 700;
        font-size: 12pt;
        padding-right: 0.2em;
    }


    .dia-solicitud {
        text-align: center;
        margin-top: 200px;
        margin-bottom: 50px;
    }


    .rgpd {
        padding-top: 50px;
    }

    .datos-adjuntos {
        width: 100%;
        background: #ffffff;
        padding-left: 1.5cm;
    }

    .pag-datos {
        z-index: 100;
    }

    .certificados {
        z-index: 50;
        margin-top: 4px;
        position: relative;
        left: 5% !important;
        background: rgb(255, 255, 255);
        padding: 0 1%;
        width: 90% !important;
        height: 86%;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 12pt;
        overflow: auto;
        box-shadow: 0px 3pt 4pt 1pt rgba(0, 0, 0, 0.08);
        border-radius: 0 4px 4px 0;
        content: "";
    }

    .librofolionumero {
        text-align: center;
    }

    .bloque-nombre {
        margin: 0cm 1cm;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 28pt;
        font-weight: bold;
        text-align: center;
        padding: 1cm;
    }

    .consta {
        text-align: center;
        margin: 0.5cm 0;
        font-family: 'Roboto', sans-serif;
        font-size: 11pt;
    }

    .consta h3 {
        padding: 3px 0px;
    }

    .datos-bautismo {
        text-align: center;
        margin: 0.5cm 0;
        font-family: 'Roboto', sans-serif;
        font-size: 14pt;
    }

    .datos-nacimiento {
        margin: 0cm 1cm;
        font-family: 'Roboto Condensed', sans-serif;
        text-align: justify;
        line-height: 1.75em;
        font-size: 11pt;
        height: 6cm;
    }

    .notas-marginales {
        margin: 0cm 0.5cm;
        padding: 0.2cm 0.5cm;
        font-family: 'Roboto Condensed', sans-serif;
        text-align: justify;
        line-height: 1.75em;
        font-size: 11pt;
        height: 3.35cm;
    }

    .fecha-solicitud {
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 11pt;
        margin-bottom: 1.25cm;
    }

    .firma-sello {
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 8pt;
        border-top: 1pt solid #C0C0C0;
        ;
        float: left;
        width: 20%;
        margin: 0 40%;
    }

    .firma-sello span {
        font-size: 11pt;
    }

    .aviso {
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 8pt;
    }
*/

</style>
@endsection

@section('content')

<div class="pagina">

    <div class="bloque vicaria-curia">
        <div class="vicaria shadow">
            <div style="width: 20%;">
                <strong>Vicaría</strong>
            </div>
            <div style="width: 80%;">
                {{ $vicaria['nombre'] }}
            </div>
            <div style="width: 16.666%;">Nº</div>
            <div style="width: 16.666%;">{{$vicaria['numero']}}</div>
            <div style="width: 16.666%;">Fol</div>
            <div style="width: 16.666%;">{{$vicaria['folio']}}</div>
            <div style="width: 16.666%;">Libro</div>
            <div style="width: 16.666%;">{{$vicaria['libro']}}</div>
            <div style="width: 16.666%;">
                {{$vicaria['fecha']['dia']}}
            </div>
            <div style="width: 16.666%;">
                de
            </div>
            <div style="width: 16.666%;">
                {{$vicaria['fecha']['mes']}}
            </div>
            <div style="width: 16.666%;">
                de
            </div>
            <div style="width: 16.666%;">
                {{$vicaria['fecha']['anio']}}
            </div>
        </div>

        <div class="curia shadow">
            <div style="width: 20%;">
                <strong>Curia</strong></div>
            <div style="width: 80%;">
                {{$curia['nombre']}}
            </div>
            <div style="width: 16.666%;">Nº</div>
            <div style="width: 16.666%;">{{$curia['numero']}}</div>
            <div style="width: 16.666%;">Fol</div>
            <div style="width: 16.666%;">{{$curia['folio']}}</div>
            <div style="width: 16.666%;">Libro</div>
            <div style="width: 16.666%;">{{$curia['libro']}}</div>
            <div style="width: 16.666%;">
                {{$curia['fecha']['dia']}}
            </div>
            <div style="width: 16.666%;">
                de
            </div>
            <div style="width: 16.666%;">
                {{$curia['fecha']['mes']}}
            </div>
            <div style="width: 16.666%;">
                de
            </div>
            <div style="width: 16.666%;">
                {{$curia['fecha']['anio']}}
            </div>
        </div>
    </div>
    <div class="bloque">
        <div class="logo-diocesis">
            <img class="imagen" src="{{public_path() . $diocesis['imagen']}}">
        </div>
    </div>
    <div class="bloque">
        <div class="nombreDiocesis">
            {{ $diocesis['nombreDA'] }}
        </div>
    </div>
    <div class="bloque expediente">
        Expediente Matrionial
    </div>
    <div class="bloque">
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:12%;" class="label"> Parroquia: </span>
                <span style="width:87.4%;" class="value">{{ $diocesis['nombreInstitucion'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> Municipio:</span>
                <span style="width:87.4%;" class="value">{{ $diocesis['localidad'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:5%;" class="label"> Año </span>
                <span style="width:38%;" class="value">{{ $expediente['annio'] }}</span>
                <span style="width:19%;" class="label"> Nº de Expediente </span>
                <span style="width:36.3%;" class="value">{{ $expediente['numero'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque documentos">
        <h2>Documentos que se adjuntan</h2>
        <p>
            <span style="width:3%;" class="label"> 1. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 2. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 3. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 4. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 5. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 6. </span>
            <span style="width:97%;" class="value"> </span>
        </p>
        <p>
            <span style="width:3%;" class="label"> 7. </span>
            <span style="width:97%;" class="value"> </span>
        </p>

    </div>
</div>

@php
$persona = $pareja['el'];
@endphp

<div class="pagina">
    <div class="bloque cabecera">
        <p class="numero-pagina">2</p>
        <p class="contrayente">Datos del Contrayente</p>
    </div>
    <div class="bloque identificacion shadow fondo-gris">
        <div class="titulo-vertical tv1">
            1. IDENTIFICACIÓN
        </div>
        <div class="datos personales shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 1. Nombre: </span>
                <span style="width:87.4%;" class="value">{{ $persona['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:30%;" class="value">{{ $persona['apellido1'] }}</span>
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:29.3%;" class="value">{{ $persona['apellido2'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:8%;" class="label"> 7. Edad: </span>
                <span style="width:8%;" class="value">{{ $persona['edad'] }}</span>
                <span style="width:8%;" class="label"> 8. DNI: </span>
                <span style="width:23%;" class="value">{{ $persona['dni'] }}</span>
                <span style="width:14%;" class="label"> 9. Profesión: </span>
                <span style="width:36.2%;" class="value">{{ $persona['profesion'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:16%;" class="label"> 10. Estado Civil<sup>1</sup> </span>
                <span style="width:83.4%;" class="value">{{ $persona['estadocivil'] }}</span>
            </div>
        </div>
        <div class="datos nacimiento shadow">
            <h4>Datos de Nacimiento</h4>
            <div class="fila-datos">
                <span style="width:23%;" class="label">5. Fecha de Nacimiento: </span>
                <span style="width:43%;" class="value">{{ $persona['nacimiento']['fecha']['dia'] }} /
                    {{ $persona['nacimiento']['fecha']['mes'] }} / {{ $persona['nacimiento']['fecha']['annio'] }}</span>
                <span style="width:9%;" class="label">6. Hora: </span>
                <span style="width:23.3%;" class="value">{{ $persona['nacimiento']['fecha']['hora'] }} </span>
            </div>
            <div class="fila-datos">
                <span style="width:16%;" class="label"> 7. Nacionalidad: </span>
                <span style="width:34%;" class="value">{{ $persona['nacimiento']['nacionalidad'] }}</span>
                <span style="width:14%;" class="label"> 8. Localidad: </span>
                <span style="width:34.3%;" class="value">{{ $persona['nacimiento']['localidad'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 9. Provincia: </span>
                <span style="width:36%;" class="value">{{ $persona['nacimiento']['provincia'] }}</span>
                <span style="width:14%;" class="label"> 10. Diócesis: </span>
                <span style="width:36.3%;" class="value">{{ $persona['nacimiento']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:32%;" class="label"> 12. Rergistro Civil de Nacimiento: </span>
                <span style="width:67.4%;" class="value">{{ $persona['nacimiento']['registrocivil'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:13%;" class="label"> 13. Número: </span>
                <span style="width:13%;" class="value">{{ $persona['nacimiento']['numero'] }}</span>
                <span style="width:10%;" class="label"> 14. Folio: </span>
                <span style="width:13%;" class="value">{{ $persona['nacimiento']['folio'] }}</span>
                <span style="width:11%;" class="label"> 15. Tomo: </span>
                <span style="width:14%;" class="value">{{ $persona['nacimiento']['tomo'] }}</span>
                <span style="width:9%;" class="label"> 16. Año: </span>
                <span style="width:13.2%;" class="value">{{ $persona['nacimiento']['anniorc'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Datos de Contacto</h4>
            <div class="fila-datos">
                <span style="width:9%;" class="label">2. Email: </span>
                <span style="width:57%;" class="value">{{ $persona['contacto']['email'] }} </span>
                <span style="width:13%;" class="label"> 2. Teléfono: </span>
                <span style="width:19.3%;" class="value">{{ $persona['contacto']['telefono'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:17%;" class="label">3. Domiciliado en: </span>
                <span style="width:82.4%;" class="value">{{ $persona['contacto']['domicilio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label">de la Parroquia de: </span>
                <span style="width:81.4%;" class="value">{{ $persona['contacto']['parroquia'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque religion">
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:8%;" class="label">Religión: </span>
                <span style="width:91.4%;" class="value">{{ $persona['religion'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque bautismo shadow fondo-gris">
        <div class="titulo-vertical tv2">
            2. BAUTISMO
        </div>
        <div class="datos shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Diócesis: </span>
                <span style="width:88.4%;" class="value">{{ $persona['bautismo']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 2. Parroquia: </span>
                <span style="width:87.4%;" class="value">{{ $persona['bautismo']['parroquia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 3. Dirección: </span>
                <span style="width:87.4%;" class="value">{{ $persona['bautismo']['direccion'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:26%;" class="label"> 4. Fecha de la Celebración: </span>
                <span style="width:20%;"
                    class="value">{{ $persona['bautismo']['fecha']['dia'] }}/{{ $persona['bautismo']['fecha']['mes'] }}{{ $persona['bautismo']['fecha']['annio'] }}</span>
                <span style="width:12%;" class="label"> 5. Libro Nº: </span>
                <span style="width:6.7%;" class="value">{{ $persona['bautismo']['libro'] }}</span>
                <span style="width:9%;" class="label"> 6. Folio: </span>
                <span style="width:6.8%;" class="value">{{ $persona['bautismo']['folio'] }}</span>
                <span style="width:9%;" class="label"> 7. Acta: </span>
                <span style="width:6.7%;" class="value">{{ $persona['bautismo']['acta'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque">
        <p class="pie"><sup>1</sup> Según la condición, indíquese: soltero, viudo, matrimonio anterior declarado nulo,
            dispensa de matrimonio rato y no consumado, dispensa de matrimonio no rato, matrimonio meramente civil
            subsistente o disuelto.
        </p>
    </div>
</div>

<div class="pagina">
    <div class="bloque cabecera">
        <p class="numero-pagina">3</p>
        <p class="contrayente">Datos del Contrayente</p>
    </div>
    <div class="bloque sacramentos shadow fondo-gris">
        <div class="titulo-vertical tv3">
            3. SACRAMENTOS
        </div>
        <div class="datos shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:24%;" class="label"> 1. Primera Comunión en: </span>
                <span style="width:42%;" class="value">{{ $persona['sacramentos']['comunion']['parroquia'] }}</span>
                <span style="width:7%;" class="label"> el día: </span>
                <span style="width:25.3%;"
                    class="value">{{ $persona['sacramentos']['comunion']['fecha']['dia'] }}/{{ $persona['sacramentos']['comunion']['fecha']['mes'] }}{{ $persona['sacramentos']['comunion']['fecha']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:19%;" class="label"> 2. Confirmación en: </span>
                <span style="width:47%;" class="value">{{ $persona['sacramentos']['confirmacion']['parroquia'] }}</span>
                <span style="width:7%;" class="label"> el día: </span>
                <span style="width:25.3%;"
                    class="value">{{ $persona['sacramentos']['confirmacion']['fecha']['dia'] }}/{{ $persona['sacramentos']['confirmacion']['fecha']['mes'] }}{{ $persona['sacramentos']['confirmacion']['fecha']['annio'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque filiación">
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:16%;" class="label">Tipo de filiación: </span>
                <span style="width:83.4%;" class="value">{{ $persona['hijo-legitimo'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque padres shadow fondo-gris">
        <div class="titulo-vertical tv4">
            4. PADRES
        </div>
        <div class="datos shadow">
            <h4>Padre</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $persona['padre']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:81.4%;" class="value">{{ $persona['padre']['apellido1'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:78.4%;" class="value">{{ $persona['padre']['apellido2'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Madre</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $persona['madre']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:81.4%;" class="value">{{ $persona['madre']['apellido1'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:78.4%;" class="value">{{ $persona['madre']['apellido2'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque rgpd">
        <div class="titulo-vertical tv5">
            5. RGPD
        </div>
        <div class="datos shadow">
            <div class="fila-datos">
                <strong>Régimen General de Protección de Datos</strong> (marcar con una X):
            </div>
            <div class="fila-datos">
                1. <input type="checkbox" @if ($persona['RGPD']['politica']==='Acepto' ) checked='checked' @endif>
                <span class="checkmark">ACEPTO la Política de Protección de Datos.</span>
            </div>
            <div class="fila-datos">
                2. <input type="checkbox" @if ($persona['RGPD']['informacion']==='Acepto' ) checked='checked' @endif>
                <span class="checkmark">ACEPTO recibir información sobre la Institución y servicios
                    asociados.</span>
            </div>
        </div>
    </div>
    <div class="bloque fecha-firma fondo-blanco">
        <div class="fecha">
            <strong>{{$persona['localidad']}}</strong>, a <strong>{{$persona['fecha']['dia']}}</strong> de
            <strong>{{$persona['fecha']['mes']}}</strong> de <strong>{{$persona['fecha']['annio']}}</strong>.
        </div>
        <div class="firma">
            Firma </br>
            <span>El Contrayente</span>
        </div>
    </div>
</div>

@php
$persona = $pareja['ella'];
@endphp

<div class="pagina">
    <div class="bloque cabecera">
        <p class="numero-pagina">4</p>
        <p class="contrayente">Datos de la Contrayente</p>
    </div>
    <div class="bloque identificacion shadow fondo-gris">
        <div class="titulo-vertical tv1">
            1. IDENTIFICACIÓN
        </div>
        <div class="datos personales shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 1. Nombre: </span>
                <span style="width:87.4%;" class="value">{{ $persona['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:30%;" class="value">{{ $persona['apellido1'] }}</span>
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:29.3%;" class="value">{{ $persona['apellido2'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:8%;" class="label"> 7. Edad: </span>
                <span style="width:8%;" class="value">{{ $persona['edad'] }}</span>
                <span style="width:8%;" class="label"> 8. DNI: </span>
                <span style="width:23%;" class="value">{{ $persona['dni'] }}</span>
                <span style="width:14%;" class="label"> 9. Profesión: </span>
                <span style="width:36.2%;" class="value">{{ $persona['profesion'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:16%;" class="label"> 10. Estado Civil<sup>1</sup> </span>
                <span style="width:83.4%;" class="value">{{ $persona['estadocivil'] }}</span>
            </div>
        </div>
        <div class="datos nacimiento shadow">
            <h4>Datos de Nacimiento</h4>
            <div class="fila-datos">
                <span style="width:23%;" class="label">5. Fecha de Nacimiento: </span>
                <span style="width:43%;" class="value">{{ $persona['nacimiento']['fecha']['dia'] }} /
                    {{ $persona['nacimiento']['fecha']['mes'] }} / {{ $persona['nacimiento']['fecha']['annio'] }}</span>
                <span style="width:9%;" class="label">6. Hora: </span>
                <span style="width:23.3%;" class="value">{{ $persona['nacimiento']['fecha']['hora'] }} </span>
            </div>
            <div class="fila-datos">
                <span style="width:16%;" class="label"> 7. Nacionalidad: </span>
                <span style="width:34%;" class="value">{{ $persona['nacimiento']['nacionalidad'] }}</span>
                <span style="width:14%;" class="label"> 8. Localidad: </span>
                <span style="width:34.3%;" class="value">{{ $persona['nacimiento']['localidad'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 9. Provincia: </span>
                <span style="width:36%;" class="value">{{ $persona['nacimiento']['provincia'] }}</span>
                <span style="width:14%;" class="label"> 10. Diócesis: </span>
                <span style="width:36.3%;" class="value">{{ $persona['nacimiento']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:32%;" class="label"> 12. Rergistro Civil de Nacimiento: </span>
                <span style="width:67.4%;" class="value">{{ $persona['nacimiento']['registrocivil'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:13%;" class="label"> 13. Número: </span>
                <span style="width:13%;" class="value">{{ $persona['nacimiento']['numero'] }}</span>
                <span style="width:10%;" class="label"> 14. Folio: </span>
                <span style="width:13%;" class="value">{{ $persona['nacimiento']['folio'] }}</span>
                <span style="width:11%;" class="label"> 15. Tomo: </span>
                <span style="width:14%;" class="value">{{ $persona['nacimiento']['tomo'] }}</span>
                <span style="width:9%;" class="label"> 16. Año: </span>
                <span style="width:13.2%;" class="value">{{ $persona['nacimiento']['anniorc'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Datos de Contacto</h4>
            <div class="fila-datos">
                <span style="width:9%;" class="label">2. Email: </span>
                <span style="width:57%;" class="value">{{ $persona['contacto']['email'] }} </span>
                <span style="width:13%;" class="label"> 2. Teléfono: </span>
                <span style="width:19.3%;" class="value">{{ $persona['contacto']['telefono'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:17%;" class="label">3. Domiciliado en: </span>
                <span style="width:82.4%;" class="value">{{ $persona['contacto']['domicilio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label">de la Parroquia de: </span>
                <span style="width:81.4%;" class="value">{{ $persona['contacto']['parroquia'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque religion">
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:8%;" class="label">Religión: </span>
                <span style="width:91.4%;" class="value">{{ $persona['religion'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque bautismo shadow fondo-gris">
        <div class="titulo-vertical tv2">
            2. BAUTISMO
        </div>
        <div class="datos shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Diócesis: </span>
                <span style="width:88.4%;" class="value">{{ $persona['bautismo']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 2. Parroquia: </span>
                <span style="width:87.4%;" class="value">{{ $persona['bautismo']['parroquia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 3. Dirección: </span>
                <span style="width:87.4%;" class="value">{{ $persona['bautismo']['direccion'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:26%;" class="label"> 4. Fecha de la Celebración: </span>
                <span style="width:20%;"
                    class="value">{{ $persona['bautismo']['fecha']['dia'] }}/{{ $persona['bautismo']['fecha']['mes'] }}{{ $persona['bautismo']['fecha']['annio'] }}</span>
                <span style="width:12%;" class="label"> 5. Libro Nº: </span>
                <span style="width:6.7%;" class="value">{{ $persona['bautismo']['libro'] }}</span>
                <span style="width:9%;" class="label"> 6. Folio: </span>
                <span style="width:6.8%;" class="value">{{ $persona['bautismo']['folio'] }}</span>
                <span style="width:9%;" class="label"> 7. Acta: </span>
                <span style="width:6.7%;" class="value">{{ $persona['bautismo']['acta'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque">
        <p class="pie"><sup>1</sup> Según la condición, indíquese: soltero, viudo, matrimonio anterior declarado nulo,
            dispensa de matrimonio rato y no consumado, dispensa de matrimonio no rato, matrimonio meramente civil
            subsistente o disuelto.
        </p>
    </div>
</div>

<div class="pagina">
    <div class="bloque cabecera">
        <p class="numero-pagina">5</p>
        <p class="contrayente">Datos de la Contrayente</p>
    </div>
    <div class="bloque sacramentos shadow fondo-gris">
        <div class="titulo-vertical tv3">
            3. SACRAMENTOS
        </div>
        <div class="datos shadow">
            <h4>Datos Personales</h4>
            <div class="fila-datos">
                <span style="width:24%;" class="label"> 1. Primera Comunión en: </span>
                <span style="width:42%;" class="value">{{ $persona['sacramentos']['comunion']['parroquia'] }}</span>
                <span style="width:7%;" class="label"> el día: </span>
                <span style="width:25.3%;"
                    class="value">{{ $persona['sacramentos']['comunion']['fecha']['dia'] }}/{{ $persona['sacramentos']['comunion']['fecha']['mes'] }}{{ $persona['sacramentos']['comunion']['fecha']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:19%;" class="label"> 2. Confirmación en: </span>
                <span style="width:47%;" class="value">{{ $persona['sacramentos']['confirmacion']['parroquia'] }}</span>
                <span style="width:7%;" class="label"> el día: </span>
                <span style="width:25.3%;"
                    class="value">{{ $persona['sacramentos']['confirmacion']['fecha']['dia'] }}/{{ $persona['sacramentos']['confirmacion']['fecha']['mes'] }}{{ $persona['sacramentos']['confirmacion']['fecha']['annio'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque filiación">
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:16%;" class="label">Tipo de filiación: </span>
                <span style="width:83.4%;" class="value">{{ $persona['hijo-legitimo'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque padres shadow fondo-gris">
        <div class="titulo-vertical tv4">
            4. PADRES
        </div>
        <div class="datos shadow">
            <h4>Padre</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $persona['padre']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:81.4%;" class="value">{{ $persona['padre']['apellido1'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:78.4%;" class="value">{{ $persona['padre']['apellido2'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Madre</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $persona['madre']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:81.4%;" class="value">{{ $persona['madre']['apellido1'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:78.4%;" class="value">{{ $persona['madre']['apellido2'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque rgpd">
        <div class="titulo-vertical tv5">
            5. RGPD
        </div>
        <div class="datos shadow">
            <div class="fila-datos">
                <strong>Régimen General de Protección de Datos</strong> (marcar con una X):
            </div>
            <div class="fila-datos">
                1. <input type="checkbox" @if ($persona['RGPD']['politica']==='Acepto' ) checked='checked' @endif>
                <span class="checkmark">ACEPTO la Política de Protección de Datos.</span>
            </div>
            <div class="fila-datos">
                2. <input type="checkbox" @if ($persona['RGPD']['informacion']==='Acepto' ) checked='checked' @endif>
                <span class="checkmark">ACEPTO recibir información sobre la Institución y servicios
                    asociados.</span>
            </div>
        </div>
    </div>
    <div class="bloque fecha-firma fondo-blanco">
        <div class="fecha">
            <strong>{{$persona['localidad']}}</strong>, a <strong>{{$persona['fecha']['dia']}}</strong> de
            <strong>{{$persona['fecha']['mes']}}</strong> de <strong>{{$persona['fecha']['annio']}}</strong>.
        </div>
        <div class="firma">
            Firma </br>
            <span>La Contrayente</span>
        </div>
    </div>
</div>

<div class="pagina testigos">
    <div class="bloque cabecera">
        <p class="numero-pagina">6</p>
        <p class="contrayente">Datos de los Testigos y Padrinos</p>
    </div>
    <div class="bloque testigos shadow ">
        <div class="titulo-vertical tv6">
            1. TESTIGOS
        </div>
        <div class="datos shadow">
            <h4>Testigo 1</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:45%;" class="value">{{ $testigosPadrinos['Tprimero']['nombre'] }}</span>
                <span style="width:24%;" class="label"> 5. Fecha de Nacimiento: </span>
                <span style="width:18%;"
                    class="value">{{ $testigosPadrinos['Tprimero']['nacimiento']['dia'] }}/{{ $testigosPadrinos['Tprimero']['nacimiento']['mes'] }}/{{ $testigosPadrinos['Tprimero']['nacimiento']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:14%;" class="label"> 2. 1º Apellido: </span>
                <span style="width:24.5%;" class="value">{{ $testigosPadrinos['Tprimero']['apellido1'] }}</span>
                <span style="width:15%;" class="label"> 3. 2º Apellido: </span>
                <span style="width:24.5%;" class="value">{{ $testigosPadrinos['Tprimero']['apellido2'] }}</span>
                <span style="width:10%;" class="label"> 4. Sexo: </span>
                <span style="width:88%;" class="">
                    <input type="checkbox" @if ($testigosPadrinos['Tprimero']['sexo']==='M' ) checked='checked' @endif>
                    M <input type="checkbox" @if ($testigosPadrinos['Tprimero']['sexo']==='F' ) checked='checked'
                        @endif> F
                </span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Testigo 2</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:45%;" class="value">{{ $testigosPadrinos['Tsegundo']['nombre'] }}</span>
                <span style="width:24%;" class="label"> 5. Fecha de Nacimiento: </span>
                <span style="width:18%;"
                    class="value">{{ $testigosPadrinos['Tsegundo']['nacimiento']['dia'] }}/{{ $testigosPadrinos['Tsegundo']['nacimiento']['mes'] }}/{{ $testigosPadrinos['Tsegundo']['nacimiento']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:14%;" class="label"> 2. 1º Apellido: </span>
                <span style="width:24.5%;" class="value">{{ $testigosPadrinos['Tsegundo']['apellido1'] }}</span>
                <span style="width:15%;" class="label"> 3. 2º Apellido: </span>
                <span style="width:24.5%;" class="value">{{ $testigosPadrinos['Tsegundo']['apellido2'] }}</span>
                <span style="width:10%;" class="label"> 4. Sexo: </span>
                <span style="width:88%;" class="">
                    <input type="checkbox" @if ($testigosPadrinos['Tsegundo']['sexo']==='M' ) checked='checked' @endif>
                    M <input type="checkbox" @if ($testigosPadrinos['Tsegundo']['sexo']==='F' ) checked='checked'
                        @endif> F
                </span>
            </div>
        </div>
    </div>
    <div class="bloque testigos shadow fondo-gris">
        <div class="titulo-vertical tv7">
            2. PADRINOS
        </div>
        <div class="datos shadow">
            <h4>Padrino</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $testigosPadrinos['padrino']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:29.65%;" class="value">{{ $testigosPadrinos['padrino']['apellido1'] }}</span>
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:29.65%;" class="value">{{ $testigosPadrinos['padrino']['apellido2'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Madrina</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Nombre: </span>
                <span style="width:88.4%;" class="value">{{ $testigosPadrinos['madrina']['nombre'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:18%;" class="label"> 2. Primer Apellido: </span>
                <span style="width:29.65%;" class="value">{{ $testigosPadrinos['madrina']['apellido1'] }}</span>
                <span style="width:21%;" class="label"> 3. Segundo Apellido: </span>
                <span style="width:29.65%;" class="value">{{ $testigosPadrinos['madrina']['apellido2'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque rgpd">
        <div class="titulo-vertical tv5">
            3. RGPD
        </div>
        <div class="datos shadow">
            <div class="fila-datos">
                <strong>Régimen General de Protección de Datos</strong> (marcar con una X):
            </div>
            <div class="fila-datos">
                1. <input type="checkbox" @if ($testigosPadrinos['RGPD']['politica']==='Acepto' ) checked='checked'
                    @endif>
                <span class="checkmark">ACEPTO la Política de Protección de Datos.</span>
            </div>
            <div class="fila-datos">
                2. <input type="checkbox" @if ($testigosPadrinos['RGPD']['informacion']==='Acepto' ) checked='checked'
                    @endif>
                <span class="checkmark">ACEPTO recibir información sobre la Institución y servicios
                    asociados.</span>
            </div>
        </div>
    </div>
    <div class="bloque fecha-firma fondo-blanco">
        <div class="fecha">
            <strong>{{$testigosPadrinos['lugar']}}</strong>, a <strong>{{$testigosPadrinos['fecha']['dia']}}</strong> de
            <strong>{{$testigosPadrinos['fecha']['mes']}}</strong> de
            <strong>{{$testigosPadrinos['fecha']['annio']}}</strong>.
        </div>
        <div class="firma">
            Firma </br>
            <span>Testigo 1</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>Testigo 2</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>Padrino</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>Madrina</span>
        </div>
    </div>

</div>

<div class="pagina diligencias">

    <div class="bloque cabecera">
        <p class="numero-pagina">7</p>
        <p class="contrayente">Diligencias</p>
    </div>
    <div class="bloque shadow fondo-gris">
        <div class="titulo-vertical tv8">
            1. CURSOS
        </div>
        <div class="datos shadow">
            <h4>Preparación al matrimonio</h4>
            <div class="fila-datos">
                <span style="width:9%;" class="label"> 1. Lugar: </span>
                <span style="width:62%;" class="value">{{ $diligencias['curso']['lugar'] }}</span>
                <span style="width:10%;" class="label"> 2. Fecha: </span>
                <span style="width:17.3%;"
                    class="value">{{ $diligencias['curso']['fecha']['dia'] }}/{{ $diligencias['curso']['fecha']['mes'] }}/{{ $diligencias['curso']['fecha']['annio'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque">
        <div class="titulo-vertical tv9">
            2. PROCLAMACIONES MATRIMONIALES
        </div>
        <div class="datos shadow">
            <h4>Las proclamas matrimoniales fueron publicadas en:</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Diócesis: </span>
                <span style="width:88.4%;" class="value">{{ $diligencias['proclamas']['el']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 2. Parroquia: </span>
                <span style="width:87.4%;" class="value">{{ $diligencias['proclamas']['el']['parroquia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:13%;" class="label"> 3. Localidad: </span>
                <span style="width:36.15%;" class="value">{{ $diligencias['proclamas']['el']['localidad'] }}</span>
                <span style="width:13%;" class="label"> 4. Provincia: </span>
                <span style="width:36.15%;" class="value">{{ $diligencias['proclamas']['el']['provincia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:23%;" class="label"> 5. Fecha de publicación: </span>
                <span style="width:36.15%;"
                    class="value">{{ $diligencias['proclamas']['el']['fechaPublicacion']['desde']['dia'] }}/{{ $diligencias['proclamas']['el']['fechaPublicacion']['desde']['mes'] }}/{{ $diligencias['proclamas']['el']['fechaPublicacion']['desde']['annio'] }}</span>
                <span style="width:3%;" class="label"> al </span>
                <span style="width:36.15%;"
                    class="value">{{ $diligencias['proclamas']['el']['fechaPublicacion']['hasta']['dia'] }}/{{ $diligencias['proclamas']['el']['fechaPublicacion']['hasta']['mes'] }}/{{ $diligencias['proclamas']['el']['fechaPublicacion']['hasta']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:27%;" class="label"> 6. Informe de la publicación: </span>
                <span style="width:72.4%;" class="value">{{ $diligencias['proclamas']['el']['informe'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Las proclamas matrimoniales fueron publicadas en:</h4>
            <div class="fila-datos">
                <span style="width:11%;" class="label"> 1. Diócesis: </span>
                <span style="width:88.4%;" class="value">{{ $diligencias['proclamas']['ella']['diocesis'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:12%;" class="label"> 2. Parroquia: </span>
                <span style="width:87.4%;" class="value">{{ $diligencias['proclamas']['ella']['parroquia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:13%;" class="label"> 3. Localidad: </span>
                <span style="width:36.15%;" class="value">{{ $diligencias['proclamas']['ella']['localidad'] }}</span>
                <span style="width:13%;" class="label"> 4. Provincia: </span>
                <span style="width:36.15%;" class="value">{{ $diligencias['proclamas']['ella']['provincia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:23%;" class="label"> 5. Fecha de publicación: </span>
                <span style="width:36.15%;"
                    class="value">{{ $diligencias['proclamas']['ella']['fechaPublicacion']['desde']['dia'] }}/{{ $diligencias['proclamas']['ella']['fechaPublicacion']['desde']['mes'] }}/{{ $diligencias['proclamas']['ella']['fechaPublicacion']['desde']['annio'] }}</span>
                <span style="width:3%;" class="label"> al </span>
                <span style="width:36.15%;"
                    class="value">{{ $diligencias['proclamas']['ella']['fechaPublicacion']['hasta']['dia'] }}/{{ $diligencias['proclamas']['ella']['fechaPublicacion']['hasta']['mes'] }}/{{ $diligencias['proclamas']['ella']['fechaPublicacion']['hasta']['annio'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:27%;" class="label"> 6. Informe de la publicación: </span>
                <span style="width:72.4%;" class="value">{{ $diligencias['proclamas']['ella']['informe'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque">
        <div class="datos shadow">
            <div class="fila-datos">
                    <span style="width:100%;" class="label"> Los contrayentes solicitan dispensa de las proclamas matrimoniales por: </span>
            </div>
            <div class="fila-datos">
                <span style="width:100%;" class="value">{{ $diligencias['proclamas']['dispensa'] }}</span>
            </div>
        </div>
    </div>

    <div class="bloque fecha-firma fondo-blanco">
        <div class="firma">
            Firma </br>
            <span>El Contrayente</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>La Contrayente</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>Encargado del Archivo</span>
        </div>
        <div class="firma">
            Firma y Sello </br>
            <span>El Vicario General</span>
            <br> Accedemos a lo solicitado
        </div>
        <div class="firma" style="float:right;">
            Firma y Sello </br>
            <span>El Notario</span>
        </div>
    </div>
</div>

<div class="pagina diligencias">
    <div class="bloque cabecera">
        <p class="numero-pagina">8</p>
        <p class="contrayente">Diligencias</p>
    </div>
    <div class="bloque testigos shadow fondo-gris">
        <div class="titulo-vertical tv10">
            3. DOMICILIO
        </div>
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:43%;" class="label"> Domicilio después de celebrar el matrimonio: </span>
                <span style="width:56.4%;" class="value">{{ $diligencias['domicilio'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque celebracion shadow">
        <div class="titulo-vertical tv11">
            4. CELEBRACIÓN DEL MATRIMONIO
        </div>
        <div class="datos shadow">
            <div class="fila-datos">
                <span style="width:9%;" class="label"> 1. Lugar: </span>
                <span style="width:90.4%;" class="value">{{ $diligencias['celebracion']['lugar'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:9%;" class="label"> 3. Fecha: </span>
                <span style="width:50.3%;"
                    class="value">{{ $diligencias['celebracion']['fecha']['dia'] }}/{{ $diligencias['celebracion']['fecha']['mes'] }}/{{ $diligencias['celebracion']['fecha']['annio'] }}</span>
                <span style="width:9%;" class="label"> 4. Hora: </span>
                <span style="width:30%;" class="value">{{ $diligencias['celebracion']['fecha']['hora'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:26%;" class="label"> 5. Ministro del Matrimonio: </span>
                <span style="width:73.4%;" class="value">{{ $diligencias['celebracion']['ministro'] }}</span>
            </div>
        </div>
        <div class="datos shadow">
            <h4>Matrimonio en otra parroquia</h4>
            <div class="fila-datos">
                <span style="width:100%;" class="label"> Los Contrayentes solicitan la celebración de su matrimonio en:
                </span>
            </div>
            <div class="fila-datos">
                <span style="width:100%;" class="value">{{ $diligencias['celebracion']['otraparroquia'] }}</span>
            </div>
            <div class="fila-datos">
                <span style="width:8%;" class="label"> Motivo: </span>
                <span style="width:91.4%;" class="value">{{ $diligencias['celebracion']['motivo'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque fecha-firma fondo-blanco otra-parroquia">
        <div class="firma">
            Firma </br>
            <span>El Contrayente</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>La Contrayente</span>
        </div>
        <div class="firma">
            Firma </br>
            <span>Encargado del Archivo</span>
        </div>
    </div>
    <div class="bloque fondo-gris">
        <div class="titulo-vertical tv12">
            5. APROBACIÓN
        </div>
        <div class="datos shadow">
            <h4>Aprobación para la Celebración</h4>
            <div class="fila-datos">

            <span style="width:100%%;" class="label"">
                Visto este expediente, lo aprobamos para que el matrimonio pueda celebrarse en:
            </span>
            </div>
            <div class="fila-datos">
                <span style="width:100%;" class="value">{{ $diligencias['aprobacion'] }}</span>
            </div>
        </div>
    </div>
    <div class="bloque fecha-firma acuerdo fondo-blanco">
        <p>Lo acordó y firmó el Vicario General en</p>
        <div class="fecha">
            <strong>{{$diligencias['lugar']}}</strong>, a <strong>{{$diligencias['fecha']['dia']}}</strong> de
            <strong>{{$diligencias['fecha']['mes']}}</strong> de <strong>{{$diligencias['fecha']['annio']}}</strong>.
        </div>
        <p>de lo cual, yo el Notario, doy fe.</p>
        <div class="firma">
            Firma y Sello </br>
            <span>El Vicario General</span>
        </div>
        <div class="firma">
            Firma y Sello </br>
            <span>El Notario</span>
        </div>
    </div>
</div>

@include('pdfs.partials._contraportada')

@endsection
