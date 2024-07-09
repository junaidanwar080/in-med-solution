<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
    <div class="hero_area">
        <!-- header section starts -->
        <?php include_once "navbar.php" ?>
        <!-- end header section -->
    </div>



    <div class="container  mt-5 mb-5">
        <h2>Upload Resell Detail</h2>
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                <option value="1">Surgical</option>
                <option value="2">Medicine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <?php include("footer.php") ?>
</body>
</html>
