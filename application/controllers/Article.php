<?php
class Article extends CI_Controller{
    public function index(){
        // todo : get artile from model
        $data['articles'] = [
            [
                'title' => 'Foo',
                'content' => 'ini article tentang foo',
            ],
            [
                'title' => 'Bar',
                'content' => 'ini article tentang bar',
            ],
        ];

        if(count($data['articles']) > 0){
            $this->load->view('articles/list_article',$data);
        }else {
            $this->load->view('articles/empty_article');
        }
    }

    public function show($slug = null){
        /// get article from model
        $this->load->view('articles/show_article');
    }
}
?>