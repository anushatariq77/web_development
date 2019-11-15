
var textDivNum = 1;
function proj()
            {   
                var i;
                var textDiv = document.getElementsByClassName("text-block");
                for (i=0 ; i<textDiv.length ; i++)
                 {
                  textDiv[i].style.display = "none";
                 }
                 if(textDivNum > textDiv.length)
                  { 
                        textDivNum = 1 
                    }
                    textDiv[textDivNum-1].style.display = "block";
                textDivNum++;
            }

            function showTextDiv(ind)
            {   
                var i;
                var textDiv = document.getElementsByClassName("text-block");
              if(ind > textDiv.length)
                  { textDivNum = 1 };
              if(ind<1)
                    {textDivNum = textDiv.length
                    };
                    
                for (i=0 ; i<textDiv.length ; i++)
                 {
                  textDiv[i].style.display = "none";
                }
                textDiv[index-1].style.display = "block";
            }



var index = 1;

            function plusIndex(n){
              index=index + n;
                showImage(index);
                showTextDiv(index);
                  
            }

            
            function showImage(n)
            {   
                var i;
                var x = document.getElementsByClassName("slides");
              if(n > x.length)
                  { index = 1 };
              if(n<1)
                {index=x.length};
                for (i=0 ; i<x.length ; i++)
                 {
                  x[i].style.display = "none";
                }
                x[index-1].style.display = "block";
            }
            autoSlide();
            proj();
            function autoSlide()
            {
                var i;
                var x = document.getElementsByClassName("slides");
                for (i=0 ; i<x.length ; i++)
                 {
                  x[i].style.display = "none";
                 }
                 if(index > x.length)
                  { 
                        index = 1 
                    }
                x[index-1].style.display = "block";
                index++;
            }
            var myInter;
            
            myInter = setInterval(()=>{autoSlide(); proj()},3000);

function startInterval(){
    myInter = setInterval(()=>{autoSlide(); proj()},4000);
}
function stopInterval(){
    clearInterval(myInter);
}