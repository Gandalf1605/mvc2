<?php
include_once ROOT . '/models/Model_News.php';
include_once ROOT . '/controllers/Controller.php';

class NewsController extends Controller
{
    private $newsModel;

    public function __construct()
    {
        parent::__construct();
        $this->newsModel = new Model_News();
    }

    public function actionIndex($category = NULL)
    {
        try {



            $this->view->news = $this->newsModel->getNewsList();
            $this->view->some_data = 'Hello world';



            $this->view->generate('template_view.php', 'news/index.php');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return true;
    }

    public function actionDetail($id)
    {

        //$result = Model_News::getNewsById($id);
        // require_once(ROOT . '/views/news/post.php');
        return true;
    }

}

