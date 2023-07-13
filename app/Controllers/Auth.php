<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;


class Auth extends BaseController
{
    public function landingPage()
    {
        // Display the landing_page view
        return view('landing_page');
    }
    public function login()
    {
        // Display the login form view
        return view('user_login');
    }

    public function register()
    {
        // Display the register form view
        return view('register');
    }

    public function processRegister()
    {
        // Validate the form data
        $validationRules = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|valid_email|is_unique[user.email]',
            'tel_no' => 'required',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]'
        ];

        if (!$this->validate($validationRules)) {
            // Validation failed, return to the registration form with errors
            return view('register_view', ['validation' => $this->validator]);
        }

        // Form data is valid, proceed with saving the user
        $userModel = new UserModel();

        $userData = [
        'fname' => $this->request->getPost('fname'),
        'lname' => $this->request->getPost('lname'),
        'email' => $this->request->getPost('email'),
        'tel_no' => $this->request->getPost('tel_no'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->insert($userData);

        // Registration successful, redirect to home page
        return redirect()->to('user_login')->with('success', 'Registration successful. You can now log in.');

    }

    public function processLogin()
    {
    $validationRules = [
        'email' => 'required|valid_email',
        'pass' => 'required'
    ];

    if (!$this->validate($validationRules)) {
        // Validation failed, return to the login form with errors
        return view('user_login', ['validation' => $this->validator]);
    }

    // Form data is valid, proceed with authentication
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('pass');

    $userModel = new UserModel();
    $user = $userModel->where('email', $email)->first();

    if ($user) {
        // User found, check password
        if (password_verify($password, $user['password'])) {
            // Authentication successful, redirect to the landing_page or home page
            return redirect()->to('landing_page')->with('success', 'Login successful!');
        }
    }

    // Authentication failed, return to the login form with an error message
    $errorMessage = 'Wrong username or password!';
    return view('user_login', ['validation' => $this->validator, 'error' => $errorMessage]);
    }


}
