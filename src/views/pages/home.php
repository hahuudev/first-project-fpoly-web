<div class="">
    <div class="slider">
        Slider
    </div>

    <div class="topProduct">Top trending products</div>

    <div class="product-list">
        <?php foreach ($products as $key => $value) : ?>
            <div class="d-flex">
                <a href="<?= DOMAIN ?>/product/detail/<?= $value['id'] ?>/<?= str_replace(' ', '-', $value['name']) ?>" class="home-product-item">
                    <div class="home-product-item__img">
                        <img src="<?= $value['image'] ?>" alt="" class="product__item-img">

                        <div class="home-product-item__img-logo">
                            <span class="a">43%</span>
                            <span class="b">Giảm</span>
                        </div>

                        <div class="home-product-item__img-lable">
                            <i class="fas fa-check"></i>
                            <span class="">Yêu thích</span>
                        </div>
                    </div>
                    <h4 class="home-product-item__name">
                        <?= $value['name'] ?>
                    </h4>
                    <div class="home-product-item__price">
                        <span class="a">1.200.000 đ</span>
                        <span class="b"><?= $value['price'] ?> đ</span>
                    </div>

                    <div class="product__item-action">
                        <div class="product__action-icon">
                            <div class="product__action-icon-heart">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="">
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="">200 đã bán</span>
                        </div>
                        <div class="product__action-note">
                            <span class=""><?= $value['category'] ?></span>
                            <span class="">Nhật Bản</span>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>