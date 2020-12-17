<?php include 'include/header.php';?>

    <h2 class="page-header"><?php echo $job->job_title; ?> ( <?php echo $job->location; ?>)</h2>
    <small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
    <hr>
    <p class="lead"><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item">Company: <?php echo $job->company; ?></li>
        <li class="list-group-item">Salary: <?php echo $job->salary; ?></li>
        <li class="list-group-item">Contact Email: <?php echo $job->contact_mail; ?></li>
    </ul>
    <br>
    <br>
    <a href="index.php">Go Back</a>

<?php include 'include/footer.php';?>