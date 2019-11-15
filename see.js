function ring()
{ 
var o = 0.0;
var sideDiv2 = document.getElementById("sideDiv2");

var myInter =  setInterval(function(){
sideDiv2.style = "opacity : "+o+";";
    o = o+0.1;
    myFunc();
    }
    , 150);

var myFunc = ()=> {
        if (o > 0.7){
            console.log(o)
            clearInterval(myInter);

        }
    }
}
setInterval(ring,5000);
