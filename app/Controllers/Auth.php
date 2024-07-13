<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->MUser = new UserModel();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        $data = [
            'title' => 'Sign In',
            'footer' => false
        ];
        return view('auth/signin', $data);
    }

    public function signup()
    {
        $data = [
            'title' => 'Sign Up',
            'footer' => false
        ];
        return view('auth/signup', $data);
    }

    public function signout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }

    public function signin()
    {
        $data = $this->request->getPost();

        // Set rules before validation
        $this->validation->setRules([
            'login' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username/email cannot be empty.',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Password cannot be empty.',
                ],
            ],
        ]);

        // Run the validation
        $isValid = $this->validation->run($data);
        $errors = $this->validation->getErrors();

        if (!$isValid) {
            return $this->response->setJSON($errors)->setStatusCode(400);
        } else {
            // Get user by email or username
            $user = $this->MUser->where('email', $data['login'])->orWhere('username', $data['login'])->first();

            if (!$user) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Username/email not found.']);
            }

            // Verify the password
            if (!password_verify($data['password'], $user['password'])) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Incorrect password.']);
            }

            // Set user session data
            $this->session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'fullname' => $user['fullname'],
                'user_image' => $user['user_image'],
                'created_at' => $user['date_created'],
                'logged_in' => true,
            ]);

            $referer = $this->request->getServer('HTTP_REFERER');
            if (strpos($referer, 'sign-in') === false && strpos($referer, 'sign-up') === false) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Login successful.', 'redirect' => $referer]);
            } else {
                $defaultPage = base_url();
                return $this->response->setJSON(['status' => 'success', 'message' => 'Login successful.', 'redirect' => $defaultPage]);
            }
        }
    }

    public function register()
    {
        $data = $this->request->getPost();

        // Set rules before validation
        $this->validation->setRules([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email cannot be empty.',
                    'valid_email' => 'Enter a valid email address.',
                    'is_unique' => 'Email already taken.',
                ],
            ],
            'fullname' => [
                'label' => 'Full Name',
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Full name cannot be empty.',
                    'min_length' => 'Full name must be at least 3 characters.',
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|min_length[3]|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username cannot be empty.',
                    'min_length' => 'Username must be at least 3 characters.',
                    'is_unique' => 'Username already taken.',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password cannot be empty.',
                    'min_length' => 'Password must be at least 6 characters.',
                ],
            ],
            'password2' => [
                'label' => 'Password Confirmation',
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Passwords do not match.',
                ],
            ],
        ]);

        // Run the validation
        $isValid = $this->validation->run($data);
        $errors = $this->validation->getErrors();

        if (!$isValid) {
            return $this->response->setJSON($errors)->setStatusCode(400);
        } else {

            // Hash the password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Prepare data to save
            $userData = [
                'email' => $data['email'],
                'username' => $data['username'],
                'fullname' => $data['fullname'],
                'password' => $data['password'],
                'date_created' => time()
            ];

            // Save user data to database
            if ($this->MUser->insert($userData)) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Registration success. Please sign in.']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Registration failed, please try again']);
            }
        }
    }
}
