
var num = 0;
brand();

function brand() {
    var i;
    var x = document.getElementsByClassName("brands");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    num++;
    if (num > x.length) {num = 1} 
    x[num-1].style.display = "block"; 
    setTimeout(brand, 4000); 
}
