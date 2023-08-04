const toggol_container =document.getElementById("toggol_container");
const nav_absolute =document.getElementById("nav_absolute");
const nav_overlay =document.getElementById("nav_overlay");
// const burger =document.getElementById("toggle");
toggol_container.addEventListener("click",function () {
    nav_absolute.style.right = "0";
    nav_overlay.style.opacity = ".5";
    nav_overlay.style.visibility = "visible";
})

nav_overlay.addEventListener("click",function(){
    nav_absolute.style.right = "-320%";
    nav_overlay.style.opacity = "0";
    nav_overlay.style.visibility = "hidden";
})
nav_absolute.addEventListener("click",function(){
    nav_absolute.style.right = "-320%";
    nav_overlay.style.opacity = "0";
    nav_overlay.style.visibility = "hidden";
})

var liElements = document.querySelectorAll("#nav_absolute li");
    console.log(liElements);
    
    liElements.forEach(function(li) {
        console.log(li);
        li.addEventListener("click", function() {
            console.log("clicked li");
            var link = li.querySelector("a");
            if (link) {
                link.click();
            }
        });
    });
