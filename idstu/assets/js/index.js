seminars_slider_ellips = document.getElementById('seminars_slider_ellipse');
seminars_slider_div = seminars_slider_ellips.querySelectorAll('div');
seminars_slider = document.getElementById("seminars_slider");

seminars_slider_div.forEach(element => {
    element.addEventListener('click', () => {
        seminars_slider_div.forEach(element => {
            element.style.backgroundColor = "#ffffff";
        });
        element.style.backgroundColor = "#145f9a";
        if (element.classList[0] === "ellipse_1") seminars_slider.style.cssText = 'transform: translate(0%, 0px);';
        if (element.classList[0] === "ellipse_2") seminars_slider.style.cssText = 'transform: translate(-100%, 0px);';
        if (element.classList[0] === "ellipse_3") seminars_slider.style.cssText = 'transform: translate(-200%, 0px);';
    })
});

publications_slider_ellips = document.getElementById('publications_slider_ellipse');
publications_slider_div = publications_slider_ellips.querySelectorAll('div');
publications_slider = document.getElementById("publications_slider");

publications_slider_div.forEach(element => {
    element.addEventListener('click', () => {
        publications_slider_div.forEach(element => {
            element.style.backgroundColor = "#ffffff";
        });
        element.style.backgroundColor = "#145f9a";
        if (element.classList[0] === "ellipse_1") publications_slider.style.cssText = 'transform: translate(0%, 0px);';
        if (element.classList[0] === "ellipse_2") publications_slider.style.cssText = 'transform: translate(-100%, 0px);';
        if (element.classList[0] === "ellipse_3") publications_slider.style.cssText = 'transform: translate(-200%, 0px);';
    })
});
