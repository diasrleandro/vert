<h1>Editar Registro</h1>
<?php
    $sql = "SELECT * FROM registros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="post">
    <div class="mb-3">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id"  value="<?php print $row->id; ?>">

        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" value="<?php print $row->title; ?>" name="title">
    </div>
    <div class="mb-3">
        <label for="tag1" class="form-label">Tag 1</label>
        <input type="text" class="form-control" id="tag1" value="<?php print $row->tag1; ?>" name="tag1" >
    </div>
    <div class="mb-3">
        <label for="content1" class="form-label">Conteúdo 1</label>
        <textarea class="form-control" id="content1" name="content1"><?php print $row->content1; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="tag2" class="form-label">Tag 2</label>
        <input type="text" class="form-control" id="tag2" value="<?php print $row->tag2; ?>" name="tag2">
    </div>
    <div class="mb-3">
        <label for="content2" class="form-label">Conteúdo 2</label>
        <textarea class="form-control" id="content2" name="content2"><?php print $row->content2; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="display" class="form-label">Display</label>
        <input type="text" class="form-control" id="display" value="<?php print $row->display; ?>" name="display">
    </div>
    <div class="mb-3">
        <label for="template" class="form-label">Template</label>
        <input type="text" class="form-control" id="template" value="<?php print $row->template; ?>" name="template">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
