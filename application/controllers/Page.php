<?php
    class Page extends CI_Controller{
        public function index(){
            $data['meta'] = [
                'title' => 'Berita Coding',
            ];

            $this->load->view('home',$data);
        }
        public function about(){
            $data['meta'] = [
                'title' => 'About Berita Coding',
            ];
            $this->load->view('about',$data);
        }
        public function contact(){  
            $data['meta'] = [
                'title' => 'About us',
            ];
            if($this->input->method() === 'post'){
                print_r($this->input->post());
            }
            $this->load->view('contact',$data);
        }
    }
?>