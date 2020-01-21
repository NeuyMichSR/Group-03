<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('head.php'); ?>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <?php require_once('navbar.php'); ?>

    <div class="container">
        <div​​ class="row">
            <div class="col-8">
                <span class="style-border-left"></span>
                <a href="#" class="border-header">ពេញនិយម</a>
                <span class="style-border-right" style=""></span>               
                <div class="border-bottom1"></div>
            </div>
        </div>        
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-12">
                <img src="images/popular/pic1.jpg" alt="" width="100%">
                <i class="far fa-calendar-alt"> <b>2020-01-13</b></i>
                <h6 class="list-komsan1-h6">
                    <a class="stretched-link" href="#">មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                </h6> 
            </div>
            <div class="col-xl-8 col-lg-6 col-md-4 col-sm-12">
                <div class="row">
                    <?php for($x=2;$x<=7;$x++){ ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                            <img src="images/popular/pic<?php echo $x; ?>.jpg" alt="" width="100%">
                            <i class="far fa-calendar-alt"> <b>2020-01-13</b></i>
                            <h6 class="list-komsan1-h6">
                                <a class="stretched-link" href="#"><?php echo $x; ?>មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                            </h6> 
                        </div>
                    <?php }?>                    
                </div>
            </div>
            
        </div>
    </div>
    <?php 
        require_once('footer.php'); 
        require_once('script.php');
    
    ?>    
</body>
</html>