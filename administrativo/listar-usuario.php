<?php
$sql = "SELECT * FROM site";
$res = $conn->query($sql);
$qtd = $res->num_rows;

// Inicializar o array JavaScript vazio
$javascriptArray = [];

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Title</th>";
    print "<th>Tag 1</th>";
    print "<th>Content 1</th>";
    print "<th>Tag 2</th>";
    print "<th>Content 2</th>";
    print "<th>Display</th>";
    print "<th>Template</th>";
    print "<th>Ações</th>";
    print "</tr>";

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

        // Adicionando ao array JavaScript
        $javascriptArray[] = [
            'id' => $row->id,
            'title' => $row->title,
            'tag1' => $row->tag1,
            'content1' => $row->content1,
            'tag2' => $row->tag2,
            'content2' => $row->content2,
            'display' => $row->display,
            'template' => $row->template,
        ];
    }

    print "</table>";

    // Incluir o script JavaScript dentro do bloco PHP após o preenchimento do array
    echo "<script>";
    echo "var dataFromPHP = " . json_encode($javascriptArray) . ";";
    echo "console.log(dataFromPHP);"; // Exemplo de como você pode usar os dados em JavaScript
    echo "</script>";

} else {
    print "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
?>