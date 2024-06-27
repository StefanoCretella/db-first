// script.js

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function(event) {
        const brand = document.querySelector('input[name="brand"]').value;
        const model = document.querySelector('input[name="model"]').value;
        const year = document.querySelector('input[name="year"]').value;
        const mileage = document.querySelector('input[name="mileage"]').value;
        const price = document.querySelector('input[name="price"]').value;
        const fuel_type = document.querySelector('input[name="fuel_type"]').value;
        const condition = document.querySelector('input[name="condition"]').value;

        if (!brand || !model || !year || !mileage || !price || !fuel_type || !condition) {
            alert("Per favore, compila tutti i campi obbligatori.");
            event.preventDefault();
        } else if (isNaN(year) || isNaN(mileage) || isNaN(price)) {
            alert("Per favore, inserisci valori numerici validi per anno, chilometraggio e prezzo.");
            event.preventDefault();
        }
    });
});
