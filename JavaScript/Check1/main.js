// 問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。

let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
    for (i = 0; i < num.length; i++) {
        if (num[i] % 2 === 0) {
            console.log(num[i] + 'は偶数です');
        }
    }
}

isEven(numbers);

// 問2:以下の要件を満たすように実装してください。
//  【要件】
//   インスタンス化した時にガソリンとナンバーがセットされるようなCarクラスを作成する
//   「ガソリンは〇〇です。ナンバーは△△です」と出力される「getNumGas」という関数を作成する

class Car {
    constructor(gasoline, number) {
        this.gasoline = gasoline;
        this.number = number;
    }

    getNumGas(){
        console.log(`ガソリンは${this.gasoline}です。ナンバーは${this.number}です`);
    }

}

let benz = new Car('ハイオク', '12-34');
benz.getNumGas();
