<?php
/**
 * Template Name: Landing Page (Default)
 * Description: Landing Page
 *
 */

get_header();

the_post();

$block_datas = get_fields(get_the_ID());

?>
    <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
    </div>
    <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
<?php
if(!empty($block_datas["hero"])){
    $block = $block_datas["hero"];
?>
    <section id="hero" class="block hero--block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hero--title text-center"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="hero--subtitle text-center"><?php echo $block["subtitle"] ? $block["subtitle"] : false;?></p>
                    <div class="hero--btn-group text-center" role="group" aria-label="Hero Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring">'.$block["button_1"]['title'].'</a>' : false;?>
                        <?php echo $block["button_2"] ? '<a href="'.$block["button_2"]['url'].'" title="'.$block["button_2"]['title'].'" target="'.$block["button_2"]['target'].'" class="btn-pre-hiring-outline">'.$block["button_2"]['title'].'</a>' : false;?>
                    </div>
                    <?php 
                    echo $block["image"] ? '<div class="hero-image text-center wow fadeInUp" data-wow-delay=".3s" ><img src="'.$block["image"]['url'].'" alt="'.$block["image"]['alt'].'" title="'.$block["image"]['title'].'" /></div>' : false;?>
                    
                </div><!-- /.col-md-12 -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.container -->
    </section><!-- /#hero -->
<?php
}

if(!empty($block_datas["featured"])){
    $block = $block_datas["featured"];

    function featured_item($block, $delay=".3s"){
        ob_start();
        ?>
        <div class="block--featured__item <?php echo $block["active"] ? 'active' : false;?> wow fadeInUp" data-wow-delay="<?php echo $delay;?>">
            <?php echo $block["icon"] ? '<img class="block--featured__item--icon" src="'.$block["icon"]['url'].'" alt="'.$block["icon"]['alt'].'" title="'.$block["icon"]['title'].'" /> ' : false;?>
            <h3 class="block--featured__item--title"><?php echo $block["title"] ? $block["title"] : false;?></h3>
            <p class="block--featured__item--description"><?php echo $block["description"] ? nl2br($block["description"]) : false;?></p>
            <div class="block--featured__item--link"><?php echo $block["button"] ? '<a href="'.$block["button"]['url'].'" title="'.$block["button"]['title'].'" target="'.$block["button"]['target'].'">'.$block["button"]['title'].'</a>' : false;?></div>
        </div>
        <?php
        $html = ob_get_clean();
        return $html;
    }
    
?>
<section id="featured" class="block block-featured">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="block--title block--featured-title text-center"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                <div class="block--featured" role="group" aria-label="Featured List">
                    <?php echo featured_item($block["item_1"], '.3s');?>
                    <?php echo featured_item($block["item_2"], '.5s');?>
                    <?php echo featured_item($block["item_3"], '.7s');?>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#featured -->
<?php 
} 

if(!empty($block_datas["Utilities"])){
    $blocks = $block_datas["Utilities"];

    if(!empty($blocks["utility_1"])){
    $block = $blocks["utility_1"];   
?>
    <section id="utility-1" class="block block--utility block--utility-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center block--utility-col-left wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="block--title block--utility-title"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="block--description block--utility-description"><?php echo $block["description"] ? nl2br($block["description"]) : false;?></p>
                    <div class="block--btn-group move-btn is-desktop" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                        <?php echo $block["button_2"] ? '<a href="'.$block["button_2"]['url'].'" title="'.$block["button_2"]['title'].'" target="'.$block["button_2"]['target'].'" class="btn-pre-hiring-outline box-shadow green">'.$block["button_2"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-12 col-sm-12 block--utility-col-right wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $block["image"] ? '<img class="block--utility--icon" src="'.$block["image"]['url'].'" alt="'.$block["image"]['alt'].'" title="'.$block["image"]['title'].'" /> ' : false;?>
                    <div class="block--btn-group move-btn is-mobile" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                        <?php echo $block["button_2"] ? '<a href="'.$block["button_2"]['url'].'" title="'.$block["button_2"]['title'].'" target="'.$block["button_2"]['target'].'" class="btn-pre-hiring-outline box-shadow green">'.$block["button_2"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#utility-1 -->
<?php 
    } 
    if(!empty($blocks["utility_2"])){
        $block = $blocks["utility_2"];   
?>
    <section id="utility-2" class="block block--utility block--utility-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 block--utility-col-left wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $block["image"] ? '<img class="block--utility--icon" src="'.$block["image"]['url'].'" alt="'.$block["image"]['alt'].'" title="'.$block["image"]['title'].'" /> ' : false;?>
                    <div class="block--btn-group move-btn is-mobile" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center block--utility-col-right wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="block--title block--utility-title"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="block--description block--utility-description"><?php echo $block["description"] ? nl2br($block["description"]) : false;?></p>
                    <div class="block--btn-group move-btn is-desktop" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#utility-2 -->
<?php 
    } 

    if(!empty($blocks["utility_3"])){
        $block = $blocks["utility_3"];   
?>
    <section id="utility-3" class="block block--utility block--utility-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center block--utility-col-left wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="block--title block--utility-title"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="block--description block--utility-description"><?php echo $block["description"] ? nl2br($block["description"]) : false;?></p>
                    <div class="block--btn-group move-btn is-desktop" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                        <?php echo $block["button_2"] ? '<a href="'.$block["button_2"]['url'].'" title="'.$block["button_2"]['title'].'" target="'.$block["button_2"]['target'].'" class="btn-pre-hiring-outline box-shadow green">'.$block["button_2"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-xxl-8 col-lg-6 col-md-12 col-sm-12 block--utility-col-right justify-content-end d-flex wow fadeInUp" data-wow-delay=".5s">
                    <?php echo $block["image"] ? '<img class="block--utility--icon " src="'.$block["image"]['url'].'" alt="'.$block["image"]['alt'].'" title="'.$block["image"]['title'].'" /> ' : false;?>
                    <div class="block--btn-group move-btn is-mobile" role="group" aria-label="Utility Group Button">
                        <?php echo $block["button_1"] ? '<a href="'.$block["button_1"]['url'].'" title="'.$block["button_1"]['title'].'" target="'.$block["button_1"]['target'].'" class="btn-pre-hiring box-shadow">'.$block["button_1"]['title'].'</a>' : false;?>
                        <?php echo $block["button_2"] ? '<a href="'.$block["button_2"]['url'].'" title="'.$block["button_2"]['title'].'" target="'.$block["button_2"]['target'].'" class="btn-pre-hiring-outline box-shadow green">'.$block["button_2"]['title'].'</a>' : false;?>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#utility-2 -->
<?php 
    } 
?>

<?php } 

if(!empty($block_datas["pricing"])){
    $block = $block_datas["pricing"];

    function price_item($block, $delay = '.3s'){
        ob_start();
        ?>
        <div class="block--pricing__item text-center wow fadeInUp" data-wow-delay="<?php echo $delay;?>">
            <h3 class="block--pricing__item--title"><?php echo $block["title"] ? $block["title"] : false;?></h3>
            <p class="block--pricing__item--subtitle"><?php echo $block["subtitle"] ? $block["subtitle"] : false;?></p>
            <?php echo $block["image"] ? '<img class="block--pricing__item--image" src="'.$block["image"]["url"].'" alt="'.$block["image"]["alt"].'" title="'.$block["image"]["title"].'"/>' : false;?>
            <div class="block--pricing__item--price">
                <span class="price"><?php echo $block["price"]["price"];?></span><sup><?php echo $block["price"]["currency"];?></sup><sub><?php echo $block["price"]["unit"];?></sub>
            </div>
            <?php 
            if(!empty($block["services"])){
                echo '<ul class="block--pricing__item--services">';
                $services = explode("\n", $block["services"]);
                foreach($services as $service){
                    echo '<li>'.$service.'</li>';
                }
                echo '</ul>';
            }
            ?>
            <?php echo $block["button"] ? '<h3 class="block--pricing__item--button"><a class="btn-pre-hiring box-shadow d-block" href="'.$block["button"]["url"].'" title="'.$block["button"]["title"].'">'.$block["button"]["title"].'</a></h3>' : false;?>
            
        </div>
        <?php
        $html = ob_get_clean();
        return $html;
    }
?>
    <section id="pricing" class="block block--pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="block--title block--pricing-title text-center"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="block--subtitle block--pricing-subtitle text-center"><?php echo $block["subtitle"] ? $block["subtitle"] : false;?></p>
                    <div class="block--pricing-table" role="group" aria-label="Price Table">
                        <?php echo price_item($block["list"]["item_1"], '.3s');?>
                        <?php echo price_item($block["list"]["item_2"], '.5s');?>
                        <?php echo price_item($block["list"]["item_3"], '.7s');?>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#pricing -->
<?php

}


if(!empty($block_datas["subscribe"])){
    $block = $block_datas["subscribe"];
?>
    <section id="subscribe" class="block block--subscribe wow fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="block--title block--subscribe-title text-center"><?php echo $block["title"] ? $block["title"] : false;?></h2>
                    <p class="block--subtitle block--subscribe-subtitle text-center"><?php echo $block["subtitle"] ? $block["subtitle"] : false;?></p>
                    <div class="block--subscribe-content text-center">
                        <?php echo $block["content"] ? do_shortcode($block["content"]) : false;?>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#subscribe -->
<?php

}

get_footer();
