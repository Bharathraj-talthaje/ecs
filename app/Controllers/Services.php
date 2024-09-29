<?php namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {  
        $data=[
            'title'=>'Best website design company in mangalore - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Grow your business with our top-notch web development services in kasaragod & mangalore. From custom website design to comprehensive digital solutions, we offer expertise and innovation to boost your online presence.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/index');
        echo view('footer');
    } 

    public function web_development_service()
    {  
        $data=[
            'title'=>'Web Development Services - Kasaragod, Mangalore',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of Web development services in kasaragod & mangalore, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/web_development_service');
        echo view('footer');
    } 

    public function mobile_app_development()
    {  
        $data=[
            'title'=>'Mobile App Development Services- Kasaragod, Mangalore - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of mobile app development services in kasaragod & mangalore, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/mobile_app_development');
        echo view('footer');
    } 

    public function best_graphic_design_services()
    {  
        $data=[
            'title'=>'Best graphic Design Services - Kasaragod, Mangalore',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of graphic designing services in kasaragod & mangalore, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/best_graphic_design_services');
        echo view('footer');
    } 


    public function domain_and_web_hosting_services()
    {  
        $data=[
            'title'=>'Domain and Web Hosting Services - Kasaragod, Mangalore',
            'author'=>'Bharathraj Talthaje',
            'description'=>'We provide reliable and affordable domain and web hosting services tailored to meet the needs of individuals, startups, and growing businesses.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/domain_and_web_hosting_services');
        echo view('footer');
    } 

    public function business_emails()
    {  
        $data=[
            'title'=>'Professional Email or Business Emails - Kasaragod, Mangalore',
            'author'=>'Bharathraj Talthaje',
            'description'=>'We provide secure and reliable email hosting services that allow you to use your domain name for professional email communication.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/business_emails');
        echo view('footer');
    } 


    public function digital_marketing_agency()
    {  
        $data=[
            'title'=>'Digital Marketing Services- Kasaragod, Mangalore',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Discover expert digital marketing services at ECS. We offer SEO, social media marketing, Google Ads, and more to help your business grow and engage with the right audience',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, Digital Marketing Services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('services/digital_marketing');
        echo view('footer');
    } 
    
    

    
    


}
