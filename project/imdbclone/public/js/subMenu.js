let dropdownBtn = document.querySelector('.dropDown_subMenu');
let menuContent = document.querySelector('.dropdown-categories');
dropdownBtn.addEventListener('click',()=>{
   if(menuContent.style.display===""){
      menuContent.style.display="block";
   } else {
      menuContent.style.display="";
   }
})