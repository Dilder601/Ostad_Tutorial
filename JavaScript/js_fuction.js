var num1 = 150;
var num2 = 360;
var result;

function sumDigits(pNUM1, pNUM2) {
    result = pNUM1 + pNUM2;
    document.write('My sum Value is: ' + result + '<br>');
}

sumDigits(num1, num2);

// return in function

var x = 15;
var y = 20;

function addNumbers(n1, n2) {
    return n1 + n2;
}

valResult = addNumbers(x, y) * 5;

document.write('Function return value is: ' + valResult);
