function sum() {
    return Array.from(arguments).reduce((a, b) => a + b, 0);
}

// Spec
console.log(sum());
console.log(sum(1));
console.log(sum(1, 2));