function getLengthsOfStrings(arr) {
    // Membuat array baru yang berisi panjang dari setiap string dalam array yang diberikan
    return arr.map(function(str) {
        return str.length;
    });
}

let arrayOfStrings = ["Nutella", "Mars", "Snickers", "Kinder", "Cadbury"];
let lengthsArray = getLengthsOfStrings(arrayOfStrings);

console.log(lengthsArray); // Output: [7, 4, 8, 6, 7]
