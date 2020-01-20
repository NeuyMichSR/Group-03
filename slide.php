    <div class="site-wrap" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">        
                    <div id="demo" class="carousel slide" data-ride="carousel">                  
                        <div class="carousel-inner">
                        <?php
                            for($x=4;$x<=7;$x++){
                                if($x!=4){
                                    ?>
                                    <div class="carousel-item">                                
                                        <img src="./images/slide/slide<?php echo $x;?>.jpg" alt="New York" style="width: 100%;">
                                        <div class="carousel-caption">
                                            <a href="#" class="stretched-link">
                                                <h3 id="slider"><?php echo $x;?></h3>
                                                <p id="slider">ស្អាតខ្លាំងស្ទើរមើលច្រលំស្រុកគេ ស្ទឹងពពកខេត្តកោះកុង ​ទេសភាពស្អាតជាបាតុភូតធម្មជាតិកំពុងតែពេញនិយម</p>
                                            </a>
                                        </div>                                
                                    </div>
                                <?php
                                }else{
                                    ?>
                                    <div class="carousel-item active">
                                        <img src="./images/slide/slide<?php echo $x;?>.jpg" alt="Los Angeles" style="width: 100%;">
                                        <div class="carousel-caption">
                                            <a href="#" class="stretched-link">
                                                <h3 id="slider"><?php echo $x;?></h3>
                                                <p id="slider">ស្អាតខ្លាំងស្ទើរមើលច្រលំស្រុកគេ ស្ទឹងពពកខេត្តកោះកុង ​ទេសភាពស្អាតជាបាតុភូតធម្មជាតិកំពុងតែពេញនិយម</p>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        ?>
                        </div>                  
                        <a class="carousel-control-prev slider" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next slider" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>           
                </div> 
                <!-- slide -->  
                <div class="col-lg-6 col-md-12">
                    <div class="row tab-space1">
                        <?php
                            for($i=1;$i<=3;$i++){
                                if($i==1){
                                    ?>
                                    <div class="col-12">                           
                                        <img src="./images/slide/<?php echo $i;?>.jpg" id="slide-image" alt="" width="100%">
                                        <div class="carousel-caption">
                                            <p id="slider"><?php echo $i;?>ទឹងពពកខេត្តកោះកុង</p>
                                        </div>
                                    </div>
                                    
                                <?php
                                }else{
                                    ?>
                                    <div class="col-xl-6 col-lg-6 col-12" style="margin-top: 2px;">                                
                                        <img src="./images/slide/<?php echo $i;?>.jpg" alt="" width="100%">
                                        <div class="carousel-caption">
                                            <p id="slider"><?php echo $i;?>ទឹងពពកខេត្តកោះកុង</p>
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                        ?>                                                                                                   
                    </div>
                </div>   
            </div>          
        </div>
    </div>
    