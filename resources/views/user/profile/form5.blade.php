<div class="form-group col-md-8 col-sm-12 col-xs-12 ms-4 mb-5" 
    style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div class="form-outline autocomplete" style="flex-basis: 93.5%;">
	    <input class="form-control pt-3" id="location_search" placeholder="Type your address or a nearby landmark" 
	    	name="location_search" type="search" value="" required autocomplete="disabled"> 
        <label class="form-label" for="search_bar">Search your place</label>
	</div>
	<p class="h2 d-none" id="search_loader"><i class="far fa-compass fa-pulse"></i> </p>
</div>

<div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-4" 
    style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div class="form-outline" style="flex-basis: 93.5%;">
	    <input class="form-control pt-3" id="address" placeholder="Enter address (optional)" 
		name="address" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="address">Address</label>
    </div>
</div>

<div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-4" 
    style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
	<div class="form-outline" style="flex-basis: 29%;">
	    <input class="form-control pt-3" id="town" placeholder="Enter town (optional)" 
		name="town" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="town">Town</label>
	</div>

	<div class="form-outline" style="flex-basis: 29%;">
	    <input class="form-control pt-3" id="city" placeholder="Enter city (optional)" 
		name="city" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="city">City</label>
	</div>

	<div class="form-outline" style="flex-basis: 29%;">
	    <input class="form-control pt-3" id="district" placeholder="Enter district (optional)" 
		name="district" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="district">District</label>
	</div>
</div>

<div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-4" 
    style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
	<div class="form-outline" style="flex-basis: 45%;">
	    <input class="form-control pt-3" id="county" placeholder="Enter county (optional)" 
		name="county" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="county">County</label>
	</div>

	<div class="form-outline" style="flex-basis: 45%;">
	    <input class="form-control pt-3" id="postcode" placeholder="Enter postcode (optional)" 
		name="postcode" value=" " readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="postcode">Postcode</label>
	</div>
</div>

<div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5 ms-4" 
    style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
	<div class="form-outline" style="flex-basis: 45%;">
	    <input class="form-control pt-3" id="state" placeholder="Enter state" 
		name="state" value=" " required readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="state">State</label>
	</div>

	<div class="form-outline" style="flex-basis: 45%;">
	    <input class="form-control pt-3" id="country" placeholder="Enter country" 
		name="country" value=" " required readonly="readonly" autocomplete="disabled"> 
        <label class="form-label" for="country">Country</label>
	</div>
</div>

<!-- hidden inputs -->
<input class="form-control d-none" id="lat" name="lat" value="" required readonly="readonly">
<input class="form-control d-none" id="lon" name="lon" value="" required readonly="readonly">
	

<div class="form-group col-md-8 col-sm-12 col-xs-12 ms-4" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div style="flex-basis: 45%;">
        <button class="btn btn-primary float-start prev" id="prev-four" type="button"><b><i class="fas fa-chevron-circle-left me-2"></i>Previous</b></button>
    </div>
    
    <div style="flex-basis: 45%;">
        <button class="btn btn-primary float-end next" id="next-six" type="button"> <b>Next <i class="fas fa-chevron-circle-right ms-2"></i></b></button>
    </div>    
</div>