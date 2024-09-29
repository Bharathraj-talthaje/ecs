<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
  
        $data=[
            'title'=>'Best Web Design & Web Development Company  | Kasaragod, Mangalore - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services in kasaragod and mangalore, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('home');
        echo view('footer');
    }

    public function about_us()
    {
  
        $data=[
            'title'=>'About - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('about_us');
        echo view('footer');
    } 


     
    public function our_works()
    {
  
        $data=[
            'title'=>'Our Works - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Our la',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('our_works');
        echo view('footer');
    }
    
    public function payments()
    {
        $data=[
            'title'=>'Contact Us - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('contact_us');
        echo view('footer');
    }

    public function contact_us()
    {
  
        $data=[
            'title'=>'Contact Us - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('contact_us');
        echo view('footer');
    }  
    
    public function send_email(){
        $to = 'ecsmangalore@gmail.com' . "\r\n";
        $subject = 'Get a Quote Request From ECS';
        $name = trim(strip_tags($_POST['complete_Name']));
        $email = trim(strip_tags($_POST['email_Address'])); 
        $phone = trim(strip_tags($_POST['phone_No'])); 
        $messages = trim(strip_tags($_POST['messages'])); 
        $language = 'english'; 
        $headers='';
        $headers .= "Reply-To: $name <$email>\r\n"; 
        $headers .= "Return-Path: The Sender <$email>\r\n"; 
        $headers .= "From: $email" ."\r\n" .
        $headers .= "ECS Get A Quote\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;


        $message = "************************************************** \r\n" .
                     "Request from ECS Get a Quote Form!  \r\n" .
                     "************************************************** \r\n" .    
            
                    "Name: " . $name . "\r\n" .
                    "E-mail: " . $email . "\r\n" .
                    "Phone: " . $phone . "\r\n" .
                    "Message: " . $messages . "\r\n"; 


        $mail = mail($to, $subject, $message, $headers); 
        if ($mail) {
            return redirect()->to(base_url('thank-you'));
        }else{
            return redirect()->to(base_url('contact-us'));
        }
    }

    
    public function thank_you()
    {
  
        $data=[
            'title'=>'Thank you for your enquiry - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('thank_you');
        echo view('footer');
    }  

    public function sitemap()
    {
  
        $data=[
            'title'=>'Sitemap - ECS',
            'author'=>'Bharathraj Talthaje',
            'description'=>'Leading provider of comprehensive IT services, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.',
            'ogimage'=>base_url('og_icon.webp'),
            'og_type'=>'website', 
            'keywords'=>'Web design, web development, email services, web development company in mangalore, web development company in kasaragod'
        ];

        echo view('header',$data);
        echo view('sitemap');
        echo view('footer');
    }  

    


}
