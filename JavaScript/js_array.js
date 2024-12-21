// array convert
/*
var arr1 = ['A', 'B', 'C', 'D'];
var arr2 = ['E', 'F', 'G', 'H'];

var arr3 = arr1.concat(arr2);

document.write(arr3);
*/

// array from
/*

var Title = 'Learn with Dilder';
var arrayTitle = Array.from(Title);

document.write(arrayTitle[11]);

*/

// array filter
/*
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];

var result = numArray.filter(function (item) {
    return item > 50;
});

document.write(result);

*/

// array find and findIndex
/*
var arrayNum = [32, 37, 65, 98, 71, 28, 37];

// var result = arrayNum.find(function (val) {
//     return val < 60;
// });

var result = arrayNum.findIndex(function (val) {
    return val > 70;
});

document.write(result);

*/

// foreach method

/*
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];

numArray.forEach(function (val) {
    document.write(val + '<br>');
});

*/

// javascript array includes
/*
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];
// var result = numArray.includes(100);
var result = numArray.indexOf(100);

document.write(result);

*/

// reverse / push array / pop
/*
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];
// var result = numArray.reverse();
// numArray.push(100);
numArray.pop();
document.write(numArray);


*/

// array sort
/*
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];
numArray.sort().reverse();
document.write(numArray + '<br>');

*/

// array slice

/*

var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];
var result = numArray.slice(0, 2);
document.write(result);

*/

// splice array remove and add both
var numArray = [35, 67, 12, 69, 35, 45, 73, 36, 27];
// numArray.splice(index, removeCount, addElement);
// numArray.splice(1, 2); // second parameter call for remove
numArray.splice(1, null, 100); // second parameter call for remove
document.write(numArray);
