/* 
This JavaScript file is a custome file which is linked through the footer
to all the pages. 
this file starts with IIFE => Immediatly Invocked Function Expression and the rest 
of the functions are inside the IIFE
*/

let app;
(function (app){

//  this function is created to animate the pictures in the index page
function pictureSlides(){
    // an array to store the pictures
    let imageSource=[
        "./Media/1.jpeg",
        "./Media/2.jpg",
        "./Media/3.jpg",
        "./Media/4.jpg"
    ];
    let index=0; 
    function changePic(){
        let picSrc=document.getElementById("pic").src=imageSource[index];
        console.log(`${picSrc}`);
        if(index< (imageSource.length-1)){
            index++;
        }
        else {
            index=0; 
        }   
    }
    
    window.setInterval(changePic,2000);
    }

    window.addEventListener("load", pictureSlides);
})(app || (app={}))
