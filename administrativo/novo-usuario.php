<form action="?page=salvar" method="post">
    <div class="mb-3">
        <input type="hidden" name="acao" value="cadastrar">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="tag1" class="form-label">Tag 1</label>
        <input type="text" class="form-control" id="tag1" name="tag1" required>
    </div>
    <div class="mb-3">
        <label for="content1" class="form-label">Content 1</label>
        <textarea class="form-control" id="content1" name="content1" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="tag2" class="form-label">Tag 2</label>
        <input type="text" class="form-control" id="tag2" name="tag2" required>
    </div>
    <div class="mb-3">
        <label for="content2" class="form-label">Content 2</label>
        <textarea class="form-control" id="content2" name="content2" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="display" class="form-label">Display</label>
        <select class="form-select" id="display" name="display" required>
            <option value="1">Display 1</option>
            <option value="2">Display 2</option>
            <option value="3">Display 3</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="template" class="form-label">Template</label>
        <select class="form-select" id="template" name="template" required>
            <option value="template1">Template 1</option>
            <option value="template2">Template 2</option>
            <option value="template3">Template 3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
