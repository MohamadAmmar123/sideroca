window.onload = function() {
    let item = document.querySelectorAll(".menu-item-has-children");

    item.forEach((child) => {
        child.addEventListener("click", (evt) => {
            evt.preventDefault();

            if (child.classList.contains("selected")) {
                child.classList.remove("selected");
            } else {
                child.classList.add("selected");
            }
        });
    });

    item = document.querySelectorAll(".sub-menu > .menu-item");

    item.forEach((child) => {
        child.addEventListener("click", (evt) => {
            evt.stopPropagation();
        });
    });

    let selected = document.querySelector(".current-menu-parent");

    if (selected) {
        selected.classList.add("selected");
    }

    let menu = document.querySelector(".toggle-nav");

    menu.addEventListener("click", (evt) => {
        evt.preventDefault();

        if (!document.querySelector(".sidebar").classList.contains("triggered")) {
            document.querySelector(".sidebar").classList.add("triggered");
        }

        document.querySelector(".sidebar").classList.add("toggled");
    });

    let hide = document.querySelector(".hide-nav");

    hide.addEventListener("click", (evt) => {
        evt.preventDefault();

        document.querySelector(".sidebar").classList.remove("toggled");
    });
};