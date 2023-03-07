(() => {
    const openNavMenu = document.querySelector(".open-nav-menu"),
        closeNavMenu = document.querySelector(".close-nav-menu"),
        navMenu = document.querySelector(".nav-menu"),
        menuOverlay = document.querySelector(".menu-overlay"),
        mediaSize = 991;

    openNavMenu.addEventListener("click", toggleNav);
    closeNavMenu.addEventListener("click", toggleNav);
    // close the navMenu by clicking outside
    menuOverlay.addEventListener("click", toggleNav);

    function toggleNav() {
        navMenu.classList.toggle("open");
        menuOverlay.classList.toggle("active");
        document.body.classList.toggle("hidden-scrolling");
    }

    navMenu.addEventListener("click", (event) => {
        if (
            event.target.hasAttribute("data-toggle") &&
            window.innerWidth <= mediaSize
        ) {
            // prevent default anchor click behavior
            event.preventDefault();
            const menuItemHasChildren = event.target.parentElement;
            // if menuItemHasChildren is already expanded, collapse it
            if (menuItemHasChildren.classList.contains("active")) {
                collapseSubMenu();
            } else {
                // collapse existing expanded menuItemHasChildren
                if (navMenu.querySelector(".menu-item-has-children.active")) {
                    collapseSubMenu();
                }
                // expand new menuItemHasChildren
                menuItemHasChildren.classList.add("active");
                const subMenu = menuItemHasChildren.querySelector(".sub-menu");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            }
        }
    });

    function collapseSubMenu() {
        navMenu
            .querySelector(".menu-item-has-children.active .sub-menu")
            .removeAttribute("style");
        navMenu
            .querySelector(".menu-item-has-children.active")
            .classList.remove("active");
    }

    function resizeFix() {
        // if navMenu is open ,close it
        if (navMenu.classList.contains("open")) {
            toggleNav();
        }
        // if menuItemHasChildren is expanded , collapse it
        if (navMenu.querySelector(".menu-item-has-children.active")) {
            collapseSubMenu();
        }
    }

    window.addEventListener("resize", function() {
        if (this.innerWidth > mediaSize) {
            resizeFix();
        }
    });
})();

$(document).ready(function() {
    const parllax = document.querySelector(".parallax");

    window.addEventListener("scroll", function() {
        let offset = window.pageYOffset;
        parllax.style.backgroundPositionY = offset * 0.5 + "px";
    });

    $(window).scroll(function() {
        var percent = $(document).scrollTop() / ($("#section1").height() / 3);
        $("#scrollDown").css("opacity", 1 - percent);
        if ($(window).scrollTop() > 100) {
            $(".main_h").addClass("sticky");
        } else {
            $(".main_h").removeClass("sticky");
        }
    });
});
// Mobile Navigation
$(".mobile-toggle").click(function() {
    if ($(".main_h").hasClass("open-nav")) {
        $(".main_h").removeClass("open-nav");
    } else {
        $(".main_h").addClass("open-nav");
    }
});

$(".main_h li a").click(function() {
    if ($(".main_h").hasClass("open-nav")) {
        $(".navigation").removeClass("open-nav");
        $(".main_h").removeClass("open-nav");
    }
});

// navigation scroll lijepo radi materem
$("nav a").click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $("html, body").animate({
            scrollTop: target,
        },
        500
    );
    event.preventDefault();
});

const images = document.querySelectorAll(".container .card img");

images.forEach(
    (img, key) => (img.src = `https://source.unsplash.com/random?sig=${key}`)
);