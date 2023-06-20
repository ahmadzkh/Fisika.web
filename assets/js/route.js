// 0

// const route = (event) => {
//     event = event || window.event;
//     event.preventDefault();
//     window.history.pushState({}, "", event.target.href);
//     handleLocation();
// };

// const routes = {
//     "/": "/pages/index.html",
//     "/kelompok": "/pages/kelompok.html",
// };

// const handleLocation = async () => {
//     const path = window.location.pathname;
//     const route = routes[path] || routes[404];
//     const html = await fetch(route).then((data) => data.text());
//     document.getElementById("main-page").innerHTML = html;
// };

// window.onpopstate = handleLocation;
// window.route = route;

// handleLocation();

const showLoader = () => {
    const loaderContainer = document.getElementById("loader-container");
    const index = document.getElementById("main-page");
    loaderContainer.style.display = "block";
};

const hideLoader = () => {
    const loaderContainer = document.getElementById("loader-container");
    loaderContainer.style.display = "none";
    loaderContainer.remove();
};

const loadLoader = async () => {
    const loaderResponse = await fetch("/pages/loader.html");
    const loaderHtml = await loaderResponse.text();
    const loaderContainer = document.getElementById("loader-container");
    loaderContainer.innerHTML = loaderHtml;
};

const handleLocation = async () => {
    const path = window.location.pathname;
    const routePath = routes[path] || routes[404];

    showLoader(); // Show the loader before fetching the content

    try {
        await new Promise((resolve) => setTimeout(resolve, 2000));
        const response = await fetch(routePath);
        if (!response.ok) {
            throw new Error(`Error ${response.status}: ${response.statusText}`);
        }
        const html = await response.text();
        document.getElementById("main-page").innerHTML = html;
    } catch (error) {
        console.error(error);
        // Handle the error, e.g., display an error message
    } finally {
        hideLoader(); // Hide the loader after the content is loaded (or an error occurred)
    }
};

const route = (event) => {
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    loadLoader();
    handleLocation();
};

const routes = {
    "/": "/pages/home.html",
    "/kelompok": "/pages/kelompok.html",
};

window.onpopstate = handleLocation;
window.route = route;

loadLoader(); // Load the loader from the external file
handleLocation();