// document.addEventListener('DOMContentLoaded', function () {
//      const currentPath = window.location.pathname;
//      const pageName = currentPath.split("/").pop();

//      let activeId;
//     if (pageName == "home.php") {
//         activeId = 'home';
//     } else if () {
//         activeId = 'menu';
//     } else if (currentPath.includes('about.php')) {
//         activeId = 'about';
//     } else if (currentPath.includes('FindUs.php')) {
//         activeId = 'find';
//     }

//     // Mark the active link
//     if (activeId) {
//         const activeElement = document.getElementById(activeId);
//         if (activeElement) {
//             activeElement.classList.add('active'); // Add the active class
//         }
//     }
// });



//------------------------------------------------------------------------------
const saidaDirection = document.getElementById('directionBtn');
const beirutDirection = document.getElementById('directionBtn2')
let mapUrl = "";

if(saidaDirection){

    saidaDirection.addEventListener('click',function(){
         
        mapUrl = "https://www.google.com/maps/dir/33.5824072,35.3952918/dr+nabih+bezri+high+school/@33.5794217,35.3935452,17.25z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x151ef01079fff9df:0xab91a2938e15bd72!2m2!1d35.3791952!2d33.5682712?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D"
  

     window.open(mapUrl,"_blank");
})


}

if(beirutDirection){

    beirutDirection.addEventListener('click',function(){
        mapUrl = "https://www.google.com/maps/dir/33.5824072,35.3952918/rawsha/@33.7339059,35.2812294,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x151f115f15fc82df:0x8582d0b6c448b43!2m2!1d35.47171!2d33.8902759?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D"
    
        window.open(mapUrl,"_blank");
    })
    

}




//-----------------------------Side-Bar-------------------------------------------

const humbergurIcon = document.getElementById('humb-Icon')
const SideBar = document.getElementById('side-bar');
const close = document.getElementById('close');
 
if(humbergurIcon){

    humbergurIcon.addEventListener('click',function(){
         SideBar.classList.add('side-bar-show');

     
});

close.addEventListener('click',function(){

    SideBar.classList.remove('side-bar-show');

});
    

}
//-------------------------------On Scroll Fix-------------------------------------------------

// const nav = document.getElementById('nav')

// window.addEventListener('scroll',function(){

//   if(this.window.scrollY > 50){
    
//     nav.classList.add("scrolled");

//   }else{
//     nav.classList.remove("scrolled");
//   }

// });

//---------------------------------------Add animation ---------------------------

const first = document.getElementById('first');
const second = document.getElementById('second');
const signature = document.getElementById('signature');
const signature2 = document.getElementById('signature2');
const desc = document.getElementById('desc');
const desc2 = document.getElementById('desc2');
const button = document.getElementById('btn');
const button2 = document.getElementById('btn2');
let Height;
let Height2;

window.addEventListener('load',function(){

    if(window.matchMedia("(max-width:495px)").matches){
        Height = window.innerHeight * 0.3;
    }

    else if(window.matchMedia("(max-width:800px)").matches){

        Height = window.innerHeight * 0.6

    }

    else if(window.matchMedia("(max-width:1000px)").matches){

        Height = window.innerHeight * 0.8;

    }
    else if(window.matchMedia("(max-width:1250px)").matches){

        Height = window.innerHeight * 1;

    }else if(window.matchMedia("(max-width:2280px)").matches){
 
        Height = window.innerHeight * 1.3;

    }


})

 
window.addEventListener('scroll',function(){

    const current = window.scrollY;
 
  


    if(current>=Height){

        setTimeout(function(){

            if(first){
                first.classList.add('bottom-to-up');

            }
        
           setTimeout(() => {
            
            if(signature){
                signature.classList.add('bottom-to-up');

            }
        
        
              setTimeout(()=>{


                if(desc){
                    desc.classList.add('bottom-to-up');

                }
        
        
        
                setTimeout(()=>{
        
                    if(button){
                        button.classList.add('bottom-to-up');

                    }
        
                },280);
        
              },220);
        
           }, 180);
        
        },100);
        

      }


})


window.addEventListener('load',function(){


    
    if(window.matchMedia("(max-width:495px)").matches){
        Height2 = window.innerHeight * 0.6;
    }

    else if(window.matchMedia("(max-width:800px)").matches){

        Height2 = window.innerHeight * 1.1;
    }

    else if(window.matchMedia("(max-width:988px)").matches){

        Height2 = window.innerHeight * 1.3;

    }else if(window.matchMedia("(max-width:1300px)").matches){

        Height2 = window.innerHeight * 1.5;

    }else if(this.window.matchMedia("(max-width:1350px)").matches){

        Height2  = this.window.innerHeight * 1.8;

    }else if(window.matchMedia("(max-width:2280px)").matches){
 
        Height2 = window.innerHeight * 2.4;

    }



})



window.addEventListener('scroll',function(){

    const current = window.scrollY;
 

    if(current>=Height2){

      
setTimeout(function(){

    if(second){
        second.classList.add('bottom-to-up');

    }


   setTimeout(()=>{

    if(signature2){
        signature2.classList.add('bottom-to-up');

    }

      setTimeout(()=>{

        if(desc2){
            desc2.classList.add('bottom-to-up');

        }
 
        setTimeout(()=>{

            if(button2){
                button2.classList.add('bottom-to-up');

            }

        },280);

      },220);

   }, 180);

},100);

      }
})

//--------------------------------------------FindUs-----------------------------------


const sidon = document.getElementById('sidon');
const beirut = document.getElementById('beirut');
const location1 = document.getElementById('location');
const location2 = document.getElementById('location2');
const time = document.getElementById('time');
const time2 = document.getElementById('time2');
const btw = document.getElementById('btw');
const btw2 = document.getElementById('btw2');
const btn1 = document.getElementById('directionBtn');
const btn2 = document.getElementById('directionBtn2');
let scrollTriggerHeight;


function triggerAnimationOnLoad(){

    setTimeout(function(){

        if(beirut){
            beirut.classList.add('bottom-to-up');

        }

    
       setTimeout(() => {
    
            if(location2){
                location2.classList.add('bottom-to-up');

            }
    
          setTimeout(()=>{
    
            if(time2){
                time2.classList.add('bottom-to-up');

            }
    
            setTimeout(()=>{

                if(btw2){
                    btw2.classList.add('bottom-to-up');

                }
    
    
                setTimeout(()=>{

                    if(btn2){
                        btn2.classList.add('bottom-to-up');

                    }

                },340);

    
            },280);
    
          },220);
    
       }, 180);
    
    },100);



}

 
window.addEventListener('load',function(){

    // const current = window.scrollY;
    // let scrollTriggerHeight;

    // if(window.matchMedia("(max-width:495px)").matches){
    //     scrollTriggerHeight = window.innerHeight * 0.8
    // }

    // else if(window.matchMedia("(max-width:960px)").matches){

    //     scrollTriggerHeight = window.innerHeight * 1;

    // }else if(window.matchMedia("(max-width:1250px)").matches){

    //     scrollTriggerHeight = window.innerHeight * 1.3;
    // }else if(window.matchMedia("(max-width:2280px)").matches){
 
    //     scrollTriggerHeight = window.innerHeight * 0.01;

    // }


    // if(current>=scrollTriggerHeight){

        setTimeout(function(){

            if(sidon){

                sidon.classList.add('bottom-to-up');

            }

        
           setTimeout(() => {

               if(location1){

                location1.classList.add('bottom-to-up');


               }
        
        
        
              setTimeout(()=>{
        
                if(time){

                time.classList.add('bottom-to-up');
        
                }
        
                setTimeout(()=>{
        
                    if(btw){

                    btw.classList.add('bottom-to-up');

                    }

                    setTimeout(()=>{

                        if(btn1){
                            btn1.classList.add('bottom-to-up');

                        }


                    },280);
        
        
                },240);
        
              },220);
        
           }, 180);
        
        },100);

    //   }
})


window.addEventListener('load',function(){

    if(window.matchMedia("(max-width:1240px)").matches){

 
        triggerAnimationOnLoad();
             
      
         return;
       }else{

        // if(window.matchMedia("(max-width:1000px)").matches){

        //     scrollTriggerHeight = window.innerHeight * 0.45;
        
        //     }
        //     else if(window.matchMedia("(max-width:1160px)").matches){
        //         scrollTriggerHeight = window.innerHeight * 0.6;
        //      }
        
               if(window.matchMedia("(max-width:1300px)").matches){
        
                scrollTriggerHeight = window.innerHeight * 0.2;
        
            }else if(window.matchMedia("(max-width:1450px)").matches){
        
                scrollTriggerHeight = window.innerHeight * 0.4;
            }else if(window.matchMedia("(max-width:2280px)").matches){
         
                scrollTriggerHeight = window.innerHeight * 0.6;
        
            }


       }
})

 
window.addEventListener('scroll',function(){

    const current = window.scrollY;


    if(current>=scrollTriggerHeight){

        setTimeout(function(){

            if(beirut){
                beirut.classList.add('bottom-to-up');
            }

        
           setTimeout(() => {
        
                if(location2){

                    location2.classList.add('bottom-to-up');

                }
        
              setTimeout(()=>{
        
                if(time2){
                    time2.classList.add('bottom-to-up');

                }
        
        
                setTimeout(()=>{
        
                    if(btw2){

                        btw2.classList.add('bottom-to-up');
                    }


                    setTimeout(()=>{

                        if(btn2){
                            btn2.classList.add('bottom-to-up');

                        }
                    },280);

        
                },240);
        
              },220);
        
           }, 180);
        
        },100);
      }
})


//-------------------------Cards Flip-------------------------------------

const burgerCard = document.getElementById('burger');
const menuCard = document.getElementById('menu');
const deliveryCard = document.getElementById('delivery');
let TriggerHeight;

window.addEventListener('load',function(){

 
    if(window.matchMedia("(max-width:570px)").matches){
        TriggerHeight = window.innerHeight  * 0.28;
    }

    else if(window.matchMedia("(max-width:680px)").matches){
        TriggerHeight = window.innerHeight * 0.35;
    }

 else if(window.matchMedia("(max-width:750px)").matches){

    TriggerHeight = window.innerHeight * 0.45;

 }

  else if(window.matchMedia("(max-width:870px)").matches){

     TriggerHeight = window.innerHeight * 0.6;

   }

   else if(window.matchMedia("(max-width:1000px)").matches){

      TriggerHeight = window.innerHeight * 0.85;

   }

   else if(window.matchMedia("(max-width:1150px)").matches){
        TriggerHeight = window.innerHeight * 1;
    }

    else if(window.matchMedia("(max-width:1360px)").matches){

        TriggerHeight = window.innerHeight * 1.1;

    }else if(window.matchMedia("(max-width:1480px)").matches){

        TriggerHeight = window.innerHeight * 1.4;

    }else if(window.matchMedia("(max-width:2280px)").matches){
 
        TriggerHeight = window.innerHeight * 1.6;

    }

});


window.addEventListener('scroll',function(){

   const current = this.window.scrollY;

   if(current>=TriggerHeight){


    if(burgerCard){
        burgerCard.classList.add('flip-in-hor-bottom');

    }

    if(menuCard){
        menuCard.classList.add('flip-in-hor-bottom');

    }

    if(deliveryCard){
        deliveryCard.classList.add('flip-in-hor-bottom');
    }

  }

});


 