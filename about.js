//  document.addEventListener('DOMContentLoaded', function () {
//             // Function to check if an element is in the viewport
//             function isInViewport(element) {
//                 var rect = element.getBoundingClientRect();
//                 return (
//                     rect.top >= 0 &&
//                     rect.left >= 0 &&
//                     rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//                     rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//                 );
//             }

//             // Function to add the 'visible' class to elements in the viewport
//             function animateElements() {
//                 var elements = document.querySelectorAll('.animated');

//                 elements.forEach(function (element) {
//                     if (isInViewport(element)) {
//                         element.classList.add('visible');
//                     }
//                 });
//             }

//             // Initial check on page load
//             animateElements();

//             // Add event listener for scroll events
//             window.addEventListener('scroll', function () {
//                 animateElements();
//             });
//         });