function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    console.log(res);
    return res
}



$(document).ready(function(){
var layer = $('.layerPop');
var notShow = $('.not_show');

if (getCookie('layerCookie')=="done"){ 
layer.hide();
console.log("layer hide");
}
else {
layer.show();
console.log("layer show"); 
}



function setCookie( name, value, expiredays ) {
var todayDate = new Date();
todayDate.setDate( todayDate.getDate() + expiredays ); 
document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toUTCString() + ";"
}



notShow.on("click", function(){
//expiredays의 1은 하루를 의미한다, 일주일은 7, 1년은 365로 입력
setCookie( "layerCookie", "done" , 1);
layer.fadeOut('fast');
})


$(document).on('click', '.btn', function(){ 
$(".layerPop").hide();
});

});