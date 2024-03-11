ready(function() {
    // for no autocomplete
    const inputs = document.querySelectorAll("form input");
    inputs.forEach(element => {
        element.setAttribute("readonly", true);
    });
    setTimeout(() => {
        inputs.forEach(element => {
            element.removeAttribute("readonly");
        });
    }, 500);
    setTimeout(() => {
        const $loader = document.querySelector("#loader-screen");
        $loader.classList.replace('show-loader', 'hide-loader');
        setTimeout(() => {
            $loader.remove();
        }, 400);
    }, 1000);
});
