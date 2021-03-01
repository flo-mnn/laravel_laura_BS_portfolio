// let li = document.querySelector('#about').querySelectorAll('li');
// // let element;
// for (let i = 0; i < li.length; i++) {
//     li[i].addEventListener('dblclick',function(e){
//         let element = e.target;
//         let section = element.closest('section');
//         let id = section.getAttribute('id');
//         console.log(id);
//     });
    
// }

let editBtn = document.querySelectorAll('.edit');

for (let i = 0; i < editBtn.length; i++) {
    editBtn[i].addEventListener('mouseover', function(e){
        let parent = e.target.parentElement;
        parent.classList.toggle('outlined');
    });    
    editBtn[i].addEventListener('mouseout', function(e){
        let parent = e.target.parentElement;
        parent.classList.toggle('outlined');
    });    
    // editBtn[i].addEventListener('click', function(e){
    //     e.preventDefault();
    // });    
}