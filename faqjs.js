var q = document.getElementsByClassName("question");
var i;
for (i = 0; i < q.length; i++) {
    q[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var answer = this.nextElementSibling;
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
        } else {
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
}


function showLogOutAlert() {
    window.location.href = './timepass/logout.php'
}