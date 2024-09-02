function checkPalindrome(str) {
    // Membalikkan string dan memeriksa apakah sama dengan string asli
    let reversedStr = str.split('').reverse().join('');
    if (str === reversedStr) {
        // Jika palindrome, kembalikan panjang string
        return str.length;
    } else {
        // Jika tidak palindrome, kembalikan false
        return false;
    }
}

// Contoh penggunaan
let string1 = "aabaa";
let string2 = "daba";

console.log(checkPalindrome(string1)); // Output: 5
console.log(checkPalindrome(string2)); // Output: false
