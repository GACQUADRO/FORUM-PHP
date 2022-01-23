function deletes() {
    const myNode = document.getElementById("start")
    myNode.innerHTML = ""
}

function displays(a) {
    var x = document.getElementById(a);
    x.style.display = "block";
}

function displaysnot(a) {
    var x = document.getElementById(a);
    x.style.display = "none";
}

function loginacces(dis, disnot) {
    displaysnot(disnot);
    displays(dis);
}

function colorlike(id, id2) {
    var x = document.getElementById(id);
    var z = document.getElementById(id2);
    if (x.style.color == "red") {
        x.style.color = "white";
        z.style.color = "white";
    } else {
        x.style.color = "red";
        z.style.color = "white";
    };
}

function colordislike(id, id2) {
    var x = document.getElementById(id);
    var z = document.getElementById(id2);
    if (x.style.color == "purple") {
        x.style.color = "white";
        z.style.color = "white"
    } else {
        x.style.color = "purple";
        z.style.color = "white"
    }
}

// function color(id, id2) {
//     colordislike(id, id2)
//     colorlike(id, id2)
// }