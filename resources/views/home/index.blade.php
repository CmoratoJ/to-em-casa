@extends('layout')

@section('cabecalho')
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner altura-slide">
                <div class="carousel-item active">
                    <img src="/img/la.jpg" class="d-block w-100" alt="img1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/la4.jpg" class="d-block w-100" alt="img2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/la3.jpg" class="d-block w-100" alt="img2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-between fonte-texto">
            <div style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Viva novas experiências</h5>
                    <p class="card-text">Rio de Janeiro, Paraty, Florianópolis ou Gramado? Visite qualquer lugar que você ache exótico; é uma das experiências mais gratificantes que você pode ter. Aproveite a oportunidade para fugir da rotina enquanto desfruta de um lugar especial. Basta escolher um lugar que lhe inspire e aproveitar alguns dias para conhecê-lo e viver plenamente.</p>
                </div>
            </div>
            <div style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Conheça novos horizontes</h5>
                    <p class="card-text">Somos o resultado dos livros que lemos, das viagens que fazemos e das pessoas que amamos, portanto não se limite e experimente novas comidas, culturas e emoções. Existe todo um “mar de oportunidades” na “vida lá fora”, e você não pode ficar preso a velhos hábitos.</p>
                </div>
            </div>
            <div style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Aprenda novas culturas</h5>
                    <p class="card-text">Viajar é ter a oportunidade de experimentar novas culturas, de conhecer gente nova e de compartilhar ideias neste mundo que é multicultural. Viajar é divertir-se e experimentar emoções, sensações e sentimentos, é experimentar o desconhecido e experimentar gostos novos, gastronomia e maravilhosos espaços naturais, artísticos e culturais.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="h1">Conheça nossos planos!</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <sup>R$</sup>9,90
                            <small>Por mes</small>
                        </div>
                        <div class="type">
                            BRONZE
                        </div>
                        <ul>
                            <li><i class="glyphicon "></i>Volta ao topo uma vez </li>
                            <li><i class="glyphicon "></i>Upload de ate 5 fotos </li>
                            <li><i class="glyphicon "></i>Acumule pontos e troque por mensalidades<br>(cada contrataçao vale 10 pontos)</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn db-button-color-square btn-lg">CONTRATE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-two popular">
                        <div class="price">
                            <sup>R$</sup>15,90
                            <small>Por mes</small>
                        </div>
                        <div class="type">
                            PRATA
                        </div>
                        <ul>
                            <li><i class="glyphicon "></i>Volta ao topo 1 vez por dia, durante 7 dias </li>
                            <li><i class="glyphicon "></i> Upload de ate 7 fotos </li>
                            <li><i class="glyphicon "></i>Acumule pontos e troque por mensalidades<br>(cada contrataçao vale 50 pontos)</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn db-button-color-square btn-lg">CONTRATE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-three">
                        <div class="price">
                            <sup>R$</sup>25,90
                            <small>Por mes</small>
                        </div>
                        <div class="type">
                            OURO
                        </div>
                        <ul>
                            <li><i class="glyphicon "></i>Volta ao topo 1 vez por dia, durante 2 semanas </li>
                            <li><i class="glyphicon "></i>Upload de ate 10 fotos </li>
                            <li><i class="glyphicon "></i>Acumule pontos e troque por mensalidades<br>(cada contrataçao vale 100 pontos)</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn db-button-color-square btn-lg">CONTRATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('conteudo')

@endsection
