
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

                setTimeout(showImage, 4000); 
            }
           