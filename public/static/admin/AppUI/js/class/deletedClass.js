/**
 * Created by xunmeng on 17/4/19.
 */
$(function () {
    $(".reused").click(function () {
        $id = $(this).attr('data');
        temp = $(this);
        $.ajax({
            'type':'post',
            'url':'/marchsoft/admin/marchClass/deleteClass',
            'data':{'id':$id,'reuse':1},
            success:function (data) {
                $myData = JSON.parse(data);
                if($myData.code==1){
                    temp.parent().parent().remove();
                }
            }
        });
    });
});