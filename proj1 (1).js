
var sliderNum = 0;
function proj()
{var o = 0.0;
    var mar = 400;
var textDiv = document.getElementById("textDiv"+sliderNum);

var myInter =  setInterval(function(){
    // textDiv.style = "opacity : "+o+"; ";
    textDiv.style = "top: "+mar+"px;";
    textDiv.style.display = "block";

    // o = o+0.1;
    mar = mar -1;
    myFunc();
    }
    , 3);

var myFunc = ()=> {
        if (mar == 0){
            clearInterval(myInter);
            sliderNum++;
            if(sliderNum == 3){
                sliderNum = 0 ;
            }
            setTimeout(function(){
                textDiv.style.display = "none";
                console.log(sliderNum)
            },900)
            
        }
    }
}

// setInterval(proj,2000);



var index = 1;

            function plusIndex(n){
              index=index + n;
                  showImage(index);
                  proj();
                  
            }

            showImage(1);

            function showImage(n)
            {   
                var i;
              var x = document.getElementsByClassName("slides");
              if(n>x.length)
                  {index=1};
              if(n<1)
                {index=x.length};
                for (i=0 ; i<x.length ; i++)
                 {
                  x[i].style.display = "none";
                }
                x[index-1].style.display = "block";
            }
            autoSlide();
            function autoSlide()
            {
                proj();
               var i;
               var x = document.getElementsByClassName("slides");
                for (i=0 ; i<x.length ; i++)
                 {
                  x[i].style.display = "none";
                 }
                 if(index > x.length)
                  { index = 1 }
                x[index-1].style.display = "block";
                index++;
               setTimeout(autoSlide,2000);
            }
