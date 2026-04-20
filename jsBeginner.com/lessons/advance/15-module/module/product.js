const a = 2003;

let products = [
    {
        id: 1,
        product_name: "Iphone 14 Pro Max 128GB",
        price: '33.990.000'
    },
    {
        id: 2,
        product_name: "Iphone 13 Pro Max 128GB",
        price: '29.790.000'
    }
]

function show() {
    console.log("Hiển thị danh sách sản phẩm");
}

class Product {
    constructor() {
        
    }
    render() {
        console.log("Xuất danh sách sản phẩm lên giao diện");
    }
}
// export {a, products, show, Product};
export {a, products, show, Product as default};
// export default Product;