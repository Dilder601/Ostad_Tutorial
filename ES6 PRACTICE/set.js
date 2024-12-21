var mySet = new Set();

mySet.add('Bangladesh');
mySet.add('India');
mySet.add('Pakistan');
mySet.add('India');
mySet.add('Japan');
mySet.add('China');
mySet.add('India');

// mySet.clear();

// mySet.delete('India');

// console.log(mySet.size);

if (mySet.has('India')) {
    console.log('Boycott');
} else {
    console.log('Yes');
}
