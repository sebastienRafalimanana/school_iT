// script pour le barre de prgressoin //
const progress = document.getElementById("progress");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const circles = document.querySelectorAll(".circle");
const taskname = document.getElementById("taskName");
const infoSco = document.getElementById("info-sco");
const infoEtu = document.getElementById("info-etu");
const conclu = document.getElementById("conclusion");
progress.style.width = 0 + "%";
let currentActive = 1;
next.addEventListener("click", () => {
    currentActive++;
    if (currentActive > circles.length) {
        swal("", "Etudiant inscrit avec success...", "success");
        currentActive = circles.length;
    }
    update();
    change();
});
prev.addEventListener("click", () => {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
    update();
    change();
});

function update() {
    circles.forEach((circle, idx) => {
        if (idx < currentActive) {
            circle.classList.add("active");
        } else {
            circle.classList.remove("active");
        }
    });
    const actives = document.querySelectorAll(".active");
    progress.style.width =
        ((actives.length - 2) / (circles.length - 1)) * 100 + "%";

    if (progress.style.width == "100%") {
        next.innerText = "Terminer";
    } else {
        next.innerText = "suivant";
    }
}

function change() {
    if (currentActive == "1") {
        taskname.innerText = "Information sur l'inscription";
        infoSco.style.zIndex = "1";
        infoEtu.style.zIndex = "0";
        conclu.style.zIndex = "0";
    }
    if (currentActive == "2") {
        taskname.innerText = "Information sur l'etudiant";
        infoEtu.style.zIndex = "1";
        infoSco.style.zIndex = "0";
        conclu.style.zIndex = "0";
    }
    if (currentActive == "3") {
        taskname.innerText = "Conclusion d'inscription";
        infoEtu.style.zIndex = "0";
        infoSco.style.zIndex = "0";
        conclu.style.zIndex = "1";
    }
}