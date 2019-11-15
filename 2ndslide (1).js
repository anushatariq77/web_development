var ind = 1;

          	function plusind(n){
          		ind=ind + n;
          		showimag(ind);
          	}

            showimag(1);
 
            function showimag(n)
            {   
                var  j;
            	var w = document.getElementsByClassName("row");
            	if(n>w.length)
            	    {ind=1};
            	if(n<1)
            		{ind=w.length};
                for (j=0 ;j<w.length ;j++)
                 {
                	w[j].style.display = "none";
                }
                w[ind-1].style.display = "block";
            }
            Slide();
            function Slide()
            {
               var j;
               var w = document.getElementsByClassName("row");
                for (j=0 ;j<w.length ;j++)
                 {
                	w[j].style.display = "none";
                 }
                if(ind > w.length)
                 	{ind = 1 }
                w[ind-1].style.display = "block";
               ind++;
               setTimeout(Slide,1000);
            }

   
