document.addEventListener("DOMContentLoaded", () => {

    document.getElementById("form");
  
    document.addEventListener("submit", handleFormData);
  
  });
  
  function handleFormData(x) {
  
    x.preventDefault();
  
    //the preventDefult() initially inhibits the form from submitting
  
    //till a formData has been prepared
  
    let form = x.target;
  
    //this TARGETS the data that gets forwarded once the submit button
  
    //clicked. This is referred to as event target. 
  
    let formData = new FormData(form);
  
    //Since the variable; Form, now bears the data from the from the HTML Form,
  
    //a formData is initiated to collect this data.
  
    console.log(Array.from(formData));
  
    //Using the console.log(), we print the information from the forms submitted
  
  }