@vite(["resources/sass/app.scss", "resources/js/app.js"])
<div class="container">

    <h1>Edit Category</h1> <br>
    <form action="/book-edit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$row->id}}"/>
        @csrf
        <div>
            <label>ISBN</label>
            <input type="text" name="ISBN_code" class="form-control form-control-sm" value="{{ $row->ISBN_code}}"/>
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" class="form-control form-control-sm" value="{{ $row->author}}" />
        </div>

        <div>
            <label>Publisher</label>
            <input type="text" name="publisher" class="form-control form-control-sm" value="{{ $row->publisher}}" />
        </div>

        <div>
            <label>Category</label>
            <input type="text" name="category" class="form-control form-control-sm" value="{{ $row->category}}" />
        </div>

        <div>
            <label>Number Page</label>
            <input type="number" name="number_page" class="form-control form-control-sm" value="{{ $row->number_page}}" />
        </div>

        <div>
            <label>Cover Image</label>
            <input type="file" name="cover_image" class="form-control form-control-sm" value="{{ $row->cover_image}}" />
        </div>

        <div>
            <label>Cost</label>
            <input type="number" name="cost" class="form-control form-control-sm" value="{{ $row->cost}}" />
        </div>

        <div>
            <button class="btn btn-outline-primary">Update</button>
        </div>
    </form>
</div>
