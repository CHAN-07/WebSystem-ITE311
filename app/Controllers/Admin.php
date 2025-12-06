<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function dashboard()
    {
        $session = session();
        
        
        // Check if user is logged in and is an admin
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
        
        if ($session->get('role') !== 'admin') {
            $session->setFlashdata('error', 'Access denied.');
            return redirect()->to(site_url('login'));
        }
        
        // Load the admin dashboard view
        return view('admin/dashboard');
    }

    public function manageUsers()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
        if ($session->get('role') !== 'admin') {
            $session->setFlashdata('error', 'Access denied.');
            return redirect()->to(site_url('login'));
        }

        return view('admin/manage_users');
    }

    public function manageCourses()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
        if ($session->get('role') !== 'admin') {
            $session->setFlashdata('error', 'Access denied.');
            return redirect()->to(site_url('login'));
        }

        return view('admin/manage_courses');
    }

    public function settings()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
        if ($session->get('role') !== 'admin') {
            $session->setFlashdata('error', 'Access denied.');
            return redirect()->to(site_url('login'));
        }

        return view('admin/settings');
    }
}
