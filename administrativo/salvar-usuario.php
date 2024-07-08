<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $title = $_POST["title"];
        $tag1 = $_POST["tag1"];
        $content1 = $_POST["content1"];
        $content2 = $_POST["content2"];


        // Escapar as variáveis para prevenir injeção de SQL
        $title = $conn->real_escape_string($title);
        $tag1 = $conn->real_escape_string($tag1);
        $content1 = $conn->real_escape_string($content1);

        $content2 = $conn->real_escape_string($content2);
        $display = $conn->real_escape_string($display);
        $template = $conn->real_escape_string($template);

        $sql = "INSERT INTO site (title, tag1, content1, content2, template) VALUES ('$title', '$tag1', '$content1', '$content2', 1)";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=cadastrar';</script>";
        }
        break;

    case 'editar':
        $id = $_REQUEST["id"];
        $title = $_POST["title"];
        $tag1 = $_POST["tag1"];
        $content1 = $_POST["content1"];
        $content2 = $_POST["content2"];


        // Escapar as variáveis para prevenir injeção de SQL
        $title = $conn->real_escape_string($title);
        $tag1 = $conn->real_escape_string($tag1);
        $content1 = $conn->real_escape_string($content1);
        $content2 = $conn->real_escape_string($content2);


        $sql = "UPDATE site SET
                        title='$title',
                        tag1='$tag1',
                        content1='$content1',
                        content2='$content2'
                    WHERE id=$id";

        $res = $conn->query($sql);
        if ($res == true) {
            //print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM site WHERE id=$id";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Excluído com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}
