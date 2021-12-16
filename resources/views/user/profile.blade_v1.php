@extends('layouts.app')

@section('content')

<style>

/* Love Life Bar Starts */
#profile_header {
  margin-top: 0.5rem;
  margin-left: 0.2rem;
  margin-right: 0.2rem;
  height: 2.5rem;
  width: auto;
  font-size: 1.8rem;
  font-style: italic;
  font-family: "papyrus";
  padding-left: 1.5rem;
  font-weight: bold;
  background-color: white;
  color: rgb(255, 35, 35);
  border-style: solid;
  border-width: 0.2rem;
  border-radius: 0.4rem;
  border-color: rgb(230, 230, 230);
}

#profile_header a{
  text-decoration: none;
  color: rgb(255, 35, 35);
}

#profile_img {
  float: right;
  margin: 0.2rem 0.5rem 0.1rem 0.1rem;
  height: 2.2rem;
  width: 2.2rem;
}
/* Love Life Bar Ends */

/* Page Contents Header Bar Starts */
#page_options_bar {
  display: flex;
  margin-top: 0.2rem;
  margin-left: 0.2rem;
  margin-right: 0.2rem;
  height: 2rem;
  width: auto;
  background-color: orange;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  color: white;
  font-size: 1rem;
  border-style: solid;
  border-width: 0.2rem;
  border-radius: 0.4rem;
  border-color:orange);
}

#page_options_bar span{
  cursor: pointer;
  align-self: center;
  margin-left: 2rem;
  margin-right: 5rem;
}
/* Page Contents Header Ends */

/* Main Body Starts */
#profile_bg_div {
  display: flex;
  position: absolute;
  margin:0.2rem;
  margin-top: 0.1rem;
  width: auto;
  height: calc(100% - 230px);
}

/* Left Margin Starts*/
#margin_left{
  position: relative;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  width: 15rem;
  height: auto;
  background-color: orange;
  color: white;
}


/* Completion Bar Starts */
#profile_completion_bar {
  position: relative;
  font-size: 0.8rem;
  font-weight: bold;
  width: 14.7rem;
  height: 2.2rem;
  background-color: none;
  margin-top: 0.1rem;
  margin-left: 0rem;
  border-radius: 1rem;
  border-color: white;
  border-style: solid;
}

#fill-bar-txt {
  display: flex;
  margin-top: 0.2rem;
  margin-left: 1.5rem;
}

#progress_bar {
  width: 13rem;
  margin-top: 0.1rem;
  margin-left: 1rem;
}
/* Completion Bar Ends */

/* Side Menu Starts */
#profile_features_list {
  display: flex;
  position: relative;
  margin-top: 1rem;
  width: 15rem;
  font-size: 1rem;
  font-weight: bold;
}

#profile_features_list ul{
  padding: 0rem;
  margin-top: 1rem;
  margin-left: 1.5rem;
}

#profile_features_list ul li{
  list-style-type: none;
  margin-bottom: 2rem;
}

#profile_features_list ul li a{
  text-decoration: none;
  color: white;
}
/* Side Menu Ends */

/* Profile Main Section Starts */
#profile_div {
  position: relative;
  border-style: solid;
  border-width: 0.2rem;
  border-radius: 0.4rem;
  border-color:rgb(230, 230,230);
  width: 100%;
  height: 100%;
  margin-left: 0.3vw;
  font-size: 1.5rem;
  overflow: scroll;
}

table{
  border-left: 2rem;
  border-top: 1rem;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: 1.1rem;
}

table th{
  text-align: left;
  height: 3rem;
}

table tr td{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.table_col_1{
  width: 5vw;
}

.table_col_1 img{
  margin-left: 1.8vw;
}

.table_col_2{
  width: 12vw;
}

.table_heading{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1.6rem;
  color: rgb(255, 35, 35);
  font-weight: bold;
  font-variant: small-caps;
}

table input, #gender_list, #personality_types_list{
  border-style: hidden;
  border-bottom-color: black;
  border-bottom-style: solid;
  width: 16rem;
  height: 1.6rem;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1.1rem;
  background-color: transparent;
}

/* table, table tr, table tr td{
  border-color: black;
  border-style: solid;
} */

.visibility_icon{
  cursor: pointer;
}

.list_icon{
  height: 2rem;
  width: 2rem;
  background-color: lightgray;
  border-radius: 2rem;
  cursor: pointer;
}


/* Profile Information Begins */

#about_me{
  height: 10vw;
  width: 24vw;
}

#char_limit_lbl {
  margin-left: -10rem;
  z-index: 2;
}

/* Search and Dropdown Starts */

.second-div{
  width: 14.6rem;
  display: none;
  flex-direction: column;
  margin:0rem 0rem 0rem 0rem;
}

.list-div{
  display: flex;
  flex-direction: row; 
}

.cb{
  height: 1.5rem;
  width: 1.5rem;
}

.second-div a{
  display: flex;
  flex-direction: column;
  text-decoration: none;
  color: black;
}

.show_elements_main_div{
  position: static;
  flex-direction: column;
  background-color:rgb(230, 230, 230);
  height: auto;
  width: 20rem;
  margin-top: 0.2rem;
  padding:1rem;
  border-radius: 1rem;
}

.data{
  padding:0.2rem;
  display: none;
  background-color: white;
  border-radius: 1rem;
  width: fit-content;
  float: inline-end; 
}
/* Search and Dropdown Ends */

/* Additional Information Starts */

#toggle_main_div1, #toggle_main_div2 {
  position: relative;
  margin-left: 6rem;
  background-color: lightgray;
  width: 4rem;
  height: 2rem;
  border-radius: 2rem;
  cursor: pointer;
}

#toggle_circle_div1, #toggle_circle_div2 {
  background-color: white;
  width: 1.4rem;
  height: 1.5rem;
  border-radius: 2.1rem;
  margin: 0.25rem 0rem 0rem 0.3rem;
  transition: 0.5s;
}

#lovelang_on_lbl {
  margin: -2.5rem 0rem 0rem 16rem;
}

#lovelang_on_button {
  margin: 0rem 0rem 0rem 16.45rem;
}

#lovelang_off_lbl {
  margin: -2.5rem 0rem 0rem 19rem;
}

#lovelang_off_button {
  margin: 0rem 0rem 0rem 20rem;
}
/* Additional Information Ends */

</style>


<div class="container">
    <h1>My profile</h1>
    <div id="landing_header">
        <div id="profile_header">
            <a href="../profile">Love Life</a>
            <img id="profile_img" src="{{ asset('storage/images/profile.png') }}">
        </div>
    </div>

    <div id="landing_body">
        <div id="page_options_bar">
            <span id="home">Home</span>
            <span id="profile">Profile</span>
            <span id="chat">Chat</span>
            <span id="secret_chat">Secret Chat</span>
        </div>

        <div id="profile_bg_div">
            <div id="margin_left">
                <div id="profile_completion_bar">
                    <span id="fill-bar-txt">Fill Bar for Better Matchup !</span>
                    <progress id="progress_bar" value="32" max="100"> 32% </progress>
                </div>
                <div id="profile_features_list">
                    <ul>
                        <li>
                            <a id="personal-info" href="#pers-info-heading">Personal Info</a>
                        </li>
                        <li>
                            <a id="looking-for" href="#upload_pictures">I am looking for</a>
                        </li>
                        <li>
                            <span id="pref">Preference</span>
                        </li>
                        <li>
                            <a id='about' href="#prof-info-heading">About</a>
                        </li>
                        <li>
                            <a id="dis" href="#about_lbl">Disability</a>
                        </li>
                        <li>
                            <a id="intr" href="#disability-lbl">Interests</a>
                        </li>
                        <li>
                            <a id="addn-info" href="#topics-lbl"> Additional Info</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="profile_div">
                <form id="profile_form">    
                    <table id="table_personal_info">
                        <tr>
                            <td></td>
                            <th colspan="4">
                                <span class="table_heading"> Personal Info</span>
                            </th>
                        </tr>
                        <tr>
                            <td class="table_col_1" class="table_col_1">
                                <img id="visibility_fname" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_fname')">
                            </td>
                            <td class="table_col_2">
                                <span id="full_name">Full Name:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="f_name" type="text" name="full_name" autofocus />
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_uname" class="visibility_icon" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_uname')">
                            </td>
                            <td class="table_col_2">
                                <span id="user_name">User name:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="uname" type="text" name="uname" />
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_user" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}" >
                            </td>
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_aname" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_aname')">
                            </td>
                            <td class="table_col_2">
                                <span id="alias_name">Alias name:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="al_name" type="text" name="alias_name" />
                            </td>
                            <td class="table_col_4">
                                <img id="refresh_icon_alias" class="list_icon" src="{{ asset('storage/images/refresh_icon.png') }}">
                                <img id="ques_mark_alias" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_phn" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_phn')">
                            </td>
                            <td class="table_col_2">
                                <span id="phone">Phone number:</span>
                    
                            </td>
                            <td class="table_col_3">
                                <input id="phn" type="tel" name="phn" /><br>
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_mail" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_mail')">
                            </td>
                            <td class="table_col_2">
                                <span id="my_email">Email id:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="email_id" type="tel" name="email_id" />
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_dob" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_dob')">
                            </td>
                            <td class="table_col_2">
                                <span id="dob"> Date of birth:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="d_o_b" type="date" name="dob" />
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_gender" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_gender')">
                            </td>
                            <td class="table_col_2">
                                <span id="gender">Gender:</span>
                            </td>
                            <td class="table_col_3">
                                <select id="gender_list">
                                    <option>M</option>
                                    <option>F</option>
                                    <option>LGBTQ+</option>
                                    <option>other</option>
                                </select>
                    
                            </td class="table_col_1">
                            <td class="table_col_4">
                                <img id="ques_mark_gender" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td class="table_col_2">
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_location" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_location')">
                            </td>
                            <td class="table_col_2">
                                <span id="location"> Location:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="loc" type="text" name="loc" />
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_upload_pics" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_upload_pics')">
                            </td>
                            <td class="table_col_2">
                                <span id="upload_pictures"> Upload pictures:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="upload_pic1" type="file" name="up_pic1"><br>
                                <input id="upload_pic2" type="file" name="up_pic2"><br>
                                <input id="upload_pic3" type="file" name="up_pic3">
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_upload_pics" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                        <!-- <tr>
                            <td class="table_col_1">
                                <img id="visibility_looking_for" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_looking_for')">
                            </td>
                            <td class="table_col_2">
                                <span id="looking_for"> I am looking for:</span>
                            </td>
                            <td class="table_col_3">
                                <input id="look_for1" type="radio" name="look_for" value="Friendship">
                                <label id="lbl1" for="look_for1">Friendship</label> <br>
                                <input id="look_for2" type="radio" name="look_for" value="Dating">
                                <label id="lbl2" for="look_for2">Dating</label> <br>
                                <input id="look_for3" type="radio" name="look_for" value="Marriage">
                                <label id="lbl3" for="look_for3">Marriage</label>
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr> -->
                    </table>
                    
                    <hr>
                    
                    <table id="table_profile_info">
                        <tr>
                            <td></td>
                            <th colspan="4">
                                <span class="table_heading"> Profile Info</span>
                            </th>
                        </tr>
                    
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_about" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_about')">
                            </td>
                            <td class="table_col_2">
                                <span id="about_lbl"> About:</span>
                            </td>
                            <td class="table_col_3">
                                <textarea id="about_me" name="about" rows="5" cols="5" maxlength="1000"></textarea>
                                <span id="char_limit_lbl">0/60 characters</span>
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_disability" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_disability')">
                            </td>
                            <td class="table_col_2">
                                <span id="disability-lbl"> Disability:</span>
                            </td>
                            <td class="table_col_3">

                                <div id="disabilities_main_div" class="main-div">
                    
                                    <input type="text" name="disabilities" id="disabilities_type" onclick="openDisabilitiesList()" onkeyup="filterDisabilitiesFunction()">
                    
                                    <div id="disabilities_second_div" class="second-div">
                                        <div id="disabilities_list_div_1" class="list-div">
                                            <input id="disabilities_cb1" class="cb" type=checkbox data-value="Blindness" onclick="showDisabilitiesSelectedItems(this)">
                                            <a id="item1">Blindness</a>
                    
                                        </div>
                                        <div id="disabilities_list_div_2" class="list-div">
                                            <input id="disabilities_cb2" class="cb" type=checkbox data-value="Dumb" onclick="showDisabilitiesSelectedItems(this)">
                                            <a id="item2">Dumb</a>
                    
                                        </div>
                                        <div id="disabilities_list_div_3" class="list-div">
                                            <input id="disabilities_cb3" class="cb" type=checkbox data-value="Deaf" onclick="showDisabilitiesSelectedItems(this)">
                                            <a id="item3">Deaf</a>
                    
                                        </div>
                                        <div id="disabilities_list_div_4" class="list-div">
                                            <input id="disabilities_cb4" class="cb" type=checkbox data-value="Dyslexia" onclick="showDisabilitiesSelectedItems(this)">
                                            <a id="item4">Dyslexia</a>
                                        </div>
                                    </div>
                                </div>
                    
                                <div id="disabilities_show_elements_main_div" class="show_elements_main_div">
                                    <span id="disabilities_data1" class="data m-2 p-2" data-value="bl">Blindness</span>
                                    <span id="disabilities_data2" class="data m-2 p-2" data-value="du">Dumb</span>
                                    <span id="disabilities_data3" class="data m-2 p-2" data-value="de">Deaf</span>
                                    <span id="disabilities_data4" class="data m-2 p-2" data-value="sl">Dyslexia</span>
                                </div>
                    
                            </td>
                            <td class="table_col_4">
                    
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_hobbies" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_hobbies')">
                            </td>
                            <td class="table_col_2">
                                <span id="hobbies-lbl">Hobbies:</span>
                            </td>
                            <td class="table_col_3">
                                <div id="hobbies_main_div" class="main-div">
                    
                                    <input type="text" name="hobbies" id="hobbies_type" onclick="openHobbiesList()" onkeyup="filterHobbiesFunction()">
                    
                                    <div id="hobbies_second_div" class="second-div">
                                        <div id="hobbies_list_div_1" class="list-div">
                                            <input id="hobbies_cb1" class="cb" type=checkbox data-value="Art" onclick="showHobbiesSelectedItems(this)">
                                            <a id="item1">Art</a>
                    
                                        </div>
                                        <div id="hobbies_list_div_2" class="list-div">
                                            <input id="hobbies_cb2" class="cb" type=checkbox data-value="Music" onclick="showHobbiesSelectedItems(this)">
                                            <a id="item2">Music</a>
                    
                                        </div>
                                        <div id="hobbies_list_div_3" class="list-div">
                                            <input id="hobbies_cb3" class="cb" type=checkbox data-value="Gym" onclick="showHobbiesSelectedItems(this)">
                                            <a id="item3">Gym</a>
                    
                                        </div>
                                        <div id="hobbies_list_div_4" class="list-div">
                                            <input id="hobbies_cb4" class="cb" type=checkbox data-value="Swimming" onclick="showHobbiesSelectedItems(this)">
                                            <a id="item4">Swimming</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="hobbies_show_elements_main_div" class="show_elements_main_div">
                                    <div id="hobbies_data1" class="data" data-value="Ar">Art</div>
                                    <div id="hobbies_data2" class="data" data-value="Mu">Music</div>
                                    <div id="hobbies_data3" class="data" data-value="Gy">Gym</div>
                                    <div id="hobbies_data4" class="data" data-value="Sw">Swimming</div>
                                </div>
                    
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_hobbies" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_movies" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_movies')">
                            </td>
                            <td class="table_col_2">
                                <span id="movies-lbl">Movies:</span>
                            </td>
                            <td class="table_col_3">
                                <div id="movies_main_div" class="main-div">
                                    <input type="text" name="movies" id="movies_type" onclick="openMoviesList()" onkeyup="filterMoviesFunction()">
                    
                                    <div id="movies_second_div" class="second-div">
                                        <div id="movies_list_div_1" class="list-div">
                                            <input id="movies_cb1" class="cb" type=checkbox data-value="Horror" onclick="showMoviesSelectedItems(this)">
                                            <a id="item1">Horror</a>
                    
                                        </div>
                                        <div id="movies_list_div_2" class="list-div">
                                            <input id="movies_cb2" class="cb" type=checkbox data-value="Comedy" onclick="showMoviesSelectedItems(this)">
                                            <a id="item2">Comedy</a>
                    
                                        </div>
                                        <div id="movies_list_div_3" class="list-div">
                                            <input id="movies_cb3" class="cb" type=checkbox data-value="Action" onclick="showMoviesSelectedItems(this)">
                                            <a id="item3">Action</a>
                    
                                        </div>
                                        <div id="movies_list_div_4" class="list-div">
                                            <input id="movies_cb4" class="cb" type=checkbox data-value="Thriller" onclick="showMoviesSelectedItems(this)">
                                            <a id="item4">Thriller</a>
                                        </div>
                                    </div>
                                </div>
                    
                                <div id="movies_show_elements_main_div" class="show_elements_main_div">
                                    <div id="movies_data1" class="data" data-value="Ho">Horror</div>
                                    <div id="movies_data2" class="data" data-value="Co">Comedy</div>
                                    <div id="movies_data3" class="data" data-value="Ac">Action</div>
                                    <div id="movies_data4" class="data" data-value="Th">Thriller</div>
                                </div>
                    
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_movies" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_topics_i_like" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_topics_i_like')">
                            </td>
                            <td class="table_col_2">
                                <span id="topics-lbl">Topics i like:</span>
                            </td>
                            <td class="table_col_3">
                                <div id="topics_main_div" class="main-div">
                    
                                    <input type="text" name="movies" id="topics_type" onclick="openTopicsList()" onkeyup="filterTopicsFunction()">
                    
                                    <div id="topics_second_div" class="second-div">
                                        <div id="topics_list_div_1" class="list-div">
                                            <input id="topics_cb1" class="cb" type=checkbox data-value="Science" onclick="showTopicsSelectedItems(this)">
                                            <a id="item1">Science</a>
                    
                                        </div>
                                        <div id="topics_list_div_2" class="list-div">
                                            <input id="movies_cb2" class="cb" type=checkbox data-value="Business" onclick="showTopicsSelectedItems(this)">
                                            <a id="item2">Business</a>
                    
                                        </div>
                                        <div id="topics_list_div_3" class="list-div">
                                            <input id="movies_cb3" class="cb" type=checkbox data-value="News" onclick="showTopicsSelectedItems(this)">
                                            <a id="item3">News</a>
                    
                                        </div>
                                        <div id="topics_list_div_4" class="list-div">
                                            <input id="movies_cb4" class="cb" type=checkbox data-value="Sports" onclick="showTopicsSelectedItems(this)">
                                            <a id="item4">Sports</a>
                    
                                        </div>
                                    </div>
                                </div>
                    
                                <div id="topics_show_elements_main_div" class="show_elements_main_div">
                                    <div id="topics_data1" class="data" data-value="Ho">Science</div>
                                    <div id="topics_data2" class="data" data-value="Co">Business</div>
                                    <div id="topics_data3" class="data" data-value="Ac">News</div>
                                    <div id="topics_data4" class="data" data-value="Th">Sports</div>
                                </div>
                    
                    
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_topics" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                    </table>
                    
                    <hr>
                    
                    <table>
                        <tr>
                            <td></td>
                            <th colspan="4">
                                <span class="table_heading"> Additional Info</span>
                            </th>
                        </tr>
                    
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_sunsign_matchup" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_sunsign_matchup')">
                            </td>
                            <td class="table_col_2">
                                <span id="sunsign_matchup_lbl">Sun Sign matchup:</span>
                            </td>
                            <td class="table_col_3">
                                <div id="toggle_main_div1" onclick="move_div('div1')">
                                    <div id="toggle_circle_div1">
                                    </div>
                                </div>
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_sunsign" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_love_lang_matchup" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_love_lang_matchup')">
                            </td>
                            <td class="table_col_2">
                                <span id="lovelang_matchup_lbl">Love Language matchup:</span>
                            </td>
                            <td class="table_col_3">
                                <div id="toggle_main_div2" onclick="move_div('div2')">
                                    <div id="toggle_circle_div2">
                                    </div>
                                </div>
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_lovelang" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                    
                        </tr>
                        <tr>
                            <td class="table_col_1">
                                <img id="visibility_personality_type" class="visibility_icon" src="{{ asset('storage/images/visible.png') }}" width="20rem" height="20rem" data-hide="off" onclick="hideUnhide('visibility_personality_type')">
                            </td>
                            <td class="table_col_2">
                                <span id="personality_type"> Personality Type:</span>
                            </td>
                            <td class="table_col_3">
                                <select id="personality_types_list">
                                    <option>P1</option>
                                    <option>p2</option>
                                    <option></option>
                                </select>
                            </td>
                            <td class="table_col_4">
                                <img id="ques_mark_personality_type" class="list_icon" src="{{ asset('storage/images/question_mark.png') }}">
                            </td>
                        </tr>
                    
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

document.addEventListener("DOMContentLoaded", function(event) { 

});



window.onload = function () {
  document.getElementById("gender_list").selectedIndex = "-1";
  document.getElementById("disabilities_type").selectedIndex = "-1";
  document.getElementById("personality_types_list").selectedIndex = "-1";
};

function move_div(val) {
  if (val == "div1") {
    let dist = document.getElementById("toggle_circle_div1").style.marginLeft;
    if (dist == "0.3rem") {
      document.getElementById("toggle_circle_div1").style.marginLeft = "2.3rem";
      document.getElementById("toggle_main_div1").style.backgroundColor =
        "#2196F3";
    } else {
      document.getElementById("toggle_circle_div1").style.marginLeft = "0.3rem";
      document.getElementById("toggle_main_div1").style.backgroundColor =
        "lightgray";
    }
  } else {
    let dist = document.getElementById("toggle_circle_div2").style.marginLeft;
    if (dist == "0.3rem") {
      document.getElementById("toggle_circle_div2").style.marginLeft = "2.3rem";
      document.getElementById("toggle_main_div2").style.backgroundColor =
        "#2196F3";
    } else {
      document.getElementById("toggle_circle_div2").style.marginLeft = "0.3rem";
      document.getElementById("toggle_main_div2").style.backgroundColor =
        "lightgray";
    }
  }
}


function openDisabilitiesList()
{
  
  if((document.getElementById("disabilities_second_div").style.display)=='flex')
  {
  document.getElementById("disabilities_second_div").style.display='none';
  }
  else
  {
  document.getElementById("disabilities_second_div").style.display='flex'; 
}
}

function showDisabilitiesSelectedItems(val)
{

    let item=val.getAttribute("data-value");
   
    if (val.checked)
    {
    if(item=="Blindness")
    {
    
    document.getElementById("disabilities_data1").style.display="inline";
    }
    else if(item=="Dumb")
    {
   
    document.getElementById("disabilities_data2").style.display="inline";
    }
    else if(item=="Deaf")
    {
   
    document.getElementById("disabilities_data3").style.display="inline";
    }
    else if(item=="Dyslexia")
    {
   
    document.getElementById("disabilities_data4").style.display="inline";
    }
  }
    else
    {
      if(item=="Blindness")
    {
      
      document.getElementById("disabilities_data1").style.display="none";
   
    }
    else if(item=="Dumb")
    {

    
    document.getElementById("disabilities_data2").style.display="none";
    }
    else if(item=="Deaf")
    {
    
    document.getElementById("disabilities_data3").style.display="none";
    }
    else if(item=="Dyslexia")
    {
    
    document.getElementById("disabilities_data4").style.display="none";
    }
    }

  }
    
    
  




function filterDisabilitiesFunction() {
  document.getElementById("disabilities_second_div").style.display='flex';
  var input, filter, ul, li, a, i;
  input = document.getElementById("disabilities_type");
  filter = input.value.toUpperCase();
  div = document.getElementById("disabilities_second_div");
  a = div.getElementsByTagName("div");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

function openHobbiesList()
{
  
  if((document.getElementById("hobbies_second_div").style.display)=='flex')
  {
  document.getElementById("hobbies_second_div").style.display='none';
  }
  else
  {
  document.getElementById("hobbies_second_div").style.display='flex'; 
}
}
function showHobbiesSelectedItems(val)
{

    let item=val.getAttribute("data-value");
   
    if (val.checked)
    {
    if(item=="Art")
    {
    
    document.getElementById("hobbies_data1").style.display="inline";
    }
    else if(item=="Music")
    {
   
    document.getElementById("hobbies_data2").style.display="inline";
    }
    else if(item=="Gym")
    {
   
    document.getElementById("hobbies_data3").style.display="inline";
    }
    else if(item=="Swimming")
    {
   
    document.getElementById("hobbies_data4").style.display="inline";
    }
  }
    else
    {
      if(item=="Art")
    {
      
      document.getElementById("hobbies_data1").style.display="none";
   
    }
    else if(item=="Music")
    {

    
    document.getElementById("hobbies_data2").style.display="none";
    }
    else if(item=="Gym")
    {
    
    document.getElementById("hobbies_data3").style.display="none";
    }
    else if(item=="Swimming")
    {
    
    document.getElementById("hobbies_data4").style.display="none";
    }
    }

  }

  function filterHobbiesFunction() {
    document.getElementById("hobbies_second_div").style.display='flex';
    var input, filter, ul, li, a, i;
    input = document.getElementById("hobbies_type");
    filter = input.value.toUpperCase();
    div = document.getElementById("hobbies_second_div");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }



  function openMoviesList()
{
  
  if((document.getElementById("movies_second_div").style.display)=='flex')
  {
  document.getElementById("movies_second_div").style.display='none';
  }
  else
  {
  document.getElementById("movies_second_div").style.display='flex'; 
}
}
function showMoviesSelectedItems(val)
{

    let item=val.getAttribute("data-value");
   
    if (val.checked)
    {
    if(item=="Horror")
    {
    
    document.getElementById("movies_data1").style.display="inline";
    }
    else if(item=="Comedy")
    {
   
    document.getElementById("movies_data2").style.display="inline";
    }
    else if(item=="Action")
    {
   
    document.getElementById("movies_data3").style.display="inline";
    }
    else if(item=="Thriller")
    {
   
    document.getElementById("movies_data4").style.display="inline";
    }
  }
    else
    {
      if(item=="Horror")
    {
      
      document.getElementById("movies_data1").style.display="none";
   
    }
    else if(item=="Comedy")
    {

    
    document.getElementById("movies_data2").style.display="none";
    }
    else if(item=="Action")
    {
    
    document.getElementById("movies_data3").style.display="none";
    }
    else if(item=="Thriller")
    {
    
    document.getElementById("movies_data4").style.display="none";
    }
    }

  }

  function filterMoviesFunction() {
    document.getElementById("movies_second_div").style.display='flex';
    var input, filter, ul, li, a, i;
    input = document.getElementById("movies_type");
    filter = input.value.toUpperCase();
    div = document.getElementById("movies_second_div");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }


  
  function openTopicsList()
{
  
  if((document.getElementById("topics_second_div").style.display)=='flex')
  {
  document.getElementById("topics_second_div").style.display='none';
  }
  else
  {
  document.getElementById("topics_second_div").style.display='flex'; 
}
}
function showTopicsSelectedItems(val)
{

    let item=val.getAttribute("data-value");
   
    if (val.checked)
    {
    if(item=="Science")
    {
    
    document.getElementById("topics_data1").style.display="inline";
    }
    else if(item=="Business")
    {
   
    document.getElementById("topics_data2").style.display="inline";
    }
    else if(item=="News")
    {
   
    document.getElementById("topics_data3").style.display="inline";
    }
    else if(item=="Sports")
    {
   
    document.getElementById("topics_data4").style.display="inline";
    }
  }
    else
    {
      if(item=="Science")
    {
      
      document.getElementById("topics_data1").style.display="none";
   
    }
    else if(item=="Business")
    {

    
    document.getElementById("topics_data2").style.display="none";
    }
    else if(item=="News")
    {
    
    document.getElementById("topics_data3").style.display="none";
    }
    else if(item=="Sports")
    {
    
    document.getElementById("topics_data4").style.display="none";
    }
    }

  }

  function filterTopicsFunction() {
    document.getElementById("topics_second_div").style.display='flex';
    var input, filter, ul, li, a, i;
    input = document.getElementById("topics_type");
    filter = input.value.toUpperCase();
    div = document.getElementById("topics_second_div");
    a = div.getElementsByTagName("div");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }



function hideUnhide(val) {
  let x = document.getElementById(val);
   let l="{{ asset('storage/images/invisible.png') }}";
   let n="{{ asset('storage/images/visible.png') }}";
  if(x.getAttribute("data-hide")=="off")
   {
   x.src=l;
   x.setAttribute("data-hide","on");
   }
     else if(x.getAttribute("data-hide")=="on")
  {
   x.src=n; 
   x.setAttribute("data-hide","off");
   }
 
}
</script>

@endsection
