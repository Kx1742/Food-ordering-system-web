
 //Initially display all products
 window.onload = () => {
  filterProduct("all");
  
};



function searchFromHome() {
  // Get the search input element by ID
  const searchInput = document.getElementById('search-input-home');

  // Get the value of the search input
  const searchTerm = searchInput.value;
  // Set the search term in localStorage
  localStorage.setItem('searchTerm', searchTerm);

  // Redirect to the search results page
  const searchResultsUrl = '../menu3/index.php';
  window.location.href = searchResultsUrl;

  // Set the value of the search input field on the search results page
  localStorage.setItem('searchInputValue', searchTerm);

}
document.addEventListener('DOMContentLoaded', () => {
  // Get the search term from localStorage
  const searchTermFromHome = localStorage.getItem('searchTerm');
  if (searchTermFromHome) {
    // Set the value of the search input field
    const searchInputMenu = document.getElementById('search-input');
    searchInputMenu.value = searchTermFromHome;

    // Trigger the change event on the search input to perform the search
    const searchEvent = new Event('change');
    searchInputMenu.dispatchEvent(searchEvent);
  }
});

// Add event listener to the search input element
const searchInputMenu = document.getElementById('search-input');
searchInputMenu.addEventListener('change', () => {
  
 
  // Get the value of the search input
  const searchTerm = searchInputMenu.value;

  // Select all the elements and boxes
  const elements = document.querySelectorAll('.product-name');
  const boxes = document.querySelectorAll('.box');

  // Loop through all the elements and boxes
  for (let i = 0; i < elements.length; i++) {
    // If the element's text contains the search term, show the box
    if (elements[i].innerText.toUpperCase().includes(searchTerm)) {
      boxes[i].classList.remove('hide');
    }
    // Otherwise, hide the box
    else {
      boxes[i].classList.add('hide');
    }
  };

});

 


  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //document.getElementById("dishes-heading").innerHTML = value;
    //Button class code
    const boxes = document.querySelectorAll('.box');

    // Check if there is a search term in localStorage
    const searchTerm = localStorage.getItem('searchTerm');
  
    // If there is a search term, filter the products based on the search term
    if (searchTerm) {
      for (let i = 0; i < boxes.length; i++) {
        const productName = boxes[i].querySelector('.product-name').innerText.toUpperCase();
        if (productName.includes(searchTerm.toUpperCase())) {
          boxes[i].classList.remove('hide');
        } else {
          boxes[i].classList.add('hide');
        }
      }
      localStorage.removeItem('searchTerm');
    }
    // If there is no search term, filter the products based on the parameter passed to the function
    else {
    let buttons = document.querySelectorAll(".button-value");
    
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
    //select all cards
    let elements = document.querySelectorAll(".box");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "all") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  }
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
   
    //initializations
    let searchInput = document.getElementById("search-input").value;
  
    let elements = document.querySelectorAll(".product-name");
    let boxes = document.querySelectorAll(".box");
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      
      if (element.innerText.toUpperCase().includes(searchInput.toUpperCase())) {
        //display matching card
       
        boxes[index].classList.remove("hide");
      } else {
        //hide others
        boxes[index].classList.add("hide");
      }
    });
  });

  function viewProduct(value){
    document.getElementByClassName("box").addEventListener("click", () => {
      console.log(value['food_price']);
    });
  }
 
  

  
 


  

  
 


