<?php include 'include/header.php';?>

    <h2 class="page-header">Edit Job Listing</h2>

    <form action="edit.php?job_id=<?php echo $job->id; ?>" method="post">
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" class="form-control">
                <option value="0">Choose a category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>" 
                    <?php echo ($category->id==$job->id ? "selected" : ""); ?>>
                    <?php echo $category->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="job-title">Job title</label>
            <input type="text" class="form-control" name="job-title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $job->description; ?>">
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group">
            <label for="contact-user">Contact User</label>
            <input type="text" class="form-control" name="contact-user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label for="contact-email">Contact Email</label>
            <input type="text" class="form-control" name="contact-email" value="<?php echo $job->contact_mail; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit" name="job-edit-submit">
        </div>
    </form>

<?php include 'include/footer.php';?>