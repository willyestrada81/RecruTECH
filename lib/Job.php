<?php

    class Job{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getAllJobs(){
            $this->db->query("SELECT jobs.*, categories.name AS cname
                FROM jobs
                INNER JOIN categories
                ON jobs.category_id = categories.id
                ORDER BY post_date DESC
                ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Categories

        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }
        // Get category
        public function getCategory($categoryId){
            $this->db->query("SELECT * FROM categories
                            WHERE id = :category_id
                            ");
            
            $this->db->bind(':category_id', $categoryId);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }

        // Get jobs by the selected category

        public function getByCategory($categoryId){
            $this->db->query("SELECT jobs.*, categories.name AS cname
                FROM jobs
                INNER JOIN categories
                ON jobs.category_id = categories.id
                WHERE jobs.category_id = $categoryId
                ORDER BY post_date DESC
                ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        // Get single job by id
        public function getJob($job_id){
            $this->db->query("SELECT * FROM jobs
                            WHERE id = :id
                            ");
            
            $this->db->bind(':id', $job_id);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }

    }

    ?>