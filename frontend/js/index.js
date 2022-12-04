const subimages = document.querySelectorAll('.subimage')
const product = document.querySelector('.productImage')
const checkout = document.getElementById('checkout')
const productname = document.querySelectorAll('.productName')
const image = document.querySelectorAll('.productImage')
const price = document.querySelectorAll('.productPrice')
const finalPriceInput = document.getElementById('finalprice')
const finalNameInput = document.getElementById('names')
const contactForm = document.getElementById('contactForm')

const namesArr = []

const finalCart = []
const finalPriceArr = []

const prices = price.forEach(price=>{
    finalPriceArr.push(parseInt(price.value))
})
const finalPrice = finalPriceArr.reduce((acc,val)=>{
    return acc + val
},0)

const names = productname.forEach(name => {
    namesArr.push(name.innerHTML)
})

subimages.forEach(image => {
    image.addEventListener('click', () => {
        const mainImage = product.src
        product.src = image.src
        image.src = mainImage
    })
})


finalPriceInput.value = finalPrice

contactForm.addEventListener('submit', )
