<header class="header d-flex" style="height: 100px;">
    <div class="m-auto d-flex align-items-center justify-content-between h-full" style="max-width: 1200px">
        <a href="<?= DOMAIN ?>" class="text-light fs-2" style="width: 300px">X-Shop</a>

        <div class="d-flex flex-column align-items-center justify-content-center" style="flex: 1">
            <form class="form d-flex " style="width: 500px;height: 40px" action="<?= DOMAIN ?>/product/search" method="GET">
                <input type="text" name="q" class="form-control" placeholder="Bạn muốn tìm sản phẩm gì?" required>

                <button type="submit" class="ms-2 btn btn-primary">Search</button>
            </form>

            <nav class="nav ">
                <a class="nav-link text-light" href="<?= DOMAIN ?>">Trang chủ</a>

            </nav>
        </div>


        </ul>


        <div class=" d-flex" style="width: 300px">
            <a href="<?= DOMAIN ?>/cart" class="cart-icon">Giỏ hàng
                <span class="cart-count">20</span>
            </a>
            <a href="<?= DOMAIN ?>/cart" class="cart ms-5"><img src="<?= DOMAIN ?>/public/img/cart.png" width="30" alt=""></a>
            <a class="ms-5 d-block nav-link " href="/web204/auth"><button type="button" class="btn btn-success">Đăng nhập</button></a>

            <div class="dropdown ms-5">
                <img class="dropdown-toggle rounded-circle" src="https://cf.shopee.vn/file/af21a72af277c6a11e1a35995e07b505" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="40px" height="40px" />
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= DOMAIN ?>/admin">Admin</a></li>
                    <li><a class="dropdown-item" href="/web204/auth/update/<?= $username ?>">Trang cá nhân</a></li>
                    <li><a class="dropdown-item" href="/web204/auth/logout">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>