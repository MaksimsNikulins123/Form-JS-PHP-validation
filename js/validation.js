//For validation 

"use strict"

document.addEventListener('DOMContentLoaded', function(){

    $('#massageError').hide();
    // $('.content-form__success').hide();

    const form = document.getElementById('form');

    // const formStart = document.getElementById('validation');
       
    form.addEventListener('submit', formSend);
       
    async function formSend(e) {
        
        e.preventDefault();
        
        let error = formValidate(form);

        let formData = new FormData(form);
        
        let inp_email = document.querySelector('input[name=email]');
        let inp_agree = document.querySelector('input[name=agree]');

        let dataArray = new Array();

        dataArray.push(inp_email.value);
        dataArray.push(inp_agree.value); 


        
        if(error === 0){
            
            alert('JS sending data to PHP');
            console.log('validation success');
           
            console.log(dataArray);

            $('.content-form__validation').hide();
            $('.content-form__success').show();
            
        }else {
            alert('JS Validation unsuccess');
        }
    }

        function formValidate(){

            let email = $("#email").val();
            let error = 0;

            let formReq = document.querySelectorAll('._req');
            

            for (let index = 0; index < formReq.length; index++) {
                const input = formReq[index];
   
                
                
            
                if(input.classList.contains('_email')) {
                    
                    

                    if(input.value === '') {

                       

                            $('#massageError').html ('Email address is required');
                            $('#massageError').show();
                            
                            error++;
                            
                             
                        }else if(emailTest(input)){

                            

                            $('#massageError').html ('Please provide a valid e-mail address');
                            $('#massageError').show();
                                                     
                            error++;  
                            
                        }
                            else if(input.value !== '') {
                                
                                let simbolPointArray = new Array();
                                let domainArray = new Array();
                                let emailArray = email.split('');
                
                                    for (let i = 0; i < emailArray.length; i++) {
                                        let point = emailArray[i];
                                            if(point === ".") {
                                                simbolPointArray.push(i);
                                                     
                                            }    
                                                                   
                                    }
                                    let lastPointIndex = simbolPointArray[simbolPointArray.length -1];
                                    
                                    for (let y = lastPointIndex +1; y < emailArray.length; y++) {
                                        let domainLettersIndex = emailArray[y];   
                                        domainArray.push(domainLettersIndex);        
                                    }
                                    if(domainArray.length === 2 && domainArray[0] === 'c' && domainArray[1] === 'o'){
                                        $('#massageError').html ('We are not accepting subscriptions from Colombia emails');
                                        $('#massageError').show();
                                        error++;
                                    }
                      
                            }                 
                }else if(input.getAttribute("type") === "checkbox" && input.checked === false) { 
                    $('#massageError').html ('You must accept the terms and conditions');
                    $('#massageError').show();
                    
                    error++;
                }
            }
            return error;                   
        }

    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }

});

   