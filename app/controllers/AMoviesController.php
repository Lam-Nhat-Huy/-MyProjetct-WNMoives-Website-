<?php
class  AMoviesController extends Controller {
    protected $AMoviesModel;

    public function __construct()
    {
        $this->AMoviesModel = $this->model('AMoviesModel');
        checkLogin();
    }

    public function index()
    {
        $this->view('AdminMasterView', [
            'pages' => '/admin/AMoviesListView',
            'blocks' => '/amoives/list',
        ]);
    }

    public function add()
    {
        $this->view('AdminMasterView', [
            'pages' => '/admin/AMoviesListView',
            'blocks' => '/amoives/add',
        ]);
    }

    public function detail()
    {
        $this->view('AdminMasterView', [
            'pages' => '/admin/AMoviesListView',
            'blocks' => '/amoives/detail',
        ]);
    }

}