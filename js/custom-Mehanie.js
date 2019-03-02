function lock() {
			document.getElementById("text").disabled = true;
			document.getElementById("lock-unlock-button").onclick = unlock;
			document.getElementById("lock-unlock").className = "fas fa-lock";
		}

		function unlock() {
			document.getElementById("text").disabled = false;
			document.getElementById("lock-unlock-button").onclick = lock;
			document.getElementById("lock-unlock").className = "fas fa-lock-open";
		}


function lock2() {
			document.getElementById("text2").disabled = true;
			document.getElementById("lock-unlock-button2").onclick = unlock2;
			document.getElementById("lock-unlock2").className = "fas fa-lock";
		}

		function unlock2() {
			document.getElementById("text2").disabled = false;
			document.getElementById("lock-unlock-button2").onclick = lock2;
			document.getElementById("lock-unlock2").className = "fas fa-lock-open";
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
