function sumOfEvenIntegers(arr) {
    // Menggunakan filter untuk mendapatkan bilangan genap, kemudian menjumlahkannya dengan reduce
    return arr.filter(function(num) {
        return num % 2 === 0;
    }).reduce(function(sum, num) {
        return sum + num;
    }, 0);
}

let arrayOfIntegers = [15, 18, 3, 9, 6, 2, 12];
let sumOfEvens = sumOfEvenIntegers(arrayOfIntegers);

console.log(sumOfEvens); // Output: 38
