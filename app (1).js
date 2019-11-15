var i;
for(i=0;i==n;i++)
{ proj(n);} 
function proj()
{var o = 0.0;
var mar = 400;
var textDiv = document.getElementById("textDiv");

var myInter =  setInterval(function(){
    
    textDiv.style = "top: "+mar+"px;";

    mar = mar -1;
    myFunc();
    }
    , 1);

var myFunc = ()=> {
        if (mar == 0){
            console.log(o)
            clearInterval(myInter);

        }
    }
}

//setInterval(proj,2000);




