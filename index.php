

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Introduction</li>
        <li>Work Experience</li>
        <li>Education</li>
        <li>Interview</li>
        <li>Skills</li>
        <li>Summary</li>
        <li>Finish Up</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <div class="fs-head">
            <img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/resume-icon.png" alt="">
            <h1 class="fs-title">Fill your personal information and goal</h1>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="fullname">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full Name" validate="name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address" validate="email" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="number" id="phone" name="phone" placeholder="Phone" validate="phone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="country">Country</label>
                <select class="form-control" id="countriesPersonal" required>
                    <option value="AF" data-capital="Kabul">Afghanistan</option>
                    <option value="AX" data-capital="Mariehamn">Aland Islands</option>
                    <option value="AL" data-capital="Tirana">Albania</option>
                    <option value="DZ" data-capital="Algiers">Algeria</option>
                    <option value="AS" data-capital="Pago Pago">American Samoa</option>
                    <option value="AD" data-capital="Andorra la Vella">Andorra</option>
                    <option value="AO" data-capital="Luanda">Angola</option>
                    <option value="AI" data-capital="The Valley">Anguilla</option>
                    <option value="AG" data-capital="St. John's">Antigua and Barbuda</option>
                    <option value="AR" data-capital="Buenos Aires">Argentina</option>
                    <option value="AM" data-capital="Yerevan">Armenia</option>
                    <option value="AW" data-capital="Oranjestad">Aruba</option>
                    <option value="AU" data-capital="Canberra">Australia</option>
                    <option value="AT" data-capital="Vienna">Austria</option>
                    <option value="AZ" data-capital="Baku">Azerbaijan</option>
                    <option value="BS" data-capital="Nassau">Bahamas</option>
                    <option value="BH" data-capital="Manama">Bahrain</option>
                    <option value="BD" data-capital="Dhaka">Bangladesh</option>
                    <option value="BB" data-capital="Bridgetown">Barbados</option>
                    <option value="BY" data-capital="Minsk">Belarus</option>
                    <option value="BE" data-capital="Brussels">Belgium</option>
                    <option value="BZ" data-capital="Belmopan">Belize</option>
                    <option value="BJ" data-capital="Porto-Novo">Benin</option>
                    <option value="BM" data-capital="Hamilton">Bermuda</option>
                    <option value="BT" data-capital="Thimphu">Bhutan</option>
                    <option value="BO" data-capital="Sucre">Bolivia</option>
                    <option value="BA" data-capital="Sarajevo">Bosnia and Herzegovina</option>
                    <option value="BW" data-capital="Gaborone">Botswana</option>
                    <option value="BR" data-capital="Brasília">Brazil</option>
                    <option value="IO" data-capital="Diego Garcia">British Indian Ocean Territory</option>
                    <option value="BN" data-capital="Bandar Seri Begawan">Brunei Darussalam</option>
                    <option value="BG" data-capital="Sofia">Bulgaria</option>
                    <option value="BF" data-capital="Ouagadougou">Burkina Faso</option>
                    <option value="BI" data-capital="Bujumbura">Burundi</option>
                    <option value="CV" data-capital="Praia">Cabo Verde</option>
                    <option value="KH" data-capital="Phnom Penh">Cambodia</option>
                    <option value="CM" data-capital="Yaoundé">Cameroon</option>
                    <option value="CA" data-capital="Ottawa">Canada</option>
                    <option value="KY" data-capital="George Town">Cayman Islands</option>
                    <option value="CF" data-capital="Bangui">Central African Republic</option>
                    <option value="TD" data-capital="N'Djamena">Chad</option>
                    <option value="CL" data-capital="Santiago">Chile</option>
                    <option value="CN" data-capital="Beijing">China</option>
                    <option value="CX" data-capital="Flying Fish Cove">Christmas Island</option>
                    <option value="CC" data-capital="West Island">Cocos (Keeling) Islands</option>
                    <option value="CO" data-capital="Bogotá">Colombia</option>
                    <option value="KM" data-capital="Moroni">Comoros</option>
                    <option value="CK" data-capital="Avarua">Cook Islands</option>
                    <option value="CR" data-capital="San José">Costa Rica</option>
                    <option value="HR" data-capital="Zagreb">Croatia</option>
                    <option value="CU" data-capital="Havana">Cuba</option>
                    <option value="CW" data-capital="Willemstad">Curaçao</option>
                    <option value="CY" data-capital="Nicosia">Cyprus</option>
                    <option value="CZ" data-capital="Prague">Czech Republic</option>
                    <option value="CI" data-capital="Yamoussoukro">Côte d'Ivoire</option>
                    <option value="CD" data-capital="Kinshasa">Democratic Republic of the Congo</option>
                    <option value="DK" data-capital="Copenhagen">Denmark</option>
                    <option value="DJ" data-capital="Djibouti">Djibouti</option>
                    <option value="DM" data-capital="Roseau">Dominica</option>
                    <option value="DO" data-capital="Santo Domingo">Dominican Republic</option>
                    <option value="EC" data-capital="Quito">Ecuador</option>
                    <option value="EG" data-capital="Cairo">Egypt</option>
                    <option value="SV" data-capital="San Salvador">El Salvador</option>
                    <option value="GQ" data-capital="Malabo">Equatorial Guinea</option>
                    <option value="ER" data-capital="Asmara">Eritrea</option>
                    <option value="EE" data-capital="Tallinn">Estonia</option>
                    <option value="ET" data-capital="Addis Ababa">Ethiopia</option>
                    <option value="FK" data-capital="Stanley">Falkland Islands</option>
                    <option value="FO" data-capital="Tórshavn">Faroe Islands</option>
                    <option value="FM" data-capital="Palikir">Federated States of Micronesia</option>
                    <option value="FJ" data-capital="Suva">Fiji</option>
                    <option value="FI" data-capital="Helsinki">Finland</option>
                    <option value="MK" data-capital="Skopje">Former Yugoslav Republic of Macedonia</option>
                    <option value="FR" data-capital="Paris">France</option>
                    <option value="PF" data-capital="Papeete">French Polynesia</option>
                    <option value="GA" data-capital="Libreville">Gabon</option>
                    <option value="GM" data-capital="Banjul">Gambia</option>
                    <option value="GE" data-capital="Tbilisi">Georgia</option>
                    <option value="DE" data-capital="Berlin">Germany</option>
                    <option value="GH" data-capital="Accra">Ghana</option>
                    <option value="GI" data-capital="Gibraltar">Gibraltar</option>
                    <option value="GR" data-capital="Athens">Greece</option>
                    <option value="GL" data-capital="Nuuk">Greenland</option>
                    <option value="GD" data-capital="St. George's">Grenada</option>
                    <option value="GU" data-capital="Hagåtña">Guam</option>
                    <option value="GT" data-capital="Guatemala City">Guatemala</option>
                    <option value="GG" data-capital="Saint Peter Port">Guernsey</option>
                    <option value="GN" data-capital="Conakry">Guinea</option>
                    <option value="GW" data-capital="Bissau">Guinea-Bissau</option>
                    <option value="GY" data-capital="Georgetown">Guyana</option>
                    <option value="HT" data-capital="Port-au-Prince">Haiti</option>
                    <option value="VA" data-capital="Vatican City">Holy See</option>
                    <option value="HN" data-capital="Tegucigalpa">Honduras</option>
                    <option value="HK" data-capital="Hong Kong">Hong Kong</option>
                    <option value="HU" data-capital="Budapest">Hungary</option>
                    <option value="IS" data-capital="Reykjavik">Iceland</option>
                    <option value="IN" data-capital="New Delhi">India</option>
                    <option value="ID" data-capital="Jakarta">Indonesia</option>
                    <option value="IR" data-capital="Tehran">Iran</option>
                    <option value="IQ" data-capital="Baghdad">Iraq</option>
                    <option value="IE" data-capital="Dublin">Ireland</option>
                    <option value="IM" data-capital="Douglas">Isle of Man</option>
                    <option value="IL" data-capital="Jerusalem">Israel</option>
                    <option value="IT" data-capital="Rome">Italy</option>
                    <option value="JM" data-capital="Kingston">Jamaica</option>
                    <option value="JP" data-capital="Tokyo">Japan</option>
                    <option value="JE" data-capital="Saint Helier">Jersey</option>
                    <option value="JO" data-capital="Amman">Jordan</option>
                    <option value="KZ" data-capital="Astana">Kazakhstan</option>
                    <option value="KE" data-capital="Nairobi">Kenya</option>
                    <option value="KI" data-capital="South Tarawa">Kiribati</option>
                    <option value="KW" data-capital="Kuwait City">Kuwait</option>
                    <option value="KG" data-capital="Bishkek">Kyrgyzstan</option>
                    <option value="LA" data-capital="Vientiane">Laos</option>
                    <option value="LV" data-capital="Riga">Latvia</option>
                    <option value="LB" data-capital="Beirut">Lebanon</option>
                    <option value="LS" data-capital="Maseru">Lesotho</option>
                    <option value="LR" data-capital="Monrovia">Liberia</option>
                    <option value="LY" data-capital="Tripoli">Libya</option>
                    <option value="LI" data-capital="Vaduz">Liechtenstein</option>
                    <option value="LT" data-capital="Vilnius">Lithuania</option>
                    <option value="LU" data-capital="Luxembourg City">Luxembourg</option>
                    <option value="MO" data-capital="Macau">Macau</option>
                    <option value="MG" data-capital="Antananarivo">Madagascar</option>
                    <option value="MW" data-capital="Lilongwe">Malawi</option>
                    <option value="MY" data-capital="Kuala Lumpur">Malaysia</option>
                    <option value="MV" data-capital="Malé">Maldives</option>
                    <option value="ML" data-capital="Bamako">Mali</option>
                    <option value="MT" data-capital="Valletta">Malta</option>
                    <option value="MH" data-capital="Majuro">Marshall Islands</option>
                    <option value="MQ" data-capital="Fort-de-France">Martinique</option>
                    <option value="MR" data-capital="Nouakchott">Mauritania</option>
                    <option value="MU" data-capital="Port Louis">Mauritius</option>
                    <option value="MX" data-capital="Mexico City">Mexico</option>
                    <option value="MD" data-capital="Chișinău">Moldova</option>
                    <option value="MC" data-capital="Monaco">Monaco</option>
                    <option value="MN" data-capital="Ulaanbaatar">Mongolia</option>
                    <option value="ME" data-capital="Podgorica">Montenegro</option>
                    <option value="MS" data-capital="Little Bay, Brades, Plymouth">Montserrat</option>
                    <option value="MA" data-capital="Rabat">Morocco</option>
                    <option value="MZ" data-capital="Maputo">Mozambique</option>
                    <option value="MM" data-capital="Naypyidaw">Myanmar</option>
                    <option value="NA" data-capital="Windhoek">Namibia</option>
                    <option value="NR" data-capital="Yaren District">Nauru</option>
                    <option value="NP" data-capital="Kathmandu">Nepal</option>
                    <option value="NL" data-capital="Amsterdam">Netherlands</option>
                    <option value="NZ" data-capital="Wellington">New Zealand</option>
                    <option value="NI" data-capital="Managua">Nicaragua</option>
                    <option value="NE" data-capital="Niamey">Niger</option>
                    <option value="NG" data-capital="Abuja">Nigeria</option>
                    <option value="NU" data-capital="Alofi">Niue</option>
                    <option value="NF" data-capital="Kingston">Norfolk Island</option>
                    <option value="KP" data-capital="Pyongyang">North Korea</option>
                    <option value="MP" data-capital="Capitol Hill">Northern Mariana Islands</option>
                    <option value="NO" data-capital="Oslo">Norway</option>
                    <option value="OM" data-capital="Muscat">Oman</option>
                    <option value="PK" data-capital="Islamabad">Pakistan</option>
                    <option value="PW" data-capital="Ngerulmud">Palau</option>
                    <option value="PA" data-capital="Panama City">Panama</option>
                    <option value="PG" data-capital="Port Moresby">Papua New Guinea</option>
                    <option value="PY" data-capital="Asunción">Paraguay</option>
                    <option value="PE" data-capital="Lima">Peru</option>
                    <option value="PH" data-capital="Manila">Philippines</option>
                    <option value="PN" data-capital="Adamstown">Pitcairn</option>
                    <option value="PL" data-capital="Warsaw">Poland</option>
                    <option value="PT" data-capital="Lisbon">Portugal</option>
                    <option value="PR" data-capital="San Juan">Puerto Rico</option>
                    <option value="QA" data-capital="Doha">Qatar</option>
                    <option value="CG" data-capital="Brazzaville">Republic of the Congo</option>
                    <option value="RO" data-capital="Bucharest">Romania</option>
                    <option value="RU" data-capital="Moscow">Russia</option>
                    <option value="RW" data-capital="Kigali">Rwanda</option>
                    <option value="BL" data-capital="Gustavia">Saint Barthélemy</option>
                    <option value="KN" data-capital="Basseterre">Saint Kitts and Nevis</option>
                    <option value="LC" data-capital="Castries">Saint Lucia</option>
                    <option value="VC" data-capital="Kingstown">Saint Vincent and the Grenadines</option>
                    <option value="WS" data-capital="Apia">Samoa</option>
                    <option value="SM" data-capital="San Marino">San Marino</option>
                    <option value="ST" data-capital="São Tomé">Sao Tome and Principe</option>
                    <option value="SA" data-capital="Riyadh">Saudi Arabia</option>
                    <option value="SN" data-capital="Dakar">Senegal</option>
                    <option value="RS" data-capital="Belgrade">Serbia</option>
                    <option value="SC" data-capital="Victoria">Seychelles</option>
                    <option value="SL" data-capital="Freetown">Sierra Leone</option>
                    <option value="SG" data-capital="Singapore">Singapore</option>
                    <option value="SX" data-capital="Philipsburg">Sint Maarten</option>
                    <option value="SK" data-capital="Bratislava">Slovakia</option>
                    <option value="SI" data-capital="Ljubljana">Slovenia</option>
                    <option value="SB" data-capital="Honiara">Solomon Islands</option>
                    <option value="SO" data-capital="Mogadishu">Somalia</option>
                    <option value="ZA" data-capital="Pretoria">South Africa</option>
                    <option value="KR" data-capital="Seoul">South Korea</option>
                    <option value="SS" data-capital="Juba">South Sudan</option>
                    <option value="ES" data-capital="Madrid">Spain</option>
                    <option value="LK" data-capital="Sri Jayawardenepura Kotte, Colombo">Sri Lanka</option>
                    <option value="PS" data-capital="Ramallah">State of Palestine</option>
                    <option value="SD" data-capital="Khartoum">Sudan</option>
                    <option value="SR" data-capital="Paramaribo">Suriname</option>
                    <option value="SZ" data-capital="Lobamba, Mbabane">Swaziland</option>
                    <option value="SE" data-capital="Stockholm">Sweden</option>
                    <option value="CH" data-capital="Bern">Switzerland</option>
                    <option value="SY" data-capital="Damascus">Syrian Arab Republic</option>
                    <option value="TW" data-capital="Taipei">Taiwan</option>
                    <option value="TJ" data-capital="Dushanbe">Tajikistan</option>
                    <option value="TZ" data-capital="Dodoma">Tanzania</option>
                    <option value="TH" data-capital="Bangkok">Thailand</option>
                    <option value="TL" data-capital="Dili">Timor-Leste</option>
                    <option value="TG" data-capital="Lomé">Togo</option>
                    <option value="TK" data-capital="Nukunonu, Atafu,Tokelau">Tokelau</option>
                    <option value="TO" data-capital="Nukuʻalofa">Tonga</option>
                    <option value="TT" data-capital="Port of Spain">Trinidad and Tobago</option>
                    <option value="TN" data-capital="Tunis">Tunisia</option>
                    <option value="TR" data-capital="Ankara">Turkey</option>
                    <option value="TM" data-capital="Ashgabat">Turkmenistan</option>
                    <option value="TC" data-capital="Cockburn Town">Turks and Caicos Islands</option>
                    <option value="TV" data-capital="Funafuti">Tuvalu</option>
                    <option value="UG" data-capital="Kampala">Uganda</option>
                    <option value="UA" data-capital="Kiev">Ukraine</option>
                    <option value="AE" data-capital="Abu Dhabi">United Arab Emirates</option>
                    <option value="GB" data-capital="London">United Kingdom</option>
                    <option value="US" data-capital="Washington, D.C.">United States of America</option>
                    <option value="UY" data-capital="Montevideo">Uruguay</option>
                    <option value="UZ" data-capital="Tashkent">Uzbekistan</option>
                    <option value="VU" data-capital="Port Vila">Vanuatu</option>
                    <option value="VE" data-capital="Caracas">Venezuela</option>
                    <option value="VN" data-capital="Hanoi">Vietnam</option>
                    <option value="VG" data-capital="Road Town">Virgin Islands (British)</option>
                    <option value="VI" data-capital="Charlotte Amalie">Virgin Islands (U.S.)</option>
                    <option value="EH" data-capital="Laayoune">Western Sahara</option>
                    <option value="YE" data-capital="Sana'a">Yemen</option>
                    <option value="ZM" data-capital="Lusaka">Zambia</option>
                    <option value="ZW" data-capital="Harare">Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Address" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="linkedin">Linkedin</label>
                <input type="text" id="linkedin" name="linkedin" placeholder="Linkedin" validate="url" required>
            </div>
            <div class="form-group col-md-6">
                <label for="website">Website</label>
                <input type="text" id="website" name="website" placeholder="Website" validate="url" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label for="languages">Languages</label>
                <input name='languages' id="languages" placeholder="Enter languages you speak seprated by comma."
                    value='' class="form-control" autofocus>
            </div>
        </div>

        <br>
        <div class="fs-head">
            <img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/suitcase-icon.png" alt="">
            <h2 class="fs-title">Share with us detail about your ideal job</h2>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="role">Target Role</label>
                <input type="text" id="targetRole" name="role" placeholder="Target Role" validate="alpha" required>
            </div>
            <div class="form-group col-md-6">
                <label for="target">Compnay you are targeting</label>
                <input type="text" id="targetCompany" name="company" placeholder="Compnay you are targeting"
                    validate="alpha" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea name="requirement" rows="10" cols="30" placeholder="Job Application requirement"
                    validate="alpha_num_dash" required></textarea>
            </div>
        </div>

        <div class="notice">
            <h3>Notice</h3>
            <ul>
                <li>Just copy and paste the job application information from external sources (like LinkedIn).</li>
                <li>Our AI will use the job application requirements to help select the appropriate keywords for you.
                </li>
                <li>A job-tailored resume can boost your chances of landing an interview by 95%.</li>
            </ul>

            <strong>Remember, our resume builder will take care of crafting professional content based on your
                input.</strong>
        </div>

        <input type="button" name="next" class="next action-button" value="Start Building" id="startBuilding"
            disabled />

    </fieldset>

    <fieldset>
        <div class="fs-head">
            <img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/suitcase-icon.png" alt="">
            <h2 class="fs-title">Work Experience</h2>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="company">Company Name</label>
                <input type="text" name="company" id="company" placeholder="Company Name" validate="alpha" required>
            </div>
            <div class="form-group col-md-6">
                <label for="jobtitle">Job title</label>
                <input type="text" name="title" id="title" placeholder="Job Title" validate="alpha" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="startDate">Start Date</label>
                <input type="date" name="startDate" id="startDate" required>
            </div>
            <div class="form-group col-md-4" id="endDateDiv">
                <label for="endDate">End Date</label>
                <input type="date" name="endDate" id="endDate" required>
            </div>
            <div class="form-group col-md-4 chkbox">
                <div class="form-check" style="margin-top: 15px;">
                    <label class="form-check-label" for="workhere">
                        <input type="checkbox" class="form-check-input" id="workhere" name="workhere"
                            value="I currently work here" style="width:auto;">I currently work here
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea name="description" id="experienceDesc" rows="10" cols="30" placeholder="Description"
                    validate="" required></textarea>
            </div>
        </div>
        <div class="notice">
            <h6>Consider these simple tips to ensure the best generated output.</h6>
            <ul>
                <li>Keep it simple! No need for high-level language. Just describe your job duties in a straightforward
                    manner.</li>
                <li>Outline your responsibilities: What tasks are you responsible for?</li>
                <li> Mention people management: Do you manage or supervise others?</li>
                <li> Collaboration: Who do you work with on a regular basis?</li>

            </ul>
            <strong>Remember, our resume builder will take care of crafting professional content based on your
                input.</strong>
        </div>

        <div class="addAnother">
            <span>+ Add Another Work Experience</span>
        </div>

        <div class="generate center">
            <button type="button" class="btn-action" id="generateEx" disabled>Generate</button>
        </div>


        <div class="generatedExResults">

            <h4 id="jobTitle">Job Title</h4>
            <h6 id="companyName">Company Name</h6>
            <span id="start">[StartDate - </span><span id="end">EndDate]</span>

            <div class="generatedOutput">
                <p id="generatedDesc">Output generated #1</p>
                <div class="generatedBtns"><button class="btn-action">Delete</button><button
                        class="btn-action">Refresh</button></div>
            </div>

        </div>
        <div class="lft">
            <button class="generateNew" disabled>Generate New Bulletpoint</button>
        </div>

        <div class="addManual">
            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="company">Add Manually</label>
                    <input type="text" name="addManual" placeholder="Add Manually">
                </div>
                <div class="addAnother" style="margin-right: 15px; margin-left: 15px; padding: 5px;">
                    <span>+ Add Another</span>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="addManDesc">Add more details by filling in the box below for an additional bullet
                        point.</label>
                    <textarea name="descriptionManual" rows="10" cols="30" placeholder="Description"></textarea>
                </div>
                <button class="btn-action"
                    style="margin-right: 15px; margin-left: 15px; padding: 5px;">Generate</button>
            </div>
        </div>


        </br>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" id="secondStep" disabled />
    </fieldset>

    <fieldset>
        <div class="fs-head">
            <img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/graduate-cap.png" alt="">
            <h2 class="fs-title">Education</h2>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="company">Institution Name</label>
                <input type="text" name="university" id="instituteName" placeholder="Institution Name" validate="alpha"
                    required>
            </div>
            <div class="form-group col-md-4">
                <label for="jobtitle">Field of Study</label>
                <input type="text" name="specialization" id="instituteName" placeholder="Field of Study"
                    validate="alpha" required>
            </div>
            <div class="form-group col-md-4">
                <label for="jobtitle">Degree</label>
                <input type="text" name="degree" id="degree" placeholder="Degree" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="company">City</label>
                <input type="text" name="role" placeholder="City" id="city" validate="alpha" required>
            </div>
            <div class="form-group col-md-6">
                <label for="country">Country</label>
                <select class="form-control" id="countries" validate="alpha" required>
                    <option value="AF" data-capital="Kabul">Afghanistan</option>
                    <option value="AX" data-capital="Mariehamn">Aland Islands</option>
                    <option value="AL" data-capital="Tirana">Albania</option>
                    <option value="DZ" data-capital="Algiers">Algeria</option>
                    <option value="AS" data-capital="Pago Pago">American Samoa</option>
                    <option value="AD" data-capital="Andorra la Vella">Andorra</option>
                    <option value="AO" data-capital="Luanda">Angola</option>
                    <option value="AI" data-capital="The Valley">Anguilla</option>
                    <option value="AG" data-capital="St. John's">Antigua and Barbuda</option>
                    <option value="AR" data-capital="Buenos Aires">Argentina</option>
                    <option value="AM" data-capital="Yerevan">Armenia</option>
                    <option value="AW" data-capital="Oranjestad">Aruba</option>
                    <option value="AU" data-capital="Canberra">Australia</option>
                    <option value="AT" data-capital="Vienna">Austria</option>
                    <option value="AZ" data-capital="Baku">Azerbaijan</option>
                    <option value="BS" data-capital="Nassau">Bahamas</option>
                    <option value="BH" data-capital="Manama">Bahrain</option>
                    <option value="BD" data-capital="Dhaka">Bangladesh</option>
                    <option value="BB" data-capital="Bridgetown">Barbados</option>
                    <option value="BY" data-capital="Minsk">Belarus</option>
                    <option value="BE" data-capital="Brussels">Belgium</option>
                    <option value="BZ" data-capital="Belmopan">Belize</option>
                    <option value="BJ" data-capital="Porto-Novo">Benin</option>
                    <option value="BM" data-capital="Hamilton">Bermuda</option>
                    <option value="BT" data-capital="Thimphu">Bhutan</option>
                    <option value="BO" data-capital="Sucre">Bolivia</option>
                    <option value="BA" data-capital="Sarajevo">Bosnia and Herzegovina</option>
                    <option value="BW" data-capital="Gaborone">Botswana</option>
                    <option value="BR" data-capital="Brasília">Brazil</option>
                    <option value="IO" data-capital="Diego Garcia">British Indian Ocean Territory</option>
                    <option value="BN" data-capital="Bandar Seri Begawan">Brunei Darussalam</option>
                    <option value="BG" data-capital="Sofia">Bulgaria</option>
                    <option value="BF" data-capital="Ouagadougou">Burkina Faso</option>
                    <option value="BI" data-capital="Bujumbura">Burundi</option>
                    <option value="CV" data-capital="Praia">Cabo Verde</option>
                    <option value="KH" data-capital="Phnom Penh">Cambodia</option>
                    <option value="CM" data-capital="Yaoundé">Cameroon</option>
                    <option value="CA" data-capital="Ottawa">Canada</option>
                    <option value="KY" data-capital="George Town">Cayman Islands</option>
                    <option value="CF" data-capital="Bangui">Central African Republic</option>
                    <option value="TD" data-capital="N'Djamena">Chad</option>
                    <option value="CL" data-capital="Santiago">Chile</option>
                    <option value="CN" data-capital="Beijing">China</option>
                    <option value="CX" data-capital="Flying Fish Cove">Christmas Island</option>
                    <option value="CC" data-capital="West Island">Cocos (Keeling) Islands</option>
                    <option value="CO" data-capital="Bogotá">Colombia</option>
                    <option value="KM" data-capital="Moroni">Comoros</option>
                    <option value="CK" data-capital="Avarua">Cook Islands</option>
                    <option value="CR" data-capital="San José">Costa Rica</option>
                    <option value="HR" data-capital="Zagreb">Croatia</option>
                    <option value="CU" data-capital="Havana">Cuba</option>
                    <option value="CW" data-capital="Willemstad">Curaçao</option>
                    <option value="CY" data-capital="Nicosia">Cyprus</option>
                    <option value="CZ" data-capital="Prague">Czech Republic</option>
                    <option value="CI" data-capital="Yamoussoukro">Côte d'Ivoire</option>
                    <option value="CD" data-capital="Kinshasa">Democratic Republic of the Congo</option>
                    <option value="DK" data-capital="Copenhagen">Denmark</option>
                    <option value="DJ" data-capital="Djibouti">Djibouti</option>
                    <option value="DM" data-capital="Roseau">Dominica</option>
                    <option value="DO" data-capital="Santo Domingo">Dominican Republic</option>
                    <option value="EC" data-capital="Quito">Ecuador</option>
                    <option value="EG" data-capital="Cairo">Egypt</option>
                    <option value="SV" data-capital="San Salvador">El Salvador</option>
                    <option value="GQ" data-capital="Malabo">Equatorial Guinea</option>
                    <option value="ER" data-capital="Asmara">Eritrea</option>
                    <option value="EE" data-capital="Tallinn">Estonia</option>
                    <option value="ET" data-capital="Addis Ababa">Ethiopia</option>
                    <option value="FK" data-capital="Stanley">Falkland Islands</option>
                    <option value="FO" data-capital="Tórshavn">Faroe Islands</option>
                    <option value="FM" data-capital="Palikir">Federated States of Micronesia</option>
                    <option value="FJ" data-capital="Suva">Fiji</option>
                    <option value="FI" data-capital="Helsinki">Finland</option>
                    <option value="MK" data-capital="Skopje">Former Yugoslav Republic of Macedonia</option>
                    <option value="FR" data-capital="Paris">France</option>
                    <option value="PF" data-capital="Papeete">French Polynesia</option>
                    <option value="GA" data-capital="Libreville">Gabon</option>
                    <option value="GM" data-capital="Banjul">Gambia</option>
                    <option value="GE" data-capital="Tbilisi">Georgia</option>
                    <option value="DE" data-capital="Berlin">Germany</option>
                    <option value="GH" data-capital="Accra">Ghana</option>
                    <option value="GI" data-capital="Gibraltar">Gibraltar</option>
                    <option value="GR" data-capital="Athens">Greece</option>
                    <option value="GL" data-capital="Nuuk">Greenland</option>
                    <option value="GD" data-capital="St. George's">Grenada</option>
                    <option value="GU" data-capital="Hagåtña">Guam</option>
                    <option value="GT" data-capital="Guatemala City">Guatemala</option>
                    <option value="GG" data-capital="Saint Peter Port">Guernsey</option>
                    <option value="GN" data-capital="Conakry">Guinea</option>
                    <option value="GW" data-capital="Bissau">Guinea-Bissau</option>
                    <option value="GY" data-capital="Georgetown">Guyana</option>
                    <option value="HT" data-capital="Port-au-Prince">Haiti</option>
                    <option value="VA" data-capital="Vatican City">Holy See</option>
                    <option value="HN" data-capital="Tegucigalpa">Honduras</option>
                    <option value="HK" data-capital="Hong Kong">Hong Kong</option>
                    <option value="HU" data-capital="Budapest">Hungary</option>
                    <option value="IS" data-capital="Reykjavik">Iceland</option>
                    <option value="IN" data-capital="New Delhi">India</option>
                    <option value="ID" data-capital="Jakarta">Indonesia</option>
                    <option value="IR" data-capital="Tehran">Iran</option>
                    <option value="IQ" data-capital="Baghdad">Iraq</option>
                    <option value="IE" data-capital="Dublin">Ireland</option>
                    <option value="IM" data-capital="Douglas">Isle of Man</option>
                    <option value="IL" data-capital="Jerusalem">Israel</option>
                    <option value="IT" data-capital="Rome">Italy</option>
                    <option value="JM" data-capital="Kingston">Jamaica</option>
                    <option value="JP" data-capital="Tokyo">Japan</option>
                    <option value="JE" data-capital="Saint Helier">Jersey</option>
                    <option value="JO" data-capital="Amman">Jordan</option>
                    <option value="KZ" data-capital="Astana">Kazakhstan</option>
                    <option value="KE" data-capital="Nairobi">Kenya</option>
                    <option value="KI" data-capital="South Tarawa">Kiribati</option>
                    <option value="KW" data-capital="Kuwait City">Kuwait</option>
                    <option value="KG" data-capital="Bishkek">Kyrgyzstan</option>
                    <option value="LA" data-capital="Vientiane">Laos</option>
                    <option value="LV" data-capital="Riga">Latvia</option>
                    <option value="LB" data-capital="Beirut">Lebanon</option>
                    <option value="LS" data-capital="Maseru">Lesotho</option>
                    <option value="LR" data-capital="Monrovia">Liberia</option>
                    <option value="LY" data-capital="Tripoli">Libya</option>
                    <option value="LI" data-capital="Vaduz">Liechtenstein</option>
                    <option value="LT" data-capital="Vilnius">Lithuania</option>
                    <option value="LU" data-capital="Luxembourg City">Luxembourg</option>
                    <option value="MO" data-capital="Macau">Macau</option>
                    <option value="MG" data-capital="Antananarivo">Madagascar</option>
                    <option value="MW" data-capital="Lilongwe">Malawi</option>
                    <option value="MY" data-capital="Kuala Lumpur">Malaysia</option>
                    <option value="MV" data-capital="Malé">Maldives</option>
                    <option value="ML" data-capital="Bamako">Mali</option>
                    <option value="MT" data-capital="Valletta">Malta</option>
                    <option value="MH" data-capital="Majuro">Marshall Islands</option>
                    <option value="MQ" data-capital="Fort-de-France">Martinique</option>
                    <option value="MR" data-capital="Nouakchott">Mauritania</option>
                    <option value="MU" data-capital="Port Louis">Mauritius</option>
                    <option value="MX" data-capital="Mexico City">Mexico</option>
                    <option value="MD" data-capital="Chișinău">Moldova</option>
                    <option value="MC" data-capital="Monaco">Monaco</option>
                    <option value="MN" data-capital="Ulaanbaatar">Mongolia</option>
                    <option value="ME" data-capital="Podgorica">Montenegro</option>
                    <option value="MS" data-capital="Little Bay, Brades, Plymouth">Montserrat</option>
                    <option value="MA" data-capital="Rabat">Morocco</option>
                    <option value="MZ" data-capital="Maputo">Mozambique</option>
                    <option value="MM" data-capital="Naypyidaw">Myanmar</option>
                    <option value="NA" data-capital="Windhoek">Namibia</option>
                    <option value="NR" data-capital="Yaren District">Nauru</option>
                    <option value="NP" data-capital="Kathmandu">Nepal</option>
                    <option value="NL" data-capital="Amsterdam">Netherlands</option>
                    <option value="NZ" data-capital="Wellington">New Zealand</option>
                    <option value="NI" data-capital="Managua">Nicaragua</option>
                    <option value="NE" data-capital="Niamey">Niger</option>
                    <option value="NG" data-capital="Abuja">Nigeria</option>
                    <option value="NU" data-capital="Alofi">Niue</option>
                    <option value="NF" data-capital="Kingston">Norfolk Island</option>
                    <option value="KP" data-capital="Pyongyang">North Korea</option>
                    <option value="MP" data-capital="Capitol Hill">Northern Mariana Islands</option>
                    <option value="NO" data-capital="Oslo">Norway</option>
                    <option value="OM" data-capital="Muscat">Oman</option>
                    <option value="PK" data-capital="Islamabad">Pakistan</option>
                    <option value="PW" data-capital="Ngerulmud">Palau</option>
                    <option value="PA" data-capital="Panama City">Panama</option>
                    <option value="PG" data-capital="Port Moresby">Papua New Guinea</option>
                    <option value="PY" data-capital="Asunción">Paraguay</option>
                    <option value="PE" data-capital="Lima">Peru</option>
                    <option value="PH" data-capital="Manila">Philippines</option>
                    <option value="PN" data-capital="Adamstown">Pitcairn</option>
                    <option value="PL" data-capital="Warsaw">Poland</option>
                    <option value="PT" data-capital="Lisbon">Portugal</option>
                    <option value="PR" data-capital="San Juan">Puerto Rico</option>
                    <option value="QA" data-capital="Doha">Qatar</option>
                    <option value="CG" data-capital="Brazzaville">Republic of the Congo</option>
                    <option value="RO" data-capital="Bucharest">Romania</option>
                    <option value="RU" data-capital="Moscow">Russia</option>
                    <option value="RW" data-capital="Kigali">Rwanda</option>
                    <option value="BL" data-capital="Gustavia">Saint Barthélemy</option>
                    <option value="KN" data-capital="Basseterre">Saint Kitts and Nevis</option>
                    <option value="LC" data-capital="Castries">Saint Lucia</option>
                    <option value="VC" data-capital="Kingstown">Saint Vincent and the Grenadines</option>
                    <option value="WS" data-capital="Apia">Samoa</option>
                    <option value="SM" data-capital="San Marino">San Marino</option>
                    <option value="ST" data-capital="São Tomé">Sao Tome and Principe</option>
                    <option value="SA" data-capital="Riyadh">Saudi Arabia</option>
                    <option value="SN" data-capital="Dakar">Senegal</option>
                    <option value="RS" data-capital="Belgrade">Serbia</option>
                    <option value="SC" data-capital="Victoria">Seychelles</option>
                    <option value="SL" data-capital="Freetown">Sierra Leone</option>
                    <option value="SG" data-capital="Singapore">Singapore</option>
                    <option value="SX" data-capital="Philipsburg">Sint Maarten</option>
                    <option value="SK" data-capital="Bratislava">Slovakia</option>
                    <option value="SI" data-capital="Ljubljana">Slovenia</option>
                    <option value="SB" data-capital="Honiara">Solomon Islands</option>
                    <option value="SO" data-capital="Mogadishu">Somalia</option>
                    <option value="ZA" data-capital="Pretoria">South Africa</option>
                    <option value="KR" data-capital="Seoul">South Korea</option>
                    <option value="SS" data-capital="Juba">South Sudan</option>
                    <option value="ES" data-capital="Madrid">Spain</option>
                    <option value="LK" data-capital="Sri Jayawardenepura Kotte, Colombo">Sri Lanka</option>
                    <option value="PS" data-capital="Ramallah">State of Palestine</option>
                    <option value="SD" data-capital="Khartoum">Sudan</option>
                    <option value="SR" data-capital="Paramaribo">Suriname</option>
                    <option value="SZ" data-capital="Lobamba, Mbabane">Swaziland</option>
                    <option value="SE" data-capital="Stockholm">Sweden</option>
                    <option value="CH" data-capital="Bern">Switzerland</option>
                    <option value="SY" data-capital="Damascus">Syrian Arab Republic</option>
                    <option value="TW" data-capital="Taipei">Taiwan</option>
                    <option value="TJ" data-capital="Dushanbe">Tajikistan</option>
                    <option value="TZ" data-capital="Dodoma">Tanzania</option>
                    <option value="TH" data-capital="Bangkok">Thailand</option>
                    <option value="TL" data-capital="Dili">Timor-Leste</option>
                    <option value="TG" data-capital="Lomé">Togo</option>
                    <option value="TK" data-capital="Nukunonu, Atafu,Tokelau">Tokelau</option>
                    <option value="TO" data-capital="Nukuʻalofa">Tonga</option>
                    <option value="TT" data-capital="Port of Spain">Trinidad and Tobago</option>
                    <option value="TN" data-capital="Tunis">Tunisia</option>
                    <option value="TR" data-capital="Ankara">Turkey</option>
                    <option value="TM" data-capital="Ashgabat">Turkmenistan</option>
                    <option value="TC" data-capital="Cockburn Town">Turks and Caicos Islands</option>
                    <option value="TV" data-capital="Funafuti">Tuvalu</option>
                    <option value="UG" data-capital="Kampala">Uganda</option>
                    <option value="UA" data-capital="Kiev">Ukraine</option>
                    <option value="AE" data-capital="Abu Dhabi">United Arab Emirates</option>
                    <option value="GB" data-capital="London">United Kingdom</option>
                    <option value="US" data-capital="Washington, D.C.">United States of America</option>
                    <option value="UY" data-capital="Montevideo">Uruguay</option>
                    <option value="UZ" data-capital="Tashkent">Uzbekistan</option>
                    <option value="VU" data-capital="Port Vila">Vanuatu</option>
                    <option value="VE" data-capital="Caracas">Venezuela</option>
                    <option value="VN" data-capital="Hanoi">Vietnam</option>
                    <option value="VG" data-capital="Road Town">Virgin Islands (British)</option>
                    <option value="VI" data-capital="Charlotte Amalie">Virgin Islands (U.S.)</option>
                    <option value="EH" data-capital="Laayoune">Western Sahara</option>
                    <option value="YE" data-capital="Sana'a">Yemen</option>
                    <option value="ZM" data-capital="Lusaka">Zambia</option>
                    <option value="ZW" data-capital="Harare">Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="startDate">Start Date</label>
                <input type="date" name="startDate" id="startDateE" required>
            </div>
            <div class="form-group col-md-4" id="endDateDiv">
                <label for="endDate">End Date</label>
                <input type="date" name="endDate" id="endDateE" required>
            </div>
            <div class="form-group col-md-4">
                <div class="form-check" style="margin-top: 15px;">
                    <label class="form-check-label" for="workhere">
                        <input type="checkbox" class="form-check-input" id="workhere" name="workhere"
                            value="I currently work here" style="width:auto;">I currently work here
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <textarea name="description" rows="10" cols="30" id="educationDesc" placeholder="Description"
                    validate="alpha_num_dash" required></textarea>
            </div>
        </div>
        <div class="notice">
            <h6>Consider these simple tips to ensure the best generated output.</h6>
            <ul>
                <li>Mention relevant coursework or projects: Did you complete any specific courses or projects that are
                    applicable to the job you're applying for?</li>
                <li>Include any honors or awards: Did you graduate with honors or receive any
                    academic accolades?</li>
                <li> Note extracurricular activities: Were you involved in any clubs, organizations, or
                    ork during your time in school?
                    volunteer w</li>

            </ul>
            <strong>Remember, our resume builder will take care of crafting professional content based on your
                input.</strong>
        </div>

        <div class="addAnother">
            <span>+ Add Education</span>
        </div>

        <div class="generate center">
            <button type="button" class="btn-action" id="generateEd" disabled>Generate</button>
        </div>


        <div class="generatedEdResults">

            <h4 id="userDegree">Degree/Certificate</h4>
            <h6 id="userInstitute">Institution Name</h6>
            <span id="start">[StartDate - </span><span id="end">EndDate]</span>

            <div class="generatedOutput">
                <p id="generatedDesc">Output generated #1</p>
                <div class="generatedBtns"><button class="btn-action">Delete</button><button
                        class="btn-action">Refresh</button></div>
            </div>

        </div>

        <div class="lft">
            <button class="generateNew">Generate New Bulletpoint</button>
        </div>

        <div class="addManual">
            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="company">Add Manually</label>
                    <input type="text" name="addManual" placeholder="Add Manually">
                </div>
                <div class="addAnother" style="margin-right: 15px; margin-left: 15px; padding: 5px;">
                    <span>+ Add Another</span>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="addManDesc">Add more details by filling in the box below for an additional bullet
                        point.</label>
                    <textarea name="descriptionManual" rows="10" cols="30" placeholder="Description"></textarea>
                </div>
                <button class="btn-action"
                    style="margin-right: 15px; margin-left: 15px; padding: 5px;">Generate</button>
            </div>
        </div>

        </br>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" id="thirdStep" disabled />
    </fieldset>

    <fieldset>
        <div class="fs-head">
            <img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/pencil.png" alt="">
            <h2 class="fs-title">Fill out rest of these Questions</h2>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="form-group col-md-12">
                <label for="addQu1">1. What is your target job position or industry?</label>
                <textarea name="addQu1" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu2">2. How have your specific skills contributed to your success and accomplishments in
                    your
                    past and current roles?</label>
                <textarea name="addQu2" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu3">3. What are your primary technical skills or software proficiencies (if
                    applicable)?</label>
                <textarea name="addQu3" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu4">4. What have been your main job responsibilities and tasks in your current or most
                    recent role?</label>
                <textarea name="addQu4" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu5">5. What are the most significant accomplishments or milestones you've achieved in
                    your
                    current or previous roles?</label>
                <textarea name="addQu5" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu6">6. Are you proficient in any languages other than your native language? If so, which
                    ones
                    and at what level?</label>
                <textarea name="addQu6" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="addQu7">7. Is there any additional information or specific details you would like to
                    highlight in
                    your resume?</label>
                <textarea name="addQu7" rows="10" cols="30" placeholder="Description" validate="alpha_num_dash"
                    required></textarea>
            </div>
        </div>

        </br>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" disabled id="forthStep" />
    </fieldset>

    <fieldset>

        <div class="center">
            <h6 style="font-size: 28px;">Constructing Resume</h6>
        </div>
        <div class="generatedOutput">
            <h6 style="font-size: 20px;text-align: center;">Skills</h6>
            <p id="generatedDesc">Output generated #1</p>
            <div class="generatedBtns"><button class="btn-action">Delete</button><button
                    class="btn-action">Refresh</button></div>
        </div>
        <div class="generatedOutput">
            <p id="generatedDesc">Output generated #2</p>
            <div class="generatedBtns"><button class="btn-action">Delete</button><button
                    class="btn-action">Refresh</button></div>
        </div>
        <div class="addManual">
            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="company">Add Skill Manually</label>
                    <input type="text" name="addManual" placeholder="Add Manually">
                </div>
                <div class="addAnother" style="margin-right: 15px; margin-left: 15px; padding: 5px;">
                    <span>+ Add Another</span>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-12" style="margin-bottom: 0px;">
                    <label for="addManDesc">Add more details by filling in the box below for an additional bullet
                        point.</label>
                    <textarea name="descriptionManual" rows="10" cols="30" placeholder="Description"></textarea>
                </div>
                <button class="btn-action"
                    style="margin-right: 15px; margin-left: 15px; padding: 5px;">Generate</button>
            </div>
        </div>
        <br>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

    <fieldset>

        <div class="center">
            <h6 style="font-size: 28px;">Constructing Resume</h6>
        </div>
        <h6 style="font-size: 20px;text-align: center;">Summary</h6>
        <div class="constructedSummary">
            <textarea name="generatedSummary" rows="10" cols="30" disabled id="summary">[Output generated summary statement................................................................................................
            ................................................................................................................................................................................................
            ................................................................................................................................................................................................]
            </textarea>
            <div class="summaryControls">
                <button class="btn-action">Delete</button>
                <button class="btn-action">Refresh</button>
                <button class="btn-action">Shorten</button>
                <button class="btn-action">Longer</button>
                <button class="btn-action" id="editSummary" type="button">Edit</button>
                <button class="btn-action" id="saveSummary" type="button">Save</button>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="form-group col-md-12" style="margin-bottom: 0px;">
                <label for="addManDesc">Add more details by filling in the box below for an additional bullet
                    point.</label>
                <textarea name="descriptionManual" rows="10" cols="30" placeholder="Description"></textarea>
            </div>
            <button class="btn-action" style="margin-right: 15px; margin-left: 15px; padding: 5px;">Generate</button>
        </div>


        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>


    <fieldset>

        <div class="container">
            <div class="row">
                <div class="col-md-4 left">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('https://dev.cvswriter.com/wp-content/uploads/2023/05/profile.png');">
                            </div>
                        </div>
                    </div>
                    <div class="personalInfo">
                        <h3>Personal Info</h3>
                        <div class="personalDetails">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i><span class="phone">+12345678</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i><span class="email">mail@gmail.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i><span class="address">Address Test</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="skill">
                        <h3>Skills</h3>
                        <div class="skillDetails">
                            <div class="skill">
                                <h6 class="skillName">PHOTOSHOP</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <h6 class="skillName">ILLUSTRATOR</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <h6 class="skillName">INDESIGN</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <h6 class="skillName">MS WORD</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill">
                                <h6 class="skillName">MS EXCEL</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="links">
                        <h3>Links</h3>
                        <ul>
                            <li>
                                <i class="fa fa-linkedin"></i><span class="linkedinUrl">www.linkedin.com</span>
                            </li>
                            <li>
                                <i class="fa fa-globe"></i><span class="websiteUrl">www.website.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="language">
                        <h3>Languages</h3>
                        <ul class="languages">
                            <li class="language1">English</li>
                            <li class="language2">Hebrew</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 right">
                    <div class="nameDesignation">
                        <div class="personal">
                            <div class="name">
                                <h1>JOHN DOE</h1>
                            </div>
                            <div class="designation">
                                <h4>ART DIRECTOR</h4>
                            </div>
                        </div>
                        <div class="resumeControls">
                            <button type="button" class="action-btn" data-toggle="modal" data-target="#templatesModal">
                                Choose Template</button>
                        </div>
                    </div>
                    <div class="experiences">
                        <div class="experience">
                            <div class="experienceHead">
                                <ul>
                                    <li>
                                        <i class="fa fa-briefcase"></i>EXPERIENCE
                                    </li>
                                </ul>
                            </div>
                            <div class="experienceBody">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="startEndDate">
                                            <h6></h6>
                                        </div>
                                        <div class="companyName">
                                            <h6></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="designationName">
                                            <h6></h6>
                                        </div>
                                        <div class="designationDetails">
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="educations">
                        <div class="education">
                            <div class="educationHead">
                                <ul>
                                    <li>
                                        <i class="fa fa-graduation-cap"></i>EDUCATION
                                    </li>
                                </ul>
                            </div>
                            <div class="educationBody">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="startEndDate">
                                            <h6></h6>
                                        </div>
                                        <div class="uniName">
                                            <h6></h6>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="degreeName">
                                            <h6></h6>
                                        </div>
                                        <div class="degreeDetails">
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="center"> <button type="button" class="btn-action">Generate Final Resume</button></div>
    </fieldset>


</form>
<!-- Modal -->
<div id="templatesModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Choose your Template</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a href="https://dev.cvswriter.com/wp-content/uploads/2023/05/cv-template-1.jpg" data-title="Resume Template (Basic)"
                    data-lightbox="image-1" data-title="My caption"><img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/cv-template-1.jpg"
                        alt="Template Basic"></a>\

                <a href="https://dev.cvswriter.com/wp-content/uploads/2023/05/cv-template-2.jpg" data-title="Resume Template (Premium)"
                    data-lightbox="image-1" data-title="My caption"><img src="https://dev.cvswriter.com/wp-content/uploads/2023/05/cv-template-2.jpg"
                        alt="Template Premium"></a>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script src="assets/js/script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link type="text/css" rel="stylesheet" href="assets/css/waitMe.css">
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
<script src="assets/js/waitMe.js"></script>
<script src="assets/js/validin.js"></script>
<script src="assets/js/lightbox.js"></script>
<link rel="stylesheet" href="assets/css/lightbox.css">