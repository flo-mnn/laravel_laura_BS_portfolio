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
let footerUpdate = document.querySelector('#edit-about-arrow').querySelector('.footer-update');
let footerCreate = document.querySelector('#edit-about-arrow').querySelector('.footer-create');

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


// edit title
let editTitleBtns = document.querySelectorAll('.edit-title');
let editDiv = document.querySelectorAll('.title-update-div');
let editTitleForm = document.querySelector('#edit-title').querySelector('form');
let inputSectionTitle = editTitleForm.querySelector('#section-title-input');
let inputSectionSubtitle = editTitleForm.querySelector('#section-subtitle-input');

for (let i = 0; i < editTitleBtns.length; i++) {
    editTitleBtns[i].addEventListener('click',function(){
        console.log(editTitleBtns[i].getAttribute('id'));
        editTitleForm.action = `/bo/${editTitleBtns[i].getAttribute('id')}/title/update`;
        let titleValue;
        let subtitleValue;
        if (i==0) {
            titleValue = editDiv[i].querySelector('h1');
            subtitleValue = editDiv[i].querySelector('h2');
        } else {     
            titleValue = editDiv[i].querySelector('h2');
            subtitleValue = editDiv[i].querySelector('p');
        }
        inputSectionTitle.value = titleValue.textContent;
        inputSectionSubtitle.value = subtitleValue.textContent;
    });
}

// toggle multiple
let addBtns = document.querySelectorAll('.add');
let allMultipleFooterUpdate = document.querySelectorAll('.footer-update')
let allMultipleFooterCreate = document.querySelectorAll('.footer-create')
for (let i = 0; i < editBtn.length; i++) {
    editBtn[i].addEventListener('click',function(){
        for (let i = 0; i < allMultipleFooterUpdate.length; i++) {
            const element = allMultipleFooterUpdate[i];
            element.classList.toggle('d-none')
        }
        for (let i = 0; i < allMultipleFooterCreate.length; i++) {
            const element = allMultipleFooterCreate[i];
            element.classList.toggle('d-none')
        };
    });
    
}
for (let i = 0; i < addBtns.length; i++) {
    addBtns[i].addEventListener('click',function(){
        for (let i = 0; i < allMultipleFooterUpdate.length; i++) {
            const element = allMultipleFooterUpdate[i];
            element.classList.toggle('d-none');
        }
        for (let i = 0; i < allMultipleFooterCreate.length; i++) {
            const element = allMultipleFooterCreate[i];
            element.classList.toggle('d-none')
        }
        editEducationForm.action = `/bo/education/add`;
        //attention, get it back with editing see below
    });   
}

// education
// when editing, turn form action back
// let id = allAboutArrowsBtn[i].getAttribute('id');
//         arrowsForm.action = `/bo/about/arrow/update/${id}`;
//Create
let createEducationBtn = document.querySelector('.create-education');
let editEducationForm = document.querySelector('#edit-education').querySelector('form');
