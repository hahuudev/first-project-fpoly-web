<?php
class Product extends Controller
{

    public function index()
    {
        $data = null;

        $data['props']['products'] = '';
        $data['content'] = 'page/detail';
        $this->render('layouts/defaultLayout', $data);
    }

    public function detail($id)
    {
        $this->ProductModel = $this->model('ProductModel');
        $product = $this->ProductModel->getProductById($id);

        $this->CommentModel = $this->model('CommentModel');
        $comments = $this->CommentModel->getCommentsByPrdId($id);

        $data['props']['product'] = $product;
        $data['props']['comments'] = $comments;

        $data['content'] = 'pages/UserPages/productDt';
        $this->render('layouts/defaultLayout', $data);
    }

    public function search()
    {
        $this->ProductModel = $this->model('ProductModel');
        $keyWord = $_GET['q'];
        $category = empty($_GET['category']) ? '' : $_GET['category'];
        $start = empty($_GET['start']) ? '' : $_GET['start'];
        $end = empty($_GET['end']) ? '' : $_GET['end'];

        $categories = $this->ProductModel->getFullCategories();
        $products = $this->ProductModel->searchProduct($keyWord, $category, $start, $end);


        $data['props']['categories'] = $categories;
        $data['props']['category'] = $category;
        $data['props']['start'] = $start;
        $data['props']['end'] = $end;
        $data['props']['products'] = $products;
        $data['props']['keyWord'] = $keyWord;

        $data['content'] = 'page/search';
        $this->render('layouts/defaultLayout', $data);
    }

    public function handleComment()
    {
        $request = new Request();
        $data = $request->getFields();

        if ($data['userId'] == '') {
            $hrefLogin = DOMAIN;
            header("Location: $hrefLogin/auth");
        };

        $this->CommentModel = $this->model('CommentModel');
        $this->CommentModel->addComment($data['userId'], $data['productId'], $data['content']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
