<div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div class="col-12 mb-4">
        <h4> What is your disability (if any) ? </h4>
        <div class="form-outline mt-4 ms-4" style="flex-basis: 93.5%;">
            <input class="form-control p-2" list="disability" id="disability_custom" name="disability_custom" placeholder="Select or Type " value="" required>
            <div class="invalid-feedback">{{ $errors->first('disability_custom')}}</div>
        </div>
    
        <div style="flex-basis: 93.5%;" class="ms-4">
            <div id="disability_container" class="py-3">
                <span id="root_node"></span>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <h4> Drop your Interests </h4>
        {{--<!-- will implement this after the backend. Current plan is to 
            make a table of interests. And on every keydown event in form, an 
        async call can be made to show the respective suggestions -->--}}
    </div>
</div>

<datalist id="disability">
    <option value="Blindness">
    <option value="Low Vision">
    <option value="Leprosy Cured persons">
    <option value="Locomotor Disability">
    <option value="Dwarfism">
    <option value="Intellectual Disability">
    <option value="Mental Illness">
    <option value="Cerebral Palsy">
    <option value="Specific Learning Disabilities">
    <option value="Speech and Language disability">
    <option value="Hearing Impairment ( Deaf or Hard of Hearing)">
    <option value="Muscular Dystrophy">
    <option value="Acid Attack Victim">
    <option value="Parkinson’s disease">
    <option value="Multiple Sclerosis">
    <option value="Thalassemia">
    <option value="Hemophilia">
    <option value="Sickle Cell disease">
    <option value="Autism Spectrum Disorder">
    <option value="Chronic Neurological conditions">
    <option value="Multiple Disabilities including Deafness Blindness">
</datalist>

<div class="form-group col-md-8 col-sm-12 col-xs-12 ms-4" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div style="flex-basis: 45%;">
        <button class="btn btn-primary float-start prev" id="prev-two" type="button"><b><i class="fas fa-chevron-circle-left me-2"></i>Previous</b></button>
    </div>
    
    <div style="flex-basis: 45%;">
        <button class="btn btn-primary float-end next" id="next-four" type="button"><b>Next <i class="fas fa-chevron-circle-right ms-2"></i></b></button>
    </div>    
</div>