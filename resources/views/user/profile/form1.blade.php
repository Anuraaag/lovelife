@csrf

    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="first_name" placeholder="John" name="first_name" value="" required> <!-- is-valid -->
            <label class="form-label" for="first_name">First Name</label>
            <div class="invalid-feedback">{{ $errors->first('first_name')}}</div>
        </div>

        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="last_name" placeholder="Doe" name="last_name" value="" required>
            <label class="form-label" for="last_name">Last Name</label>
            <div class="invalid-feedback">{{ $errors->first('last_name')}}</div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="username" placeholder="iAmJohn" name="username" value="" required> <!-- is-valid -->
            <label class="form-label" for="username">Username</label>
            <div class="invalid-feedback">{{ $errors->first('username')}}</div>
        </div>

        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="alias" placeholder="anything" name="alias" value="" required>
            <label class="form-label" for="alias">Alias</label>
            <div class="invalid-feedback">{{ $errors->first('alias')}}</div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="email" placeholder="example@domain.com" type="email" name="email" value="" required> <!-- is-valid -->
            <label class="form-label" for="email">Email Address</label>
            <div class="invalid-feedback">{{ $errors->first('email')}}</div>
        </div>

        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" id="number" placeholder="With Country code" name="number" value="" required> <!-- is-valid -->
            <label class="form-label" for="number">Number</label>
            <div class="invalid-feedback">{{ $errors->first('number')}}</div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="form-outline" style="flex-basis: 45%;">
            <input class="form-control pt-3" list="datalistOptions" id="gender" name="gender" placeholder="Select or type yours" value="" required>
            <datalist id="datalistOptions">
                <option value="Agender">
                <option value="Androgynous">
                <option value="Bigender">
                <option value="Cis Man and Cis Woman">
                <option value="Genderfluid">
                <option value="Genderqueer">
                <option value="Gender Nonconforming">
                <option value="Hijra">
                <option value="Intersex">
                <option value="Man">
                <option value="Non-binary">
                <option value="Pangender">
                <option value="Transfeminine">
                <option value="Transgender">
                <option value="Trans Man">
                <option value="Transmasculine">
                <option value="Transsexual">
                <option value="Trans Woman">
                <option value="Two Spirit">
                <option value="Woman">
            </datalist>
            <label class="form-label" for="gender">Gender</label>
            <div class="invalid-feedback">{{ $errors->first('alias')}}</div>
        </div>

        <div class="form-outline" style="flex-basis: 45%;">
            <input type="date" class="form-control pt-3" id="dob" placeholder="Select a date" name="dob" value="" required> <!-- is-valid -->
            <label class="form-label" for="dob">Date of Birth</label>
            <div class="invalid-feedback">{{ $errors->first('dob')}}</div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12 mb-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        <div class="form-outline" style="flex-basis: 93.5%;">
            <textarea class="form-control pt-3" id="about" name="about" rows="5" placeholder="A short bio"></textarea>
            <label class="form-label" for="email">About (optional)</label>
            <div class="invalid-feedback">{{ $errors->first('about')}}</div>
        </div>
    </div>

    <div class="form-group col-md-8 col-sm-12 col-xs-12" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
        
        <div style="flex-basis: 93.5%;">
            <button style="float: right" class="btn btn-primary" type="button">Next <i class="fas fa-chevron-circle-right ms-2"></i></button>
        </div>    
    </div>

