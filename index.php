<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrícula Online 2022 -SEMED</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="matricula2022.php">
          <img id="logo" src="img/logo3 2.png" alt="Semed"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a style="font-size:large;border-style:solid; border-radius:20px; background-color: white; color:#04a486" class="nav-item nav-link" id="home-menu" href="http://localhost/SEMED_Matriculas-main/matricula2022/index.php">Home</a>  
          </div>
        </div>
      </nav>
    </div> 
  </header>
        <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/1907.i211.014..school stationery realistic composition.jpg" class="d-block w-100" alt="Semed">
              <a href="https://br.freepik.com/fotos-vetores-gratis/fundo">Fundo vetor criado por macrovector - br.freepik.com</a><br>
              <div class="carousel-caption d-md-block" style="right: 1.09023% !important; left: 65% !important;">
                <h5>Faça aqui sua Pré-Matrícula</h5>
                <a target="_blank" href="formulario.php" class="main-btn">Pré-Matrícula</a>
              </div>
            </div>
         </div>



      <!-- Sobre a Matrícula-->
      <div id="about-area">
        <div class="container">
            <div class="row">
              <div class="col-12"> <br><br><br>
                <h3  id="prematricula"  class="main-title">Sobre a Matrícula</h3>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="img/laptop.jpg " alt="Sobre a Matrícula">
              </div>
              <div class="col-md-6">
                <h3 class="about-title">Documentos necessários da Pré-Matrícula</h3>
                <ul id="about-list">
                    <i class="fas fa-check"></i> 
                    A matrícula dos alunos será efetivada mediante a apresentação dos documentos que se seguem: 
                    <p><li class="padded_li"><strong>I - do aluno:</strong><li></p>
                    <li><strong>A)</strong>	Duas fotos 3x4;</l1>
                    <li><strong>B)</strong>	Cópia da Certidão de Nascimento;</li>
                    <li><strong>C)</strong>	Cópia do RG;</l1>
                    <li><strong>D)</strong>	cópia do CPF;</l1>
                    <li><strong>E)</strong>	Cópia do cartão de vacinação atualizada para TODOS os alunos;</l1>
                    <li><strong>F)</strong>	Comprovante do Número de Identificação Social (NIS);</l1>
                    <li><strong>G)</strong>	Cópia do cartão do Sistema Único de Saúde (SUS);</l1>
                    <li><strong>H)</strong>	Comprovante de escolaridade anterior, em caso de prosseguimento de estudos, Transferência ou Declaração de Escolaridade.</l1>
                    <p style="text-align: justify"><strong>II - dos pais ou responsável:</strong></p>
                    <li><strong>A)</strong>	Cópia do RG;</l1>
                    <li><strong>B)</strong>	Cópia do CPF;</l1>
                    <li><strong>C)</strong>	Comprovante do NIS, quando for o caso;</l1>
                    <li><strong>D)</strong>	Comprovante de residência no nome dos pais ou responsável legal (água, luz, telefone, ou contrato de locação), atualizado ou no máximo de 03 (três)meses;</l1>
                    <li><strong>E)</strong>	Telefone para contato, preferencialmente celular, e e-mail dos pais ou responsável legal;</l1>
                    <li><strong>F)</strong>	Termo de Guarda, definitivo ou provisório, declaração de responsabilidade ou declaração parental (são considerados responsáveis, para fins de matrícula, os avós e tios biológicos).</l1>
                    <p style="text-align: justify"><strong>Parágrafo único:</strong> As cópias dos documentos deverão ser entregues mediante apresentação dos originais, quando for considerada segura a tramitação destes documentos impressos.</l1><p> 
                </ul>
               </ul>
              </div>
            </div>
          </div>
      </div> 
      <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 id="contato" class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (79) 2106-7457 / (79) 2106-7453</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 14:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">E-mail: </span>matriculas@semedsocorro.com.br</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua Padre Manoel Gomes S/N, SN
                Centro - Nossa Senhora do Socorro - SE CEP 49160-000</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Deixe aqui uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="" method="POST">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input class="botao" type="submit" class="enviar"  value="Enviar" />
              </form>
            </div>
          </div>
      </div>
    </div><br>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12"><br>
              <p> <a href="#"></a> Desenvolvido por SEMED_TIC</a> &copy; 2022</p>
            </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Scripts do projeto -->
  <script src="js/scripts.js"></script>
</body>
</html>



