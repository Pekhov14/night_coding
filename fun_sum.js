function sum() {
    let result = 0;
    let elements = Array.from(arguments); // в elements > массив из арбументов
    for(let i = elements.length - 1; i >= 0; i--) {
        result += elements[i];
    }
    return result;
}


console.log(sum(1, 2));
console.log(sum(1, 2, 3));