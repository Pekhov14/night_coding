function clean(elements) {
    return elements.filter((el) => !isNaN(Number(el)));
}

function verify(elements) {
    elements.forEach((el) => {if (isNaN(Number(el))) throw new Error("Not a number")})
    return elements;
}

function sum() {
    return clean(Array.from(arguments)).reduce((a, b) => Number(a) + Number(b), 0);
}

// Spec
console.log(sum());
console.log(sum(1));
console.log(sum(1, 2));

// Gigo
console.log(sum('1', '1'));
console.log(sum('as', '1')); // clean, 1
console.log(sum([], {}, '1', 1)); // 2
console.log(sum([1], {}, '1', 1)); // 3