<?php
    function redirect($page = FALSE, $message = NULL, $message_type = NULL){
        if(is_string($page)){
            $location = $page;
        } else{
            $location = $_SESSION['SCRIPT_NAME'];
        }

        if($message != NULL){
            $_SESSION['message'] = $message;
        }

        if($message_type != NULL){
            $_SESSION['message_type'] = $message_type;
        }

        header("Location: " . $location);
        exit;
    }

    function displayMessage(){
        if(isset($_SESSION['message'])){
            $message = $_SESSION['message'];
            
            if(isset($_SESSION['message_type'])){
                $message_type = $_SESSION['message_type'];

                if($message_type == 'success'){
                    echo '<div class="alert alert-success">' . $message . '</div>';
                } else{
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                }
            }

            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        } else{
            echo '';
        }
    }