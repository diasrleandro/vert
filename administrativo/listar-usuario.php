<h1>Listar Registros</h1>
<?php
$sql = "SELECT * FROM site";

$res = $conn->query($sql);

$qtd = $res->num_rows;
print $res ;


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
    print "</table>";
} else {
print "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
?>


<script>
// other JavaScript code before ...
var js_variable_as_placeholder = <?= json_encode($res , JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);
// other JavaScript code and after ...
</script>