    <div class="site-wrap" id="home-section">
        <div class="container container-list-new">
            <div>
                <span style="border: 10px solid blue;border-left: 8px solid transparent;"></span>
                <a class="list-a-tos1" href="#">ប្លែកៗ</a>
                <span style="border: 10px solid blue;border-right: 8px solid transparent;"></span>
                <a class="list-a-komsan2" href="#">
                    អត្ថបទច្រើនទៀត<i class="border fas fa-chevron-right" style="padding: 3px;"></i>
                </a>
            </div>
            <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12 list-tos1">
                <a class="position-relative img-scale-animate mb-30" href="./images/eat/eat-01.jpg">
                    <img src="./images/blaek-blaek/pic1.jpg" alt="" style="width: 100%;">
                </a>
                 <i class="far fa-calendar-alt"> <b>2019-12-20</b></i>
                <h6 class="list-komsan1-h6">
                    <a class="stretched-link" href="#">ជាតិនិយមពិតៗ វៀតណាមគាំទ្រផឹកតែកាហ្វេក្នុងស្រុក ​រហូតកាហ្វេប្រេនល្បីៗបាស់ជើងអស់</a>
                </h6>
                <?php
                    require_once('./gift/tiger.php');
                ?>
            </div>
            <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12 list-tos2">
                <div class="row keep-items-4-md">
                    <?php 
                        for($j=2;$j<=7;$j++){                        
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                            <a href="./images/eat/eat-02.jpg">
                                <img src="./images/blaek-blaek/pic<?php echo $j; ?>.jpg" alt="" style="width: 100%;">
                            </a>
                            <i class="far fa-calendar-alt"> 2019-12-25</i>
                            <h6 class="list-komsan1-h6">
                                <a class="stretched-link" href="#"><?php echo $j; ?> អស្ចារ្យមែន! ម្ហូបស្រុកខ្មែរល្បីថាឆ្ងាញ់ពេក ​រហូតកម្មវិធីបរទេសល្បីចុះមកថត
                                    និងភ្លក់ដោយផ្ទាល់ ​ហើយលាន់មាត់ស្ទើរមិនគួរឱ្យជឿ (មានវីដេអូ)</a>
                            </h6>
                        </div>
                    <?php } ?>                    
                </div>
            </div>
        </div>
    </div>