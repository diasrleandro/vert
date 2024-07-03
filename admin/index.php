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
    <nav class="navbar navbar-light bg-light menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                :: ADMINISTRATIVO - SITE VERT ::
            </a>
        </div>
    </nav>
    <div class="container">
        <form action="app/controller/UsuarioController.php" method="POST">
            <div class="row">
                <div class="col-md-2">
                    <label>id</label>
                    <input type="text" name="id" value="" autofocus class="form-control" require />
                </div>
                <div class="col-md-10">
                    <label>Title</label>
                    <input type="text" name="title" value="" class="form-control" require />
                </div>
                <div class="col-md-2">
                    <label>Tag</label>
                    <input type="text" name="tag1" value="" class="form-control" require />
                </div>
                <div class="col-md-10">
                    <label>Conteúdo Tag 1</label>
                    <input type="number" name="content1" value="" class="form-control" require />
                </div>

                <div class="col-md-2">
                    <label>Tag 2</label>
                    <input type="text" name="tag2" value="" class="form-control" require />
                </div>
                <div class="col-md-10">
                    <label>Conteúdo Tag 2</label>
                    <input type="number" name="content2" value="" class="form-control" require />
                </div>

                <div class="col-md-2">
                    <label>Display</label>
                    <input type="text" name="display" value="" class="form-control" require />
                </div>


                <div class="col-md-2">
                    <br>
                    <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Tag</th>
                        <th>Conteudo</th>
                        <th>Tag2</th>
                        <th>Conteudo2</th>
                        <th>Display</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariodao->read() as $usuario) : ?>
                    <tr>
                        <td><?= $usuario->getId() ?></td>
                        <td><?= $usuario->getTitle() ?></td>
                        <td><?= $usuario->getTag1() ?></td>
                        <td><?= $usuario->getContent1() ?></td>

                        <td><?= $usuario->getTag2() ?></td>
                        <td><?= $usuario->getContent2() ?></td>
                        <td><?= $usuario->getDisplay() ?></td>

                        <td class="text-center">
                            <button class="btn  btn-warning btn-sm" data-toggle="modal"
                                data-target="#editar><?= $usuario->getId() ?>">
                                Editar
                            </button>
                            <a href="app/controller/UsuarioController.php?del=<?= $usuario->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="editar><?= $usuario->getId() ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="app/controller/UsuarioController.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Title</label>
                                                <input type="text" name="nome" value="<?= $usuario->getTitle() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-5">
                                                <label>Tag 1 </label>
                                                <input type="text" name="nome" value="<?= $usuario->getTag1() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-7">
                                                <label>Conteudo 1</label>
                                                <input type="text" name="tag" value="<?= $usuario->getContent1() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-5">
                                                <label>Tag 2 </label>
                                                <input type="text" name="nome" value="<?= $usuario->getTag2() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-7">
                                                <label>Conteudo 2</label>
                                                <input type="text" name="tag" value="<?= $usuario->getContent2() ?>"
                                                    class="form-control" require />
                                            </div>
                                            <div class="col-md-7">
                                                <label>Display</label>
                                                <input type="text" name="tag" value="<?= $usuario->getDisplay() ?>"
                                                    class="form-control" require />
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <br>
                                                    <input type="hidden" name="id" value="<?= $usuario->getId() ?>" />
                                                    <button class="btn btn-primary" type="submit"
                                                        name="editar">Cadastrar</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>