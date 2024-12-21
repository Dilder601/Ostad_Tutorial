// document.write('Hello Javascript');

// variables
/*
var x = 20;
var y = 20;
var sum = x + y;

document.write(sum);*/

// Non Primitive Data Type

// object data type

/*
var a = {
    Name: 'Dilder Hossain',
    Age: 30,
    City: 'Feni'
};

document.write(a.Name);
*/

// array data type
/*
var cities = ['Dhaka', 'Feni', 'Chittagong'];

document.write(cities);
*/

// javascript if-else statement
/*
var student = {
    Name: 'Dilder',
    Marks: 75,
    Class: '12Th Std'
};

if (student.Marks >= 80) {
    document.write(student.Name + ' Got A+');
} else if (student.Marks >= 70 && student.Marks < 80) {
    document.write(student.Name + ' Got A');
} else if (student.Marks >= 60 && student.Marks < 70) {
    document.write(student.Name + ' Got A-');
} else if (student.Marks >= 50 && student.Marks < 60) {
    document.write(student.Name + ' Got B');
} else if (student.Marks >= 40 && student.Marks < 50) {
    document.write(student.Name + ' Got C');
} else if (student.Marks >= 33 && student.Marks < 40) {
    document.write(student.Name + ' Got D');
} else {
    document.write(student.Name + ' Failed');
}*/

// javascript switch case

/*
var student = {
    Name: 'Dilder',
    Marks: 24,
    Class: '12Th Std'
};

switch (true) {
    case student.Marks >= 80 && student.Marks <= 100:
        document.write(student.Name + ' Got A+');
        break;
    case student.Marks >= 70 && student.Marks < 80:
        document.write(student.Name + ' Got A');
        break;
    case student.Marks >= 60 && student.Marks < 70:
        document.write(student.Name + ' Got A-');
        break;
    case student.Marks >= 50 && student.Marks < 60:
        document.write(student.Name + ' Got B');
        break;
    case student.Marks >= 40 && student.Marks < 50:
        document.write(student.Name + 'Got C');
        break;
    case student.Marks >= 33 && student.Marks < 40:
        document.write(student.Name + 'Got D');
        break;
    default:
        document.write(student.Name + ' Failed');
}
*/

// javascript loop
// for loop

var i;
var n = 10;

for (i = 1; i <= n; i++) {
    if (i == 5) {
        // return;
        break;
        // continue;
    }
    document.write(i + ' <button> For Loop </button> <br>');
}

// while loop

var i = 1;
var n = 10;

while (n--) {
    document.write(i + ' <button> While Loop </button> <br>');
    i = i + 1;
}

// do while loop
var i = 1;
var n = 10;
do {
    document.write(i + ' <button> Do While Loop </button> <br>');
    i = i + 1;
} while (n--);
