    <div class="container">
        <div​​ class="row">
            <div class="col-12 border-style">
                <span class="style-border-left1"></span>
                <a href="#" class="border-header">កីឡា</a>
                <span class="style-border-right1"></span>
                <span style="float: right;">
                    <a href="life.php" class="font-khmer">អត្ថបទច្រើនទៀត
                        <i class="border fas fa-chevron-right" style="padding: 3px;"></i>
                    </a>
                </span>                
                <div class="border-bottom1"></div>
            </div>
        </div>        
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-12 box-shadow-me">
                <img src="images/sport/1.jpg" alt="" width="100%">
                <i class="far fa-calendar-alt"> <b>2020-01-13</b></i>
                <h6 class="list-komsan1-h6">
                    <a class="stretched-link" href="sportlink.php">មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                </h6>                 
            </div>
            <?php require_once('gift/smart.php'); ?>
            <div class="col-xl-8 col-lg-6 col-md-4 col-sm-12">
                <div class="row">
                    <?php for($x=2;$x<=7;$x++){ ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6 box-shadow-me">
                            <img src="images/sport/<?php echo $x; ?>.jpg" alt="" width="100%">
                            <i class="far fa-calendar-alt"> <b>2020-01-13</b></i>
                            <h6 class="list-komsan1-h6">
                                <a class="stretched-link" href="sportlink.php"><?php echo $x; ?>មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                            </h6> 
                        </div>
                    <?php }?>                    
                </div>
            </div>
        </div>
    </div>