$(function () {
    $(".edit-banner").click(function () {
        $banner_link = $(this).attr('data');
        $banner_id = $(this).attr('data-id');
        $img_id = $(this).attr('data-imgid');
        $("#temp-input-bannerid").val($banner_id);
        $("#temp-input-imgid").val($img_id);
        $("#img-link-input").val($banner_link);
    });
});