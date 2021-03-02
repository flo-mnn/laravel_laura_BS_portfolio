// Outline editing element //

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
}

// CHANGE ABOUT ARROW FORM ACCORDING TO NEEDS //
//Update
let allAboutArrows = document.querySelector('.about-arrows').querySelectorAll('li');
let allAboutArrowsBtn = [];
let arrowsForm = document.querySelector('#edit-about-arrow').querySelector('form');
let arrowsDelete = document.querySelector('#delete-arrow');
let footerUpdate = document.querySelector('.footer-update');
let footerCreate = document.querySelector('.footer-create');

for (let i = 0; i < allAboutArrows.length; i++) {
    let btn = allAboutArrows[i].querySelector('button');
    allAboutArrowsBtn.push(btn);
};

for (let i = 0; i < allAboutArrowsBtn.length; i++) {
    allAboutArrowsBtn[i].addEventListener('click',function(e){
        footerUpdate.classList.toggle('d-none');
        footerCreate.classList.toggle('d-none');
        let id = allAboutArrowsBtn[i].getAttribute('id');
        arrowsForm.action = `/bo/about/arrow/update/${id}`;
        arrowsDelete.action = `/bo/about/arrow/delete/${id}`
        let titleInput =arrowsForm.querySelector('#title');
        let title = allAboutArrowsBtn[i].parentElement.querySelector('strong');
        titleInput.value = title.textContent;
        let infoInput =arrowsForm.querySelector('#info');
        let info = allAboutArrowsBtn[i].parentElement.querySelector('span');
        infoInput.value = info.textContent;
    });
}
//Create
let createArrowBtn = document.querySelector('.create-arrow');
createArrowBtn.addEventListener('click',function(){
    footerUpdate.classList.toggle('d-none');
    footerCreate.classList.toggle('d-none');
    arrowsForm.action = `/bo/about/arrow/add`;


});

//CHANGE edit BG img form 
let bgImgForm = document.querySelector('#update-bg-img');
let editBgBtn = document.querySelectorAll('.edit-bg');

for (let i = 0; i < editBgBtn.length; i++) {
    editBgBtn[i].addEventListener('click',function(){
        bgImgForm.action = `/bo/${editBgBtn[i].getAttribute('id')}/img/update`;
    });
}

// social delete one
let socialSelect = document.querySelector('#edit-socials').querySelector('select');
let deleteSocialForm = document.querySelector('#edit-socials').querySelector('.modal-footer').querySelector('form');

socialSelect.addEventListener('change',function(){
    console.log(socialSelect.value);
    deleteSocialForm.action = `/bo/socials/delete/${socialSelect.value}`;
});


