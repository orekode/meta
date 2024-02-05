@extends('layouts.default')

@section('styles')
@vite('resources/js/app.js')

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
                        <button onClick="toggleClass('.donation-box')" class="donate-btn donate">Donate Now</button>
                        <button class="donate-btn anonymous">Anonymous Donation</button>
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
    
                <div class="w-screen">
                    <div class="enclose full-w slide-box flex flex-center p-rel z-2">
                        <div class="image p-rel round ov-hidden z-2">
                            <img src="/images/thankyou.webp" alt="" class="obj-fit">
                        </div>
            
                        <div class="content p-rel z-2 ">
                            <h1>Thank You <span>Dr David Shalom Adeniyi</span></h1>
                            <b class="bold">₦<span>40,000</span></b>
                        </div>
                    </div>
                </div>
    
                <div class="w-screen">
                    <div class="enclose full-w slide-box flex flex-center p-rel z-2">
                        <div class="image p-rel round ov-hidden z-2">
                            <img src="/images/thankyou.webp" alt="" class="obj-fit">
                        </div>
            
                        <div class="content p-rel z-2 ">
                            <h1>Thank You <span>Dr Angel  Adeniyi</span></h1>
                            <b class="bold">₦<span>40,000</span></b>
                        </div>
                    </div>
                </div>
    
                <div class="w-screen">
                    <div class="enclose full-w slide-box flex flex-center p-rel z-2">
                        <div class="image p-rel round ov-hidden z-2">
                            <img src="/images/thankyou.webp" alt="" class="obj-fit">
                        </div>
            
                        <div class="content p-rel z-2 ">
                            <h1>Thank You <span>Dr Samuel Adeniyi</span></h1>
                            <b class="bold">₦<span>40,000</span></b>
                        </div>
                    </div>
                </div>
    
                <div class="w-screen">
                    <div class="enclose full-w slide-box flex flex-center p-rel z-2">
                        <div class="image p-rel round ov-hidden z-2">
                            <img src="/images/thankyou.webp" alt="" class="obj-fit">
                        </div>
            
                        <div class="content p-rel z-2 ">
                            <h1>Thank You <span>Dr Juliana Adigun</span></h1>
                            <b class="bold">₦<span>40,000</span></b>
                        </div>
                    </div>
                </div>
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

                    <input type="file" name="image" class="target_image" onChange="preview_image(this, '.preview-img')">
                </div>

                <div class="">
                    <div class="grid-input">
                        <div class="flex-col">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" placeholder="eg. David">
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Last Name</label>
                            <input type="text" name="last_name" placeholder="eg. Adeniyi">
                        </div>
                    </div>

                    <div class="grid-input">
                        <div class="flex-col">
                            <label for="first_name">Contact</label>
                            <input type="text" name="contact" placeholder="eg. 08088099880">
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Email</label>
                            <input type="text" name="email" placeholder="eg. metasfoundation@email.com">
                        </div>
                    </div>

                    <div class="grid-input">
                        <div class="single-input flex-col">
                            <label for="first_name">Programme of Choice</label>
                            <select name="programme">
                                @foreach ($programmes as $programme )
                                    <option value="{{$programme['id']}}">{{$programme['title']}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex-col">
                            <label for="first_name">Payment Type</label>
                            <select name="payment_type">
                                <option value="">One Time Payment</option>
                                <option value="">Monthly Payment</option>
                            </select>
                        </div>
                    </div>

                    

                    <div class="single-input flex-col">
                        <label for="first_name">Donation Amount</label>
                        <input type="number" name="amount" placeholder="eg. ₦450000">
                    </div>

                    <button>Donate</button>
                </div>
            </div>
        </div>

        <div onClick="toggleClass('.donation-box.one')" class="close p-abs flex-center">
            <i class="bi bi-x-lg"></i>
        </div>
    </section>

    <script>
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
            element.src = URL.createObjectURL(file.imageList[0]);
        }
    </script>

@endsection