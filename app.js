const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
     if 9this.value == ""){
    parent.classList.remove("focus");
}
}

inputs.forEach(input) => {
   input.addEventListener("focus", focusFunc);
    input.addEventListener("focus", focusFunc);
});