
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <link rel="stylesheet" href="assets/style/style.css">
  
  


        <div class="mbr-section-head">
            <div class="col-12">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Фотогалерея учебных занятий</strong>
                </h4>
            </div>
            <?php 
            $num=1;
            for($x=0; $x<7; $x++)
            {
                try{
                    echo '<div class="row mt-4">';
                    for($y=0;$y<3;$y++)
                    {
                        if($num==21) break;
                        echo '  <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card-wrapper mb-4">
                                        <div class="card-box align-left">
                                            <img src="assets/images/TeachDo/' . $num . '.jpg" alt="Mobirise">
                                        </div>
                                    </div>
                                </div>';
                        $num++;
                    }
                    echo '</div>';
                }catch(Exception $e)
                {

                } 
            }
            ?>
        </div>
<section style="background-color: #232323; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:0px; padding: 0; align-items: center; display: flex;">
    <a href="https://mobirise.site/e" style="flex: 1 1; height: 0rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;"></p>
</section>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/theme/js/script.js"></script>  
<script src="assets/scripts/script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
