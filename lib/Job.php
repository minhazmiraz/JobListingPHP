<?php

class Job extends Database{
    private $db;

    public function __construct(){
        $this->db = new Database;        
    }

    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                    FROM jobs 
                    INNER JOIN categories 
                    ON jobs.category_id = categories.id
                    ORDER BY post_date DESC");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategories(){
        $this->db->query("SELECT * FROM categories ORDER BY name ASC");

        $results = $this->db->resultSet();

        return $results;
    }

    public function getJobsByCategory($category_id){
        $this->db->query("SELECT jobs.*, categories.name AS cname 
                    FROM jobs 
                    INNER JOIN categories 
                    ON jobs.category_id = categories.id
                    WHERE jobs.category_id = :category_id
                    ORDER BY post_date DESC");
        
        $this->db->bind(":category_id", $category_id);

        $results = $this->db->resultSet();

        return $results;
    }

    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        
        $this->db->bind(":category_id", $category_id);

        $results = $this->db->single();

        return $results;
    }

    public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id = :id");

        $this->db->bind(":id", $id);

        $results = $this->db->single();

        return $results;
    }
}
