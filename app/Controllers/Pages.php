<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index($slug='',$location='mangalore')
    {  

        $page_data=page_content($slug,$location);

        if ($page_data!=null) {
            $data=[
                'title'=>$page_data['meta_title'].' - ECS',
                'author'=>'Bharathraj Talthaje',
                'description'=>$page_data['meta_description'],
                'ogimage'=>$page_data['og_image'],
                'og_type'=>'website', 
                'keywords'=>$page_data['meta_keywords'],
                'page_data'=>$page_data
            ];

            echo view('header',$data);
            echo view('page');
            echo view('footer');
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
    }
} 