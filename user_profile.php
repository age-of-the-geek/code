<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

        body {
            font-family: "DM Sans", sans-serif !important;
        }

        .t-title {
            margin-top: 5%;
        }

        .t-body {
            background-color: #f3f7f8;
            border-radius: 12px;
            padding: 50px;
            margin: 50px;

        }

        .s-body {
            background-color: #f3f7f8;
            border-radius: 12px;
            padding: 20px 50px;
            margin: 50px;
            min-height: 340px;
        }

        .nav-link {
            font-size: 22px;
            font-weight: bold;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #FF5E59 !important;
            border-bottom: 1px solid #FF5E59 !important;
            background-color: #ffffff !important;
        }

        .nav-pills .nav-link {
            border-bottom: 1px solid #e6e6e6 !important;
            border-radius: 0 !important;
        }

        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 10px 25px !important;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input+label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #ffffff;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input+label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input+label:after {
            content: "\f040";
            font-family: "FontAwesome";
            color: #757575;
            position: absolute;
            top: 5px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #f8f8f8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview>div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .tab_heading {
            padding: 22px;
            font-weight: bold;
        }

        #userform {
            margin: 50px auto;
            position: relative;

        }

        #userform input,
        #userform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 13px;
        }

        .tab-content {
            padding: 0 20px;
        }

        .setting-profile {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .email-profile {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 150px;
        }

        #newsletter {
            width: 30px !important;
            height: 30px;
            margin-top: 0;
            margin-left: 0;
            left: 10px;
            position: absolute;
        }

        .form-check-label {
            font-size: 24px;
            padding-left: 35px;
        }

        .edit_profile_btn {
            background: #4D9399;
            padding: 15px 40px;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            margin: 50px 20px;
        }

        .tab_subheading {
            padding: 0px 22px;
        }
    </style>
</head>

<body>
    <div class="container t-title">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="true">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="edit-profile-tab" data-toggle="pill" href="#edit-profile" role="tab"
                    aria-controls="edit-profile" aria-selected="false">Account Settings</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container t-body">
                <h5 class="tab_heading">Resume Profile</h5>
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
                <form action="" method="post" id="userform">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstName" name="firstName" placeholder="First Name" validate="name"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fullname">Last Name</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Last Name" validate="name"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email Address" validate="email"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" id="phone" name="phone" placeholder="Phone" validate="phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="dob">D.O.B</label>
                            <input type="date" id="dob" name="dob" placeholder="D.O.B" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Nationality</label>
                            <select class="form-control" id="countriesNationality" required>
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
                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" id="userPCity" name="userPCity" placeholder="City" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="street">Street Address</label>
                            <input type="text" id="street" name="street" placeholder="Street Address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Country</label>
                            <select class="form-control" id="countriesUP" required>
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
                        <div class="form-group col-md-6">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" placeholder="Linkedin" validate="url"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" placeholder="Website" validate="url"
                                required>
                        </div>
                    </div>
                    <div class="rt">
                        <button type="submit" class="edit_profile_btn">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
            <div class="container s-body">
                <h5 class="tab_heading">Account Settings</h5>
                <div class="setting-profile">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('assets/images/profile.png');">
                            </div>
                        </div>
                    </div>
                    <div class="member_details">
                        <h5 class="memberDate">Member Since: <span class="joinDate"><b>5-26-2023</b></span></h5>
                        <h5 class="plan">Subscription Plan: <span class="planName"><b>BASIC</b></span></h5>
                    </div>
                </div>
            </div>
            <div class="container s-body">
                <h5 class="tab_heading">Email Settings</h5>
                <div class="email-profile">
                    <div class="form-check" style="margin-top: 15px;">
                        <label class="form-check-label" for="newsletter">
                            <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter"
                                value="newsletter" style="width:auto;">Get occasional newsletter with useful
                            information, news and special deals.
                        </label>
                    </div>
                </div>
            </div>
            <div class="container s-body">
                <h5 class="tab_heading">Delete Account</h5>
                <h6 class="tab_subheading">Permanently delete your account and all your resumes</h6>
                <button class="edit_profile_btn">DELETE ACCOUNT</button>
            </div>
            <div class="container s-body">
                <h5 class="tab_heading">Cancel Subcription</h5>
                <h6 class="tab_subheading">Downgrading will remove access to premium features.</h6>
                <button class="edit_profile_btn">CANCEL PLAN</button>
            </div>
        </div>

    </div>
</body>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- jQuery easing plugin -->
<link rel="stylesheet" href="assets/css/style.css" />
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
<script>
    $(document).ready(function () {
        $("#imageUpload").change(function () {
            readURL(this);
        });
        var now = new Date(),
            // minimum date the user can choose, in this case now and in the future
            minDate = now.toISOString().substring(0, 10);

        $('#dob').prop('max', minDate);
    });
</script>

</html>