const subimages = document.querySelectorAll('.subimage')
const product = document.querySelector('.productImage')
const checkout = document.getElementById('checkout')
const qty = document.getElementById('qty')

subimages.forEach(image => {
    image.addEventListener('click', () => {
        const mainImage = product.src
        product.src = image.src
        image.src = mainImage
    })
})

checkout.addEventListener('submit', (e) => {

})