<?php

include_once 'config/init.php';

$job = new Job;

$job_id = $_GET['job_id'] ?? null;

if (isset($_POST['job-edit-submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job-title'];
    $data['company'] = $_POST['company'];
    $data['description'] = $_POST['description'];
    $data['category'] = $_POST['category'];
    $data['salary'] = $_POST['salary'];
    $data['location'] = $_POST['location'];
    $data['contact_user'] = $_POST['contact-user'];
    $data['contact_email'] = $_POST['contact-email'];
    
    if ($job->update($job_id, $data)) {
        redirect('job.php?id=' . $job_id, 'Your job has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('template/job-edit.php');

$template->job = $job->getJob($job_id);

$template->categories = $job->getCategories();

echo $template;
