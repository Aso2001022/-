function japaneseButtonClick(){

    let japaneseText = document.getElementById("japaneseText");
    let japaneseDetailText = document.getElementById("JapaneseDetailProfile");
    let englishDetailText = document.getElementById("EnglishDetailProfile");
    let englishText = document.getElementById("englishText");
    if(japaneseText.hidden && japaneseDetailText.hidden){
        japaneseText.hidden = false;
        japaneseDetailText.hidden = false;
        englishDetailText.hidden = true;
        englishText.hidden = true ;
    }

}
function englishButtonClick(){

    let japaneseText = document.getElementById("japaneseText");
    let japaneseDetailText = document.getElementById("JapaneseDetailProfile");
    let englishDetailText = document.getElementById("EnglishDetailProfile");
    let englishText = document.getElementById("englishText");
    if(englishText.hidden && englishDetailText.hidden){
        japaneseText.hidden = true;
        japaneseDetailText.hidden = true;
        englishDetailText.hidden = false;
        englishText.hidden = false ;
    }

}
