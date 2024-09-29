<section class="ecs_about bannr" style="background-image: url(<?= base_url('assets/img/hero-three.webp') ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="bannr-text pt-5">
                    <h2 class="mt-4">Our works</h2>
                    <p>Grow your business with our top-notch web development services. From custom website design to comprehensive digital solutions, we offer expertise and innovation to boost your online presence.</p> 

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li> 
                            <li class="breadcrumb-item active" aria-current="page">Our works</li>
                        </ol>
                    </nav>
                </div>
            </div> 
        </div>
    </div>
</section>
 
<section class="pt-5 our-projects">
    <div class="container">

        <div class="heading">
            <img data-src="<?= base_url() ?>assets/img/heading-img.webp" alt="heading-img">
            <h6>Companies projects</h6>
            <h2>Working With Over 300 Startups and Companies</h2>
        </div>

        <div class="row">

            <?php foreach (our_works_array() as $work): ?> 
            <div class="col-lg-6">
                <div class="projects-style">
                    <div class="projects-img">
                        <figure>
                            <img data-src="<?= $work['image'] ?>" alt="img">
                        </figure>
                        <a href="<?= $work['url'] ?>"><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                    <h4><a href="<?= $work['url'] ?>"><?= $work['name'] ?></a></h4>
                    <span><?= ucfirst($work['type']) ?></span>
                </div>
            </div> 
            <?php endforeach ?>

        </div>
    </div>
</section>