<div class="site-wrap" id="home-section">
    <div class="container container-list-new">
        <div>
            <span class="border-style-popular-left" style=""></span>
            <a class="list-a-komsan1" href="#">អត្ថបទពេញនិយម</a>
            <span class="border-style-popular-right" style=""></span>
        </div>
        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12 list-komsan1-1 box-shadow-me">    
            <form action="#" id="search-form" method="get" class="input-group stylish-input-group">
                <input type="text" name="s" id="s" placeholder="Search" class="form-control" style="height: 40px;">
                <span class="input-group-addon">
                    <button type="submit" class="button-none-style" style="">
                        <i class="fas fa-search"></i>
                    </button>
                </span>
            </form>
            <div class="header-p">
                <span class="border-style-popular-left" style=""></span>
                    <a class="list-a-komsan1" href="#">ភ្ជាប់ទំនាក់ទំនង</a>
                <span class="border-style-popular-right" style=""></span>
            </div>    
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FKnongsrokcom%2F&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=658304207661152" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            <?php
                require_once('./gift/smart.php');    
            ?>
        </div>
        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12 list-komsan2">
            <div class="row keep-items-4-md">
                <?php
                    for($i=1;$i<=6;$i++){ 
                        if($i!=5){                                               
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6 box-shadow-me">
                        <img src="./images/popular1/<?php echo $i;?>.jpg" alt="" style="width: 100%;">
                        <i class="far fa-calendar-alt"> 2020-01-13</i>
                        <h6 class="list-komsan1-h6">
                            <a class="stretched-link" href="sportlink.php"><?php echo $i;?>មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                        </h6>
                    </div>
                    <?php
                        }else{
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6 box-shadow-me">
                            <img src="./images/popular1/<?php echo $i;?>.png" alt="" style="width: 100%;">
                            <i class="far fa-calendar-alt"> 2020-01-13</i>
                            <h6 class="list-komsan1-h6">
                                <a class="stretched-link" href="sportlik.php"><?php echo $i;?>មានធាងដូង ​ធាងត្នោតលក់ទេ? មានអ្នកប្រមូលទិញទាំងអស់ហ៊ានឱ្យក្នុងតម្លៃខ្ពស់ ដើម្បីនាំចេញទៅជប៉ុន</a>
                            </h6>
                        </div>                     
                        <?php
                        }
                    }
                ?>                
            </div>
        </div>
    </div>
</div>
<br><br>