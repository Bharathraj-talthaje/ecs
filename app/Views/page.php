<section class="ecs_single_service bannr <?= $page_data['banner_style'] ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="bannr-text pt-5">
                    <h1 class="mt-4"><?= $page_data['h1_tag'] ?></h1>
                    <p><?= $page_data['intro_para'] ?></p> 

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li> 
                            <li class="breadcrumb-item active" aria-current="page"><?= $page_data['page_name'] ?></li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
    </div>
</section>
<section class="gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service sidebar ">
                    <h3 style="line-height: 1.5;"><?= $page_data['left_list_title'] ?></h3>
                    <div class="ecs-boder"></div>
                    <ul class="service-category">
                        <?php foreach ($page_data['left_list'] as $ll): ?>
                            <li><?= $ll ?></li>
                        <?php endforeach ?> 
                    </ul>
                </div>

                <div class="overview pt-40">
                    <h4><?= $page_data['process_list_title'] ?></h4>  
                </div>

 
                        
                <section class="ecs-process"> 
                        <div class="row">

                            <?php $pl_count=0; foreach ($page_data['process_list'] as $pl): $pl_count++; ?>
                            <div class="col-lg-12 mb-4 col-md-12 col-sm-12">
                                <div class="count-style-two">
                                    <p class="process-txt"><span class="li_count"><?= $pl_count ?></span> <?= $pl ?></p>
                                </div>
                            </div>
                            <?php endforeach ?> 
                             
                        </div>
                       
                </section>
            </div>
            <div class="col-lg-8">
                <div class="service-details">
                    <div class="service-details-img img-hover">
                        <figure>
                            <img data-src="<?= $page_data['main_image'] ?>" alt="<?= $page_data['page_name'] ?>-image">
                        </figure>
                      
                    </div>
                    <div class="overview pt-40">
                        <h2 class="mb-4"><?= $page_data['h2_tag'] ?></h2>
                        <p><?= $page_data['paragraph2'] ?></p>
                    </div>

                    <div class="overview pt-80">
                        <h4><?= $page_data['why_service_title'] ?></h4>
                        <p><?= $page_data['why_service_paragraph'] ?></p>
                        <ul class="features two pt-40">
                            <?php foreach ($page_data['why_list'] as $wl): ?>
                                  <li><?= $wl['name'] ?></li>                      
                            <?php endforeach ?>
                        </ul>
                  
                    </div> 
                   
                    <div class="overview pt-80">
                        <h4><?= $page_data['why_choose_title'] ?></h4>
                    </div>
                    <div class="row">
                        <?php foreach ($page_data['why_choose_list'] as $wcl): ?>
                            <div class="col-md-6">
                                <div class="cloud-storage">
                                    <i><img data-src="<?= base_url() ?>assets/img/check.webp" alt="check"></i>
                                    <h6><?= $wcl['name'] ?></h6>
                                    <p class="text_over_flow_4"><?= $wcl['description'] ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>  
                    </div>
           
                    
                </div>
            </div>
        </div>
    </div>
</section> 