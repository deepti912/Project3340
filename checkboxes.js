function check_all(){
var id = document.forms[0];
var i;
if (id[0].checked) 
for (i = 0; i < id.length; i++) 
  id[i].checked=true;
else
for (i = 0; i < id.length; i++) 
  id[i].checked=false;
}