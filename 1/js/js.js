function check()
	{
		var usertext = document.getElementById('user').value;
		var pswtext = document.getElementById('password').value;
		var repswtext = document.getElementById('repassword').value;
		if(usertext == "" )
		{
			alert('请输入用户名！');
			document.form1.user.focus(); 
		}
		else if(pswtext == "" )
		{
			alert('请输入密码！');
			document.form1.password.focus(); 
		}
		else if (pswtext!=repswtext) 
		{
			alert('密码不一致！请重新输入！');
			document.form1.repassword.focus();
		}
		else
		{
			document.forms.form1.submit();
		}
	}

function check2()
	{
		var usertext = document.getElementById('duser').value;
		var pswtext = document.getElementById('dpassword').value;
		if(usertext == "" )
		{
			alert('请输入用户名！');
			document.form2.duser.focus(); 
		}
		else if(pswtext == "" )
		{
			alert('请输入密码！');
			document.form2.dpassword.focus(); 
		}
		else
		{
			document.forms.form2.submit();
		}
	}

function check3()
	{
		var name = document.getElementById('name').value;
		var age = document.getElementById('age').value;
		var sex1 = document.getElementById('sex1').checked;
		var sex2 = document.getElementById('sex2').checked;
		var classid = document.getElementById('classid').value;
		if(name == "" )
		{
			alert('请输入姓名！');
			document.addform.name.focus();
		}
		else if(age == "" )
		{
			alert('请输入出生年份！');
			document.addform.age.focus();
		}
		else if(sex1 == false && sex2 == false)
		{
			alert('请选择性别！');
		}
		else if(classid == "" )
		{
			alert('请输入班级！');
			document.addform.classid.focus();
		}
		else
		{
			document.forms.addform.submit();
		}
	}

	function check4()
	{
		var ID = document.getElementById('uID').value;
		var p_name = document.getElementById('up_name').value;
		var price = document.getElementById('uprice').value;
		if(ID == "" )
		{
			alert('请输入订单号！');
			document.ddxgform.ID.focus(); 
		}
		else if(p_name == "" )
		{
			alert('请输入商品名！');
			document.ddxgform.p_name.focus(); 
		}
		else if(price == "" )
		{
			alert('请输入价格！');
			document.ddxgform.price.focus(); 
		}
		else
		{
			document.forms.ddxgform.submit();
		}
	}

	function check5()
	{
		var ID = document.getElementById('SID').value;
		if(ID == "" )
		{
			alert('请输入订单号！');
			document.seach.ID.focus(); 
		}
		else
		{
			document.forms.seach.submit();
		}
	}

	function dljm()
	{
		var dl = document.getElementById("dljm");
		var zc = document.getElementById("zcjm");
		dl.style.display = "block";
		zc.style.display = "none";

	}

	function zcjm()
	{
		var dl = document.getElementById("dljm");
		var zc = document.getElementById("zcjm");
		dl.style.display = "none";
		zc.style.display = "block";

	}