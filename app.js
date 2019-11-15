
function proj()
{var o = 0.0;
var mar = 400;
var textDiv = document.getElementById("textDiv");

var myInter =  setInterval(function(){
    // textDiv.style = "opacity : "+o+"; ";
    textDiv.style = "top: "+mar+"px;";

    // o = o+0.1;
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

setInterval(proj,2000);

// var myFunc = ()=> {
//         if (o > 0.7){
//             console.log(o)
//             clearInterval(myInter);

//         }
//     }




