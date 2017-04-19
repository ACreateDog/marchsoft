/**
 * Created by xunmeng on 17/4/18.
 */
$(function () {
    var $delete_class_id;
    var $selected;
    $(".delete-class").click(function () {
        $title = $(this).parent().parent().children('td').eq(1).html();
        $selected = $(this).parent().parent();
        $delete_class_id = $(this).attr('data');
        $("#tip-box,#cover-box").css('display','block');
        $("#class-title-tip").html($title);
    });

    $(".cance-btn,#cance-btn").click(function () {
        $("#tip-box,#cover-box").css('display','none');
    });


    
    $("#sure-btn").click(function () {
        $("#tip-box,#cover-box").css('display','none');
        $.ajax({
            'type':'post',
            'url':'/marchsoft/admin/marchClass/deleteClass',
            'data':{'id':$delete_class_id},
            success:function (data) {
                $myData = JSON.parse(data);
                if($myData.code==1){
                    $selected.remove();
                }
            }
        });
    });
});