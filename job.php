<?php

include_once 'config/init.php';

$job = new Job;

$template = new Template('template/job-single.php');

$id = $_GET['id'] ?? null;

$template->job = $job->getJob($id);

echo $template;
