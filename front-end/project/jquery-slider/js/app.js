$(document).ready(function () {
    // 1. Load ảnh đầu tiên
    // var first_thumb_item = $("#list_thumb li:first-child");
    // var first_img = first_thumb_item.find("a img");
    // first_thumb_item.toggleClass("active");
    // $("#show img").attr("src", first_img.attr("src"));

    // 2. Xử lý nhấp vào ảnh thumb
    $("#list_thumb .thumb_item").click(function () {
        var item_img = $(this).find("a img");
        $("#show img").attr("src", item_img.attr("src"));
        $("#list_thumb .thumb_item").removeClass("active");
        $(this).toggleClass("active");
    });

    // 3. Xử lý nhấp vào prev
    $("#prev").click(function () {
        // var current_img_src = $("#show img").attr("src");
        // var current_img_thumb = $("#list_thumb .thumb_item").find("img[src='" + current_img_src + "']");
        // var prev_thumb_item = current_img_thumb.parents("li").prev();
        // if (prev_thumb_item.length < 1) {
        //     prev_thumb_item = $("#list_thumb .thumb_item:last");
        // }
        // $("#show img").attr("src", prev_thumb_item.find("img").attr("src"));
        // $("#list_thumb .thumb_item").removeClass("active");
        // prev_thumb_item.toggleClass("active");

        if ($("#list_thumb .thumb_item:first-child").hasClass("active")) {
            $("#list_thumb .thumb_item:last-child").click();
        } else {
            $("#list_thumb .thumb_item.active").prev().click();
        }
    });

    // 4. Xử lý nhấp vào next
    $("#next").click(function () {
        // var current_img_src = $("#show img").attr("src");
        // var current_img_thumb = $("#list_thumb .thumb_item").find("img[src='" + current_img_src + "']");
        // var next_thumb_item = current_img_thumb.parents("li").next();
        // if (next_thumb_item.length < 1) {
        //     next_thumb_item = $("#list_thumb .thumb_item:first");
        // }
        // $("#show img").attr("src", next_thumb_item.find("img").attr("src"));
        // $("#list_thumb .thumb_item").removeClass("active");
        // next_thumb_item.toggleClass("active");

        if ($("#list_thumb .thumb_item:last-child").hasClass("active")) {
            $("#list_thumb .thumb_item:first-child").click();
        } else {
            $("#list_thumb .thumb_item.active").next().click();
        }
    });

    // Active phần tử đầu tiên
    $("#list_thumb .thumb_item:first-child").click();
});