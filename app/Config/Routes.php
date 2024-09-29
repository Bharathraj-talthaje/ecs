<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'Home::about_us');
$routes->get('/our-works', 'Home::our_works');
$routes->get('/payments', 'Home::payments'); 

//main services
$routes->get('/services', 'Services::index');
$routes->get('/services/web-development-service', 'Services::web_development_service');
$routes->get('/services/mobile-app-development', 'Services::mobile_app_development');
$routes->get('/services/best-graphic-design-services', 'Services::best_graphic_design_services');
$routes->get('/services/domain-and-web-hosting-services', 'Services::domain_and_web_hosting_services');
$routes->get('/services/business-emails', 'Services::business_emails');
$routes->get('/services/digital-marketing-agency', 'Services::digital_marketing_agency');


$routes->get('/contact-us', 'Home::contact_us');
$routes->get('/thank-you', 'Home::thank_you');
$routes->post('/send_email', 'Home::send_email');


$routes->get('/sitemap', 'Home::sitemap');
//related_pages

$routes->get('/best-website-design-company-mangalore', 'Pages::index/best-website-design-company/mangalore');
$routes->get('/best-website-design-company-kasaragod', 'Pages::index/best-website-design-company/kasaragod');
$routes->get('/best-website-design-company-puttur', 'Pages::index/best-website-design-company/puttur');


$routes->get('/top-website-design-company-mangalore', 'Pages::index/top-website-design-company/mangalore');
$routes->get('/top-website-design-company-kasaragod', 'Pages::index/top-website-design-company/kasaragod');
$routes->get('/top-website-design-company-puttur', 'Pages::index/top-website-design-company/puttur');

$routes->get('/best-web-design-company-mangalore', 'Pages::index/best-web-design-company/mangalore');
$routes->get('/best-web-design-company-kasaragod', 'Pages::index/best-web-design-company/kasaragod');
$routes->get('/best-web-design-company-puttur', 'Pages::index/best-web-design-company/puttur');

$routes->get('/website-designers-mangalore', 'Pages::index/website-designers/mangalore');
$routes->get('/website-designers-kasaragod', 'Pages::index/website-designers/kasaragod');
$routes->get('/website-designers-puttur', 'Pages::index/website-designers/puttur');

$routes->get('/mobile-apps-developers-mangalore', 'Pages::index/mobile-apps-developers/mangalore');
$routes->get('/mobile-apps-developers-kasaragod', 'Pages::index/mobile-apps-developers/kasaragod');
$routes->get('/mobile-apps-developers-puttur', 'Pages::index/mobile-apps-developers/puttur');

$routes->get('/top-website-design-development-company-mangalore', 'Pages::index/top-website-design-development-company/mangalore');
$routes->get('/top-website-design-development-company-kasaragod', 'Pages::index/top-website-design-development-company/kasaragod');
$routes->get('/top-website-design-development-company-puttur', 'Pages::index/top-website-design-development-company/puttur');

 
$routes->get('/mobile-apps-developers-mangalore', 'Pages::index/mobile-apps-developers/mangalore');
$routes->get('/mobile-apps-developers-kasaragod', 'Pages::index/mobile-apps-developers/kasaragod');
$routes->get('/mobile-apps-developers-puttur', 'Pages::index/mobile-apps-developers/puttur');


$routes->get('/web-app-mobile-app-developers-mangalore', 'Pages::index/web-app-mobile-app-developers/mangalore');
$routes->get('/web-app-mobile-app-developers-kasaragod', 'Pages::index/web-app-mobile-app-developers/kasaragod');
$routes->get('/web-app-mobile-app-developers-puttur', 'Pages::index/web-app-mobile-app-developers/puttur');
