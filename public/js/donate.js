function toggleClass(className) {
    const element = document.querySelector(className);
    element.classList.toggle('active');
}

function upload_image(className) {
    const element = document.querySelector(className);
    element.click();
}

function preview_image(file, className) {
    const element = document.querySelector(className);
    element.classList.toggle('active');
    element.src = URL.createObjectURL(file.files[0]);
}

function check_inputs() {

    const inputs = document.querySelectorAll(".donation-box.one input");

    let noerror = true;

    inputs.forEach( input => {

        if(input.type == "file" ) return true;
        
        let error = input.parentElement.querySelector('.error');

        if(input.value.replaceAll(" ", "") == "") {
            error.innerHTML = "please provide this input."
            noerror = false;
            return false;
        } 

        else if(input.name == "email" && !validateEmail(input.value)) {
            error.innerHTML = "please provide a valid email address.";
            noerror = false;
            return false;
        }

        else if(input.name == "contact" && !validateContact(input.value)) {
            error.innerHTML = "please provide a valid phone number.";
            noerror = false;
            return false;
        }

        else if(input.name == "amount" && !validateAmount(input.value)) {
            error.innerHTML = "please provide a valid email address.";
            noerror = false;
            return false;
        }

        else error.innerHTML = "";

    })

    const selects = document.querySelectorAll(".donation-box.one select");

    selects.forEach( select => {
        let error = select.parentElement.querySelector('.error');

        if(select.value.replaceAll(" ", "") == "") {
            error.innerHTML = "please provide this input."
            noerror = false;
            return false;
        }
        else error.innerHTML = "";
    });

    show_error(!noerror);

    return noerror;
}

function show_error(show) {

    if(show) {
        Swal.fire({
            icon: "error",
            title: "Empty or Invalid Inputs",
            text: "Please check the inputs and try again."
        });
    }
}

function validateEmail(email) {
    // Regular expression for basic email validation
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}

function validateContact(contact) {
    // Regular expression for basic phone number validation
    const pattern = /^\+?\d{1,3}?\d{7,}$/;
    return pattern.test(contact);
}

function validateAmount(amount) {
    // Check if amount is a positive number
    return !isNaN(amount) && parseFloat(amount) >= 0;
}

async function makePayment(className=".donation-box.one") {
    if(!check_inputs())  return false;

    let data = {};

    const inputs = document.querySelector(className).querySelectorAll("input");
    const selects = document.querySelector(className).querySelectorAll("select");


    if(className==".donation-box.one") {
        data['donation_type'] = 'not anonymous';
    } else data['donation_type'] = 'anonymous';


    inputs.forEach( input => {
        if(input.type == "file") data[input.name] = input.files[0];
        else data[input.name] = input.value;
    })

    selects.forEach( input => {
        data[input.name] = input.value;
    })


    let handler = PaystackPop.setup({
        key: 'pk_test_xxxxxxxxxx', // Replace with your public key
        email: data['email'] ?? data['contact'],
        amount: parseFloat(data['amount']) * 100,
        onClose: function(){
        },
        callback: async function(response) {
            // let message = 'Payment complete! Reference: ' + response.reference;

            data['reference'] = response.reference;

            const response = await fetch("/api/donate", {
                method: 'post',
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                }
            });

            let json_data = await response.json();
            console.log(json_data);
        }
    });

    handler.openIframe();

}