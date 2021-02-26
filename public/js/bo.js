let li = document.querySelector('#about').querySelectorAll('li');
// let element;
for (let i = 0; i < li.length; i++) {
    li[i].addEventListener('dblclick',function(e){
        let element = e.target;
        let section = element.closest('section');
        let id = section.getAttribute('id');
        console.log(id);
    });
    
}