/**
 * Created by Zy on 2016/6/12.

$(function() {
    alert("success");
        var params = null;
        var url = "username.php";
        $.ajax({
            type: "post",
            url: url,
            dataType: "json",
            data: null,
            success: function(msg){
                $("#nowUser").css("display","inline");
                alert("success");
            }
    });

});
 */
$(function() {
    $("#logout").bind("click",logoutAjax);
    $("#confirm_exam").bind("click",startExam);
    //$("#nav_exam").bind("click", function () {
    //    alert("click");
    //});

    $.ajax({
        type:"post",
        url:"username.php",
        dataType:"json",
        success:function(result) {
            var username = result.name;
            if(username != "")
            {
                $("#login,#signup").css("display","none");
                $("#nowUser").css("display","inline");
                $("#username").html(username);
            }
            else {
                $("#login,#signup").css("display","inline");
                $("#nowUser").css("display","none");
                $("#username").html("");
            }}
        //error: function (e) {
        //        alert("error");
        //        console.log(e);
        //}
    });
});

function logoutAjax()
{
    //alert("logout");
    $.ajax({
        type: "get",
        url: "username.php",
        dataType: "json",
        data: { operate:"logout" },
        success:function(result){
            $("#login,#signup").css("display","inline");
            $("#nowUser").css("display","none");
            $("#username").html("");
            history.go(0);
        }
    });
}

function refreshExamination()
{
    $.ajax({
        type:"POST",
        url:"refreshExam.php",
        dataType:"html",
        data:{operate:"exam"},
        success:function(result){
            $("#examlist").html(result);
        }
    });
}
refreshExamination();

function startExam()
{
    var thisurl = window.location.href.split( "#");
    var e_id=thisurl[thisurl.length-1];//取最后一个参数考试编号
    $.ajax({
        type:"GET",
        url:"givePaper.php",
        dataType:"json",
        data:{exam_id:e_id},
        success:function(result){
            //$("#examlist").html(result);
            if(!result.islogin)
            {
                alert("Please login firstly");
                var url = "login/login.php";
                location.href=url;
            }else{
                var url = "examing.html";
                location.href=url;
            }
        },
        error:function(msg){
            alert("failed");
        }
    });
}