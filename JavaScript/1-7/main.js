class Taiyaki {
    constructor(nakami) {
        this.nakami = nakami;
    }
    inside() {
        console.log(`中身は${this.nakami}です`);
    }
}

let anko = new Taiyaki('あんこ');
anko.inside();
let cream = new Taiyaki('クリーム');
cream.inside();
let cheese = new Taiyaki('チーズ');
cheese.inside();