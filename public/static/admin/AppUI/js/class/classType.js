/**
 * Created by xunmeng on 17/4/19.
 */
$(function () {
    var $selectedId;
    var $selectedDom;
    var $deletetypeId;
    var $selectdeleteDom;
    var $delteSelf;
    $(".unuse-type,.use-type").click(function () {
        $("#tip-box,#cover-box").css('display','block');
        $selectedId = $(this).attr('data');
        $selectedDom = $(this);
        $old_type = $(this).text();
        $("#change-type-input").val($.trim($old_type));
    });

    $(".cance-btn,#cance-btn,#cover-box,#cance-delete-btn").click(function () {
        $("#tip-box,#cover-box,#warning-box").css('display','none');
    });
    
    $("#sure-btn").click(function () {
        $newType = $("#change-type-input").val();
        $.ajax({
            'type':'post',
            'url':'/marchsoft/admin/marchClass/changeType',
            'data':{'id':$selectedId,'newType':$newType},
            success:function (data) {
                $myData = JSON.parse(data);
                if($myData.code==1){
                    $("#tip-box,#cover-box").css('display','none');
                    $selectedDom.text($newType);
                }else if($myData.code==0){
                    $("#warning-tip").html("错误!未做任何修改");
                    $("#change-type-input").focus();
                    $("#change-type-input").select();
                }

            }
        });
    });

    $(".delete-type").click(function () {
        $deletetypeId = $(this).attr('data');
        $("#warning-box,#cover-box").css('display','block');
        $selectdeleteDom = $(this).prev();
        $delteSelf = $(this);
        $("#delete-type-name").html($(this).prev().text());
    });

    $("#sure-delete-btn").click(function () {
        $.ajax({
            'type':'post',
            'url':'/marchsoft/admin/marchClass/deleteType',
            'data':{'id':$deletetypeId},
            success:function (data) {
                $myData = JSON.parse(data);
                if($myData.code==1){
                    $("#warning-box,#cover-box").css('display','none');
                    $selectdeleteDom.remove();
                    $delteSelf.remove();
                }

            }
        });
    });
});

function check() {
    $addType = $("#add-type").val();
    $.ajax({
        'type':'post',
        'url':'/marchsoft/admin/marchClass/addType',
        'data':{'addType':$addType},
        success:function (data) {
            $myData = JSON.parse(data);
            if($myData.code==1){
                history.go(0);
            }
        }
    });
    return false;
}