function genap(number) {
    return number % 2 == 0
}

function printGenap(n, isOdd) {
       
       if (isOdd(n)) {
           console.log(`${n} adalah bilangan genap`);
       } else {
           console.log(`${n} adalah bilangan ganjil`);

       }
}

printGenap(3, genap)