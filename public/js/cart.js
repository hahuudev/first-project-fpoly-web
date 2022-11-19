function getValueInput(name) {
    const el = document.getElementsByName(name)[0];

    console.log(el.value);
}
const el = document.getElementById("data-product");

const data = JSON.parse(el.getAttribute("data-product"));

const { id, image, description, price } = data;

const product = {
    id,
    image,
    description,
    price,
    sl: 1,
};
const cartEl = document.querySelector(".cart-count");
const carts = JSON.parse(localStorage.getItem("carts")) || [];

const handleAddPr = () => {
    cartEl.textContent = carts.length;
    const prdValid = carts.findIndex((item) => item.id == product.id);

    if (prdValid != -1) {
        const product = { id, image, description, price, sl: carts[prdValid].sl + 1 };
        carts[prdValid] = product;
    } else {
        carts.push(product);
    }
    localStorage.setItem("carts", JSON.stringify(carts));
    console.log(carts);
};
