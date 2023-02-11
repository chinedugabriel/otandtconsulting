// veriables for nav button
let closeButtonNav = document.getElementById('close-nav');
let openButtonNav = document.getElementById('open-nav');

// nav section tobe toggled 
let nav_list_section = document.getElementById('nav-list');
let nav_wrapper_menu2 = document.getElementById('nav-wrapper');

// green-slide-show 
// let green_slide_show = document.getElementById('green-slide-show');

function btnClose(){

            // green_slide_show.style.display='none';

            nav_list_section.style.display="none";

    nav_wrapper_menu2.style.display='flex';
    
}

function btnOpen(){
    // setTimeout(()=>{

    //         green_slide_show.style.display='none';
    // },1000);

    // green_slide_show.style.display='block';
    
    nav_wrapper_menu2.style.display='none';


    nav_list_section.style.display="flex";
}

// events for navigation toggle

closeButtonNav.addEventListener('click',btnClose);
openButtonNav.addEventListener('click',btnOpen);


// this veriable is linked from the span element with an id of "show year"

let placeYear = document.getElementById('show-year');

// this veriable are used in the home butt