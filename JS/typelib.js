//BOOOOOT

var a = 0;

// var A = 0;
		var tag2 = document.getElementById("boot");
		var html2 = document.getElementById("boot").innerHTML;
		var attr2 = tag2.setAttribute("data", html2);
		var txt2 = tag2.getAttribute("data");
		var speed2 = 100;

		function typeWriter1() {
		  if (a <= txt2.length) {
		    document.getElementById("boot").innerHTML = txt2.slice(0 , a + 1);
		    a++;
            
		    setTimeout(typeWriter1, speed2);
		  }
		    //console.log(document.getElementById("boot").innerHTML);
		}



//LOAADER


///PARAGRAPHE
var c = 0;
var d=0;
// var A = 0;
		var tag3 = document.getElementById("loader");
		var html3 = document.getElementById("loader").innerHTML;
		var attr3 = tag3.setAttribute("data", html3);
		var txt3 = tag3.getAttribute("data");
		var speed3 = 250;

		function typeWriter2() {
		  if (c <= txt3.length) {
            document.getElementById("loader").style.display= "block";
            document.getElementById("percent").style.display= "block";
		    document.getElementById("loader").innerHTML = txt3.slice(0 , c + 1);
            document.getElementById("percent").innerHTML = "".concat(Math.round(d)," %");
		    c++;
            d+=9.09;
		    setTimeout(typeWriter2, speed3);
		  }
		    //console.log(document.getElementById("loader").innerHTML);
		}








///PARAGRAPHE
var i = 0;
// var A = 0;
		var tag = document.getElementById("mission");
		var html = document.getElementById("mission").innerHTML;
		var attr = tag.setAttribute("data", html);
		var txt = tag.getAttribute("data");
		var speed = 5;

		function typeWriter3() {
		  if (i <= txt.length) {
            document.getElementById("mission").style.display= "block";
		    document.getElementById("mission").innerHTML = txt.slice(0 , i + 1);
		    i++;
		    setTimeout(typeWriter3, speed);
		  }
		    //console.log(document.getElementById("mission").innerHTML);
		}


document.getElementById("mission").style.display= "none";
document.getElementById("loader").style.display= "none";
document.getElementById("percent").style.display= "none";

document.getElementById("genesis").addEventListener('click',()=>{ 
    
    typeWriter1();
  
    
    setTimeout(typeWriter2, 2250);

    setTimeout(typeWriter3, 5000);
    

})





