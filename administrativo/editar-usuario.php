<h1>Editar Registro</h1>
<?php
$sql = "SELECT * FROM site WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>


<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <br />
    <div class="row">
        <div class="col-6">
            <input type="hidden" class="form-control" id="tag1" value="<?php print $row->tag1; ?>" name="tag1">
            <img src="image/<?php print $row->tag1; ?>.png" height="300px" border="1">
        </div>
    </div>

    <div class=" row mb-4">
        <br /> <br /><br />

        <div class="col-6">
            <div class="mb-3">
                <label for=" content1" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" value="<?php print $row->title; ?>" name="title">
            </div>
        </div>

        <div class="col-6 mb-3"">
            <div class=" mb-3">
            <label for=" content1" class="form-label">SubTítulo</label>
            <input class="form-control" id="content1" name="content1" value="<?php print $row->content1;  ?>">
        </div>
    </div>


    <div class=" col-12 mb-3">
        <div class="mb-3">
            <label for="content2" class="form-label">Conteúdo</label>
            <textarea class="content" id="content2" rows="5" name="content2"><?php print $row->content2; ?></textarea>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mb-3">Salvar</button>




    </div>
</form>