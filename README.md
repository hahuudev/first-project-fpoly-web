# first-project-fpoly-web
# Author
Member: Nguyễn Hà Hữu, Đỗ Tiến Đạt, Lê Quang Đức,....
# Description
Đây là tragn web bán hàng

# Luồng chạy
- Các forder
    +  core chứa các hàm để kế thừa tránh phải viết lại một logic nhiều lần Vd như hàm render 
    + pulic để chứa ảnh, css, js ................
    + src chứa toàn bộ source code 
    + file .htacess để cấu hình router url làm sao match đúng với tuyến đường ở controller (copy trên google nên cũng không hiểu )
    + phpConfig dùng để requrie các forder CORE và chứa các biến global 
    + file App.php cấu hình làm sao để đường dẫn url chạy đúng với các file ở mục view(file nầy ko cần sửa j nữa)
- Các biến toàn cục file phpConfig
    + _DIR_ROOT: Vị trí thư mục gốc trong máy tính 
    + DOMIAN link url gốc
- Luồng chạy
    + Khi nhập trên url vd: locahosst/forder gôcd/ mặc định sẽ render ở file index controller Home.php
    + Vd muốn sang trang locahosst/forder gôcd/products thì sẽ cần tạo Controler là Product.php nó sẽ render ỏ function index
    + Còn muốn sang trang locahosst/forder gôcd/products/detail sẽ vẫn ở class Product.php nó render ở function detail() {}
    => Muốn chạy ở router nào thì sẽ tạo Controller và các function tương ứng trong Controller đó