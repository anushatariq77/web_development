var qwert = 1;

          	function plusqwert(n){
          		qwert=qwert + n;
          		showImg(qwert);
          	}

            showImg(1);

            function showImg(n)
            {   
                var i;
            	var x = document.getElementsByClassName("row");
            	if(n>x.length)
            	    {qwert=1};
            	if(n<1)
            		{qwert=x.length};
                for (i=0 ; i<x.length ; i++)
                 {
                	x[i].style.display = "none";
                }
                x[qwert-1].style.display = "block";
            }
            
autoSld();
            function autoSld()
            {
               var i;
               var x = document.getElementsByClassName("row");
                for (i=0 ; i<x.length ; i++)
                 {
                  x[i].style.display = "none";
                 }
                 if(qwert > x.length)
                  { qwert = 1 }
                x[qwert-1].style.display = "block";
                qwert++;
               setTimeout(autoSld,2000);
            }
   