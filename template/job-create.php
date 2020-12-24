<?php include 'include/header.php';?>

    <h2 class="page-header">Create Job Listing</h2>

    <form action="create.php" method="post">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="0">Choose a category</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job-title">Job title</label>
            <input type="text" class="form-control" name="job-title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div class="form-group">
            <label for="contact-user">Contact User</label>
            <input type="text" class="form-control" name="contact-user">
        </div>
        <div class="form-group">
            <label for="contact-email">Contact Email</label>
            <input type="text" class="form-control" name="contact-email">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit" name="submit">
        </div>
    </form>

<?php include 'include/footer.php';?>