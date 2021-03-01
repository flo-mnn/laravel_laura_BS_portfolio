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

let allAboutArrows = document.querySelector('.about-arrows').querySelectorAll('li');
let allAboutArrowsBtn = [];
let arrowsForm = document.querySelector('#edit-about-arrow').querySelector('form');
// let actionName = arrowsForm.getAttribute('action');
for (let i = 0; i < allAboutArrows.length; i++) {
    let btn = allAboutArrows[i].querySelector('button');
    allAboutArrowsBtn.push(btn);
};

for (let i = 0; i < allAboutArrowsBtn.length; i++) {
    allAboutArrowsBtn[i].addEventListener('click',function(e){
        let id = allAboutArrowsBtn[i].getAttribute('id');
        console.log(id);
        arrowsForm.action = `/bo/about/arrow/update/${id}`;

        let titleInput =arrowsForm.querySelector('#title');
        let title = allAboutArrowsBtn[i].parentElement.querySelector('strong');
        titleInput.value = title.textContent;
        let infoInput =arrowsForm.querySelector('#info');
        let info = allAboutArrowsBtn[i].parentElement.querySelector('span');
        infoInput.value = info.textContent;
    });
}



