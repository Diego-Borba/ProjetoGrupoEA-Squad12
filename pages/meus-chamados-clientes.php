<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        include("style.php");
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b4d856d404.js" crossorigin="anonymous"></script>

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    

    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style=" background: rgb(0, 49, 88);">
            <a class="navbar-brand mx-5"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end menu" id="navbarNavAltMarkup">
                <ul>
                    <li><a class="nav-item nav-link active text-white" aria-current="page" href="">Home</a> </li>
                    <li><a class="nav-item nav-link" style="color:rgb(0, 49, 88); " href="">Meus Chamados</a> </li>
                    <li><a class="nav-item nav-link text-white" href="">Encerrar sessão</a> </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
       <div class="container"> 
            <div class="row w-100 ">
                <div class="col-6 col-md-5">
                    <h1>Bem-vindo Usuário!</h1>
                </div>
            </div>
            <div class="container-fluid table-responsive">
                 <table id="example" class="table table-bordered border-dark table-hover" id="table-resp" style="width:100%">
                     <thead class="tableHeader">
                    <tr>
                        <th class="text-white">ID</th>
                        <th class="text-white">Tipo de Chamado</th>
                        <th class="text-white">Solicitante</th>
                        <th class="text-white">Data e hora de Abertura</th>
                        <th class="text-white">Descrição</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>65489</td>
                            <td>Geral</td>
                            <td>1221</td>
                            <td>2022-09-30</td>
                            <td>Lâmpada com mau funcionamento</td>
                        </tr>
                         <tr>
                            <td>65489</td>
                            <td>Equipamentos</td>
                            <td>8594</td>
                            <td>2022-10-14</td>
                            <td>Teclado quebrado</td>
                        </tr>
                        <tr>
                            <td>65489</td>
                            <td>Sistema</td>
                            <td>5347</td>
                            <td>2022-10-08</td>
                            <td>Sistema não está funcionando corretamente!</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/app.js"></script>

    </main>
</body>
</html>