(function ($) {

    class starterTheme {

        constructor() {
            this.setupStarterFunction(); // Run the setup function
        } // constructor

        setupStarterFunction() {

       document.addEventListener("DOMContentLoaded", function () {
    const burger = document.getElementById("burger");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    burger.addEventListener("click", () => {
        mobileMenu.classList.add("active");
        burger.classList.add("hidden");
    });

    closeMenu.addEventListener("click", () => {
        mobileMenu.classList.remove("active");
        burger.classList.remove("hidden");
    });
           
    window.addEventListener("resize", () => {
                    if (window.innerWidth > 768) {
                        mobileMenu.classList.remove("active");
                        burger.classList.remove("hidden");
                    }
                });
           
           
});
        } // setupStarterFunction

    } // class starterTheme

    // Create a new instance of the starterTheme class
    window.starterTheme = new starterTheme();

})(window.jQuery);
