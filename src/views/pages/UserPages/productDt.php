

<div class="mt-4 " style="max-width: 900px; margin: 0 auto;">
    <div class="d-flex" id="data-product" data-product='<?php echo json_encode($product); ?>'>
        <div class="home-product-item__img" style="width: 250px">
            <img src="<?= $product['image'] ?>" alt="" class="product__item-img">

            <div class="home-product-item__img-logo">
                <span class="a">43%</span>
                <span class="b">Giảm</span>
            </div>

            <div class="home-product-item__img-lable">
                <i class="fas fa-check"></i>
                <span class="">Yêu thích</span>
            </div>
        </div>

        <div class="ms-5" style="flex: 1">
            <h4 class="home-product-item__name">
                <?= $product['name'] ?>
            </h4>
            <div class="home-product-item__price justify-content-start">
                <span class="a">1.200.000 đ</span>
                <span class="b ms-5"><?= $product['price'] ?> đ</span>
            </div>
            <div class="mt-4">
                <button class="btn btn-danger" onclick="handleAddPr()">Thêm vào giỏ hảng</button>
                <button class="ms-5 btn btn-primary">Mua ngay</button>
            </div>

            <div class="description mt-4">
                <p class=""><?= $product['description'] ?></p>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <form class="" style=" max-width: 500px" action="<?= DOMAIN ?>/product/handleComment" method="post">
            <label for="exampleInputEmail1" class="form-label text-dark fs-3">Mời nhập nhận xét</label>
            <div class="d-flex mt-2">
                <input type="hidden" name="userId" value="<?= isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '' ?>">
                <input type="hidden" name="productId" value="<?= $products['id'] ?>">
                <input type="text" name="content" class="form-control me-3" id="exampleInputEmail1" placeholder="Mời nhập đánh giá của bạn" required>
                <button type="submit" class="btn btn-primary">Gửi đánh giá</button>
            </div>
        </form>

        <div class="comments ps-3 mt-3">
            <?php if (empty($comments)) echo 'Chưa có đánh giá cho sản phẩm này. Vui lòng đánh giá để chúng tôi biết ý kiến của bạn'  ?>
            <?php foreach ($comments as $key => $comment) : ?>
                <div class="comment-item">
                    <div class="d-flex">
                        <h4 class="text-info"><?= $comment['username'] ?></h4>
                        <span class="ms-4"><?= $comment['created_at'] ?></span>
                    </div>
                    <p class="content ps-2 fs-5 text-success"><?= $comment['content'] ?></p>
                    <hr class="hr">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<script src="<?= DOMAIN ?>/public/js/cart.js"></script>