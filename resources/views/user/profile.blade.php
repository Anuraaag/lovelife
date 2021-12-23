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
                data-bs-toggle="list" href="#list-two" role="tab" aria-controls="list-two"> Upload Photos
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-three-list" 
                data-bs-toggle="list" href="#list-three" role="tab" aria-controls="list-three"> Unique You <span class="text-muted">(Optional)</span>
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-four-list" 
                data-bs-toggle="list" href="#list-four" role="tab" aria-controls="list-four"> Looking For
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between active align-items-center py-3" id="list-five-list" 
                data-bs-toggle="list" href="#list-five" role="tab" aria-controls="list-five"> Address
                <span class="badge bg-success rounded-pill"></span></a>

                <a class="list-group-item d-flex list-group-item-action justify-content-between align-items-center py-3" id="list-six-list" 
                data-bs-toggle="list" href="#list-six" role="tab" aria-controls="list-six"> Match-ups
                <span class="badge bg-success rounded-pill"></span></a>
            </div>
        </div>

        <div class="col-9">
            <form action="/customers" method="POST">
               
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-one" role="tabpanel" aria-labelledby="list-one-list">
                        @include('user.profile.form1') 
                    </div>
                    <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">
                        @include('user.profile.form2')
                    </div>
                    <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">
                        @include('user.profile.form3') 
                    </div>
                    <div class="tab-pane fade" id="list-four" role="tabpanel" aria-labelledby="list-four-list">
                        @include('user.profile.form4') 
                    </div>
                    <div class="tab-pane fade show active" id="list-five" role="tabpanel" aria-labelledby="list-five-list">
                        @include('user.profile.form5') 
                    </div>
                    <div class="tab-pane fade" id="list-six" role="tabpanel" aria-labelledby="list-six-list">
                        @include('user.profile.form6') 
                    </div>
                </div>   
            </form>
     
        </div>
    </div>

    <script>
    // helper functions  *****************************************************************************
        const getElement = id => document.getElementById(id)

    // helper functions  *****************************************************************************


    // form-2 start *****************************************************************************
        const image_inputs = document.getElementsByClassName("pic")
        const supportedFileTypes = ["png", "jpeg", "jpeg"]
        Object.values(image_inputs).forEach( image => {
            image.addEventListener('input', function(){
                let preview = this.id+"_preview"
                if (this.value.length == 0)
                getElement(preview).src = location.origin+"/storage/images/blank.jpg"
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
                        getElement(preview).src = e.target.result
                    } else{   //redirect error 
                    }
                }
                reader.readAsDataURL(input.files[0])
            }
        }

        getElement("reset").addEventListener("click", function() {
            const image_previews = document.getElementsByClassName('preview')
            Object.values(image_previews).forEach( preview => {
                preview.src = location.origin+"/storage/images/blank.jpg"
            })
            Object.values(image_inputs).forEach( image => image.value = '' )
        })
    // form-2 end  *****************************************************************************


    // next-prev controls start *****************************************************************************
        const next_buttons = document.getElementsByClassName("next")
        const previous_buttons = document.getElementsByClassName("prev")
        let switchSection = controllers => {
            Object.values(controllers).forEach( controller => {
                controller.addEventListener('click', function(){
                    let destination = this.id.substr(4)
                    $('.tab-pane').removeClass('show active')
                    $('#list'+destination).addClass('show active')
                    $('.list-group-item').removeClass('active')
                    $('#list'+destination+'-list').addClass('active')      
                }, false)
            })
        }
        switchSection(next_buttons)
        switchSection(previous_buttons)
    // next-prev controls end  *****************************************************************************


    // form-3 start  *****************************************************************************

        // creating pills and removing option from datalist
        let keypress = false
        let disability_node = ''
        let disability_input = getElement("disability_custom")
        let datalist_options = getElement("disability").children

        
        disability_input.addEventListener("keydown", event => {
            if(event.key) {
                let key = event.keyCode || event.charCode
                if( key !== 8 && key !== 13){ //bksp enter exempted
                    keypress = true
                }
            }
        })
        
        disability_input.addEventListener("click", event => {
            keypress = false // click exempted
        })
        
        disability_input.addEventListener('change', event => {
        
            // datalist_options = event.target.parentElement.children[1].children
            Object.values(datalist_options).forEach( option => {     
                option.value.toLowerCase() === event.target.value.toLowerCase() ? option.disabled = true : ''
            })
        
            if (keypress === false) { // no key except enter & backspace is clicked
                disability_node = "<span class='btn btn-primary rounded-pill py-3 m-2 text-break disability_pill'>"+ event.target.value +"</span>"
                getElement("root_node").insertAdjacentHTML('beforebegin', disability_node)
            }
            else if(disability_input.value.trim() != ""){
                disability_node = "<span class='btn btn-primary rounded-pill py-3 m-2 text-break disability_pill'>"+ disability_input.value +"</span>"
                // validation to prevent duplicates
                getElement("root_node").insertAdjacentHTML('beforebegin', disability_node)
            }
        
            disability_input.value = ""
            keypress = false


            // destroying the pills and repopulating datalist
            let disability_pills = document.getElementsByClassName("disability_pill")
            Object.values(disability_pills).forEach( pill => {    
                pill.addEventListener('click', function(){
                    Object.values(datalist_options).forEach( option => {   
                        if (option.value.toLowerCase() == pill.innerText.toLowerCase()){
                            // console.log(option)
                            option.disabled = false
                            // console.log(option)
                        }
                        pill.remove()
                    })
                }, false)
            })
        })
    // form-3 end  *****************************************************************************
        

    // form-5 start  *****************************************************************************

        let location_input_element = getElement("location_search")
        let currentFocus
        let fetch_populate //api hit controller
        
        async function fetchSuggestions(search_term) {
            return new Promise(async function(resolve, reject) {
                let response = await fetch(`https://api.geoapify.com/v1/geocode/autocomplete?text=${search_term}&format=json&apiKey={{env('map_key')}}`)
                if(response.status == 200){
                    let data = await response.json()
                    resolve(data)
                }
            })
        }
        
        location_input_element.addEventListener("input", function() {
            hideLoader()
            clearTimeout(fetch_populate)
            if(this.value.length > 2) {
                fetch_populate = setTimeout( () => {
                    fetchSuggestions(this.value).then(data => {
                    
                        search_array = data.results
                        let item_box, suggestion_item, current_input = this.value
                        closeAllLists()
                        
                        if (!current_input) {
                            hideLoader()
                            return false
                        }
                        currentFocus = -1
        
                        // creating suggestion box
                        item_box = document.createElement("DIV")
                        item_box.setAttribute("id", "location_autocomplete_list")
                        item_box.setAttribute("class", "autocomplete-items mt-2 border")
                
                        // append next to input field
                        this.parentNode.appendChild(item_box)
                        
                        hideLoader()
                  
                        // creating and adding suggestions to item box
                        search_array.forEach( item => {
                            if (item.formatted) {
                                let display_value = item.formatted
                                if(display_value.substr(0, current_input.length).toLowerCase() == current_input.toLowerCase()){
                                    suggestion_item = document.createElement("DIV")
                                    suggestion_item.classList.add('suggestion')
                                    suggestion_item.innerHTML = "<strong>" + display_value.substr(0, current_input.length) + "</strong>"
                                    suggestion_item.innerHTML += display_value.substr(current_input.length)
                                    suggestion_item.innerHTML += "<input type='hidden' value='" + display_value + "'>"
                    
                                    // not using => function because parent context is not required here.
                                    // Context of suggestion_item is required for 'this'
                                    suggestion_item.addEventListener("click", function () {
                                        location_input_element.value = ''
                                        populate_address(item)
                                        closeAllLists()
                                    })
                                    item_box.appendChild(suggestion_item)
                                }
                            }
                        })
                    })
                }, 400)
                showLoader()
            }
            closeAllLists()
        })
        
        // for keyboard
        location_input_element.addEventListener("keydown", event => {
        
            let item_box = getElement("location_autocomplete_list")
            if (item_box) {
                let suggestion_item = item_box.getElementsByTagName("div")
                if(event.keyCode == 13 && currentFocus > -1 && suggestion_item) { //enter	
                    event.preventDefault()
                    suggestion_item[currentFocus].click()
                }
                else if (event.keyCode == 40) { //down
                    currentFocus++
                    makeActive(suggestion_item)
                } else if (event.keyCode == 38) { //up
                    currentFocus--
                    makeActive(suggestion_item)
                }
              }
        })
        
        let makeActive = suggestion_item => {
            if (!suggestion_item) return false
        
            // removing active from all
            const all_suggestions = document.getElementsByClassName("suggestion")
            Object.values(all_suggestions).forEach( item => {
                item.classList.remove("autocomplete-active")
            })
            
            if (currentFocus >= suggestion_item.length) currentFocus = 0
            if (currentFocus < 0) currentFocus = suggestion_item.length - 1
            suggestion_item[currentFocus].classList.add("autocomplete-active")
        }
        
        let closeAllLists = item => {
              let displayed_items = document.getElementsByClassName("autocomplete-items")
              Object.values(displayed_items).forEach( displayed_item => {
                  if (item != displayed_item && item != location_input_element) displayed_item.parentNode.removeChild(displayed_item)
              })
        }
        
        let populate_address = address => {
            const address_fields = ["town", "city", "district", "county", "state", "postcode", "country", "lat", "lon"]
            address_fields.forEach( field => {
                if(address[field]){
                    getElement(field).value = address[field]
                }
                else{
                    getElement(field).readOnly = false
                    getElement(field).value = ""
                }
              })
        
            let main_address
            main_address = address['name'] ? address['name'] : ""
            main_address += address['street'] ? ", "+address['street'] : ""
            main_address += address['suburb'] ? ", "+address['suburb'] : ""
        
            if(main_address != "") {
                getElement(`address`).value = main_address	
            }
            else{
                getElement(`address`).readOnly = false
                getElement(`address`).value = ""
            }
        }
            
        document.addEventListener("click", event => closeAllLists(event.target))

        const showLoader = () => {
            getElement(`search_loader`).classList.remove('d-none')
            getElement(`location_search`).parentNode.style.flexBasis = "87%"
        }

        const hideLoader = () => {
            getElement(`search_loader`).classList.add('d-none')
            getElement(`location_search`).parentNode.style.flexBasis = "93.5%"
        }
    // form-5 end  *****************************************************************************

    </script>   
</div>
@endsection