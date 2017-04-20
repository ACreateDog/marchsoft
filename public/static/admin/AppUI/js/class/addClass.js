/**
 * Created by xunmeng on 17/4/14.
 */
$(function () {
    $none = true;
    $url = window.location.href;
    $names = $url.split('/');
    $name = $names[$names.length - 1].split('.');
    $value = $name[0].split('=');
    if($value[1]!=undefined){
        $.ajax({
            'type':'post',
            'url':'/marchsoft/admin/marchClass/classDetail',
            'data':{'id':$value[1]},
            success:function (data) {
                if(data){
                    $myData = JSON.parse(data);
                    $("#class-type-list,#add-action-group,#upload-img").remove();
                    $("#class-have-type,#change-action-group,#upload-newimg,#new-type-input,#old-img").css('display','block');
                    $("#class-title").val($myData.data[0]['title']);
                    $("#class-lecturer").val($myData.data[0]['lecturer']);
                    $("#video-link").val($myData.data[0]['video_link']);
                    $("#classDesc").val($myData.data[0]['description']);
                    $("#img-url").val($myData.data[0]['url']);
                    $("#old-img div>img").attr('src',$myData.data[0]['url']);
                    $("#add-myForm").attr('action','/marchsoft/admin/marchClass/changeClass?changeId='+$value[1]);
                    $changeClass_allTypes = $myData.data[0]['type'].split(',');
                    for ($i = 0;$i<$changeClass_allTypes.length;$i++){
                        var newli = document.createElement('li');
                        var newIcon = document.createElement('strong');
                        var newspan = document.createElement('span');
                        var text = document.createTextNode("×");
                        newIcon.prepend(text);
                        newspan.innerHTML = $changeClass_allTypes[$i];
                        newli.appendChild(newspan);
                        newli.appendChild(newIcon);
                        newli.className = "label label-success";
                        $(".chosen-choices").prepend(newli);
                    }
                }
            }
        });
    }else{
        $("#class-have-type,#change-action-group,#upload-newimg,#old-img").remove();
    }
    $("#none-type").click(function () {
        if($none){
            $(this).html('取消');
            $("#new-type-input").css('display','block');
            $none = false;
        }else{
            $(this).html('没有?');
            $("#new-type-input").css('display','none');
            $none = true;
            $("#new-type-ul").css('display','none');
            $("#new-type-input input").val('');
            $("#new-type-ul ul").empty();
        }
    });

    $("#new-type-input input").focus(function () {
        $(this).css({'border-bottom-left-radius':'0','border-bottom-right-radius':'0','border-bottom':'0'});
        $("#new-type-ul").css('display','block');
    });

    $("#new-type-input input").blur(function () {
        $urlInner = $("#new-type-ul ul").html();
        if($urlInner==''){
            $(this).css({'border-bottom-left-radius':'3px','border-bottom-right-radius':'3px','border-bottom':'1px solid #ccc'});
            $("#new-type-ul").css('display','none');
        }
    });

    $(document).keydown(function(event){
        $type_val = $("#new-type-input input").val();
        $isExist = false;
        if(event.keyCode == 13&&$type_val!=''){
            $(".select-chosen>option").each(function () {
                if($type_val==$(this).html()){
                    $isExist = true;
                }
            });
            if($isExist){
                alert("已存在该类型");
            }else {
                var newli = document.createElement('li');
                var newspan = document.createElement('span');
                var text = document.createTextNode("×");
                newspan.prepend(text);
                newli.innerHTML = $type_val;
                newli.appendChild(newspan);
                $("#new-type-ul ul").prepend(newli);
                $("#new-type-input input").val('');
            }

        }
    });

    $("#new-type-ul>ul,.chosen-choices").click(function () {
        var ev = ev || window.event;
        var target = ev.target || ev.srcElement;
        if(target.nodeName.toLowerCase() == 'span'){
            $(target).parent().remove();
            $("#new-type-input input").focus();
        }
        if(target.nodeName.toLowerCase() == 'strong'){
            $(target).parent().remove();
        }
    });
    
    $("#cance-return").click(function () {
        history.go(-1);
    });

});
document.onkeydown = function(event) {
    var target, code, tag;
    if (!event) {
        event = window.event; //针对ie浏览器
        target = event.srcElement;
        code = event.keyCode;
        if (code == 13) {
            tag = target.tagName;
            if (tag == "TEXTAREA") { return true; }
            else { return false; }
        }
    }
    else {
        target = event.target; //针对遵循w3c标准的浏览器，如Firefox
        code = event.keyCode;
        if (code == 13) {
            tag = target.tagName;
            if (tag == "INPUT") { return false; }
            else { return true; }
        }
    }
};

function check(){
    var typeArray = [];
    var i = 0;
    $(".chosen-choices>li>span").each(function () {
        $type = $(this).html();
        typeArray[i] = $type;
        i++;
    });
    var newtypeArray = [];
    var j = 0;
    $("#new-type-ul>ul>li").each(function () {
        $type = $(this).html();
        $newType = $type.split('<span>');
        newtypeArray[j] = $newType[0];
        j++;
    });
    if(i==0&&j==0){
        alert("未选择类型或添加新类型的错误提醒");
        return false;
    }
    else{
        $("#class-types").val(JSON.stringify(typeArray));
        $("#class-new-types").val(JSON.stringify(newtypeArray));
        return true;//false:阻止提交表单
    }
}