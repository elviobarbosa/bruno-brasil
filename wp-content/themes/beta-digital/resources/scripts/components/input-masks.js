export default class InputMasks {

    constructor() {
        this.selector = '.wpcf7-form';

        this.selectors = {
            phone: 'input[name=fob-phone]',
            cpf: 'input[name=fob-cpf]'
        };

        this.init();
    }

    init() {
        //console.log(this.selector)
        const form = document.querySelector(this.selector);

        if (form) {
            this.initPhoneMask(form);
        }
    }
    
    initPhoneMask(form) {
        const phone = form.querySelector(this.selectors.phone);
        const cpf = form.querySelector(this.selectors.cpf);

        if (phone) {
            phone.addEventListener('keyup', (e) => {
                const phoneVal = e.target;

                setTimeout(function() {
                    let value = phoneVal.value;
                    value = value.replace(/\D/g,""); //Remove tudo o que não é dígito
                    value = value.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                    value = value.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
                    phoneVal.value = value;
                }, 1)

            });
        }

        if (cpf) {
            cpf.addEventListener('keyup', (e) => {
                const cpfVal = e.target;

                setTimeout(function() {
                    let value = cpfVal.value;
                    value = value.replace(/\D/g,""); //Remove tudo o que não é dígito
                    value = value.replace(/(\d{3})(\d)/,"$1.$2");
                    value = value.replace(/(\d{3})(\d)/,"$1.$2"); 
                    value = value.replace(/(\d{3})(\d{1,2})$/,"$1-$2"); 
                    cpfVal.value = value;
                }, 1)

            });
        }
    }

}
