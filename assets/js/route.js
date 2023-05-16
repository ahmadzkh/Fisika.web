const route = (event) => {
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    hadnleLocation();
};

const routes = {
    "/": "index.html",
    "/kelompok": "kelompok.html",
};

const hadnleLocation = async() => {
    const path = window.location.pathname;
    const route = routes[path] || routes[404];
    const html = await fetch(route).then((data) => data.text());
    document.getElementById("main-page").innerHTML = hmtl;
};

window.onpopstate = hadnleLocation;
window.route = route;

hadnleLocation();