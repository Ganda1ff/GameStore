let pagination = document.querySelectorAll('.switch_page_li');

for(i = 0; i < pagination.length; i++) {
        pagination[i].style.color = "white";
        pagination[i].addEventListener('click', (e)=>{
            pagination[i].style.color = "red";
        });
}