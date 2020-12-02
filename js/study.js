"use strict";

<<<<<<< HEAD
document.addEventListener('DOMContentLoaded', () =>{
    const box = document.querySelector('.box');

    box.addEventListener('touchmove', (e) => {
        e.preventDefault();

        // console.log('Start');
        console.log(e.targetTouches[0].pageX);
    });

    // box.addEventListener('touchmove', (e) => {
    //     e.preventDefault();

    //     console.log('Move');
    // });

    // box.addEventListener('touchend', (e) => {
    //     e.preventDefault();

    //     console.log('End');
    // });
});
=======
// console.log(document.head);
// console.log(document.documentElement);

// console.log(document.body.childNodes);

// console.log(document.body.firstChild);
// console.log(document.body.lastChild);

// console.log(document.querySelector('#current').parentNode.parentNode);
console.log(document.querySelector('#current').parentElement.parentElement);

// console.log(document.querySelector('[data-current="3"]').nextElementSibling);
>>>>>>> 905e4116df947ca4354bd6d270eb17c4b5755d79
