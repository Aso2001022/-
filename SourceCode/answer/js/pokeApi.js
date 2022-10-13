//画像
let PokemonAnswerImg = document.getElementById("PokemonAnswerImg");

//日本語プロフィール
let JapaneseNumber = document.getElementById("JapaneseNumber").textContent;
let JapaneseName = document.getElementById("JapaneseName").textContent;
let JapaneseCategory = document.getElementById("JapaneseCategory").textContent;
let JapaneseHeight = document.getElementById("JapaneseHeight").textContent;
let JapaneseWeight = document.getElementById("JapaneseWeight").textContent;

//英語プロフィール
let EnglishNumber = document.getElementById("EnglishNumber").textContent;
let EnglishName = document.getElementById("EnglishName").textContent;
let EnglishCategory = document.getElementById("EnglishCategory").textContent;
let EnglishHeight = document.getElementById("EnglishHeight").textContent;
let EnglishWeight = document.getElementById("EnglishWeight").textContent;

//日本語詳細文
let JapaneseDetail = document.getElementById("JapaneseDetail").textContent;

//英語詳細文
let EnglishDetail = document.getElementById("EnglishDetail").textContent;

//ポケモンの図鑑番号
let i =25;

const fetchPokemon = () => {

   const promises = []; 
   const url = `https:pokeapi.co/api/v2/pokemon/${i}`;


   promises.push(fetch(url).then((res) => res.json()));
   Promise.all(promises).then( results => {

       const pokemon = results.map((data) => ({

            img: data.sprites.other['official-artwork'].front_default,
            id: data.id,
            name: data.name,
            height: (data.height/10).toFixed(1),
            weight: (data.weight/10).toFixed(1),
            

       }));

       displayPokemon(pokemon);

   });
};

const fetchPokemonDetail = () => {

    const promises = []; 
    const detailUrl = `https://pokeapi.co/api/v2/pokemon-species/${i}`;
 
 
    promises.push(fetch(detailUrl).then((res) => res.json()));
    Promise.all(promises).then( results => {
 
        const pokemonDetail = results.map((data) => ({
 
            jaName:data.names[0].name,
            jaGenera:data.genera[0].genus,
            enGenera:data.genera[7].genus,
            jaProfile:data.flavor_text_entries[22].flavor_text,
            enProfile:data.flavor_text_entries[1].flavor_text
            
        }));
        displayPokemonDetail(pokemonDetail);
 
    });
 
 };

const displayPokemon = (pokemon) => {

    console.log(pokemon);

    PokemonAnswerImg= pokemon.map( pokemon => 
        PokemonAnswerImg.src=pokemon.img
    ).join('');

    //日本語プロフィール
    document.getElementById('JapaneseNumber').textContent = pokemon.map( pokemon => 
        'ずかんばんごう：' +pokemon.id
    ).join('');
    document.getElementById('JapaneseCategory').textContent = pokemon.map( pokemon => 
        'ぶんるい：' +pokemon.genera
    ).join('');
    document.getElementById('JapaneseHeight').textContent = pokemon.map( pokemon => 
        'たかさ：' +pokemon.height + 'm'
    ).join('');
    document.getElementById('JapaneseWeight').textContent = pokemon.map( pokemon => 
        'おもさ：' +pokemon.weight + 'kg'
    ).join('');

    //英語プロフィール
    document.getElementById('EnglishNumber').textContent = pokemon.map( pokemon => 
        'No：' +pokemon.id
    ).join('');

    document.getElementById('EnglishName').textContent = pokemon.map( pokemon => 
        'Name：' +pokemon.name
    ).join('');
    document.getElementById('EnglishHeight').textContent = pokemon.map( pokemon => 
        'Height：' +pokemon.height + 'm'
    ).join('');
    document.getElementById('EnglishWeight').textContent = pokemon.map( pokemon => 
        'Weight：' +pokemon.weight + 'kg'
    ).join('');

    //英語詳細文


};

const displayPokemonDetail = (pokemonDetail) => {

    console.log(pokemonDetail);

    document.getElementById('JapaneseName').textContent = pokemonDetail.map( pokemonDetail => 
        'なまえ：' +pokemonDetail.jaName
    ).join('');

    document.getElementById('JapaneseCategory').textContent = pokemonDetail.map( pokemonDetail => 
        'ぶんるい：' +pokemonDetail.jaGenera
    ).join('');
    document.getElementById('EnglishCategory').textContent = pokemonDetail.map( pokemonDetail => 
        'Category：' +pokemonDetail.enGenera
    ).join('');
    document.getElementById('JapaneseDetail').textContent = pokemonDetail.map( pokemonDetail => 
        pokemonDetail.jaProfile
    ).join('');
    document.getElementById('EnglishDetail').textContent = pokemonDetail.map( pokemonDetail => 
        pokemonDetail.enProfile
    ).join('');

}

fetchPokemon();
fetchPokemonDetail();




