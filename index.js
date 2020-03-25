const f = Math.floor(Math.random() * 30000) + 1;
const l = Math.floor(Math.random() * 30000) + 1;

function fetchName(first, last) {
    return fetch(`/${first}/${last}`)
        .then(res => res.json());
}

fetchName(f, l)
    .then(name => {
        document.getElementById('name').textContent = `${name[0]} ${toTitleCase(name[1])}`;
    });


function toTitleCase(str) {
    return str.replace(
        /\w\S*/g,
        function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        }
    );
}

