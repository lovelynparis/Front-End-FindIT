function lock() {
  document.getElementById("text").disabled = true;
  document.getElementById("button").onclick = unlock;
  document.getElementById("button").className = "fas fa-lock-open";
}
function unlock() {
  document.getElementById("text").disabled = false;
  document.getElementById("button").onclick = lock;
  document.getElementById("button").className = "fas fa-lock";
}

//may error pa. di pa tapos
function lock2() {
  document.getElementById("inputGroupSelect01").disabled = true;
  document.getElementById("button1").onclick = unlock2;
  document.getElementById("button1").className = "fas fa-lock-open";
}
function unlock2() {
  document.getElementById("inputGroupSelect01").disabled = false;
  document.getElementById("button1").onclick = lock2;
  document.getElementById("button1").className = "fas fa-lock";
}


/*Select all checkbox*/
var selectedIds = [];
function toggle(source) {
    checkboxes = document.getElementsByName('ALL');
    for ( var i in checkboxes)
        checkboxes[i].checked = source.checked;
}
function addSelects() {

    var ids = document.getElementsByName('ALL');

    for ( var i = 0; i < ids.length; i++) {
        if (ids[i].checked == true) {
            selectedIds.push(ids[i].value);
        }
    }
}
