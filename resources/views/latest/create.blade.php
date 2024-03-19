<div class="container">
    <h1>Create Product Feature</h1>
    <form method="POST" action="{{ route('featured.storefeatured') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
            <label>Add Image</label>
            <img src="" alt="" class="img-product" id="file-preview" />
            <input type="file" id="image" name="image" accept="image/*" onchange="showFile(event)">
        </div>



        <div class="form-group">
            <select class="form-control" id="category" name="category" required>
                <option value="featured">Featured</option>
                <option value="latest">Latest</option>
                <option value="rated">Rated</option>
                <option value="review">Review</option>
            </select>
        </div>


        <div class="form-group">
            <button type="submit" class="btn" style="background-color: #4139ad; color: #fff;">Create ProductFeatured</button>
        </div>
    </form>

</div>

<script>
    function showFile(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>