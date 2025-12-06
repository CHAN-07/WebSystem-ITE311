<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AnnouncementModel;
use Psr\Log\LoggerInterface;

class Announcements extends Controller
{
    public function index()
    {
        $session = session();
        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
        // Prepare data for the view
        $data = [
            'name' => $session->get('name'),
            'email' => $session->get('email'),
            'announcements' => [],
            'errorMessage' => null,
        ];

        try {
            $model = new AnnouncementModel();
            $data['announcements'] = $model->findAll();
        } catch (\Throwable $e) {
            // Log the error for debugging but show a friendly message to the user
            log_message('error', 'Announcements load failed: ' . $e->getMessage());
            $data['errorMessage'] = 'Unable to load announcements at this time.';
        }

        return view('announcements', $data);
    }
}