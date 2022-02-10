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
    <!-- css -->
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
            border-color: #01ab8e;
            max-width: 300px;
            min-width: 200px;
            font-weight: 400;
        }
        .flex-wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            justify-content: space-between;
        }
        .img-overlay {
            position: absolute;
            top: 200px;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
        }
        .img-overlay:before {
            content: ' ';
            display: block;
            /* adjust 'height' to position overlay content vertically */
            height: 50%;
        }
        .btn-responsive {
            /* matches 'btn-md' */
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333; 
            border-radius: 30px;
            border: 3px solid;
        }
        .whatsapp-link {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            /*right*/left: 15px;
            /*background-color: #01ab8e;*/
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;

            z-index: 100;
        }

        .bi-whatsapp {
            margin-top: 16px;
        }

        @media (min-width:576px) {
        /* matches 'btn-xs' */
            .btn-responsive {
                /*padding: 1px 1px;*/
                font-size: 12px;
                line-height: 1.5;
                border-radius: 30px;
            }
        }
    </style>
    <title>Matrícula Online 2022 - SEMED</title> 
</head>
<body>
    <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5579996054792" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <div class="flex-wrapper">
        <div class="container-fluid pb-3">
            <div class="row mb-5">
                <picture class="px-0">
                    <source media="(min-width:576px)" srcset="img/Index3.png">
                    <source media="(min-width:360px)" srcset="img/Index3cel.png">
                    <img src="" class="img-fluid" alt="RESOLUCAO RUIM">
                </picture>
            </div>
            <div class="img-overlay">
                <div class="d-grid gap-2 col-6 text-center mx-auto">
                    <a class="btn btn-responsive" style="background-color: white; color:#01ab8e" href="formulario.php" role="button"><strong>PRÉ-MATRÍCULA</strong></a>
                    <a class="btn btn-responsive" style="background-color: white; color:#01ab8e" href="doc_page.php" role="button"><strong>DOCUMENTOS NECESSÁRIOS</strong></a>
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