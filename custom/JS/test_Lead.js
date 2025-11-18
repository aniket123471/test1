// console.log("print data of application logic hook via js");

$(document).ready(function(){
    
$("#tab-actions ul").append('<li><input title="Edit" accesskey="i" class="button primary" onclick="test()"; _form.return_module.value="Accounts"; _form.return_action.value="DetailView"; _form.return_id.value="321f5b71-2fc7-dcd3-97fe-690c90fec589"; _form.action.value="EditView";SUGAR.ajaxUI.submitForm(_form);" type="button"  id="edit_button" value="Click"> </li>');

});

function test(){
    alert("clicked");
}
