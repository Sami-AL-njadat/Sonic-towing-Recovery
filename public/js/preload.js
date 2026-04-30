(() => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        const hidePreloader = () => {
            preloader.classList.add("exit");
            preloader.setAttribute("aria-busy", "false");

            window.setTimeout(() => {
                preloader.classList.add("done");
                document.body.style.overflow = "";
                preloader.remove();
            }, 1100);
        };

        // Hide overflow while loading
        document.body.style.overflow = "hidden";

        // Trigger on window load (all assets loaded)
        if (document.readyState === "complete") {
            window.setTimeout(hidePreloader, 3000);
        } else {
            window.addEventListener(
                "load",
                () => {
                    window.setTimeout(hidePreloader, 3000);
                },
                { once: true }
            );
        }
    }

    // HERO VIDEO: load only the matching breakpoint video.
    const setupHeroVideo = () => {
        const mobileVideo = document.querySelector(".sonic-hero-video--mobile");
        const desktopVideo = document.querySelector(".sonic-hero-video--desktop");
        if (!mobileVideo && !desktopVideo) return;

        const mql = window.matchMedia("(max-width: 767px)");

        const disableVideo = (video) => {
            if (!video) return;
            try {
                video.pause();
            } catch (_) {}
            const sources = Array.from(video.querySelectorAll("source"));
            sources.forEach((s) => s.removeAttribute("src"));
            video.removeAttribute("src");
            video.load();
        };

        const enableVideo = (video) => {
            if (!video) return;
            const sources = Array.from(video.querySelectorAll("source"));
            sources.forEach((s) => {
                const original = s.getAttribute("data-src") ?? s.getAttribute("src");
                if (!s.getAttribute("data-src") && original) s.setAttribute("data-src", original);
                if (original) s.setAttribute("src", original);
            });
            video.load();
        };

        // Cache original srcs once.
        [mobileVideo, desktopVideo].forEach((v) => {
            if (!v) return;
            Array.from(v.querySelectorAll("source")).forEach((s) => {
                const src = s.getAttribute("src");
                if (src && !s.getAttribute("data-src")) s.setAttribute("data-src", src);
            });
        });

        const apply = () => {
            const useMobile = mql.matches;
            if (useMobile) {
                disableVideo(desktopVideo);
                enableVideo(mobileVideo);
            } else {
                disableVideo(mobileVideo);
                enableVideo(desktopVideo);
            }
        };

        apply();
        mql.addEventListener?.("change", apply);
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", setupHeroVideo, { once: true });
    } else {
        setupHeroVideo();
    }

    const scrollBtn = document.getElementById("scrollTopBtn");
    if (scrollBtn) {
        const toggleBtn = () => {
            const y = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop || 0;
            scrollBtn.style.display = y > 200 ? "block" : "none";
        };

        window.addEventListener("scroll", toggleBtn, { passive: true });
        toggleBtn();

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }
})();
