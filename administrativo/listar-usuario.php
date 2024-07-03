<?php
$sql = "SELECT * FROM site";
$res = $conn->query($sql);
$qtd = $res->num_rows;

// Inicializar o array JavaScript vazio
$javascriptArray = [];

if ($qtd > 0) {

    while ($row = $res->fetch_object()) {
        // Preenchendo a tabela em PHP
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->title . "</td>";
        print "<td>" . $row->tag1 . "</td>";
        print "<td>" . $row->content1 . "</td>";
        print "<td>" . $row->tag2 . "</td>";
        print "<td>" . $row->content2 . "</td>";
        print "<td>" . $row->display . "</td>";
        print "<td>" . $row->template . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."' ;\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) {
                    location.href='?page=salvar&acao=excluir&id=".$row->id."' ; }\" class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";


    }
}

?>