$(document).ready(function () {
    // Make sure jQuery is loaded before this script
    $("img[alt='cool']").addClass("needs-alt");
    $("img:not([alt])").addClass("not-alt");
});

