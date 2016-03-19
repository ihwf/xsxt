/**
 * Created by h9549 on 2016/3/17.
 */
$(document).ready(function(){
    $('#duser').focusout(function(){
       if ($('#duser').val() == ''){
           $('.userts').html("<h6 style='color: red'>用户名不能为空!</h6>");
           $('#duser').css("border-color","red");
       }else {
           $('.userts').html('');
           $('#duser').css("border-color","");
       }
    });
    $('#dpassword').focusout(function(){
        if ($('#dpassword').val() == ''){
            $('.mmts').html("<h6 style='color: red'>密码不能为空！&nbsp;</h6>");
            $('#dpassword').css("border-color","red");
        }else {
            $('.mmts').html('');
            $('#dpassword').css("border-color","");
        }
    });
    $('#user').focusout(function(){
        if ($('#user').val() == ''){
            $('.userts').html("<h6 style='color: red'>用户名不能为空!</h6>");
            $('#user').css("border-color","red");
        }else {
            $('.userts').html('');
            $('#user').css("border-color","");
        }
    });
    $('#password').focusout(function(){
        if ($('#password').val() == ''){
            $('.mmts').html("<h6 style='color: red'>密码不能为空！&nbsp;</h6>");
            $('#password').css("border-color","red");
        }else {
            $('.mmts').html('');
            $('#password').css("border-color","");
        }
    });
    $('#repassword').focusout(function(){
        if ($('#repassword').val() == ''){
            $('.qmmts').html("<h6 style='color: red'>确认密码不能为空!</h6>");
            $('#repassword').css("border-color","red");
        }else {
            $('.qmmts').html('');
            $('#repassword').css("border-color","");
        }
    });
    $('#dlan').on("click",function(){
        if ($('#duser').val() != '' && $('#dpassword').val() != '') {
            $('#form2').submit();
        }else if ($('#duser').val() == ''){
            $('.userts').html("<h6 style='color: red'>用户名不能为空!</h6>");
        }else if($('#dpassword').val() == ''){
            $('.mmts').html("<h6 style='color: red'>密码不能为空！&nbsp;</h6>");
        }
    });
    $('#zcan').on('click',function(){
        if ($('#user').val() != '' && $('#password').val() != ''&& $('#repassword').val() != '' && $('#password').val() === $('#repassword').val()) {
            $('#form1').submit();
        }else if ($('#user').val() == ''){
            $('.userts').html("<h6 style='color: red'>用户名不能为空!</h6>");
        }else if($('#password').val() == ''){
            $('.mmts').html("<h6 style='color: red'>密码不能为空！&nbsp;</h6>");
        }else if($('#repassword').val() == ''){
            $('.qmmts').html("<h6 style='color: red'>确认密码不能为空!</h6>");
        }else if(!( $('#password').val() === $('#repassword').val())){
            $('.qmmts').html("<h6 style='color: red'>两次密码不一致!</h6>");
        }
    });
    $('#dljman,#dljman1').on('click',function(){
       $('#dljm').css('display','block');
        $('#zcjm').css('display','none');
        $('.userts,.mmts').html('');
        $('#duser,#dpassword').css("border-color","");
    });
    $('#zcjman,#zcjman1').on('click',function(){
        $('#zcjm').css('display','block');
        $('#dljm').css('display','none');
        $('.userts,.mmts,.qmmts').html('');
        $('#user,#password,#repassword').css("border-color","");
    });

});