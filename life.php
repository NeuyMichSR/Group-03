<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('./head.php'); ?>
    <style>
        h4{
            font-family: 'Moul';
            /* font-size: 20px; */
        }
        div.icon-date{
            font-size: 20px;
        }
        #fb-border{
            border-left: 2px solid gray;
            margin: 0px 20px;
            padding: 0px 20px;
        }
        .badge-primary {
            color: aliceblue;
            background-color: blue;
        }
        div.xo-1{
            margin: 40px 0;
        }
        p{
            font-family: 'Battambang', Time New Roman;
            font-size: 16px;
        }
        a{
            color: blue;
            font-size: 16px;
        }
        div.propop{
            float: right;
        }
        #s{
            height: 40px;
        }
        .topic-border{
            border: 2px solid gray;
            width: 40%;
            
        }
        /* .header-p{
            margin: 5% 20%;
        } */
        .header-p1{
            margin: 0 23%;
        }
        .sidebar-box {
            padding: 0;
            
        }
        h6.title-medium-dark{
            padding-top: 10px;
        }
        h6.title-medium-dark a {
            color: black;
            font-family: 'Battambang', Time New Roman;
        }
    </style>
</head>
<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php require_once('navbar.php'); ?>
    <div class="site-wrap" id="home-section">        
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="row">
                                <?php for($l=1;$l<=9;$l++){ ?>
                                    <div class="col-xl-5 col-lg-5 col-sm-12">
                                        <img src="images/life/life-<?php echo $l; ?>.jpg" alt="" width="100%">
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-sm-12">
                                    <h4><a href="#">Update៖ ជំងឺ​រលាក​សួត​ថ្មី​ បានធ្វើឱ្យមនុស្ស៤១​នាក់​បាត់បង់ជីវិត និងកើនឡើងដល់ ១៣០០ ករណីក្នុងប្រទេសចិនស្ថានភាពយាប់យឺន</a></h4>
                                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>2020-01-25
                                    <p><?php echo $l; ?>Update៖ ជំងឺ​រលាក​សួត​ថ្មី​ បានធ្វើឱ្យមនុស្ស៤១​នាក់​ហើយបាត់បង់ជីវិត និងឆ្លងដល់បារាំង-ម៉ាឡេស៊ី ជំងឺ​រលាក​សួត​ថ្មី​បង្ក​ពី​កូរ៉ូណា​វីរុស...   </p>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="col-xl-4 col-md-12">
                    <form action="#" id="search-form" method="get" class="input-group stylish-input-group">
                        <input type="text" name="s" id="s" placeholder="Search" class="form-control">
                        <span class="input-group-addon">
                            <button type="submit" style="border-radius: 0;height: 40px;">
                               <i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </form>
                    <div class="sidebar-box">                       
                            <div class="header-p">
                                <span style="border: 10px solid red;border-left: 10px solid transparent;"></span>
                                <a class="list-a-komsan1" href="#">Stay Connected</a>
                                <span style="border: 10px solid red;border-right: 8px solid transparent;"></span>
                            </div>
                           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKnongsrokcom%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=658304207661152" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>               
                    </div>
                    <div class="header-p1">
                            <span style="border: 10px solid red;border-left: 10px solid transparent;"></span>
                            <a class="list-a-komsan1" href="#">Recent News</a>
                            <span style="border: 10px solid red;border-right: 8px solid transparent;"></span>                          
                    </div>
                    <div class="row" style="margin-top: 20px;">
                            <?php for($b=1;$b<=10;$b++){ ?>
                                <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                        <div class="mt-25 position-relative">
                                                <a href="#" class="mb-10 display-block img-opacity-hover">
                                                    <img src="./images/sport/link/in/in-<?php echo $b; ?>.jpg" alt="Carlos Hathcock រហស្សនាម​”អ្នក​ប្រមាញ់ស្លាបស”ផ្ដាច់​ជីវិតទាហានយៀកកុងក្នុង​សង្គ្រាមវៀតណាមមិន​ចេះតិចដោយ​ប្រើ​ជំនាញ Sniper" class="img-fluid m-auto width-100">
                                                </a>
                                                <h6 class="title-medium-dark">
                                                    <a href="#">Carlos Hathcock រហស្សនាម​”អ្នក​ប្រមាញ់ស្លាបស”ផ្ដាច់​ជីវិតទាហានយៀកកុងក្នុង​សង្គ្រាមវៀតណាមមិន​ចេះតិចដោយ​ប្រើ​ជំនាញ Sniper</a>
                                                </h6>
                                        </div>
                                </div>
                            <?php }?>
                      </div> 
                </div>
            </div>
        </div>
        <div class="container">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">100</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </div>
    </div>
    <?php
    require_once('footer.php');

    require_once('script.php');

    ?>
</body>
</html>