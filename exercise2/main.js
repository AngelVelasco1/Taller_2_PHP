import {allConfig} from '../config/functions.js'

let form = document.querySelector('#calculate');
let headers = new Headers({'Content-type': 'application.json'})

form.addEventListener('submit', async(e) => {
    e.preventDefault();

    let data = Object.fromEntries(new FormData(e.target));
    let config = allConfig('POST', headers, JSON.stringify(data));

    let res = await (await fetch('api.php', config)).text();

    let results = document.querySelector('#results');
    results.innerHTML = res;
});