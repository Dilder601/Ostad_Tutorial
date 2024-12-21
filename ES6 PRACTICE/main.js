// map

var myMap = new Map();

myMap.set('key1', 'a');
myMap.set('key2', 'b');
myMap.set('key3', 'c');
myMap.set('key4', 'd');
myMap.set('key5', 'e');

// console.log(myMap.values());

// myMap.delete('key1');
// myMap.delete('key2');

// myMap.clear();

//console.log(myMap.get('key5'));

if (myMap.has('key1')) {
    console.log('YES');
} else {
    console.log('No');
}

// for (let val of myMap.values()) {
//     console.log(val);
// }

// array;

// var myArray = ['a', 'b', 'c', 'd', 'e'];

// for (let item of myArray) {
//     console.log(item);
// }

// return function

// function funOne() {
//     return 20;
// }

// function funTwo() {
//     return 50;
// }

// console.log(funOne() + funTwo());

// rest parameterized function

// function restFun(...x) {
//     console.log(x[2]);
// }

// restFun(1, 2, 3, 4, 5, 6, 'a', 'b', 'c');

//parameterized function

// function valSum(x, y) {
//     var result = x + y;

//     console.log('My result is: ' + result);
// }

// valSum(10, 30);

// simple function

// function valSum() {
//     var x = 10;
//     var y = 20;
//     var result = x + y;

//     console.log('My result is: ' + result);
// }

// valSum();

// decision making

// var billGates = { shirt: true, shirtColor: 'offWhite', smile: true, swatter: true, swatterColor: 'gray' };

// if (billGates['shirtColor'] == 'red') {
//     console.log('Shirt Color is red');
// } else if (billGates['shirtColor'] == 'green') {
//     console.log('Shirt Color is Green');
// } else {
//     console.log('Shirt color is not Found');
// }

// dynamic function

// var name = function (nameVal) {
//     return nameVal;
// };

// console.log(name('Dilder Hossain'));

// rest parameters

// function calculation(...nums) {
//     let sum = 0;

//     for (let i of nums) {
//         sum = sum + i;
//     }

//     console.log(sum);
// }

// calculation(1, 2, 3, 4, 5, 6, 8, 9);

// spread operator

// let FirstAlphabet = ['A', 'B', 'C'];
// let lastAlphabet = [...FirstAlphabet, 'X', 'Y', 'Z'];
// //let result = [...FirstAlphabet, lastAlphabet];

// console.log(lastAlphabet);

// 'use strict';
// Myname();

// function Myname() {
//     name = 'Dilder Hossain';
// }
