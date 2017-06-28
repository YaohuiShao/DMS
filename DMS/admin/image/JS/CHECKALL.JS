function checkFormAll(check)
{
	form=document.getElementById("TableForm");
	for(var i=0;i<form.elements.length;i++)
	{
		if (form.elements[i].type=="checkbox")
		{
			form.elements[i].checked=check;
		}
	}
}
//在要用的地方加上onclick="checkFormAll(this.checked)"上面的checkFormAll(check)中的check是循环的CHECKBOX的ID