const days = document.getElementsByTagName("td");

Array.from(days).forEach(day => {
  day.addEventListener("click", (e) => {
    let elementStyle = e.target.style;
    
    if(elementStyle.backgroundColor !== ""){
      elementStyle.backgroundColor = ""; 
			elementStyle.color = "#ECB365";
    }else{
      elementStyle.backgroundColor = "#E0C097";
			elementStyle.color = "#041C32";
    }
  });
})
