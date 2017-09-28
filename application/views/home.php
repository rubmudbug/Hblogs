<div class="container marketing">
    <!-- START THE FEATURETTES -->


    <?php foreach ($news as $news_item): ?>
        <hr class="featurette-divider">
        <div class="row featurette">

            <div class="col-md-7">
                <h2 class="featurette-heading"><?php echo $news_item['article_name']; ?></h2>
                <p>
                <p class="lead"><?php echo $news_item['article_content']; ?></p></p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block"
                     src='<?php echo base_url($news_item['article_src']); ?>'>
            </div>
        </div>
    <?php endforeach; ?>
</div>