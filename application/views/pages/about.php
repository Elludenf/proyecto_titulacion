
function SetAction(action) {
  var form = this.parentNode;

  if (action === 'update') {
    form.action = "/edit_user.php";
  }
  else if (action === 'delete') {
    form.action = "/delete_user.php";
  }

  form.submit();
}
