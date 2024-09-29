<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <meta name="robots" content="index, follow"/>
  <meta name="format-detection" content="telephone=yes">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>"  type="image/x-icon" >
  <link rel="icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon" />
  <link rel="icon" type="image/ico" href="<?= base_url('favicon.ico'); ?>"></link>
  <!-- For iPhone -->
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('favicon120x120.png'); ?>">
  <!-- For iPad -->
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('favicon152x152.png'); ?>">
  <!-- For iPad Pro -->
  <link rel="apple-touch-icon" sizes="167x167" href="<?= base_url('favicon167x167.png'); ?>">
  <!-- For iPhone Retina display -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('favicon180x180.png'); ?>">
 
  <meta name="description" content="<?= substr($description,0,160); ?>">
  <meta name="keywords" content="<?= $keywords; ?>">

  <meta property="og:type" content="<?= $og_type; ?>"> 
  <meta property="og:title" content="<?= $title; ?>" />
  <meta property="og:site_name" content="Exevor">
  <meta property="og:determiner" content="a">

  <meta property="og:description" content="<?= substr($description,0,160); ?>" />
  <meta property="og:url" content="<?= current_url(); ?>" />
  <meta property="og:image" content="<?= $ogimage; ?>" />

  <meta name="twitter:card" content="summary"> 
  <meta name="twitter:title" content="<?= $title; ?>" />
  <meta name="twitter:description" content="<?= substr($description,0,160); ?>">
  <meta name="twitter:image" content="<?= $ogimage; ?>">

  <meta name="rating" CONTENT="General"/>
  <meta content="All, FOLLOW" name="GOOGLEBOTS"/>
  <meta content="All, FOLLOW" name="YAHOOBOTS"/>
  <meta content="All, FOLLOW" name="MSNBOTS"/>
  <meta content="All, FOLLOW" name="BINGBOTS"/>
  <meta content="all" name="Googlebot-Image"/>
  <meta content="all" name="Slurp"/>
  <meta content="all" name="Scooter"/>
  <meta content="ALL" name="WEBCRAWLERS"/>
  <link rel="canonical" href="<?= str_replace('/index.php', '', current_url()) ?>"/> 
 
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
  <!-- fancybox -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css">
  <!-- style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css?ver=<?= script_version() ?>">
  <!-- responsive -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css?ver=<?= script_version() ?>">
  <!-- color -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/color.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/ecs.css?ver=<?= script_version() ?>">
  <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script> 


  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in kasaragod and mangalore, we specialize in web development, mobile app creation, cutting-edge graphics design, secure email and web hosting, strategic digital marketing, and custom software solutions.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ], 
      "paymentAccepted": ["Cash", "Credit Card", "Debit Card","UPI"],
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "12.7173791",
        "longitude": "74.884466"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61564523416981&mibextid=ZbWKwL",
        "https://www.instagram.com/exevor_cloud_solutions",
        "https://www.linkedin.com/company/exevor-cloud-solutions"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Service",
        "telephone": "+918075680885",
        "email": "ecs@exevor.com"
      },
      "hasMap": "https://www.google.com/maps/place/Exevor+Cloud+Solutions+(ECS)/@12.7173791,74.884466,17z/data=!4m14!1m7!3m6!1s0x2f8c49ce63ad0fdf:0x6de63a1e52746484!2sExevor+Cloud+Solutions+(ECS)!8m2!3d12.7173739!4d74.8870409!16s%2Fg%2F11wbtbr71w!3m5!1s0x2f8c49ce63ad0fdf:0x6de63a1e52746484!8m2!3d12.7173739!4d74.8870409!16s%2Fg%2F11wbtbr71w?entry=ttu&g_ep=EgoyMDI0MDgyNi4wIKXMDSoASAFQAw%3D%3D",
      "branchOf": {
        "@type": "Organization",
        "name": "Exevor"
      }
    }
    
  </script>

  <!-- Schema Markup for Web Designing Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Web Designing",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Custom web designing services to create visually appealing and user-friendly websites.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "10000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Web Designing"
      }
    }
  }
  </script>

  <!-- Schema Markup for Web Development Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Web Development",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Comprehensive web development services including front-end and back-end development.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "20000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Web Development"
      }
    }
  }
  </script>

  <!-- Schema Markup for Mobile App Development Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Mobile App Development",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Expert mobile app development for iOS and Android platforms.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "35000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Mobile App Development"
      }
    }
  }
  </script>

  <!-- Schema Markup for Graphics Designing Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Graphics Designing",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Professional graphics designing services for branding and marketing materials.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "500.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Graphics Designing"
      }
    }
  }
  </script>

  <!-- Schema Markup for Digital Marketing Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Digital Marketing",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Strategic digital marketing services to enhance your online presence and drive traffic.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "20000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Digital Marketing"
      }
    }
  }
  </script>

  <!-- Schema Markup for Domain and Hosting Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Domain and Hosting",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Reliable domain registration and web hosting services to keep your website online.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "30000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Domain and Hosting"
      }
    }
  }
  </script>

  <!-- Schema Markup for Email Services -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Email Services",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Exevor Cloud Solutions (ECS)",
      "description": "Leading provider of comprehensive IT services in Kasaragod and Mangalore.",
      "image": "<?= base_url() ?>assets/img/logo-b.webp",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Hosabettu",
        "addressLocality": "Manjeshwara",
        "addressRegion": "Kasaragod, Kerala",
        "postalCode": "671323",
        "addressCountry": "IN"
      },
      "telephone": "+918075680885",
      "email": "ecs@exevor.com",
      "url": "https://ecs.exevor.com",
      "openingHours": [
        "Mo-Sa 08:00-20:00"
      ]
    },
    "description": "Secure and reliable email services for business communication.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "2000.00",
      "itemOffered": {
        "@type": "Service",
        "serviceType": "Email Services"
      }
    }
  }
  </script>

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-70EG0ENEZL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-70EG0ENEZL');
</script>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTB4628J');</script>
<!-- End Google Tag Manager -->
 </head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTB4628J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="topnav two">
  <div class="container">
    <div class="header-bar">
      <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo-b.webp" class="no_lozad" alt="ECS logo" style="height:70px;"></a>
        <nav class="navbar" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <span class="d-none" itemprop="name">Main Navigation</span>
          <ul class="navbar-links">
            <li itemscope itemprop="hasMenu" itemtype="https://schema.org/ItemList" class="navbar-dropdown">
              <a itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" href="<?= base_url() ?>"><span itemprop="name">Home</span></a> 
            </li>
            <li itemscope itemprop="hasMenu" itemtype="https://schema.org/ItemList" class="navbar-dropdown">
                <a itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" href="<?= base_url('about-us') ?>"><span itemprop="name">About</span></a>
            </li>
            <li itemscope itemprop="hasMenu" itemtype="https://schema.org/ItemList" class="navbar-dropdown has-children">
                <a itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" href="<?= base_url('services') ?>"><span itemprop="name">Services</span></a> 
                <ul class="dropdown ecs_drop_down">
                  <li><a href="<?= base_url('services/web-development-service') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Web Development</a>
                  </li>
                  <li><a href="<?= base_url('services/mobile-app-development') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Mobile Apps </a>
                  </li>
                  <li><a href="<?= base_url('services/best-graphic-design-services') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Graphic Design</a>
                  </li>
                  <li><a href="<?= base_url('services/domain-and-web-hosting-services') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Domain & Hosting</a>
                  </li>
                  <li><a href="<?= base_url('services/business-emails') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Business Emails & Support</a>
                  </li>
              
                  <li><a href="<?= base_url('services/digital-marketing-agency') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Digital Marketing</a>
                  </li>
                  <li><a href="<?= base_url('services/billing-and-pos-software') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Billing & POS</a>
                  </li>
                  <li><a href="<?= base_url('services/customised-software-development-company') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Customised Softwares</a>
                  </li>
                  <li><a href="<?= base_url('services/best-iot-solutions-provider') ?>">
                    <i class="fa-solid fa-arrow-right"></i>IOT Solutions</a>
                  </li>
                  <li><a href="<?= base_url('services/web-and-app-maintenance-services') ?>">
                    <i class="fa-solid fa-arrow-right"></i>Web & App Maintenance</a>
                  </li>
                </ul>
            </li>
            <li itemscope itemprop="hasMenu" itemtype="https://schema.org/ItemList" class="navbar-dropdown">
                <a itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" href="<?= base_url('our-works') ?>"><span itemprop="name">Our Works</span></a> 
            </li> 

            <li itemscope itemprop="hasMenu" itemtype="https://schema.org/ItemList" class="navbar-dropdown">
                <a itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" href="<?= base_url('contact-us') ?>"><span itemprop="name">Contact Us</span></a> 
            </li> 
            
          </ul>
        </nav>
        <div class="pickup"> 
            <a href="<?= base_url('contact-us') ?>" class="btn">Get Quote</a>
        </div>
        
        <div class="bar-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block; background-image: url(<?= base_url() ?>assets/img/background.webp);">
      <div class="res-log">
        <a href="<?= base_url() ?>">
          <img data-src="<?= base_url() ?>assets/img/logo-b.webp" alt="Responsive Logo">
        </a>
      </div>
        <ul>
          <li class="">
            <a href="<?= base_url() ?>">Home</a>
             
          </li>
           
            <li class="">
                <a href="<?= base_url('about-us') ?>">About</a>
            </li>
            <li class="">
                <a href="<?= base_url('services') ?>">Services</a> 
            </li>
            <li class="">
                <a href="<?= base_url('our-works') ?>">Our Works</a> 
            </li> 

            <li class="">
                <a href="<?= base_url('contact-us') ?>">Contact Us</a> 
            </li> 

        </ul>

        <div class="menu-sidebar-single-widget">
            <h5 class="menu-sidebar-title">Contact Info</h5>
            <div class="header-contact-info"> 
              <span>
                <a href="mailto:ecs@exevor.com">
                  <i class="fa-solid fa-envelope"></i>ecs@exevor.com
                </a>
              </span>
              <span>
                <a href="mailto:ecsmangalore@gmail.com">
                  <i class="fa-solid fa-envelope"></i>ecsmangalore@gmail.com
                </a>
              </span>
              <span><a href="callto:+91 8075680885"><i class="fa-solid fa-phone"></i>+91 8075680885</a></span>
            </div>
            <div class="social-profile">
              <a href="https://www.facebook.com/profile.php?id=61564523416981&mibextid=ZbWKwL" aria-label="social media links"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/exevor_cloud_solutions" aria-label="social media links"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/exevor-cloud-solutions" aria-label="social media links"><i class="fa-brands fa-linkedin-in"></i></a> 
            </div>
          </div>

          <a href="JavaScript:void(0)" aria-label="menu close" id="res-cross"><i class="fa-regular fa-circle-xmark"></i></a>
    </div>
  </div> 
</header>