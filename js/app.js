(function() {
  $(document).foundation()
  // console.log('dsdsds');
  var lightboxcon = document.querySelector('.thumbimages');
  var lightboxthumb = lightboxcon.querySelectorAll('img');
  var lightbox = document.querySelector('.lightbox');
  var lightboximg = document.querySelector('#galightboximg');
  var lightboxtext = document.querySelector('#galightboxtext');
  var lightboxclose = document.querySelector('.close-lightbox');

  const httpRequest = new XMLHttpRequest();
  function getCarData() {
    const url = './lightbox.php?service=' + this.id;

    fetch(url)
     .then((resp) => resp.json())
     .then((data) => { changeElements(data); })
     .catch(function(error) {
       console.log(error);
     });
     }



   function processRequest() {
     let reqIndicator = document.querySelector('.lightboximage');
     reqIndicator.textContent = httpRequest.readyState;
     debugger;

     if (httpRequest.readyState === XMLHttpRequest.DONE) {
       if (httpRequest.status === 200) { // 200 means everything is awesome
         //debugger;
         let data = JSON.parse(httpRequest.responseText); //turn data into js project

         changeElements(data);
       } else {
         alert('There was a problem with the request.');
       }
     }
   }



  function changeElements(data) {
   const { box_image, box_text} = data;
   let lightboximg = document.querySelector('#galightboximg').src = "images/" + box_image;
   let lightboxtext = document.querySelector('#galightboxtext').innerHTML = box_text;
   //this is the lightbox part


  }


  function popup(){
    lightbox.style.display = "block";
    document.body.style.overflow = "hidden";
  }

  function closelight(){
    lightbox.style.display = "none";
    document.body.style.overflow = "";
  }

  lightboxthumb.forEach(function(element, index) {
    // loop through the images and add event handling to each one
       element.addEventListener('click', getCarData, false);
  });


  lightboxthumb.forEach(function(element){
       element.addEventListener('click', popup, false);
  });

  lightboxclose.addEventListener('click', closelight, false);



  //nav part
  var nav = document.querySelector('#main-menu');
  var links = nav.querySelectorAll('.nav');

  function jumpto(e) {
    e.preventDefault();
    //console.log(this.id);
    var number = this.id;
    TweenLite.to(window, .3, {scrollTo:{y:".section" + number, offsetY:130}});

  }
  links.forEach(function(child){
    child.addEventListener('click', jumpto, false);
  });

  var boxcon = document.querySelectorAll('.boxcon');
  var boxname = document.querySelectorAll('.boxnamecon');

  function hovername(){
    boxname.forEach(function(child){
      TweenMax.to(".boxnamecon", 1, {opacity:"1"});
    });
  }

  function hovernamecancel(){
    boxname.forEach(function(child){
      TweenMax.to(".boxnamecon", 1, {opacity:"0"});
    });
  }



  boxcon.forEach(function(child){
    child.addEventListener('mouseover', hovername, false);
  });

  boxcon.forEach(function(child){
    child.addEventListener('mouseout', hovernamecancel, false);
  });









  })();
