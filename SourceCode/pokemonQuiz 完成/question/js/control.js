//難易度
let levelOfDifficulty = document.getElementById("levelOfDifficulty").textContent;
console.log(levelOfDifficulty);

//図鑑インデックス
let indexArray = [];
let questionNum = document.getElementById('questionNum').textContent;
console.log(questionNum);
for(let i=1 ; i < questionNum ; i++){
    indexArray[i-1] = document.getElementById("index"+i).textContent;
    console.log(indexArray[i-1]);
}

//問題範囲
let range = 0;
let rangeArray = [];

//最小値(範囲)
let min = 0;

//図鑑番号
let id = 0;

if( levelOfDifficulty == 3 ){

    range = 151;
    for(let i = 0 ; i < 151 ; i++){
        rangeArray[i] = i+1;
    }

}else if( levelOfDifficulty == 2 ){

    range = 99;
    for(let i = 0 ; i < 99 ; i++){
        rangeArray[i] = i+1;
    }

}else{

    range = 49;
    for(let i = 0 ; i < 49 ; i++){
        rangeArray[i] = i+1;
    }

}

console.log(range);

//すでに出た図鑑番号を省く
for(let i = 0; i < indexArray.length; i++){
    rangeArray = rangeArray.filter(item => item != indexArray[i]);
}
console.log(rangeArray);
//最大値(範囲)
let max = rangeArray.length;
min = Math.ceil(min);
max = Math.ceil(max);
id = rangeArray[Math.floor(Math.random() * (max - min) + min)];
console.log( id );

//図鑑番号(HTML)
let No = document.getElementById("id").textContent = id;
console.log(No);

//フォーム図鑑番号
let Num = document.getElementById("Num").value = id;

