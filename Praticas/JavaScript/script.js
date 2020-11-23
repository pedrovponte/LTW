// console.log('Hello World');
 
/*
console.log("Products");
window.addEventListener('load', function() {
    let products = document.getElementById('products')
    console.log(products)
})
*/

console.log("Form:")
let forms = document.getElementsByTagName('form')
console.log(forms)
console.log("Form", forms[0].outerHTML)

console.log("Quantity:")
let quantity = document.querySelector("form input[name='quantity']")
console.log(quantity)
console.log(quantity.outerHTML)

console.log("All inputs:")
let input = document.querySelectorAll("form input")
for(let i = 0; i < input.length; i++) {
    console.log(input[i])
    console.log(input[i].outerHTML)
}

let description = document.querySelector("form label:nth-child(1) input")
console.log("Input", description.outerHTML)

let total = document.querySelector("total")

let form = document.getElementsByTagName('form')[0]
form.addEventListener('submit', function(e) {

    e.preventDefault()
    let newRow = document.createElement("tr")
    newRow.innerHTML = `<tr><td>${description.value}</td><td><input value=${quantity.value}></td><td><input type="button" value="Remove"></td></tr>`
    
    let table = document.getElementById("products")
    table.append(newRow)
    alert('Submitted!')

    total.innerHTML = parseInt(total.innerHTML) + parseInt(quantity.value)

    let removeButton = newRow.querySelector("td:last-child input")
    let quantityInput = newRow.querySelector("td:nth-child(2) input")

    removeButton.addEventListener('click', function (e) {
        total.innerHTML = parseInt(total.innerHTML) - parseInt(quantityInput.value)
        newRow.remove()
    })

    quantityInput.addEventListener()
})

