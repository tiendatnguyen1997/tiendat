// JavaScript Document
function valFormLogin()
{
	var user = document.frm_login.account;
	var password = document.frm_login.pass;
	var valid = false;
	
	if(ValidateUser(user))
	{
		if(ValidatePassword(password))
		{
			valid = true;
		}
	}
	return valid;
}

function ValidateUser(user)
{	
	var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var phoneformat = /^(\d{3}|\d{4})\d{3}\d{4}$/;
	
	if(user.value.length == 0)
	{
		alert("Bạn chưa nhập Email hoặc số điện thoại!!!");
		user.focus();
		return false;
	}
	else if(user.value.match(emailformat) || user.value.match(phoneformat))
	{
		return true;
	}
	else
	{
		alert("Email hoặc số điện thoại của bạn không chính xác!!!");
		user.focus();
		return false;
	}
}

function ValidatePassword(password)
{
	var pass_length = password.value.length;
	if (pass_length == 0)
	{
		alert("Bạn chưa nhập mật khẩu!!!");
		password.focus();
		return false;
	}
	return true;
}

function valFormForgot()
{
	var user = document.frm_forgot.users;
	var valid = false;
	
	if(ValidateUser(user))
	{
		valid = true;
	}
	return valid;
}

function valFormRegister()
{
	var username = document.frm_register.hoten;
	var mail = document.frm_register.email;
	var phone = document.frm_register.sdt;
	var address = document.frm_register.diachi;
	var password = document.frm_register.matkhau;
	var repassword = document.frm_register.nhaplaimk;
	var valid = false;
	
	if(ValidateUserName(username))
	{
		if(ValidateEmail(mail))
		{
			if(ValidatePhone(phone))
			{
				if(ValidateAddress(address))
				{
					if(ValidatePassword(password))
					{
						if(ValidateRepassword(password, repassword))
						{
							valid = true;
						}
					}
				}
			}
		}
	}
	return valid;
}

function ValidateUserName(username)
{
	if(username.value.length == 0)
	{
		alert("Bạn chưa nhập họ tên!!!");
		username.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function ValidateEmail(mail)
{
	var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(mail.value.length == 0)
	{
		alert("Bạn chưa nhập Email!!!");
		mail.focus();
		return false;
	}
	else if(mail.value.match(emailformat))
	{
		return true;
	}
	else
	{
		alert("Email của bạn không chính xác!!!");
		mail.focus();
		return false;
	}
}

function ValidatePhone(phone)
{
	var phoneformat = /^(\d{3}|\d{4})\d{3}\d{4}$/;
	
	if(phone.value.length == 0)
	{
		alert("Bạn chưa nhập số điện thoại!!!");
		mail.focus();
		return false;
	}
	else if(phone.value.match(phoneformat))
	{
		return true;
	}
	else
	{
		alert("Số điện thoại của bạn không chính xác!!!");
		phone.focus();
		return false;
	}
}

function ValidateAddress(address)
{
	var addr = /^[0-9a-zA-Z]+$/;
	
	if(address.value.length == 0)
	{
		alert("Bạn chưa nhập địa chỉ!!!");
		address.focus();
		return false;
	}
	else if(address.value.match(addr))
	{
		return true;
	}
	else
	{
		alert('Địa chỉ phải có ký tự và số!!!');
		address.focus();
		return false;
	}
}

function ValidateRepassword(password, repassword)
{
	var pass_length = repassword.value.length;
	if (pass_length == 0)
	{
		alert("Bạn chưa nhập mật khẩu!!!");
		repassword.focus();
		return false;
	}
	else if(repassword.value != password.value)
	{
		alert("Mật khẩu không trùng khớp!!!");
		repassword.value = "";
		repassword.focus();
		return false;
	}
	return true;
}

function valFormAddCatalogue()
{
	var name = document.frm_addcatalogue.tendm;
	var valid = false;
	
	if(name.value.length == 0)
	{
		alert("Bạn chưa nhập tên danh mục!!!");
		name.focus();
		return false;
	}
	else
	{
		valid = true;
	}
	return valid;
}