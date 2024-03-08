<!DOCTYPE html>
<html lang="en">
    <?php include('./src/header.html'); ?>
    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <div class="container">
            <div class="row g-5">
                <?php include('./src/side.html'); ?>
                <div class="col-lg-8">
                    <?php 
                        include('./src/aboutme.html');
                        include('./src/skills.html');
                        include('./src/experience.html');
                        include('./src/services.html');
                        include('./src/portpolio.html');
                        include('./src/contact.html');
                        include('./src/footer.html');
                    ?>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        <?php include('./src/includes.html'); ?>
    </body>
</html>
