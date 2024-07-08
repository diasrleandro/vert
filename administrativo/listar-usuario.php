<?php
$sql = "SELECT * FROM site where template = 1 order by tag1";
$res = $conn->query($sql);
$qtd = $res->num_rows;

// Inicializar o array JavaScript vazio
$javascriptArray = [];

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Title</th>";
    print "<th>Content 1</th>";

    print "<th>Content 2</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        // Preenchendo a tabela em PHP
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->title . "</td>";
        print "<td>" . $row->content1 . "</td>";
        print "<td>" . $row->content2 . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "' ;\" class='btn btn-success'>Editar</button>
            </td>";
        print "</tr>";
        //                 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id=".$row->id."' ; }\" class='btn btn-danger'>Excluir</button>

    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
