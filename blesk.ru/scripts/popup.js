// const openPopUp = document.getElementById("open-popup");
// const closePopUp = document.getElementById("close-popup");
// const popUp = document.getElementById("popup");

// openPopUp.addEventListener("click", function(e) {
//     e.preventDefault();
//     popUp.classList.add("open");
// });

// closePopUp.addEventListener("click", function() {
//     popUp.classList.remove("open");
// });



document.getElementById("open-popup").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("popup").classList.add("open");
});

document.getElementById("close-popup").addEventListener("click", function() {
    document.getElementById("popup").classList.remove("open");
});



// const body = document.querySelector("body");
// const lockPadding = document.querySelectorAll('.lock-padding');

// let unlock = true;

// const timeout = 800;

// if(popupLinks.length > 0) {
//     for (let index = 0; index < popupLinks.length; index++) {
//         const popupLink = popupLinks[index];
//         popupLink.addEventListener("click", function (e) {
//             const popupName = popupLink.getAttribute('href').replace('#', ' ');
//             const currentPopup = document.getElementById(popupName);
//             popupOpen(currentPopup);
//             e.preventDefault();
//         });
//     }
// }

// openPopUp.addEventListener('click', function(e) {
//     e.preventDefault();
//     popUp.classList.add('active');
// });

// closePopUp.addEventListener('click', () => {
//     popUp.classList.remove('active');
// })

// const popupClose = document.querySelectorAll('.close-popup');
// if(popupClose.length > 0) {
//     for (let index = 0; index < popupClose.length; index++) {
//         const el = popupClose[index];
//         el.addEventListener('click', function(e) {
//             popupClose(el.closest('.popup'));
//             e.preventDefault();
//         });
//     }
// }

// function popupOpen(currentPopup) {
//     if (currentPopup && unlock) {
//         const popupActive = document.querySelector('.popup.active');
//         if(popupActive) {
//             popupClose(popupActive, false);
//         } else {
//             bodyLock();
//         }
//         currentPopup.classList.add('active');
//         currentPopup.addEventListener('click', function(e) {
//             if(!e.target.closest('.po_pup__body')) {
//                 popupClose(e.target.closest('.popup'));
//             }
//         });
//     }
// }

// function bodyLock() {
//     const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

//     for (let index = 0; index < lockPadding.length; index++) {
//         const el = lockPadding[index];
//         el.style.paddingRight = lockPaddingValue;
//     }
//     body.style.paddingRight = lockPaddingValue;
//     body.classList.add('lock');

//     unlock = false;
//     setTimeout(function () {
//         unlock = true;
//     }, timeout);
// }

// function bodyUnLock() {
//     setTimeout(function() {
//         for (let index = 0; index < lockPadding.length; index++) {
//             const el = lockPadding[index];
//             el.style.paddingRight = '0px';
//         }
//         body.style.paddingRight = '0px';
//         body.classList.remove('lock');
//     });
//     unlock = false;
//     setTimeout(function () {
//         unlock = true;
//     }, timeout);
// }
