function CheckAll(v,tag)
{
    /*
     控制 checkbox全选或者不选
     */
    var checkbox=document.getElementsByName(tag);
    for(i=0;i<checkbox.length;i++){
        checkbox[i].checked=v
    }
}
function checkChoose(tag){
//    检验是否有选择
    var checkArry = document.getElementsByName(tag);
    for (var i = 0; i < checkArry.length; i++) {
        if(checkArry[i].checked == true){
            return true;
        }
    }
    return false;
}