// for looping
for(let i = 0; i < 10; i++){
    console.log("Perulangan ke-" + i);
}

// while
let counter2 = 0;
while(counter2 < 10){
    console.log("Perulangan ke-" + counter2);
    counter2++;
}

// do while
let counter = 0;
do {
    console.log("Perulangan ke-" + counter);
    counter++;
} while (counter < 10);


// foreach
let kota = ["Bandung", "Cimahi", "Ciwaruga", "Sarijadi"];
kota.forEach(function(item, index){
    console.log(index + "." + item);
});

/**
 * Perulangan repeat
 */

console.log("Tampilkan tulisan ini 10 kali ".repeat(10));