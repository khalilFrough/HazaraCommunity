/*IFFE function for to control the functions when the page
 loads this fuction is called first  and then this fuction controls 
 the other functions*/
 let app; 
(function(app){
    function start(){
        let title= document.title; 
        console.log(`%cApp started`,`color: red; font-size: 18px;`);
        console.log(`%cTitle: ${title}`,`color: red; font-size: 18px`);
        try{
            switch(title){
                case "Home":
                content.pictureSlides();
                break; 
                case "AboutUs":
                break; 
                case "Events":
                break; 
                case "ContactUs":
                //contactUs.nameValidation();
                break; 
                case "communitySupport":
                community.imgClick();
                break;
                default:
                break; 
            }
        }catch(err){
        console.log(err);
        }
    }
    window.addEventListener("load",start);
    
}(app ||(app={})))