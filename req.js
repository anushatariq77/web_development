function sing()
{ 
var o = 0.0;
var sideDiv = document.getElementById("sideDiv");

var myInter =  setInterval(function(){
sideDiv.style = "opacity : "+o+";";
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
setInterval(sing,5000);


