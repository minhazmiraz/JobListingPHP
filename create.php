<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('template/job-create.php');

if (isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job-title'];
    $data['company'] = $_POST['company'];
    $data['description'] = $_POST['description'];
    $data['category'] = $_POST['category'];
    $data['salary'] = $_POST['salary'];
    $data['location'] = $_POST['location'];
    $data['contact_user'] = $_POST['contact-user'];
    $data['contact_email'] = $_POST['contact-email'];

    if($job->create($data)){
        redirect('index.php', 'Your job has been listed', 'success');
    } else{
        redirect('index.php', 'Something went wrong', 'error');
    }
}


$template->categories = $job->getCategories();

echo $template;
