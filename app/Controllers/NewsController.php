<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;


class NewsController extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];
        return view('news',$data);

    }
    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);
        // $data['title'] = $data['news']['title'];
        // $data['body'] = $data['news']['body'];

        return view('single',$data);
    }
    public function addNewsForm(){
       return view('addnews');
    }
    public function addNews(){
        $model = new NewsModel();
        $data = [
            'title'=>$this->request->getVar('title'),
            'slug'=>$this->request->getVar('slug'),
            'body'=>$this->request->getVar('body')
        ];
        $model->save($data);
        return redirect()->to('/allnews');
    }
    public function allNews(){
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
        ];
        return view('allnews',$data);
    }

    public function deleteNews($id=null){
        $model = new NewsModel();
        if ($id === false) {
            return redirect('/allnews');
        }

        $model->where(['id' => $id])->delete();
        return redirect()->to('/allnews');
    }
}
