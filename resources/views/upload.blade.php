@extends('layouts.default')

@section('styles')

    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/contact.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/gallery.css")}}'>
@endsection

@section('contents')

    <div>

    <div class="empty-box flex-center">
        <form class="flex-col flex-center" style="box-shadow: none;">
            
            <i class="bi bi-image"></i>
            <div class="text-center p">No Images Available</div>
            <div class="btns" onClick="document.querySelector('input').click()">Upload Image</div>
            <input type="file" accept="image/*" multiple onChange="preview_images(event.target);"/>
            @csrf

        </form>



    </div>

    <div class="gallery-box-small">
            
    </div>
    
    <script>
        const div = `
            <div class="gallery-item">
                <img src="{image_link}" alt="" class="obj-contain">
            </div>
        `;

        function preview_images(myself) {

            const gridBox = document.querySelector(".gallery-box-small");

            console.log(myself.files);

            for( let i = 0; i < myself.files.length; i++) {

                    let image_url = URL.createObjectURL(myself.files[i]);
    
                    gridBox.innerHTML += div.replaceAll("{image_link}", image_url);

            }


        }
    </script>

    </div>


@endsection