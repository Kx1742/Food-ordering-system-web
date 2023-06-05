
  
  let foodList = {
    data: [
      {
        foodName: "Salmon Sushi",
        category: "Sushi",
        price: "5.00",
        image: "../image/salmon_sushi.jpg",
        description: "The fresh salmon with fragrant sushi rice, best fit with the soy sauce and wasabi.",
      },
      {
        foodName: "Tako Sushi",
        category: "Sushi",
        price: "10.00",
        image: "../image/tako_sushi.jpg",
        description: "It is an seafood sushi with fresh octopus. Chewy texture and sweetness of tako could be enjoyed.",
      },
      {
        foodName: "Ebi Prawn Sushi",
        category: "Sushi",
        price: "10.00",
        image: "../image/ebi_prawn_sushi.jpg",
        description: "Butterfly shape of shrimp create a, artistic visual effect when enjoying the meal, fresh prawn used give sweet flavour and firm texture.",
      },
      {
        foodName: "Tamagoyaki Sushi",
        category: "Sushi",
        price: "12.00",
        image: "../image/tamagoyaki_sushi.jpeg",
        description: "",
      },
      {
        foodName: "Sushi Platter",
        category: "Sushi",
        price: "20.50",
        image: "../image/sushiplatter.jpg",
        description: "Contain Various Type Of Sushi Such As Nigiri, Maki And California Roll which able to enjoy several types of sushi in a plate.",
      },
      {
        foodName: "Hosomaki",
        category: "Sushi",
        price: "8.00",
        image: "../image/hosomaki.jpg",
        description: "Although it consist of just one or two fillings of tuna, cucumber and tamagoyaki, but it is enough to serve as appetizer.",
      },
      {
        foodName: "Temaki",
        category: "Sushi",
        price: "13.00",
        image: "../image/temaki.jpg",
        description: "Hand roll form sushi just like ice cream cone, with fresh sashimi, veggies. You could also customize as you wish.",
      },
      {
        foodName: "Fruit Sushi",
        category: "Sushi",
        price: "12.00",
        image: "../image/fruit_sushi.jpg",
        description: "Special sushi been create by our restaurant. Contain lots of fresh fruits such as kiwi, mango, pitaya and etc. It can be served with honey, condensed milk, and caramel sauce",
      },
    ],
  };

  for(let item of foodList.data)
  {
    let box=document.createElement("div");
    //Assign box class name to productbox
    box.classList.add("box", item.category, "hide");
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image");
    let image = document.createElement("img");
    image.setAttribute("src", item.image);
    imgContainer.appendChild(image);
    box.appendChild(imgContainer);
    let content=document.createElement('div');
    content.classList.add("content");

    let categorylabel=document.createElement('h4');
    categorylabel.textContent=item.category;
    categorylabel.classList.add("cat");
    content.appendChild(categorylabel);
   //price
    let price = document.createElement("span");
    price.classList.add("foodprice");
    price.innerText = "RM" + item.price;
    content.appendChild(price);
    //product name
    let name = document.createElement("h3");
    name.classList.add("product-name");
    name.innerText = item. foodName.toUpperCase();
    content.appendChild(name);
    let p=document.createElement('p');
    p.textContent=item.description;
    content.appendChild(p);
    let addtocart=document.createElement('a');
    addtocart.href="#";
    addtocart.classList.add("btn");
    addtocart.textContent="Add to cart";
    content.appendChild(addtocart);
    let inputcart=document.createElement('input');
    inputcart.setAttribute('type','number');
    inputcart.setAttribute('name','qty');
    inputcart.classList.add("qty");
    inputcart.setAttribute('min','1');
    inputcart.setAttribute('max','99');
    inputcart.setAttribute('value','1');
    inputcart.setAttribute('onkeypress',"if(this.value.length==2)return false;" );
     content.appendChild(inputcart);
    box.appendChild(content);
  
    document.getElementById("products").appendChild(box);
  
  }

  //parameter passed from button (Parameter same as category)
function filterProduct(value) {
   
    //Button class code
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
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".box");
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide");
      } else {
        //hide others
        cards[index].classList.add("hide");
      }
    });
  });
  //Initially display all products
 //Initially display all products
window.onload = () => {
  filterProduct("all");
};