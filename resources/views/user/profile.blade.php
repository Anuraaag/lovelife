@extends('layouts.app')

@section('content')

<div class="px-5 pt-4 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">

                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-one-list" 
                data-bs-toggle="list" href="#list-one" role="tab" aria-controls="list-one"> Personal Information
                <span class="badge bg-success rounded-pill"><i class="fa fa-check"></i></span></a>
                            
                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-two-list" 
                data-bs-toggle="list" href="#list-two" role="tab" aria-controls="list-two"> Upload your looks
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-three-list" 
                data-bs-toggle="list" href="#list-three" role="tab" aria-controls="list-three"> Interests <span class="text-muted">(Optional)</span>
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between active align-items-center py-3" id="list-four-list" 
                data-bs-toggle="list" href="#list-four" role="tab" aria-controls="list-four"> Looking For
                <span class="badge bg-success rounded-pill"></span></a>
            </div>
        </div>

        <div class="col-9 border-left">
            <form action="/customers" method="POST">
               
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade " id="list-one" role="tabpanel" aria-labelledby="list-one-list">
                        @include('user.profile.form1') 
                    </div>
                    <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">
                        @include('user.profile.form2')
                    </div>
                    <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">
                        @include('user.profile.form3') 
                    </div>
                    <div class="tab-pane fade show active " id="list-four" role="tabpanel" aria-labelledby="list-four-list">
                        @include('user.profile.form4') 
                    </div>
                </div>   
            </form>
     
        </div>
    </div>

    <script>
    
        const image_inputs = document.getElementsByClassName("pic")
        const supportedFileTypes = ["png", "jpeg", "jpeg"]
        Object.values(image_inputs).forEach( image => {
            image.addEventListener('input', function(){
                let preview = this.id+"_preview";
                if (this.value.length == 0)
                    document.getElementById(preview).src = location.origin+"/storage/images/blank.jpg"
                else
                    readURL(this, preview)
            }, false)
        })

        let readURL = (input, preview) => {            
            if (input.files && input.files[0]) {
                let reader = new FileReader()
                reader.onload = e => {
                    const path = e.target.result
                    const extension = path.split(';')[0].split('/')[1]
                    if(supportedFileTypes.includes(extension)) {
                        document.getElementById(preview).src = e.target.result
                    }
                }
                reader.readAsDataURL(input.files[0])
            }
        }

        document.getElementById("reset").addEventListener("click", function() {
            const image_previews = document.getElementsByClassName('preview')
            Object.values(image_previews).forEach( preview => {
                preview.src = location.origin+"/storage/images/blank.jpg"
            })
            Object.values(image_inputs).forEach( image => image.value = '' )
        });

    </script>
   
</div>
@endsection
