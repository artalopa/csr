/**=====================
     Auto Height js
==========================**/
$(window).on("load resize", function () {
    checkPosition();

    function checkPosition() {
        function fixButtonHeights() {
            if (window.matchMedia("(min-width: 320px)").matches) {
                var heights = new Array();
                $(".news-section .news-box .news-detail h6.name").each(
                    function () {
                        $(this).css("min-height", "0");
                        $(this).css("max-height", "none");
                        $(this).css("height", "auto");
                        heights.push($(this).height());
                    }
                );
                var max = Math.max.apply(Math, heights);
                $(".news-section .news-box .news-detail h6.name").each(
                    function () {
                        $(this).css("height", max + "px");
                    }
                );
            }
        }

        $(document).ready(function () {
            fixButtonHeights();
            $(window).resize(function () {
                setTimeout(function () {
                    fixButtonHeights();
                }, 120);
            });
        });
    }
});
