<form action="?page=salvar" method="post">
    <div class="mb-3">
        <input type="hidden" name="acao" value="cadastrar">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="tag1" class="form-label">Tag</label>
        <input type="text" class="form-control" id="tag1" name="tag1" required>
    </div>
    <div class="mb-3">
        <label for="content1" class="form-label">Content 1</label>
        <textarea class="form-control" id="content1" name="content1" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="content2" class="form-label">Content 2</label>
        <textarea class="form-control" id="content2" name="content2" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>