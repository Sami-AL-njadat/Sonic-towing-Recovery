(() => {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        const enabled = preloader.getAttribute("data-enabled") !== "0";
        const hideOn = preloader.getAttribute("data-hide-on") || "load";
        const minVisibleMs = Number(preloader.getAttribute("data-min-visible-ms") || "0");
        const removeDelayMs = Number(preloader.getAttribute("data-remove-delay-ms") || "650");
        const maxWaitMs = Number(preloader.getAttribute("data-max-wait-ms") || "6000");

        const startedAt = performance.now();

        const hidePreloader = () => {
            if (!enabled) {
                try {
                    preloader.remove();
                } catch (_) {}
                document.body.style.overflow = "";
                return;
            }

            const elapsed = performance.now() - startedAt;
            const remaining = Math.max(0, minVisibleMs - elapsed);

            if (remaining > 0) {
                window.setTimeout(hidePreloader, remaining);
                return;
            }

            preloader.classList.add("exit");
            preloader.setAttribute("aria-busy", "false");

            window.setTimeout(() => {
                preloader.classList.add("done");
                document.body.style.overflow = "";
                preloader.remove();
            }, Math.max(0, removeDelayMs));
        };

        // Hide overflow while loading
        if (enabled) document.body.style.overflow = "hidden";

        // Always ensure it can't get stuck (e.g. slow networks, blocked assets).
        const fallback = window.setTimeout(hidePreloader, Math.max(0, maxWaitMs));

        const triggerHide = () => {
            window.clearTimeout(fallback);
            hidePreloader();
        };

        if (hideOn === "dom") {
            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", triggerHide, { once: true });
            } else {
                triggerHide();
            }
        } else {
            // default: window load (all assets)
            if (document.readyState === "complete") {
                triggerHide();
            } else {
                window.addEventListener("load", triggerHide, { once: true });
            }
        }
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
