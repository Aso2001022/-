let pokemonNo = document.getElementById("id").textContent;

let silhouette = document.getElementById("silhouette");

//ポケモン図鑑番号
let i = pokemonNo;

const fetchPokemon = () => {

    const promises = []; 
    const url = `https:pokeapi.co/api/v2/pokemon/${i}`;
 
 
    promises.push(fetch(url).then((res) => res.json()));
    Promise.all(promises).then( results => {
 
        const pokemon = results.map((data) => ({
 
             img: data.sprites.other['official-artwork'].front_default,

        }));
 
        displayPokemon(pokemon);
 
    });
 };

 const displayPokemon = (pokemon) => {

    console.log(pokemon);

    silhouette= pokemon.map( pokemon => 
        silhouette.src=pokemon.img
    ).join('');

};

fetchPokemon();