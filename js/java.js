let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.menu');

menu.onclick = () => {
navbar.classList.toggle('active');
menu.classList.toggle('move');
filter.classList.remove('active');
}

let filter = document.querySelector('.filter');

document.querySelector('#filter-icon').onclick = () => {
    filter.classList.toggle('active');
}


var swiper = new Swiper(".recommand-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1068: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });

  

  let list = document.querySelectorAll('.list');
  let itemBox = document.querySelectorAll('.itemBox');

  for(let i=0; i<list.length; i++){
    list[i].addEventListener('click' , function(){
      for(let j=0; j<list.length; j++){
        list[j].classList.remove('active');
      }
      this.classList.add('active');
         
      let dataFilter = this.getAttribute('data-filter');
      for(let k=0; k<itemBox.length; k++){
        itemBox[k].classList.remove('active');
        itemBox[k].classList.add('hide');

       if(itemBox[k].getAttribute('data-item') == dataFilter ||
       dataFilter == "all"){
        itemBox[k].classList.remove('hide');
        itemBox[k].classList.add('active');
        
       }
      }


    })
  }


 

  