<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('template/frontpage.php');

$category = $_GET['category'] ?? null;

if($category){
    $template->jobs = $job->getJobsByCategory($category);
    $template->title = "Jobs in " . $job->getCategory($category)->name;
} else{
    $template->jobs = $job->getAllJobs();
    $template->title = 'Latest Job';
}


$template->categories = $job->getCategories();

echo $template;
