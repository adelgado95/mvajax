function goLogin()
{
	/*Este es el ajax de m*/
	var connect,form,response,result,user,pass,session;
	user = __('user_login').value;
	pass = __('pass_login').value;
	session = true;
	form = 'user='+user+'&pass='+pass+'&session=1';
	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	connect.onreadystatechange = function()
	{
		if (connect.readyState == 4 && connect.status == 200) 
		{
			if (connect.responseText == 1) {
			result = '<div class="alert alert-dismissible alert-success">';
			result += '<button type="button" class="close" data-dismiss="alert">x</button>';
			result += '<h4>Conectado!</h4>';
			result += '<p><strong>Estamos redireccionando</strong></p>';
			result += '</div>';

			__('_AJAX_LOGIN_').innerHTML = result;
				window.location.href = "index.php?view=admin";
				console.log("Redireciconando a admin");
			}
			else
			{
				__('_AJAX_LOGIN_').innerHTML = connect.responseText;
				console.log(connect.responseText);
			
			}
		}
		else 
			if (connect.readyState != 4) {
				console.log(connect.readyState);
			result = '<div class="alert alert-dismissible alert-warning>';
			result += '<button type="button" class="close" data-dismiss="alert">x</button>';
			result += '<h4>No entro</h4>'+pass;
			result += '<p><strong>Estamos intentando</strong></p>';
			result += '</div>';
			__('_AJAX_LOGIN_').innerHTML = result;
			
		}
	}
	connect.open('POST','ajax.php?mode=login',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}
function runScriptLogin(e)
{
	if(e.keyCode == 13)
	{
		goLogin();
	}
}