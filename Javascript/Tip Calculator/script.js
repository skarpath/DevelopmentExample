//Script JS


//Onload events
function onLoad()
{
	//Hides tip amount  Div's from showing
	document.getElementById("totalTip").style.display = "none";
	    
    //Adds Calcuate tip amount button listener
   document.getElementById("calculateTip").onclick = calculateTip;


}

//Calculate tips
function calculateTip() {
    
	//Store Data Amount
    var billAmount = document.getElementById("billAmount").value;
    var serviceQuality = document.getElementById("serviceQuality").value;
    var numPeople = document.getElementById("numPeople").value;
    
    //Perform a quick Validation //== equals === Exactly equal
    if ( billAmount == "" || serviceQuality == 0){
        alert("Please enter Your bill amount and your service quality");
        return;
    }
    
    //Check number people
    if ( numPeople == "" || numPeople <= 1){
        numPeople = 1;
        document.getElementById("numPeople").value = 1;
    }
    
    
    
    
    //Caluate math
    var total = (billAmount * serviceQuality) / numPeople;
    total = Math.round(total, 100);
    
    //Update display
    var message = " Tip = $" + total + " at " + serviceQuality + "%";
    
    
    if(numPeople > 1 ){
        message += " per person";
    }   
    
    //Show tip
    document.getElementById("totalTip").innerHTML = message;
    document.getElementById("totalTip").style.display = "block";
    
        

}








