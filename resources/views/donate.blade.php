@extends('layouts.default')

@section('styles')

    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/contact.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/donate.css")}}'>
@endsection

@section('contents')

    <header class="p-rel z-2 full-w p-12">

        <div class="p-rel content flex flex-col flex-center">

            <div class="p-abs top-left  full-h side-image z-1">
                <img src="/images/g1.png" class="obj-fit" />
            </div>
            <div class="p-abs top-right full-h side-image z-1">
                <img src="/images/g3.png" class="obj-fit" />
            </div>

            <div class="text-center text-box p-rel z-2">
                <div class="">
                    <h1>empower change with every donations</h1>
                    <p>
                    Your generous donation can make a significant impact, bringing hope and opportunities to children in need. Together, let's build a brighter future.
                    </p>

                    <div class="btn-box flex flex-center ">
                        <button onClick="toggleClass('.donation-box.one')" class="donate-btn donate">Donate Now</button>
                        <button onClick="toggleClass('.donation-box.two')" class="donate-btn anonymous">Anonymous Donation</button>
                    </div>
                </div>
            </div>

        </div>

        
    </header>


    <section class=" p-rel flex flex-center">

        <div onClick="scrollMe('left')" class="p-abs left-0 icon flex-center round">
            <i class="bi bi-chevron-left relative z-2"></i>
            <div class="p-abs icon-icon"></div>
        </div>
        <div onClick="scrollMe('right')" class="p-abs right-0 icon flex-center round">
            <i class="bi bi-chevron-right relative z-2"></i>
            <div class="p-abs icon-icon"></div>
        </div>

        <div class="w-screen scroll-container">
            <div class="flex flex-row w-max">

                @foreach($donors as $donor)
    
                <div class="w-screen">
                    <div class="enclose full-w slide-box flex flex-center p-rel z-2">
                        <div class="image p-rel round ov-hidden z-2">
                            @if($donor['image'] == "donors.jpg")
                                <img src="/images/thankyou.webp" alt="" class="obj-fit">
                            @else
                                <img src="/images/{{$donor['image']}}" alt="" class="obj-fit">
                            @endif
                        </div>
            
                        <div class="content p-rel z-2 ">
                            <h1>Thank You 
                                @if($donor['donation_type'] == "anonymous")
                                    <span>Anonymous Donor</span>
                                @else
                                    <span>{{$donor['first_name']}} {{$donor['last_name']}}</span>
                                @endif
                            </h1>

                            <b class="bold">₦<span>{{$donor['amount']}}</span></b>
                        </div>
                    </div>
                </div>
    
                @endforeach
            </div>
        </div>


        <div class="p-abs top-left full-hw z-1">
            <img src="/images/fireworks.jpg" alt="" class="obj-fit">
            <div class="p-abs top-left full-hw bg-black"></div>
        </div>

        <script>
            const container = document.querySelector(".scroll-container");

            function scroller() {
                if(container.scrollWidth > container.scrollLeft) {
                    container.scrollBy(window.innerWidth, 0);
                }
                else container.scrollBy(0, 0);
            }

            let interval = setInterval(scroller, 8000);

            function scrollMe(direction="right") {
                if(direction=="left")
                    container.scrollBy(-window.innerWidth, 0);
                else
                    container.scrollBy(window.innerWidth, 0);

            }
        </script>


    </section>


    <section class="donation-box one">
        <div class="donation-form">
            <div class="grid-box">
                <div class="">
                    <div class="grid-image p-rel">
                        <img src="/images/donater.jpg" alt="" class="obj-fit">

                        <div class="p-abs p-center img-preview overflow-hidden ov-hidden flex-center">
                            <i class="bi bi-image"></i>
                            <div class="p-abs full-hw">
                                <img src="/images/donater.jpg" alt="" class="obj-fit preview-img">
                            </div>
                        </div>
                    </div>

                    <button onclick="upload_image('.target_image')" class="outline-btn">
                        <span>Upload Image</span>
                        <i class="bi bi-image"></i>
                    </button>

                    <input type="file" name="image" class="target_image" accept="image/*" onChange="preview_image(event.target, '.preview-img')">
                </div>

                <div class="">
                    <div class="grid-input">
                        <div class="flex-col">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" placeholder="eg. David">
                            <div class="error"></div>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Last Name</label>
                            <input type="text" name="last_name" placeholder="eg. Adeniyi">
                            <div class="error"></div>
                        </div>
                    </div>

                    <div class="grid-input">
                        <div class="flex-col">
                            <label for="first_name">Contact</label>
                            <input type="text" name="contact" placeholder="eg. 08088099880">
                            <div class="error"></div>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Email</label>
                            <input type="text" name="email" placeholder="eg. metasfoundation@email.com">
                            <div class="error"></div>
                        </div>
                    </div>

                    <div class="grid-input">
                        <div class="single-input flex-col">
                            <label for="first_name">Programme of Choice</label>
                            <select name="programme">
                                    <option value="" disabled selected>Select a programme of choice</option>
                                @foreach ($programmes as $programme )
                                    <option value="{{$programme['id']}}">{{$programme['title']}}</option>
                                @endforeach
                            </select>
                            <div class="error"></div>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Payment Type</label>
                            <select name="payment_type">
                                <option value="" disabled selected>Select a payment type</option>
                                <option value="oneTime">One Time Payment</option>
                                <option value="monthly">Monthly Payment</option>
                            </select>
                            <div class="error"></div>
                        </div>
                    </div>

                    

                    <div class="single-input flex-col">
                        <label for="first_name">Donation Amount</label>
                        <input type="number" name="amount" placeholder="eg. ₦450000">
                        <div class="error"></div>
                    </div>

                    <button onClick="makePayment()">Donate</button>
                </div>
            </div>
        </div>

        <div onClick="toggleClass('.donation-box.one')" class="close p-abs flex-center">
            <i class="bi bi-x-lg"></i>
        </div>
    </section>

    <section class="donation-box two">
        <div class="donation-form">
            <div class="">
                <div class="">

                    <div class="grid-input">
                        <div class="flex-col">
                            <label for="first_name">Contact</label>
                            <input type="text" name="contact" placeholder="eg. 08088099880">
                            <div class="error"></div>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Email</label>
                            <input type="text" name="email" placeholder="eg. metasfoundation@email.com">
                            <div class="error"></div>
                        </div>
                    </div>

                    <div class="grid-input">
                        <div class="single-input flex-col">
                            <label for="first_name">Programme of Choice</label>
                            <select name="programme">
                                    <option value="" disabled selected>Select a programme of choice</option>
                                @foreach ($programmes as $programme )
                                    <option value="{{$programme['id']}}">{{$programme['title']}}</option>
                                @endforeach
                            </select>
                            <div class="error"></div>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Payment Type</label>
                            <select name="payment_type">
                                <option value="" disabled selected>Select a payment type</option>
                                <option value="oneTime">One Time Payment</option>
                                <option value="monthly">Monthly Payment</option>
                            </select>
                            <div class="error"></div>
                        </div>
                    </div>

                    

                    <div class="single-input flex-col">
                        <label for="first_name">Donation Amount</label>
                        <input type="number" name="amount" placeholder="eg. ₦450000">
                        <div class="error"></div>
                    </div>

                    <button onClick="makePayment('.donation-box.two')">Donate</button>
                </div>
            </div>
        </div>

        <div onClick="toggleClass('.donation-box.two')" class="close p-abs flex-center">
            <i class="bi bi-x-lg"></i>
        </div>
    </section>

    <script >
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

        function check_inputs(className=".donation-box.one") {

            const inputs = document.querySelectorAll(className + " input");

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

            const selects = document.querySelectorAll(className + " select");

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

        function makePayment(className=".donation-box.one") {
            if(!check_inputs(className))  return false;

            let data = {};

            const inputs = document.querySelector(className).querySelectorAll("input");
            const selects = document.querySelector(className).querySelectorAll("select");


            if(className==".donation-box.one") {
                data['donation_type'] = 'not anonymous';
            } else data['donation_type'] = 'anonymous';


            inputs.forEach( input => {
                if(input.type == "file") console.log("");
                else data[input.name] = input.value;
            })

            selects.forEach( input => {
                data[input.name] = input.value;
            })


            let handler = PaystackPop.setup({
                key: 'pk_test_ac5434ad89fb076f61986fd94e18adaf6bedc0d4', // Replace with your public key
                email: data['email'] ?? data['contact'],
                amount: parseFloat(data['amount']) * 100,
                currency: 'NGN',
                callback: function(response) {
                    // let message = 'Payment complete! Reference: ' + response.reference;

                    data['reference'] = response.reference;

                    let formdata = new FormData();

                    Object.keys(data).forEach( key => formdata.append(key, data[key]));

                    formdata.append('image', document.querySelector('input[type="file"]').files[0])

                    Swal.showLoading();

                    fetch("/api/donate", {
                        method: 'post',
                        body: formdata,
                        headers: {
                            // "Content-Type": "multipart/form-data",
                            "Accept": "application/json"
                        }
                    }).then(
                        result => result.json()
                    ).then( result => {
                        if(result.errors) {
                            Swal.fire({
                                icon: "error",
                                title: "Donation Not Made",
                                text: "Our system is unable to confirm your donation, please contact Metasfoundation for further assistance"
                            })

                            console.log(result);
                        }

                        else Swal.fire({
                            icon: "success",
                            title: "Donation Made Successfully",
                        })
                    });

                }
            });

            handler.openIframe();

        }

    </script>

@endsection