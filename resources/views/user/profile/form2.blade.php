    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image1" type="file" name="image1">
                    <label for="image1">
                        <img id="image1_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image2" type="file" name="image2">
                    <label for="image2">
                        <img id="image2_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image3" type="file" name="image3">
                    <label for="image3">
                        <img id="image3_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image4" type="file" name="image4">
                    <label for="image4">
                        <img id="image4_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image5" type="file" name="image5">
                    <label for="image5">
                        <img id="image5_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <input class="form-control pic d-none" accept=".jpg, .jpeg, .png" id="image6" type="file" name="image6">
                    <label for="image6">
                        <img id="image6_preview" src="{{ asset('storage/images/blank.jpg') }}" class="preview">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12 ms-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div style="flex-basis: 33.33%;">
            <button class="btn btn-primary float-start prev" id="prev-one" type="button"><b><i class="fas fa-chevron-circle-left me-2"></i>Previous</b></button>
        </div>

        <div style="flex-basis: 33.33%;" class="text-center">
            <button class="btn btn-primary" id="reset" type="button"><b>Reset Photos</b></button>
        </div>
        
        <div style="flex-basis: 33.33%;">
            <button class="btn btn-primary float-end next" id="next-three" type="button"><b>Next <i class="fas fa-chevron-circle-right ms-2"></i></b></button>
        </div>    
    </div>

