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

        // Create Job

        public function create($data){
            // Insert Query
            $this->db->query("INSERT INTO jobs (category_id, job_title, company, description, location, salary, contact_user, contact_email)
                                VALUES (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
            // Bind Data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':job_title', $data['job_title']);
            $this->db->bind(':company', $data['company']);
            $this->db->bind(':salary', $data['salary']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            // Executed

            if ($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }

    ?>