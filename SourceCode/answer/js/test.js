var request = new XMLHttpRequest();

// URLを開く
request.open('GET', "https://pokeapi.co/api/v2/pokemon/", true);
request.responseType = 'json';

// レスポンスが返ってきた時の処理を記述 
request.onload = function () {
  // レスポンスが返ってきた時の処理

  var data = this.response;
  console.log(data);

}
