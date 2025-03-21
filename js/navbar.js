(function () {
    "use strict";

    var siteMenuClone = function () {
        var jsCloneNavs = document.querySelectorAll(".js-clone-nav");
        var siteMobileMenuBody = document.querySelector(".site-mobile-menu-body");

        if (!siteMobileMenuBody) {
            console.error("Error: .site-mobile-menu-body not found!");
            return;
        }

        jsCloneNavs.forEach((nav) => {
            var navCloned = nav.cloneNode(true);
            navCloned.setAttribute("class", "site-nav-wrap");
            siteMobileMenuBody.appendChild(navCloned);
        });

        setTimeout(function () {
            var hasChildrens = document
                .querySelector(".site-mobile-menu")
                .querySelectorAll(".has-children");

            var counter = 0;
            hasChildrens.forEach((hasChild) => {
                var refEl = hasChild.querySelector("a");
                if (!refEl) return; // Skip if 'a' tag not found

                var newElSpan = document.createElement("span");
                newElSpan.setAttribute("class", "arrow-collapse collapsed");

                hasChild.insertBefore(newElSpan, refEl);

                var arrowCollapse = hasChild.querySelector(".arrow-collapse");
                arrowCollapse.setAttribute("data-bs-toggle", "collapse");
                arrowCollapse.setAttribute("data-bs-target", "#collapseItem" + counter);

                var dropdown = hasChild.querySelector(".dropdown");
                if (dropdown) {
                    dropdown.setAttribute("class", "collapse");
                    dropdown.setAttribute("id", "collapseItem" + counter);
                }

                counter++;
            });
        }, 1000);

        var menuToggle = document.querySelectorAll(".js-menu-toggle");

        if (menuToggle.length === 0) {
            console.error("Error: .js-menu-toggle not found!");
        }

        menuToggle.forEach((mtoggle) => {
            mtoggle.addEventListener("click", (e) => {
                if (document.body.classList.contains("offcanvas-menu")) {
                    document.body.classList.remove("offcanvas-menu");
                    mtoggle.classList.remove("active");
                } else {
                    document.body.classList.add("offcanvas-menu");
                    mtoggle.classList.add("active");
                }
            });
        });

        var specifiedElement = document.querySelector(".site-mobile-menu");
        document.addEventListener("click", function (event) {
            var isClickInside = specifiedElement.contains(event.target);
            var isMenuToggleClick = Array.from(menuToggle).some((mt) =>
                mt.contains(event.target)
            );

            if (!isClickInside && !isMenuToggleClick) {
                if (document.body.classList.contains("offcanvas-menu")) {
                    document.body.classList.remove("offcanvas-menu");
                    menuToggle.forEach((mt) => mt.classList.remove("active"));
                }
            }
        });
    };

    document.addEventListener("DOMContentLoaded", function () {
        siteMenuClone();
    });
})();
