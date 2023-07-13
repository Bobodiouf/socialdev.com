<?php
class Controllers
{

    public function view($viewName, $data = [])
    {

        $viewPath = 'views/' . $viewName . '.php';
        if (file_exists($viewPath)) {
            extract($data);

            isset($data['title']) ?? $title = $data['title'];
            isset($data['script.js']) ?? $script = $data['script.js'];
            isset($data['Chart.min.js']) ?? $Chart = $data['Chart.min.js'];
            isset($data['dashbaordChart.js']) ?? $dashbaordChart = $data['dashbaordChart.js'];


            require_once $viewPath;
            die();
        } else {
            echo 'La vue ' . $viewName . ' n\'existe pas.';
        }
    }
    public function index()
    {
        $data = [
            'title' => 'Accueil',
        ];

        $this->view('home.view', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Connexion',
        ];

        $this->view('login.view', $data);
    }
    public function logup()
    {
        $data = [
            'title' => 'Inscription',
        ];

        $this->view('logup.view', $data);
    }
    public function logout()
    {
        $data = [
            'title' => 'Déconnexion',
        ];

        $this->view('logout.view', $data);
    }
    public function forgot_pwd()
    {
        $data = [
            'title' => 'Mot de passe oublier',
        ];

        $this->view('forgot_pwd.view', $data);
    }
    public function dashbord()
    {
        $data = [
            'title' => 'Tableau de board',
            'sidebarStyle' => '<link rel="stylesheet" href="config/bootstrap/css/sidebarStyle.css">',
            'script.js' => '<script type="text/javascript" src="config/bootstrap/jquery/script.js"></script>',
            'Chart.min.js' => '<script type="text/javascript" src="config/bootstrap/jquery/Chart.min.js"></script>',
            'dashbaordChart.js' => '<script type="text/javascript" src="config/bootstrap/jquery/dashbaordChart.js"></script>'
        ];

        $this->view('dashbord.view', $data);
    }
}
