// 問1：10、15、20、25を含む配列の変数scoresを用意して、画像のように偶数だけを出力してください。
let scores = [10, 15, 20, 25];
console.log(scores);
for (i = 0; i < scores.length; i++) {
    if (scores[i] % 2 === 0) {
        console.log(scores[i] + "は偶数です");
    }
}