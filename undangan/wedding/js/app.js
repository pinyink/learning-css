console.log("JS Loaded"); // TEST dulu

document.addEventListener("DOMContentLoaded", function () {

    const btnOpen = document.getElementById("btnOpen");
    const cover = document.getElementById("cover");
    const content = document.getElementById("content");

    btnOpen.addEventListener("click", function () {

        cover.classList.add("fade-out");

        setTimeout(function () {
            cover.style.display = "none";
            content.style.display = "block";
            content.classList.add("fade-in");

            // 🔥 paksa scroll ke atas
            window.scrollTo({
                top: 0,
                behavior: "instant"
            });

        }, 800);
    });

});

