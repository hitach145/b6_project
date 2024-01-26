@vite(["resources/sass/app.scss", "resources/js/app.js"])
<div class="container">
    <h1>Add New Book</h1> <br>
    <form action="/book-save" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>ISBN </label>
            <input type="text" name="ISBN_code" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Publisher</label>
            <input type="text" name="publisher" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Number Page</label>
            <input type="number" name="number_page" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Category</label>
            <input type="text" name="category" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Cover Image</label>
            <input type="file" name="cover_image" class="form-control form-control-sm" />
        </div>

        <div>
            <label>Cost</label>
            <input type="number" name="cost" class="form-control form-control-sm" />
        </div>

        <div>
            <button class="btn btn-outline-primary">Save</button>
        </div>
    </form>
</div>
