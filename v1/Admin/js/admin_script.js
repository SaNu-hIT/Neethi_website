$(document).ready(function()
{
  $("#btnlogin").click(function()
{

    var username=$('#login-email').val();

    var password=$('#login-password').val();

    if((username=="admin")&&(password=="admin@neethi"))
    {
        alert("succ");
        window.location="dashboard.php";
    }
    else{
        alert("not");
    }
})

})