/**
 * Created by feifei on 2017/4/20.
 */
function getQueryString() {
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return  decodeURI(r[2]); return null;
}

function getAjaxObject() {
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }else {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    return xmlhttp;
}
function showInfo(jsonObj) {
    var alertID = "";

    if (jsonObj.code == 0){
        alertID = "error_alert";
    }else if (jsonObj.code == 1){
        alertID = "success_alert";
    }else if (jsonObj.code == 2)    {
        alertID = "info_alert";
    }

    var alertEle = document.getElementById(alertID);
    alertEle.style.display = "block";
    alertEle.children[alertEle.childElementCount-1].innerHTML = jsonObj.msg;
    setTimeout(function () {
        alertEle.style.display = "none";
    },3000);

}
/**
 * 封装 get 请求
 *
 * @param url
 * @param callback
 */

function sendGetAjax(url,callback) {
    if (url != undefined || url != null || url != ""){
        var ajax = getAjaxObject();
        
        ajax.onreadystatechange=function () {
            if(ajax.readyState == 4 && ajax.status == 200){
                if (callback != null && callback != undefined && callback != ""){
                    callback(ajax.responseText);
                }
            }
        };
        
        ajax.open('GET',url);
        ajax.send();
    }
}