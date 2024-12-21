class parent {
    fun1() {
        console.log('This is my Fun1');
    }

    fun2() {
        console.log('This is my Fun2');
    }
}

class child extends parent {
    fun3() {
        console.log('This is my Fun3');
    }
}

var obj = new child();

obj.fun1();
obj.fun2();
obj.fun3();
