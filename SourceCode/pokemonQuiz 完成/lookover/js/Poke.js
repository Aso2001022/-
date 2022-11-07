//getElementById
let indexArray = [];
let imgArray = [];
let cnt = 1;

while(cnt<=10){

    indexArray[cnt-1] = document.getElementById("index"+cnt).textContent;
    imgArray[cnt-1] = document.getElementById("img"+cnt);
    imgArray[cnt-1].src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${indexArray[cnt-1]}.png`;
    cnt++;

}






