<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function index()
    {
        // Load the login view
        return view('login');
    }

    public function login()
    {
        $session = session();
        $userModel = new UserModel();

        // Get POST data (email and password)
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Fetch user from the database
        $user = $userModel->where('email', $email)->first();

        // Check if user exists and password matches
        if ($user && $user['password'] === $password) {
            // Set session data to maintain the login state
            $session->set([
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'is_logged_in' => true,
            ]);

            // Redirect to the dashboard
            return redirect()->to('/dashboard');
        } else {
            // Set an error message and reload the login view
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the session
        return redirect()->to('/auth'); // Redirect to login page
    }
}
