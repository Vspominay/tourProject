<?php
require './services/dummyData.php';
$tours = $toursArray;

foreach ($tours as $tour) : ?>

    <div class="col">
        <div class="col-content">
            <div class="content-image">
                <img src="<?php echo $tour->getTitlePicture() ?>" alt="<?php echo $tour->title ?>">
            </div>

            <div class="content__description">
                <div class="description-title">
                    <h5>
                        <?php echo $tour->type ?>
                    </h5>
                    <h3>
                        <?php echo $tour->title ?>
                    </h3>
                </div>

                <div class="description-price__items">
                    <div class="description-price__item">
                        <div class="price__item-cost">
                            <span class="icon-coins"></span>
                            <span>
                                <?php echo $tour->cost->normalPrice ?>
                            </span>
                        </div>
                        <div class="price__item-age">
                            Взрослый билет
                        </div>

                    </div>

                    <div class="description-price__item">
                        <div class="price__item-cost">
                            <span class="icon-coins"></span>
                            <span>
                                <?php echo $tour->cost->childPrice ?>
                            </span>
                        </div>
                        <div class="price__item-age">
                            Детский билет
                        </div>

                    </div>

                    <div class="description-price__item description__during">
                        <span class="icon-time"></span>
                        <span>
                            <?php echo $tour->date ?>
                        </span>
                    </div>
                </div>



                <div class="description__specification">
                    <?php echo $tour->generateShortDescription() ?>
                </div>

                <div class="description__interact">
                    <a href="#" class="btn">
                        Подробнее
                    </a>

                    <a href="#" class="favorite">
                        <span class="icon-heart"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>