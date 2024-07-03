<?php
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD Simples PHP</title>
    <style>
    .menu,
    thead {
        background-color: #bbb !important;
    }

    .row {
        padding: 10px;
    }
    </style>
</head>

<body>

    <?php foreach ($usuariodao->read() as $usuario) : ?>
    if(){

    }
    <!-- <tr>
    var diferenciais = [{
            h2: "O que podemos fazer pela sua empresa hoje?",
            p: "A Vert Consulting oferece oferece produtos aos nossos clientes com excelência e sólidos subsídios técnicos de suporte aos processos decisórios para que possam dedicar-se 			exclusivamente ao desenvolvimento de sua empresa.",
            display: "block"
        },
        {
            h2: "Capacitação dos recursos internos dos clientes nas áreas financeira, fiscal e trabalhista",
            p: "Etiam felis elit, mollis posuere accumsan ac, dignissim a ligula. Nam ullamcorper ornare tortor sed dapibus. Aliquam ultrices vestibulum sodales. Aenean efficitur massa vel tellus dapibus pellentesque.",
            display: "block"
        },
        {
            h2: "Centro de gerenciamento de solicitações garantindo dessa forma o atendimento de todas",
            p: "A Vert Consulting oferece oferece produtos aos nossos clientes com excelência e sólidos subsídios técnicos de suporte aos processos decisórios para que possam dedicar-se 			exclusivamente ao desenvolvimento de sua empresa.",
            display: "block"
        },
        {
            h2: "Alto nível de criticidade nas análises fiscais e contábeis",
            p: "Etiam felis elit, mollis posuere accumsan ac, dignissim a ligula. Nam ullamcorper ornare tortor sed dapibus. Aliquam ultrices vestibulum sodales. Aenean efficitur massa vel tellus dapibus pellentesque.",
            display: "block"
        },
    ];


    <
    td > <?= $usuario->getId() ?> < /td> <
    td > <?= $usuario->getTitle() ?> < /td> <
    td > <?= $usuario->getTag1() ?> < /td> <
    td > <?= $usuario->getContent1() ?> < /td>

        <
        td > <?= $usuario->getTag2() ?> < /td> <
    td > <?= $usuario->getContent2() ?> < /td> <
    td > <?= $usuario->getDisplay() ?> < /td>

        <
        td class = "text-center" >
        <
        button class = "btn  btn-warning btn-sm"
    data - toggle = "modal"
    data - target = "#editar><?= $usuario->getId() ?>" >
        Editar <
        /button> <
    a href = "app/controller/UsuarioController.php?del=<?= $usuario->getId() ?>" >
        <
        button class = "btn  btn-danger btn-sm"
    type = "button" > Excluir < /button> < /
        a > <
        /td> < /
        tr > -- >

        <?php endforeach ?> <
        /tbody> < /
        table > <
        /div>

        <
        /div> <
    script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin = "anonymous" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>