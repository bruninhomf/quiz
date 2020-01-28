<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz de orçamento</title>

    <link rel="stylesheet" href="cdn/css/css.css">
    <link rel="stylesheet" href="cdn/css/style.css">

    <script src="cdn/js/fontawesome.js" crossorigin="anonymous"></script>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

    <link rel="shortcut icon" href="cdn/img/favicon_quiz.png">
    
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-12">
                <div class="container card rounded-0 b-0 pb-0 mt-0 pt-0">

                    <!-- Pergunta 01 -->
                    <div class="row card-body show pt-0 px-0" id="card-1">
                        <div class="r-adio-group row justify-content-between px4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Qual tipo de sistema você deseja desenvolver?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Escolha o tipo de plataforma qual o sistema será utilizado e desenvolvido.
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            
                            <div class="containe">
                                <div class="cardd next" id="01" data-next="3">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Sistema web</h2>
                                      <p>
                                          É um sistema projetado para utilização através de navegadores
                                          como Chrome, Internet Explorer, Firefox, dentre outros,
                                          sem necessidade de instalar programas ou softwares.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Sistema web</h2>
                                  </div>
                                </div>

                                <div class="cardd next" id="02" data-next="2">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Sistema mobile</h2>
                                      <p>
                                          É desenvolvido especificamente para smartphones,
                                          tablets, PDAs ou outros dispositivos móveis.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Sistema mobile</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="03" data-next="3">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Desktop</h2>
                                      <p>
                                          É desenvolvido para computadores de mesa e necessita
                                          de intalação para o o funcionamento do sistema.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Sistema desktop</h2>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pergunta 02 -->
                    <div class="row card-body pt-0 px-0" id="card-2">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="">
                                    <h5 class="yellow-text">
                                        Em qual plataforma será desenvolvido o App?
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco2">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="04" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Android</h2>
                                      <p>
                                          O Android é o sistema operacional de código aberto para dispositivos
                                          móveis. É utilizado por varias fabricantes de celular.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Android</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="05" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>iOS</h2>
                                      <p>
                                          É um sistema operacional móvel exclusivo da Apple Inc.
                                          para iPhone, iPod, touch e iPad.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">iOS</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="06" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Android e iOS</h2>
                                      <p>
                                          É um sistema operacional mobile híbrido
                                          que irá funcionar tanto no iOS quanto no Android.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Android e iOS</h2>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left pr-1"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 03 -->
                    <div class="row card-body pt-0 px-0" id="card-3">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você quer adicionar aplicação mobile ao sistema?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Caso queira desenvolver uma versão para smartphones,
                                        tablets, iPads, etc, selecione uma das opções abixo.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco3">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="07" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Android</h2>
                                        <p>
                                            O Android é o sistema operacional de código aberto para dispositivos
                                            móveis. É utilizado por varias fabricantes de celular.
                                        </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Android</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="08" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Android e iOS</h2>
                                      <p>
                                          É um sistema operacional mobile híbrido
                                          que irá funcionar tanto no iOS quanto no Android.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Android e iOS</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="09" data-next="4">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Não adicionar APP</h2>
                                      <p>
                                          Não tenho interesse em desenvolver um app mobile.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                     <h2 style="font-size: x-large;">Não adicionar APP</h2>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev3 mx-2">
                                <span class="fa fa-long-arrow-left pr-1"> </span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 04 -->
                    <div class="row card-body pt-0 px-0" id="card-4">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Qual visual você deseja ter no seu sistema?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Selecione o estilo que irá definir a exibição do seu sistema.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco4">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="10" data-next="5">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Visual básico</h2>
                                      <p>
                                          É um layout simples que utiliza os taplates mais utilizados na web.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                    <h2 style="font-size: x-large;">Visual básico</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="11" data-next="5">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Visual profissional</h2>
                                      <p>
                                          Com utilização de template base e layout personalizado.
                                      </p>
                                    </div>
                                  </div>
                                  <div class="face face2">
                                    <h2 style="font-size: x-large;">Visual profissional</h2>
                                  </div>
                                </div>
                                <div class="cardd next" id="12" data-next="5">
                                  <div class="face face1">
                                    <div class="content">
                                      <h2>Visual personalizado</h2>
                                      <p>
                                          Visual totalmente personalizado e exclusivo para o seu negócio.
                                      </p>
                                    </div>
                                  </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Visual personalizado</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 05 -->
                    <div class="row card-body pt-0 px-0" id="card-5">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você precisa de um sistema multiárea?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Sistema multiárea é um sistema que possui areas separadas. <br>
                                        Ex. (loja virtual, pefil do cliente e perfil do vendedor).
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco5">R$ 0,00</p><p id="testP"></p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="13" data-next="6">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                Não tenho a necessidade de um sistema multiárea
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="14" data-next="6">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, 2 áreas isoladas</h2>
                                            <p>
                                                Preciso de um sistem contendo duas áreas isoladas ex.
                                                (área de acesso ao cliente e painel de administrador para funcionários).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim, 2 áreas isoladas</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="15" data-next="6">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, 2 ou mais áreas personalizadas</h2>
                                            <p>
                                                Preciso de um sistema com mais de duas áreas ex. (site, painel do cliente,
                                                painel do funcionario e terminal de vendas).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, 2 ou mais áreas personalizadas</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 06 -->
                    <div class="row card-body pt-0 px-0" id="card-6">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você precisa de um sistema de permissão e controle de usuários?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        O módulo de permissão é onde limita o acesso do perfil do usuário
                                        selecionado.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco6">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="16" data-next="7">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2> Não, o sistema é público.</h2>
                                            <p>
                                                O sistema público não tem a necessidade de se colocar permissão,
                                                pois todos tem acesso total a todo o sistema.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;"> Não, o sistema é público.</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="17" data-next="7">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim</h2>
                                            <p>
                                                O sistema de conter um modulo onde se concede ou restringe acessos do usuário
                                                ao sistema.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 07 -->
                    <div class="row card-body pt-0 px-0" id="card-7">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        O acesso ao seu sistema é pago? É necessário automatização?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        O sistema será diponibilizado somente após confirmação de
                                        pagamento e qual é a forma de pagamento, caso o sistema seje pago.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco7">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="18" data-next="8">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                O sistema será desenvolvido para uso próprio, por isso não será cobrado a utilização do sistema
                                                e não necessita de automatizar pagamento.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="19" data-next="8">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, porém sem automatização</h2>
                                            <p>
                                                O sistema será pago, mas não necessita de automatizar o pagamento, o sistema sera cobrado manualmente.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, porém sem automatização</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="20" data-next="8">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, via cartão e boleto</h2>
                                            <p>
                                                O sistema será pago e necessita de automatização do pagamento,
                                                utilizando cartão de credito e boleto bancario.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim, via cartão e boleto</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="21" data-next="8">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, cartão, boleto e criptomoedas</h2>
                                            <p>
                                                O sistema será pago e necessita de automatização do pagamento,
                                                utilizando cartão de credito, boleto bancario e criptomoedas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, cartão, boleto e criptomoedas</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 08 -->
                    <div class="row card-body pt-0 px-0" id="card-8">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Seu sistema precisa de um GED?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Gerenciador eletrónica de documentos, é uma tecnologia
                                        que provê assinatura digital de documentos, organização e etc.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco8">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="22" data-next="9">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                Não preciso de nenhuma assinatura digital ou organização sobre os documentos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="23" data-next="9">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim</h2>
                                            <p>
                                                Sim, preciso de assinatura digital ou organização automatizada sobre os documentos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 09 -->
                    <div class="row card-body pt-0 px-0" id="card-9">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Seu sistema precisa de funções financeiras, como contas a pagar e a receber? Emissão de boletos e nota fiscal?
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco9">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="24" data-next="10">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                O sistema não terá controle financeiro.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="25" data-next="10">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2> Sim, apenas boletos</h2>
                                            <p>
                                                Sim, o sistema terá controle financeiro com forma de pagamento via boleto bancário.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;"> Sim, apenas boletos</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="26" data-next="10">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, boletos e NFSe</h2>
                                            <p>
                                                Sim, o sistema terá controle financeiro com forma de pagamento por boleto bancário e NFS-e.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim, boletos e NFSe</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="27" data-next="10">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, boletos, NFSe e NFCe</h2>
                                            <p>
                                                Sim, o sistema terá controle financeiro com forma de pagamento por boleto bancário, NFS-e e NFC-e.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, boletos, NFSe e NFCe</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 10 -->
                    <div class="row card-body pt-0 px-0" id="card-10">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você precisa integrar com outra plataforma?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Será necessário desenvolver um sistema com parametros ou normas já existentes?
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco10">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="28" data-next="11">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                O sistema não terá integração com outros sistemas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="29" data-next="11">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, e a plataforma fornece API</h2>
                                            <p>
                                                Sim, o sistema terá integração com outra plataforma que fornece API para integração.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, e a plataforma fornece API</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="30" data-next="11">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, e a plataforma não fornece API</h2>
                                            <p>
                                                Sim, o sistema terá integração com outra plataforma, mas a plataforma não fornece
                                                API para integração.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, e a plataforma não fornece API</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 11 -->
                    <div class="row card-body pt-0 px-0" id="card-11">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você precisa exportar informações para outros sistemas?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Será necessário um módulo de exportação com adequando o sistema a
                                        parametros e normas já existentes?
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco11">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="31" data-next="12">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                Não, o sistema não tem que exportar arquivos para nenhum outro sistema ou app.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="32" data-next="12">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim</h2>
                                            <p>
                                                Sim, o sistema terá que exportar informações do sistema para outro sistema
                                                que já possui padrões pré definidos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 12 -->
                    <div class="row card-body pt-0 px-0" id="card-12">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        O sistema precisa ser multiidioma?
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco12">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="33" data-next="13">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                Não, o sistema só terá um idioma.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="34" data-next="13">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, 2 idiomas</h2>
                                            <p>
                                                Sim, o sistema irá funcionar em 2 (dois) idiomas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim, 2 idiomas</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="35" data-next="13">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, 5 idiomas ou mais</h2>
                                            <p>
                                                Sim, o sistema irá funcionar em 5 (cinco) ou mais idiomas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Sim, 5 idiomas ou mais</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 13 -->
                    <div class="row card-body pt-0 px-0" id="card-13">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Você precisa emitir relatórios?
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco13">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="36" data-next="14">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não</h2>
                                            <p>
                                                Não, o sistema não terá emissão de relatórios.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="37" data-next="14">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, até 5 relatórios pré-definidos</h2>
                                            <p>
                                                Sim, o sistema terá até 5 (cinco) relatórios pré-definidos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, até 5 relatórios pré-definidos</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="38" data-next="14">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, até 10 relatórios pré-definidos</h2>
                                            <p>
                                                Sim, o sistema terá até 10 (dez) relatórios pré-definidos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, até 10 relatórios pré-definidos</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="39" data-next="14">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, relatórios personalizados ilimitados</h2>
                                            <p>
                                                Sim, o sistema terá relatórios ilimitados e personalizados, podendo
                                                pesquisar todas as informações existente no banco de dados.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, relatórios personalizados ilimitados</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 14 -->
                    <div class="row card-body pt-0 px-0" id="card-14">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        Quantos módulos não abordados anteriormente seu sistema deve ter?
                                        <i class="fas fa-info-circle pl-2" style="font-size: 15px;"></i>
                                    </h5>
                                    <span class="toolttext mt-2">
                                        Informe quantos modulos o seu sistema precisa ter e
                                        não foi citado nas perguntas anteriores.
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco14">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="40" data-next="15">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>1-5</h2>
                                            <p>
                                                O sistema tem entre 1 à 5 módulos que não foram citados nas perguntas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">1-5</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="41" data-next="15">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>5-10</h2>
                                            <p>
                                                O sistema tem entre 5 à 10 módulos que não foram citados nas perguntas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">5-10</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="42" data-next="15">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>10-15</h2>
                                            <p>
                                                O sistema tem entre 10 à 15 módulos que não foram citados nas perguntas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">10-15</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="43" data-next="15">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>15+</h2>
                                            <p>
                                                O sistema possui mais de 15 módulos que não foram citados nas perguntas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">15+</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Pergunta 15 -->
                    <div class="row card-body pt-0 px-0" id="card-15">
                        <div class="radio-group row justify-content-between px-4 pb-5">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-bottom: 60px">
                                <div class="toolt">
                                    <h5 class="yellow-text">
                                        A aplicação deve funcionar sem internet?
                                    </h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
                                <h5 class="text-white">Valor do Projeto</h5>
                                <strong><p class="h1 text-salmon" id="preco15">R$ 0,00</p></strong>
                            </div>
                        </div>
                        <div class="radio-group row justify-content-between px-3">
                            <div class="containe">
                                <div class="cardd next" id="44" data-next="16">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Não é necessário</h2>
                                            <p>
                                                Não, o sistema funcionará online para poder acessa-lo de qualquer lugar que tenha internet.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 style="font-size: x-large;">Não</h2>
                                    </div>
                                </div>
                                <div class="cardd next" id="45" data-next="16">
                                    <div class="face face1">
                                        <div class="content">
                                            <h2>Sim, com sincronização de dados</h2>
                                            <p>
                                                Sim, o sistema não ficará conectado a internet e precisará de sincronização quando houver conexão com a internet.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <h2 class="text-center" style="font-size: x-large;">Sim, com sincronização de dados</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-4 pt-4">
                            <button class="btn btn-outline-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left"></span>
                                Back
                            </button>
                        </div>
                    </div>

                    <!-- Final -->
                    <div class="row card-body pt-0 px-0" id="card-16">
                        <div class="text-md-center px-5">
                            <h5 class="text-white px-5">O valor aproximado do Projeto é de:</h5>
                            <strong ><p class="preco text-salmon display-4 text-center font-weight-bold" id="preco-final">R$ 000,00</p></strong>
                        </div>
                        <div class="px-5">
                            <h4 class="text-white heading mb-4 pb-1 text-center">
                                Este valor é uma boa estimativa com poucas informações.
                                Para saber o valor exato do seu projeto, é necessário uma reunião de video
                                chamada para realizar uma análise de requisitos, o intuito é detalhar ao máximo o
                                projeto para passar um preço justo e cumprir o prazo de entrega.
                            </h4>
                        </div>
                        <h5 class="text-white mb-3 text-center">
                            Profissionais necessário para este projeto:
                        </h5>
                        <div class="row pb-3 text-white">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        Gerente de projetos
                                    </li>
                                    <li class="list-group-item bg-black">
                                        Analista de banco de dados
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-black">
                                        Designer
                                    </li>
                                    <li class="list-group-item">
                                        Analista UX-UI
                                    </li>
                                    <li class="list-group-item">
                                        Desenvolvedor front-end
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-1">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-black">
                                        Desenvolvedor back-end
                                    </li>
                                    <li class="list-group-item bg-black">
                                        Tester
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="text-white mt-4 mb-0 text-center">
                            Clique no botão abaixo para solicitar um orçamento.
                        </h5>
                        <h6 class="text-white mb-4 text-center">
                            A nossa equipe entrará em contato para detalhar e entender melhor o seu projeto.
                        </h6>

                        <!-- Button trigger modal -->
                        <div class="text-center">
                            <button type="button" class="btn btn-salmon" data-toggle="modal" data-target="#exampleModal">
                                Orçamento
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Orçamento</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="form-body" action="config/processa_envio.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nome">Nome <b class="text-danger">*</b> </label>
                                                <input name="nome" type="text" class="form-control" id="nome" placeholder="João da Silva">
                                            </div>
                                            <div class="form-group">
                                                <label for="tel">Telefone <b class="text-danger">*</b> </label>
                                                <input name="tel" type="text" class="form-control mask-phone" id="tel" placeholder="(31) 4201-4241">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-mail <b class="text-danger">*</b> </label>
                                                <input name="email" type="text" class="form-control" id="email" placeholder="joao@dominio.com.br">
                                            </div>

                                            <div class="form-group">
                                                <label for="assunto">Assunto <b class="text-danger">*</b> </label>
                                                <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Orçamento">
                                            </div>

                                            <div class="form-group">
                                                <label for="mensagem">Mensagem <b class="text-danger">*</b> </label>
                                                <textarea name="mensagem" rows="6" class="form-control" id="mensagem" placeholder="Digite o seu texto..."></textarea>
                                            </div>
                                            <div id="div-errors" style="display: none;">
                                                <div class="alert alert-danger div-error" role="alert">
                                                </div>
                                            </div>

                                            <div id="orcamento" style="display: none;">
                                                <input type="text" name="amount" id="amount">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary mt-0" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-salmon btn-block">Enviar Mensagem</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-md-center px-5 py-2" id="completado">
                        <div class="count text-center col-12">
                            <p class="mb-sm-0 pb-sm-0 text-white">
                                <strong>
                                    <span id="cnt">0</span>%
                                </strong>
                                <span class="yellow-text">Completado</span>
                            </p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4 progress p-0">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" aria-valuemin="0" aria-valuemax="120"></div>
                        </div>
                    </div>
                </div>
                <a href="http://inovedados.com.br" style="position:fixed;width:60px;height:60px;bottom:20px;right:50px;" target="_blank">
                    <img src="cdn/img/inove.png">
                </a>
            </div>
        </div>
    </div>

    <script src="cdn/js/script.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>


</body>
</html>