@extends('layouts.app')
<!-- About section -->
<style>
    #logos{
        margin-top: 15%;
        width: 60%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    #logos1{
        margin-top: 15%;
        width: 60%;
        height: 200%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    #charlas{
        margin-top:5%;
        width: 100%;
        border-radius: 5px;
    }

    h3 {
        margin-bottom: 50px;
      text-align: center;
      text-transform: uppercase;
      font-size: 46px;
      font-weight: 200;
      line-height: 110%;
      letter-spacing: 5px;
    }

    @media only screen and (max-width: 600px) {
        h3{
            font-size: 46px;
            letter-spacing: 3px;
        }
    }
    h3:after {
        content: '';
        position: absolute;
        left: 50%;
        display: block;
        width: 100px;
        height: 5px;
        margin-left: -50px;
        margin-top: 35px;
        background-color: #69f0ae;
    }

    h2.centre-line{
        width: 90%;
        border-bottom:0.1rem solid #ccc;
        text-transform: none;
    }

    h2.centre-line span{
        background-color:#fff;
        padding:0 1rem;
    }

    iframe{
        display: block;
        margin: auto;
    }

    .parallax-container {
        height: 380px !important;
    }

    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        text-align: center;
    }
    .embed-container iframe, .embed-container object, .embed-container embed {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .aligned{
        text-align: justify;
    }
</style>
@section('extra_css')

@section('content')
<div class="section scrollspy" id="about">
    <div class="container">
        <div class="row">
            <h2>Acerca de</h2>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="images/about/4.jpg"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h3>¿Qué es TED y TEDx?<small></small></h3>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l8 offset-l2">
                <p class="aligned">TED es una fundación global dedicada a difundir ideas valiosas. Inició en 1984 como una conferencia que juntaba personas de tres diferentes áreas: <b>T</b>ecnología, <b>E</b>ntretenimiento y <b>D</b>iseño. Desde entonces, su alcance se ha vuelto cada vez más amplio a nivel mundial.</p>
                <p class="aligned">Con dos conferencias anuales, su canal oficial de videos en <a href="https://www.youtube.com/user/TEDtalksDirector">YouTube</a>, su sitio web <a href="http://ted.com/">TED.com</a>, y las iniciativas y proyectos comunitarios, TED es ahora una plataforma y un movimiento global, enfocado a hacer un cambio significativo a través del poder de las ideas.</p>
                <p class="aligned">Por su parte TEDx fue creado en el espíritu de la misión de TED que es <u>Difundir Ideas Valiosas</u> (“Ideas Worth Spreading”). El programa fue diseñado para dar a las comunidades, organizaciones e individuos la oportunidad de estimular el diálogo y a vivir experiencias parecidas a las vividas en eventos TED a un nivel local.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="images/about/5.jpg"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h3>¿Qué es TEDxUMSA?<small></small></h3>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l8 offset-l2">
                <p class="aligned">TEDxUMSA sigue la misma linea de TEDx. Es un evento independiente organizado por jóvenes universitarios que busca "difundir ideas valiosas" que provoquen en la juventud paceña la inquietud de encontrar su propósito personal para que rompan con barreras e impedimentos y puedan contribuir con soluciones creativas e innovadora a las necesidades y problemáticas de nuestra ciudad y país.</p>
                <p class="aligned">El evento TEDxUMSA no es organizado por razones políticas, recompensas monetarias o ganancias personales. Sus organizadores realizan un arduo trabajo voluntario porque realmente creen en que una idea puede cambiar el mundo.</p>
                <p class="aligned">Asi como en otros eventos TEDx, nuestro evento busca profundizar en las temáticas de Innovación y Creatividad. Aun así, seguimos la línea de TEDx en cuanto a las temáticas, buscando también difundir charlas de temática abierta, local y comunitaria, que inspire liderazgo de pensamiento y una visión transcendental.</p>
                <p class="aligned">Los organizadores de TEDx no organizan eventos por razones políticas, recompensas monetarias o ganancias personales, lo hacen porque realmente creen en que una idea puede cambiar el mundo.</p>
                <p class="aligned">Los eventos de TEDx son de tema abierto, de interés general y que inspira innovación, creatividad, liderazgo de pensamiento y una visión.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 offset-m3 offset-l3">
                <div class='embed-container'>
                    <iframe src='https://www.youtube.com/embed/lNlWB1elF7U?rel=0' frameborder='0' allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="description-ball"></div>
                <div class="description center-align">
                    <div class="row h4-row">
                        <h4 style="font-weight:bold">Difundir ideas valiosas<br></h4>
                        <h4><span>Transformando ideas en acciones</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
    <script type="text/javascript">
        $(this).siblings('li').removeClass('active');
        $(".about").addClass('active');

        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
@endsection
