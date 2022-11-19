<?php
class ProductModel extends Model
{
    public function getFullProducts()
    {
        $sql = "SELECT prd.id, prd.name, cat.name as category, price, sl, prd.description, likeCount, image
         FROM products prd JOIN categories cat ON prd.typeId = cat.id";
        return $this->query($sql, 'FETCHAll');
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        return $this->query($sql, 'FETCH');
    }

    public function searchProduct($search, $category, $start, $end)
    {
       
        $sql =  "SELECT prd.id, prd.name, cat.name as category, price, sl, prd.description, likeCount, image
        FROM products prd JOIN categories cat ON prd.typeId = cat.id WHERE prd.name LIKE '%$search%'";

        if ($category != '') {
            
            $sql = "SELECT prd.id, prd.name, cat.name as category, price, sl, prd.description, likeCount, image
             FROM products prd JOIN categories cat ON prd.typeId = cat.id WHERE prd.name LIKE '%$search%' AND cat.name = '$category'";
        }
        if ($start != '' & $end != '') {
            
            $sql = "SELECT prd.id, prd.name, cat.name as category, price, sl, prd.description, likeCount, image
            FROM products prd JOIN categories cat ON prd.typeId = cat.id WHERE prd.name LIKE '%$search%' AND price <= $end AND  price>= $start";
        }

        if ($category != '' & $start != ''  & $end != '' ) {
            $sql = "SELECT prd.id, prd.name, cat.name as category, price, sl, prd.description, likeCount, image
            FROM products prd JOIN categories cat ON prd.typeId = cat.id WHERE prd.name LIKE '%$search%' 
            AND cat.name = '$category' AND price <= $end AND  price>= $start";
        }

        return $this->query($sql, 'FETCHAll');
    }

    public function getFullCategories()
    {
        $sql = "SELECT * FROM categories";
        return $this->query($sql, 'FETCHAll');
    }

    public function getCategoryByName($name)
    {
        $sql = "SELECT * FROM categories WHERE name = '$name'";
        return $this->query($sql, 'FETCH');
    }
    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM categories WHERE id = '$id'";
        return $this->query($sql, 'FETCH');
    }

    public function addCategory($category)
    {
        $name = $category['name'];
        $description = $category['description'];

        $sql = "INSERT INTO categories (name, description) VALUE ('$name', '$description')";
        $this->query($sql);
    }

    public function addProduct($product)
    {
        $name = $product['name'];
        $price = $product['price'];
        $sl = $product['sl'];
        $description = $product['description'];
        $image = $product['image'];
        $category = $this->getCategoryByName($product['category']);
        if (!empty($category)) {
            $typeId = $category['id'];

            $sql = "INSERT INTO products (name, price, typeId, sl, description, image) 
            VALUES ('$name', $price, $typeId, $sl, '$description', '$image')";

            $this->query($sql);
        }
    }

    public function updateProduct($product)
    {
        $id = $product['id'];
        $name = $product['name'];
        $price = $product['price'];
        $sl = $product['sl'];
        $description = $product['description'];
        $image = $product['image'];
        $category = $this->getCategoryByName($product['category']);

        if (!empty($category)) {
            $typeId = $category['id'];

            $sql = "UPDATE products 
                SET name='$name', price= $price, typeId = $typeId, sl = $sl, description= '$description', image = '$image'
                WHERE id = $id";

            $this->query($sql);
        }
    }

    public function updateCategory($category)
    {
        $id = $category['id'];
        $name = $category['name'];
        $description = $category['description'];

        $sql = "UPDATE categories SET name='$name', description='$description' WHERE id = $id";
        $this->query($sql);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $this->query($sql);
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id = $id";
        $this->query($sql);
    }
}
