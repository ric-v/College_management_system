<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title></title>
    <style type="text/css">
        body { font-family:arial, helvetica, sans-serif; font-weight:bold; font-size:13px; color:#000; text-align:left; margin:3px 0px; }
        input { text-align:center; border:2px solid #CCC; }
        #wrap  { width:400px; height:200px; margin:20px; padding:10px;  }
        #une { margin-top:10px; }
        #reg {margin-top:10px; }
        .a13B { color:#F00; }
        .cntr { text-align:center; }
    </style>
</head>

<body>

<div id="wrap">
    <form id="regform" name="registerationform" method="POST" action="welcome.html">
        <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="300">
            <tr>
                <td>First Name: </td>
                <td class="cntr">
                    <input type="text" name="fnametxt" size="20"></td>
            </tr>
            <tr>
                <td>Second Name: </td>
                <td class="cntr">
                    <input type="text" name="snametxt" size="20"> </td>
            </tr>
            <tr>
                <td>User Name:</td>
                <td class="cntr">
                    <input type="text" name="unametxt" size="20"> </td>
            </tr>
            <tr>
                <td>Email Address: </td>
                <td class="cntr">
                    <input type="text" name="emailtxt" size="20"> </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td class="cntr"><input type="password" name="pwdtxt" size="20"> </td>
            </tr>
            <tr>
                <td>Confirm : </td>
                <td class="cntr"><input type="password" name="cpwdtxt" size="20"> </td>
            </tr>
        </table>
        <input id="reg" name="reg" type="button" onclick="regvalidate(this.form)" value="Register Now">
    </form>
    <div id="une" class="a13B">
    </div>
</div>
<!-- end wrap -->
<script type="text/javascript">
    var uneObj=document.getElementById("une"); // object ref to msg line
    var currentBrdObj;
    //
    function regvalidate(formObj)
    { uneObj.innerHTML=""; // clear msg line before resubmitting
        // gather object ref to input boxes
        var allInputs=document.getElementById("regform").getElementsByTagName("input");
        // check if value of box is ""
        for(var i=0;i<allInputs.length;i++)
        { if(allInputs[i].name !="reg")    // ignore submit button
        { if(allInputs[i].value=="")
        { uneObj.innerHTML=msg[i];
            if(currentBrdObj){currentBrdObj.style.border="2px solid #CCC"; }
            allInputs[i].style.border="2px solid #F00";
            currentBrdObj=allInputs[i];
            allInputs[i].onclick=function(){ this.style.border="2px solid #CCC"; }
            return;
        } } }
// check if password and confirm are the same      
        if((formObj.pwdtxt.value) != (formObj.cpwdtxt.value))
        { uneObj.innerHTML = msg[msg.length-1];       // last msg in array
            formObj.pwdtxt.value = ""; formObj.pwdtxt.style.border="";
            formObj.cpwdtxt.value = ""; formObj.cpwdtxt.style.border="";
            return;
        }
// all ok so submit form
        uneObj.innerHTML = "All ok so submitting form";
        formObj.submit();
    }
    // -----
    var msg =["First name should not be empty","Second name should not be empty",
        "User name field should not be empty","Email id required",
        "Please type a password","Please confirm password"];
    msg[msg.length]="Passwords must be equal.<br>Please type a password";

    //
</script>

</body>

</html>
