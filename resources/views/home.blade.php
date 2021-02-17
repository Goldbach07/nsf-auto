<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adquira seu carro através do consórcio de forma rápida e segura com taxa de 0,19%/mês</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">
  <style>
    a {
      color: #dc3545;
    }

    .logo {
      width: 100px;
    }

    .call-message {
      display: inline-block;
      width: 100%;
      font-size: 0.8em;
    }

    .call-phone {
      display: inline-block;
      font-size: 1.3em;
    }

    .landform {
      background-color: #fff;
    }

    .landform-top {
      background-color: #790100;
      color: white;
      width: 100%;
      text-align: center;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .landform-bottom {
      background-color: #c10000;
      color: white;
      width: 100%;
      padding: 20px;
    }

    .landtext {
      font-size: 0.7em;
    }

    .landsubmit {
      width: 100%;
      background-color: #3ecf1a;
    }

    .bgland {
      display: flex;
      background: url({{ asset('img/bg-norte.png') }});
      background-position: left;
      background-size: cover;
      height: 560px;
    }

    .formdiv {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    .price {
      font-weight: bold;
      color: #dc3545;
      padding-bottom: 20px;
      font-size: 2em;
    }

    @media only screen and (max-width: 600px) {
      .calldiv {
        display: none;
      }
      .logus {
        justify-content: center!important;
      }
      .formdiv {
        padding-right: 0px;
        margin-top: 500px;
        height: 200pvh;
      }
      .rest {
        margin-top: 300px;
      }
      .simuletxt {
        font-size: 1em!important;
        text-align: center!important;
      }
      .caller {
        padding-bottom: 20px!important;
      }
      #caller {
        bottom: -500px;
        transition: 2s;
      }
    }
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container logus">
      <a class="navbar-brand" href="#">
          <img class="logo" src="{{ asset('/img/logo.png') }}">
      </a>
      <div class='calldiv'>
        <span class="call-message">Central de Atendimento</span>
        <a class="call-phone" href="tel:9233488759">092-33488759</a>
      </div>
    </div>
  </nav>


  <header class="row bgland" style='margin-right: 0!important; padding-top: 0px;'>
    <div class="col-md-8">
    </div>
    <div class="col-md-3 formdiv">

      <div id='simule' class="landform">
        <div class='landform-top'>
          <span>Simule a conquista do seu carro novo!</span>
        </div>

        <div class='landform-bottom'>
          <form id="Frm_CadastrarLead">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="url" value="{{ $url }}" />

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label landtext">Nome</label>
              <input type="text" class="form-control" id="txt_nome" name="name" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label landtext">Telefone</label>
              <input type="text" class="form-control" id="txt_telefone" name="phone" placeholder="(00) 0000-0000" required>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label landtext">E-mail</label>
              <input type="email" class="form-control" id="txt_email" name="email" placeholder="seu@email.com" required>
            </div>

            <div class="mb-3">
              <button class="btn btn-success btn-lg landsubmit" type="submit" id="btn_simular">SIMULAR AGORA!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center rest">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-wallet m-auto text-danger"></i>
            </div>
            <h3>Economia</h3>
            <p class="lead mb-0">Economize até 70% na compra do seu carro.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-danger"></i>
            </div>
            <h3>Sem juros</h3>
            <p class="lead mb-0">Realize o sonho do carro sem surpresas no final.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-danger"></i>
            </div>
            <h3>100% parcelado</h3>
            <p class="lead mb-0">Compre o carro dos seus sonhos e pague 100% parcelado.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-calendar m-auto text-danger"></i>
            </div>
            <h3>Até 100 meses</h3>
            <p class="lead mb-0">Escolha a parcela que fica ideal no seu orçamento.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('img/norte consorcio serviços financeiros novo onix plus-premier Hatch promoção oferta manaus.jpg') }}');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Novo Onix Rs Turbo Hatch 1.0</h2>
          <p class="lead mb-0 price">R$ 712,99 / mês</p>
          <p class="lead mb-0">Carta de Crédito R$ 60.000,00 Veículos Novos ou Semi-novos com até 10 anos de fabricação. Use até 25% da própria carta como lance. R$ Menor taxa de mercado.</p>
          <br><a href="#simule" class='btn-danger btn btn-lg'>
            Simular Agora
          </a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('img/norte consórcio serviços financeiros novo onix plus premier promoção oferta manaus.jpg') }}');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Novo Onix Plus Midnight Flex Automático</h2>
          <p class="lead mb-0 price">R$ 853,99 / mês</p>
          <p class="lead mb-0">Carta de Crédito R$ 70.000,00 Veículos Novos ou Semi-novos com até 10 anos de fabricação. Use até 25% da própria carta como lance. Taxa de 0,19%/mês</p>
          <br><a href="#simule" class='btn-danger btn btn-lg'>
            Simular Agora
          </a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('img/norte consórcio serviços financeiros wokswagen gol novo gol vermelho promoção oferta manaus.jpeg') }}');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Novo Gol MSI 84cv Automático</h2>
          <p class="lead mb-0 price">R$ 609,99 / mês</p>
          <p class="lead mb-0">Carta de Crédito R$ 50.000,00 Veículos Novos ou Semi-novos com até 10 anos de fabricação. Use até 25% da própria carta como lance.Pague em até 100 meses.</p>
          <br><a href="#simule" class='btn-danger btn btn-lg'>
            Simular Agora
          </a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('img/norte consórcio serviços financeiros ford ka promoção oferta manaus Ka.jpg') }}');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Ford Ka 1.0 S TIVCT flex</h2>
          <p class="lead mb-0 price">R$ 488,99 /mês</p>
          <p class="lead mb-0">Carta de Crédito R$ 40.000,00 Veículos Novos ou Semi-novos com até 10 anos de fabricação. Use até 25% da própria carta como lance.Pague em até 100 meses.</p>
          <br><a href="#simule" class='btn-danger btn btn-lg'>
            Simular Agora
          </a>
        </div>
      </div>

    </div>
  </section>
  <p class="lead mb-0" style="width: 100%; text-align: center; font-size: 0.8em; margin-top: 20px; margin-bottom: 20px;">* Consórcio de automóveis | Imagens ilustrativas | Oferta válida até fevereiro 2021 </p>
  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" style="margin-bottom: -100px;">
    <div class="container">
      <h2 class="mb-5">Nossa Empresa</h2>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid mb-3" src="{{ asset('img/NORTE CONSORCIO MANAUS AMAZONAS CARLOS ADAMILTON FUNDADOR.jpg') }}" alt="">
            <h5>Carlos Adamilton</h5>
            <p class="font-weight-light mb-0">Diretor - Fundador</p>
          </div>
        </div>
<!--         <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/logo.png" alt="">
            <h5>Nome do Funcionário</h5>
            <p class="font-weight-light mb-0">Função exercida</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/logo.png" alt="">
            <h5>Nome do Funcionário</h5>
            <p class="font-weight-light mb-0">Função exercida</p>
          </div>
        </div> -->
      </div>
    </div>
    </section>
  <hr>
    <!-- Footer -->
    <footer class="footer bg-light" style='padding-bottom: 100px;'>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <!--           <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul> -->
            <p class="text-muted small mb-4 mb-lg-0">&copy; Desenvolvido por ANYTECH. Norte Serviços Finaneiros. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/nortesf/">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://www.youtube.com/channel/UCUZ4GRtGNH6cqVukeTAZZAw">
                <i class="fab fa-youtube-square fa-2x fa-fw"></i>
              </a>
            </li>
              <li class="list-inline-item">
                <a href="https://instagram.com/nortesf">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Call to Action -->
    <section class="text-white text-center caller" id='caller' style='width: 100%;background-color: #eee; padding-top: 20px; padding-bottom: 10px;position: fixed; z-index: 9990;'>
      <div class="row">
        <div class="col-md-8">
          <h2 class="mb-4 simuletxt" style="color: #333; font-size: 2em; text-align: right;">Simule agora mesmo a compra do seu carro novo!</h2>
        </div>
        <div class="col-md-4">
          <a href="#simule" class='btn-danger btn btn-lg'>
            Simular Agora
          </a>
        </div>
      </div>
    </section>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js'></script>
    <script>
      window.onscroll = function() {
        wY = window.pageYOffset;

        if (wY >= 400) {
          openSimule();
        } else {
          closeSimule();
        }
      }

      function openSimule() {
        caller.style.bottom = '0px';
      }

      function closeSimule() {
        caller.style.bottom = '-1000px';
      }

      Frm_CadastrarLead.onsubmit = function() 
      {
        $.ajax
        (
          {
              url: "{{ route('lead.cadastrar') }}",
              method: 'post',
              data: $(this).serialize(),
              //params: $(this).serialize(),
              dataType: "json",
              beforeSend: function()
              {
                btn_simular.disabled = true;
              },
              success: function(response)
              {
                if ("message" in response)
                {
                  bootbox.alert(response.message);
                }

                if ('success' in response && response.success)
                {
                  txt_nome.value = '';
                  txt_telefone.value = '';
                  txt_email.value = '';
                }
              },
              error: function(error)
              {
                console.log(error);
              },
              complete: function()
              {
                btn_simular.disabled = false;
              }
          }
        );

        return false;
      }
      
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '3997014413650905'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=3997014413650905&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
    </script>
</body>

</html>