<?php

namespace App\Controllers\Admin;

use System\Controller;

class LoginController extends Controller
{
    /**
    * Display Login Form
    *
    * @return mixed
    */
    public function index()
    {                  
        $loginModel = $this->load->model('Login');

        if ($loginModel->isLogged()) {
            return $this->url->redirectTo('/admin'); // if the user is already authenticated/logged-in, redirect them to the DashboardController.php (dashboard.php page)
        }

        $data['errors'] = $this->errors;

        return $this->view->render('admin/users/login', $data); //    $this->view    is a non-existing property which will be accessed using __get() Magic Method in the parent Controller.php Class, which, in turn, will call get() method in Application.php Class, which will call coreClasses() method which will call render() method in ViewFactory.php Class, which returns a View.php class object
    }

    /**
    * Submit Login form
    *
    * @return mixed
    */
    public function submit()
    {
        if ($this->isValid()) {
            $loginModel = $this->load->model('Login');

            $loggedInUser = $loginModel->user();

            if ($this->request->post('remember')) {
                // save login data in cookie
                $this->cookie->set('login', $loggedInUser->code);
            } else {
                // save login data in session
                $this->session->set('login', $loggedInUser->code);
            }

            $json = [];

            $json['success']  = 'Welcome Back ' . $loggedInUser->first_name;

            $json['redirect'] = $this->url->link('/admin');

            // echo '<pre>', var_dump($this->json($json)), '</pre>';
            // exit;

            return $this->json($json);
        } else {
            $json = [];

            $json['errors'] = implode('<br>', $this->errors);

            return $this->json($json);
        }
    }

    /**
    * Validate Login Form
    *
    * @return bool
    */
    private function isValid()
    {
        $email = $this->request->post('email');
        $password = $this->request->post('password');

        if (! $email) {
            $this->errors[] = 'Please Insert Email address';
        } elseif (! filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = 'Please Insert Valid Email';
        }

        if (! $password) {
            $this->errors[] = 'Please Insert Password';
        }

        if (! $this->errors) {
            $loginModel = $this->load->model('Login');

            if (! $loginModel->isValidLogin($email, $password)) {
                $this->errors[] = 'Invalid Login Data';
            }
        }

        return empty($this->errors);
    }
}