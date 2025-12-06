<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class DbTest extends Controller
{
    public function index()
    {
        // Attempt to connect using current database config
        try {
            $db = \Config\Database::connect();

            // Run a simple query to ensure connection works
            $builder = $db->table('information_schema.tables');
            $result = $db->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'lms_abelgas'");

            if ($result && $result->getNumRows() > 0) {
                echo "Connected to MySQL and database 'lms_abelgas' exists.";
            } else {
                echo "Connected to MySQL but database 'lms_abelgas' NOT found.";
            }

        } catch (\Exception $e) {
            // Show error message (useful for local dev)
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
