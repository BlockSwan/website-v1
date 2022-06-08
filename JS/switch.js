const toggleSwitch = document.querySelector('.switch input[type="checkbox"]');
const img = document.getElementById("bswn");
const threeD = document.getElementById("bswngif");
const gif = document.getElementById("gifWorking");




function switchTheme(e) {
 
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
        img.src = "./assets/typoWhite.png";
        

        document.querySelectorAll('.iconAsset,.iconCrypto').forEach(function(iconAsset) {
            iconAsset.style.filter = "invert(0%)";
          });
          document.querySelectorAll('#myChart').forEach(function(myChart) {
            myChart.style.filter = "invert(0%)";
          });
          document.querySelectorAll('.tradingview-widget-container').forEach(function(TradingView) {
            TradingView.style.filter = "invert(0%)";
          });
          gif.src = "./assets/SwanWorkingwhite.gif";
       
          




        
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); //add this
        img.src = "./assets/typoBlack.png";
        
        document.querySelectorAll('.iconAsset,.iconCrypto').forEach(function(iconAsset) {
            iconAsset.style.filter = "invert(100%)";
          });
          document.querySelectorAll('#myChart').forEach(function(myChart) {
            myChart.style.filter = "invert(100%)";
          });
          document.querySelectorAll('.tradingview-widget-container').forEach(function(TradingView) {
            TradingView.style.filter = "invert(100%)";
          });
          gif.src = "./assets/SwanWorkingdark.gif";
          

        
    }  
}

toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
const big = document.getElementsByClassName("wb-close");

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
        img.src = "./assets/typoWhite.png";
        
        
        document.querySelectorAll('.iconAsset,.iconCrypto').forEach(function(iconAsset) {
            iconAsset.style.filter = "invert(0%)";
          });
          document.querySelectorAll('#myChart').forEach(function(myChart) {
            myChart.style.filter = "invert(0%)";
          });
          document.querySelectorAll('.tradingview-widget-container').forEach(function(TradingView) {
            TradingView.style.filter = "invert(0%)";
          });
          gif.src = "./assets/SwanWorkingwhite.gif";
         
          

        
    }
    else{
      img.src ="./assets/typoBlack.png";
      
      document.querySelectorAll('.iconAsset,.iconCrypto').forEach(function(iconAsset) {
        iconAsset.style.filter = "invert(100%)";
      });
      document.querySelectorAll('#myChart').forEach(function(myChart) {
        myChart.style.filter = "invert(100%)";
      });
      document.querySelectorAll('.tradingview-widget-container').forEach(function(TradingView) {
        TradingView.style.filter = "invert(100%)";
      });
      gif.src = "./assets/SwanWorkingdark.gif";
     
 
    }
   
}


