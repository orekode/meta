@extends('layouts.default')

@section('styles')

    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/contact.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/gallery.css")}}'>
@endsection

@section('contents')


    <div class="empty-box flex-center">
        <div class="flex-col flex-center">
            <i class="bi bi-image"></i>
            <div class="text-center p">No Images Available</div>

            <div onClick="location.href='/upload'" class="btns">Upload Image</div>
        </div>
    </div>


    <div class="gallery-box">
        <!-- <div class="gallery-item">
            <img src="/images/brick.jpg" alt="" class="obj-contain">
        </div> -->
    </div>



@endsection