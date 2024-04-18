<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if(!is_file(APPPATH . 'views/pages/'.$page.'.php')){    //404홈페이지 들어가기
            throw new PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page);    
        return view('templates/header', $data)
            . view('pages/'.$page)
            . view('templates/footer.php');
    }
}
