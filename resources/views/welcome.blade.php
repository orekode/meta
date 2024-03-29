@extends('layouts.default')

@section('styles')
    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/welcome.css")}}'>
@endsection

@section('contents')
@foreach ($cards as $card)

    @if ($card->name == 'header')
        <header class = 'p-rel full-w' style = '--background_url: url("{{asset('/images/home/' . $card->image ?? 'luli.jpeg')}}")'> 
            <div class="enclose">
                <div class = 'content flex-col-center'>
                    <h1> {{$card->title}}</h1>
        
                    <p>
                        {{$card->content}}
                    </p>
        
                    <button class = 'flex-row flex-center' onclick = 'location.href = "{{route("programmes")}}"'>
                        <i class="bi bi-calendar-week-fill"></i>
                        <span>Ongoing Programmes</span>
                    </button>
                </div>
            </div>  
        </header>
    @endif

    @if ($card->name == 'first_section')
        <section class="enclose">
            <div class = 'large-card'>

                <div class = 'image'>
                    <img src="{{asset('/images/home/' . ($card->image ?? 'luli_2.jpeg'))}}" alt="" class = 'obj-fit'>
                </div>

                <div class = 'content'>
                    <div class="title">
                        <b>{{$card->title}}</b>
                    </div>

                    <div class = 'text'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>

                    <div class = 'btns'>
                        <button onclick = 'location.href = "{{route("contact")}}"'>
                            <i class="bi bi-telephone-fill"></i>
                            <span>Reach out to us</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($card->name == 'second_section_card_one')
        <section class="enclose">
            <div class="card-box">

                <div class="card">
                    <div class="image">
                        <img src="{{asset('/images/home/' . $card->image ?? '/images/luli_3.jpeg')}}" alt="" class = 'obj-fit'>
                    </div>
                    <div class="content">
                        <div class="title">
                            <b>{{$card->title}}</b>
                        </div>

                        <div class="text">
                            <p>
                                {{$card->content}}
                            </p>
                        </div>

                        <div class = 'btns flex-row flex-center'>
                            <button class = 'full-w' onclick = 'donate();'>
                                <i class="bi bi-globe-europe-africa"></i>
                                <span>Make a difference</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            @if ($card->name == 'second_section_card_two')

                <div class="card">
                    <div class="image">
                        <img src="{{asset( '/images/home/' . $card->image ?? '/images/luli_6.jpeg')}}" alt="" class = 'obj-fit'>

                    </div>
                    <div class="content">
                        <div class="title">
                            <b>{{$card->title}}</b>
                        </div>

                        <div class="text">
                            <p>
                                {{$card->content}}
                            </p>
                        </div>

                        <div class = 'btns flex-row flex-center'>
                            <button class = 'full-w' onclick = 'location.href = "{{route("contact")}}"'>
                                <i class = 'bi bi-trophy-fill'></i>
                                <span>Become a Metas Champion</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

        @if ($card->name == 'second_section_card_three')

                <div class="card">
                    <div class="image">
                        <img src="{{asset('/images/home/' . $card->image ?? '/images/luli_5.jpeg')}}" alt="" class = 'obj-fit'>
                    </div>
                    <div class="content">
                        <div class="title">
                            <b>{{$card->title}}</b>
                        </div>

                        <div class="text">
                            <p>
                                {{$card->content}}
                            </p>
                        </div>

                        <div class = 'btns flex-row flex-center'>
                            <button class = 'full-w' onclick= 'donate();'>
                                <i class="bi bi-heart-fill"></i>
                                <span>Make a donation</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif


            
    @if ($card->name == 'third_section_card_one')
        <section class = 'different p-rel '>
            <h1 class = 'text-center p-rel z-2 '>
                How We Help
            </h1>
    
            <div class = 'values p-rel z-2 enclose'>
                <div class = 'value'>
                    <div class = 'icon round ov-hidden'>
                        <img src = '{{asset( '/images/home/' . $card->image ?? "/images/money.png")}}' class = 'obj-fit' alt=''>
                    </div>
                    <div class = 'title'>
                        <b>
                            {{$card->title}}
                        </b>
                    </div>
                    <div class = 'content'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>
                </div>
            @endif

            @if ($card->name == 'third_section_card_two')

                <div class = 'value'>
                    <div class = 'icon round ov-hidden'>
                        <img src = '{{asset('/images/home/' . $card->image ?? "/images/supplies.png")}}' class = 'obj-fit' alt=''>
                    </div>
                    <div class = 'title'>
                        <b>
                            {{$card->title}}
                        </b>
                    </div>
                    <div class = 'content'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>
                </div>
            @endif

            @if ($card->name == 'third_section_card_three')

                <div class = 'value'>
                    <div class = 'icon round ov-hidden'>
                        <img src = '{{asset('/images/home/' . $card->image ?? "/images/fees.png")}}' class = 'obj-fit' alt=''>
                    </div>
                    <div class = 'title'>
                        <b>
                            {{$card->title}}
                        </b>
                    </div>
                    <div class = 'content'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>
                </div>
            @endif

            @if ($card->name == 'third_section_card_four')

                <div class = 'value'>
                    <div class = 'icon round ov-hidden'>
                        <img src = '{{asset('/images/home/' . $card->image ?? "/images/school.png")}}' class = 'obj-fit' alt=''>
                    </div>
                    <div class = 'title'>
                        <b>
                            {{$card->title}}
                        </b>
                    </div>
                    <div class = 'content'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>
                </div>

            </div>
    
            
        </section>
    @endif

    @if ($card->name == 'fourth_section')
        <section class="enclose">
            <div class = 'large-card inverse'>

                <div class = 'content'>
                    <div class="title">
                        <b>{{$card->title}}</b>
                    </div>

                    <div class = 'text'>
                        <p>
                            {{$card->content}}
                        </p>
                    </div>

                    <div class = 'btns'>
                        <button onclick = 'location.href = "{{route("about")}}"'>
                            <i class="bi bi-telephone-fill"></i>
                            <span>Become a hero</span>
                        </button>
                    </div>
                </div>

                <div class = 'image'>
                    <video src="{{asset('/images/home/'. $card['image'] ?? 'rain.mp4')}}" muted='True' autoplay='True' loop='True'></video>
                </div>
            </div>
        </section>
    @endif


@endforeach

@endsection