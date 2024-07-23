const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");

burgerMenu.addEventListener("click", () => {
    navbarMenu.classList.toggle("is-active");
    burgerMenu.classList.toggle("is-active");
});

// Переключатель для выдвижного меню
const dropdown = document.querySelectorAll(".dropdown");

dropdown.forEach((item) => {
    const dropdownToggle = item.querySelector(".dropdown-toggle");

    dropdownToggle.addEventListener("click", () => {
        const dropdownShow = document.querySelector(".dropdown-show");
        toggleDropdownItem(item);

        if (dropdownShow && dropdownShow != item) {
        toggleDropdownItem(dropdownShow);
        }
    });
});

// Отображение выдвижного меню
const toggleDropdownItem = (item) => {
    const dropdownContent = item.querySelector(".dropdown-content");

    // Remove other dropdown that have 'dropdown-show' class
    if (item.classList.contains("dropdown-show")) {
        dropdownContent.removeAttribute("style");
        item.classList.remove("dropdown-show");
    } else {
        // Added max-height on active 'dropdown-show' class
        dropdownContent.style.height = dropdownContent.scrollHeight + "px";
        item.classList.add("dropdown-show");
    }
};

// Fixed dropdown menu on window resizing
window.addEventListener("resize", () => {
    if (window.innerWidth > 992) {
        document.querySelectorAll(".dropdown-content").forEach((item) => {
            item.removeAttribute("style");
        });
        dropdown.forEach((item) => {
            item.classList.remove("dropdown-show");
        });
    }
});

// Fixed navbar menu on window resizing
window.addEventListener("resize", () => {
    if (window.innerWidth > 992) {
        if (navbarMenu.classList.contains("is-active")) {
            navbarMenu.classList.remove("is-active");
            burgerMenu.classList.remove("is-active");
        }
    }
});