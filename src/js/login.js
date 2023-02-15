let el_butt = document.querySelector('.enter_button');
    el_butt.addEventListener('click', ()=> {
        let el_login = document.querySelector('.login_form'); 
        let login = document.querySelector('.login'); 
        
            el_login.classList.toggle('active');
            login.classList.toggle('active');
            
        });

let el_toggle_a = document.querySelector('.a_login');
        el_toggle_a.addEventListener('click', ()=>{
            let el_reg = document.querySelector('.reg_form');
                el_reg.classList.toggle('active');
                let el_login = document.querySelector('.login_form'); 
                el_login.classList.remove('active');
        });

let el_toggle_reg_a= document.querySelector('.reg_a');
    el_toggle_reg_a.addEventListener('click', ()=> {
        let el_reg = document.querySelector('.reg_form'); 
        let el_login = document.querySelector('.login_form'); 
        el_login.classList.add('active');
        el_reg.classList.remove('active');
    });