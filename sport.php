    <br>
    <div class="site-wrap" id="home-section">
        <div class="container container-list-new">
            <div>
                <span style="border: 10px solid red;border-left: 8px solid transparent;"></span>
                <a class="list-a-komsan1" href="#" >កីឡា</a>
                <span style="border: 10px solid red;border-right: 8px solid transparent;"></span>
                <a class="list-a-komsan2" href="#">អត្ថបទច្រើនទៀត<i class="border fas fa-chevron-right" style="padding: 3px;"></i></a>
            </div>
            <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12 list-komsan1">
                <a class="position-relative img-scale-animate mb-30" href="./images/sport/7.jpg">
                    <img src="./images/sport/7.jpg" alt="" style="width: 100%;">
                </a>
                <i class="far fa-calendar-alt"> <b>2020-01-13</b></i>
                <h6 class="list-komsan1-h6">
                    <a class="stretched-link" href="#">ក្រុមបិសាចក្រហម Manchester United កំពុងប្រជែងទិញតារាឆ្នើមម្នាក់របស់ក្រុម Barcelona</a>
                </h6>     
                <?php
                    require_once('./gift/tiger.php');
                ?>           
            </div>
            <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12 list-komsan2">
                <div class="row keep-items-4-md">
                    <?php 
                        for($q=1;$q<=6;$q++){                        
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                            <a href="./images/sport/2.jpg">
                                <img src="./images/sport/<?php echo $q; ?>.jpg"  alt="" style="width: 100%;" >
                            </a>
                            <i class="far fa-calendar-alt"> 2020-01-13</i>
                            <h6 class="list-komsan1-h6">
                                <a class="" href="#"><?php echo $q; ?> កីឡាករ ៥ រូបដែល Real Madrid អាចនឹងនាំយកមកចូលរួមជាមួយក្លឹបក្នុងរដូវកាលទីផ្សារដោះដូរកីឡាករខែមករានេះ</a>
                            </h6>                        
                        </div>
                        <?php
                    }?>                    
                </div>
            </div>
        </div>
    </div>