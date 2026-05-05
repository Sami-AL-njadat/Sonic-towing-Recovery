// Smooth scroll + active section highlighting (desktop navbar + mobile bottom nav)

// Order matters for active state. Numeric section IDs (Gallery is section_4).
var sonicSectionIds = ["section_1", "section_2", "section_3", "section_4", "section_5", "section_6"];

function sonicScrollOffset() {
    // On mobile/tablet we use the app topbar; on desktop the Bootstrap navbar.
    var $appTopbar = $(".sonic-app-topbar:visible");
    if ($appTopbar.length) {
        return ($appTopbar.outerHeight() || 60) + 10;
    }
    var h = $(".navbar:visible").outerHeight();
    return (typeof h === "number" ? h : 72) + 16;
}

function sonicSetActive(targetId) {
    if (!targetId) return;

    // Desktop navbar links
    var $desktopLinks = $(".navbar-nav .nav-item .nav-link");
    $desktopLinks.removeClass("active").addClass("inactive");
    $desktopLinks.each(function () {
        var href = $(this).attr("href") || "";
        if (href === "#" + targetId) {
            $(this).addClass("active").removeClass("inactive");
        }
    });

    // Mobile bottom nav links
    var $bottomLinks = $(".sonic-app-bottomnav__link");
    $bottomLinks.removeClass("active").removeAttr("aria-current");
    $bottomLinks.each(function () {
        var navTarget = $(this).attr("data-nav-target");
        var href = $(this).attr("href") || "";
        if (navTarget === targetId || href === "#" + targetId) {
            $(this).addClass("active").attr("aria-current", "page");
        }
    });
}

function sonicFindActiveSection() {
    var offset = sonicScrollOffset();
    var y = $(document).scrollTop() || 0;
    var current = sonicSectionIds[0];

    for (var i = 0; i < sonicSectionIds.length; i++) {
        var id = sonicSectionIds[i];
        var $el = $("#" + id);
        if (!$el.length) continue;
        var top = $el.offset().top - offset;
        if (y + 1 >= top) current = id;
    }

    return current;
}

function sonicScrollToId(id) {
    var $el = $("#" + id);
    if (!$el.length) return;
    var offset = sonicScrollOffset();
    var top = $el.offset().top - offset;
    $("html, body").animate({ scrollTop: top }, 300);
}

$(document).ready(function () {
    // Initialize desktop nav inactive style
    $(".navbar-nav .nav-item .nav-link").addClass("inactive");

    // Smooth scroll for any click-scroll link (desktop navbar + bottom nav)
    $(document).on("click", "a.click-scroll", function (e) {
        var href = $(this).attr("href") || "";
        if (href.charAt(0) !== "#") return;
        var id = href.slice(1);
        if (!id) return;
        if (!document.getElementById(id)) return;

        e.preventDefault();
        sonicScrollToId(id);
    });

    // Active highlighting (single scroll handler, throttled)
    var ticking = false;
    var lastActive = null;

    var update = function () {
        ticking = false;
        var active = sonicFindActiveSection();
        if (active !== lastActive) {
            sonicSetActive(active);
            lastActive = active;
        }
    };

    $(document).on("scroll", function () {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(update);
    });

    // First paint
    update();
});