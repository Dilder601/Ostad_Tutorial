class myClass {
    //parameterized constructor
    constructor(a, b) {
        this.FirstNum = a;
        this.SecondNum = b;
    }
    sumVal() {
        let result = this.FirstNum + this.SecondNum;
        console.log(result);
    }
}

var obj = new myClass(20, 35);

obj.sumVal();
