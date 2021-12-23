<div class="mb-5 ms-5">
    <h4> Knowing you better </h4>
    <div class="m-4 mt-5 row">
        <div class="col-3">
            <label class="form-check-label" for="sunsign"> Sun Sign Matchup </label>
        </div>        
        <div class="form-check form-switch col-4 ms-2">
            <input class="form-check-input" type="checkbox" role="switch" id="sunSign" name="sunSign" checked />
        </div>
    </div>

    <div class="m-4 row">
        <div class="col-3">
            <label class="form-check-label" for="sunsign"> Love Language Matchup <i class="fas fa-info-circle"
            type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#loveLanguageTest"></i></label>
        </div>        
        <div class="form-check form-switch col-4 ms-2">
            <input class="form-check-input" type="checkbox" role="switch" id="loveLanguage" name="loveLanguage" checked />
        </div>
    </div>

    <div class="m-4 row">
        <div class="col-3">
            <label class="form-check-label" for="sunsign"> Personality Type </label>
        </div>        
        <div class="form-group col-5" >
            <select id="personality" class="form-control p-2 custom-select sources" name="personality">
                <option value="" selected disabled class="text-center"> -- Select Your Type --</option>
                <option value="ENFJ"> Giver (Extraverted, Intuitive, Feeling, Judging)</option>
                <option value="INFJ">Advocate (Introverted, Intuitive, Feeling, Judging)</option>
                <option value="INTJ">Architect (Introverted, Intuitive, Thinking, Judging)</option>
                <option value="ENTJ">Commander (Extraverted, Intuitive, Thinking, Judging)</option>
                <option value="ENFP">Champion (Extraverted, Intuitive, Feeling, Perceiving)</option>
                <option value="INFP">Mediator (Introverted, Intuitive, Feeling, Perceiving)</option>
                <option value="INTP">Thinker (Introverted, Intuitive, Thinking, Perceiving)</option>
                <option value="ENTP">Debater (Extroverted, Intuitive, Thinking, Perceiving)</option>
                <option value="ESFP">Performer (Extraverted, Sensing, Feeling, Perceiving)</option>
                <option value="ISFP">Artist (Introverted, Sensing, Feeling, Perceiving)</option>
                <option value="ISTP">Crafter (Introverted, Sensing, Thinking, Perceiving)</option>
                <option value="ESTP">Persuader (Extraverted, Sensing, Thinking, Perceiving)</option>
                <option value="ESFJ">Caregiver (Extroverted, Sensing, Feeling, Judging)</option>
                <option value="ISFJ">Protector (Introverted, Sensing, Feeling, Judging)</option>
                <option value="ISTJ">Inspector (Introverted, Sensing, Thinking, Judging)</option>
                <option value="ESTJ">The Director (Extraverted, Sensing, Thinking, Judging)</option>
            </select>
        </div>
    </div>
</div>

<div class="modal fade" id="loveLanguageTest" tabindex="-1" aria-labelledby="loveLanguageTest" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loveLanguageTestHeading">Love Language Test</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<div class="form-group col-md-8 col-sm-12 col-xs-12 ms-5" style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
    <div style="flex-basis: 45%;">
        <button class="btn btn-primary float-start prev" id="prev-five" type="button"><b><i class="fas fa-chevron-circle-left me-2"></i>Previous</b></button>
    </div>
    
    <div style="flex-basis: 45%;">
        <button class="btn btn-secondary float-end" type="button"> <b>Save Details</b></button>
    </div>    
</div>
