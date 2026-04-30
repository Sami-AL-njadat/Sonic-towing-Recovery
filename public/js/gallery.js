(() => {
    const gallery = document.querySelector("[data-gallery]");
    const lightbox = document.querySelector("[data-lightbox]");
    const lightboxImg = document.querySelector("[data-lightbox-img]");
    if (!gallery || !lightbox || !lightboxImg) return;

    const items = Array.from(gallery.querySelectorAll("[data-gallery-item]"));
    const sources = items
        .map((btn) => btn.getAttribute("data-src"))
        .filter((src) => typeof src === "string" && src.length > 0);
    if (sources.length === 0) return;

    const btnPrev = lightbox.querySelector("[data-lightbox-prev]");
    const btnNext = lightbox.querySelector("[data-lightbox-next]");
    const closeButtons = Array.from(lightbox.querySelectorAll("[data-lightbox-close]"));

    let index = 0;
    let lastActive = null;

    const setIndex = (nextIndex) => {
        const len = sources.length;
        index = ((nextIndex % len) + len) % len;
        lightboxImg.src = sources[index];
        lightboxImg.alt = `Gallery image ${index + 1} of ${len}`;
    };

    const open = (startIndex) => {
        lastActive = document.activeElement;
        lightbox.hidden = false;
        document.body.style.overflow = "hidden";
        setIndex(startIndex);
        btnNext?.focus?.();
    };

    const close = () => {
        lightbox.hidden = true;
        document.body.style.overflow = "";
        lightboxImg.removeAttribute("src");
        if (lastActive && typeof lastActive.focus === "function") lastActive.focus();
    };

    const next = () => setIndex(index + 1);
    const prev = () => setIndex(index - 1);

    gallery.addEventListener("click", (e) => {
        const btn = e.target.closest?.("[data-gallery-item]");
        if (!btn) return;
        const i = items.indexOf(btn);
        if (i >= 0) open(i);
    });

    btnNext?.addEventListener("click", next);
    btnPrev?.addEventListener("click", prev);
    closeButtons.forEach((el) => el.addEventListener("click", close));

    document.addEventListener("keydown", (e) => {
        if (lightbox.hidden) return;
        if (e.key === "Escape") close();
        if (e.key === "ArrowRight") next();
        if (e.key === "ArrowLeft") prev();
    });

    // Simple touch swipe (left/right) on the image
    let touchStartX = 0;
    let touchStartY = 0;
    lightboxImg.addEventListener(
        "touchstart",
        (e) => {
            const t = e.touches?.[0];
            if (!t) return;
            touchStartX = t.clientX;
            touchStartY = t.clientY;
        },
        { passive: true }
    );

    lightboxImg.addEventListener(
        "touchend",
        (e) => {
            const t = e.changedTouches?.[0];
            if (!t) return;
            const dx = t.clientX - touchStartX;
            const dy = t.clientY - touchStartY;
            if (Math.abs(dx) < 40 || Math.abs(dx) < Math.abs(dy)) return;
            if (dx < 0) next();
            else prev();
        },
        { passive: true }
    );
})();

