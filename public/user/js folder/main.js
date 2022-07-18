

let faqItems = document.querySelectorAll('.faq-item');
let closeBtns = document.querySelectorAll('.close-answer');

faqItems.forEach(faqItem =>{
    faqItem.addEventListener('click',

     (e)=>{ 

        let answer = (e.target.children[1]);

        hbjbnnanswer.style.height = 'auto'; 
    });
 })

closeBtns.forEach(Btn =>{
    Btn.addEventListener('click',

     (e)=>{ 

     (e.path[3].children[1]).style.height='0px';
kghgho
    });
 })



//  let links =document.querySelectorAll('.dashboard-links');

//  const route = (event)=>{
//     event = event || window.event;
//     event.preventDefault();
//     window.history.pushState({},'',event.target.href);
//     HandleLocation();
//  }
 

//  const routes = {
//      404:"../html folder/userhome.html",
//      "/home":"../html folder/userhome.html",
//      "/reinvest":"../html folder/reinvest.html",
//      "/referrals":"../html folder/referrals.html",
//      "/transactions":"../html folder/transactions.html",
//      "/plans":"../html folder/plans.html",
//      "/accountInfo":"../html folder/accountinfo.html",
//  };

// const HandleLocation = async ()=>{

//     const path = window.location.pathname;

//     const route = routes[path] || routes[404];
    
//     const html = await fetch(route).then((data)=> data.text());

    
//     document.querySelector(".page-displayer").innerHTML = html;

// }

//  links.forEach(link=>{
//      link.addEventListener('click', route);
//  })

//  window.onpopstate = HandleLocation;

//  window.route = route;
 
//  HandleLocation();

//  window.onload(()=>{
//     window.location.path="/html%20folder/dashboard.html";   
//  })






// menu bar codes for main pages

const menuList=document.getElementById('menu-items');

try {
    
    const OpenMenubar= (el,value) =>{
        el.style.height =`${value}`;       
    }

    function CloseSideBar(el, value) {
        el.style.height = `${value}`;

    }

    const menu = document.getElementById('menubar').addEventListener('click',()=>{
        OpenMenubar(menuList,'80%');
    });

    const sidebar = document.getElementById('close-sidebar').addEventListener('click',()=>{
        OpenMenubar(menuList,'0px');
    });

} 
catch (error) {
}


// modal caller function 

let CallModal= (element) => {
    element.style.transform = 'scale(1)';
};


let closeModal= (element)=>{
    element.style.transform = 'scale(0)';
}

// profil edit modal 


let profileSettingModal = document.querySelector('.profile-modal');
document.querySelector('.user-icon').addEventListener(`click`, ()=>{   
      
    CallModal(profileSettingModal);
    closeModal(notificationModal)
    
});

// Notification modal 

let notificationModal = document.querySelector('.notification-modal');
document.querySelector('.notification').addEventListener(`click`, ()=>{   
      
    CallModal(notificationModal);
    closeModal(profileSettingModal)
});

// close notification modal 

document.querySelector('.close-notification').addEventListener('click', (e)=>{
    closeModal(notificationModal)

})
document.querySelector('.close-profile').addEventListener('click', (e)=>{
    closeModal(profileSettingModal)
})
