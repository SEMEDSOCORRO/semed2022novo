<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import de Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    
    <style>
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #01ab8e;
        }
        .footer {
            padding: 1rem 0;
            margin-top: auto;
        }
        .MenuBott {
            padding:16px;
            display:flex;
            width:100%;
        }
        .btn {
            max-width: 300px;
            min-width: 200px;
            border-radius: 20px;
        }
        .flex-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
    <title>Responsivo</title> 
</head>
<body>
    <div class="flex-wrapper">
        <div class="container-fluid pb-3" style="background-color: #01ab8e;">
            <div class="row m-0px">
                <picture class="px-0">
                    <source media="(min-width:576px)" srcset="img/docs_bg_verde.png">
                    <source media="(min-width:360px)" srcset="img/m_docs_bg_verde.png">
                    <img src="" class="img-fluid" alt="Resolucao muito pequena">
                  </picture>
            </div>
            <div class="container">
                <div class="grid gap-2 col-5 text-center mx-auto">
                    <a class="btn" style="background-color: white; color:#01ab8e" href="formulario.php" role="button">PRÉ-MATRÍCULA</a>
                </div>
            </div>
        </div>
    
        <footer class="footer" style="background-color: #01ab8e">
            <div class="container">
                <ul class="nav justify-content-center border-bottom text-center pt-3 pb-3 mb-3">
                    <li class="nav-item" style="color:white;">Rua Padre Manoel Gomes S/N, Centro - Nossa Senhora do Socorro - SE /Telefone <i class="bi bi-whatsapp"></i> : +55 (79) 99605-4792</li>
                </ul>
                <p class="text-center" style="color:white;">Desenvolvido por SEMED_NTIC © 2022</p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
</body>
</html>

<!-- https://www.youtube.com/watch?v=VCVxtpjgO5Q 

    @media (min-width: 400px) {
    .element {
        background: #cccccc;
    }
}

@media (min-width: 500px) {
    .element {
        background: #888888;
    }
}

@media (min-width: 600px) {
    .element {
        background: #222222;
    }
}

-->