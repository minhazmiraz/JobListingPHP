<?php

include_once 'config/init.php';

$job = new Job;

$id = $_GET['id'] ?? null;

if(isset($_POST["del_id"])){
    $del_id = $_POST["del_id"];
    if ($job->delete($del_id)) {
        redirect('index.php', 'Your job has been deleted', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('template/job-single.php');

$template->job = $job->getJob($id);

echo $template;
