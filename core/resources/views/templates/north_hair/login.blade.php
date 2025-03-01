@extends('Template::layouts.master')
@section('content')
    <!-- Info content -->
    <section class="max-w-screen-lg mx-auto px-4 border-b lg:pt-20 md:pt-10 pt-5 pb-10">
        <h1 class="text-center font-bold text-[30px] mb-5 leading-tight">How do you unlock our exclusive wholesale
            prices?</h1>
        <p class="text-[#444444] leading-relaxed">LuxeLocks proudly serves wholesale hair vendors, hair salons, hair
            clinics,
            stylists, online shops, and
            wig stores
            throughout the globe. Create an account or log in below, and you will be able to see and shop with the
            exclusive
            wholesale prices <span class="font-bold italic">once your information is verified and your account is
                approved.</span></p>
    </section>




    <!-- Login -->
    <section class="max-w-screen-lg mx-auto px-4 border-b pt-10 pb-10">
        <h2 class="text-[24px] font-bold mb-5">Login</h2>
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif

        <form class="border p-7 flex flex-col gap-5" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col gap-4">
                <label class="text-[#676D8A] text-[14px] font-semibold" for="email">Email address <span
                        class="text-red-500">*</span></label>
                <input class="border border-[#C0C4D4] text-[#6E7490] px-3 py-2" type="email" name="email"
                    id="email">
            </div>
            @error('email')
                <p class="text-red-500 text-[12px]">{{ $message }}</p>
            @enderror
            <div class="flex flex-col gap-4">
                <label class="text-[#676D8A] text-[14px] font-semibold" for="password">Password <span
                        class="text-red-500">*</span></label>
                <input class="border border-[#C0C4D4] text-[#6E7490] px-3 py-2" type="password" name="password"
                    id="password">

                @error('password')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <input type="checkbox" id="remember" name="remember">
                    <label class="text-[#676D8A] text-[14px]" for="remember">Remember me</label>
                </div>
                <input class="bg-[#306AED] text-white px-[25px] py-[10px] cursor-pointer" type="submit" value="Login"
                    name="submit" id="submit">
            </div>
            <div>
                <a class="text-[#306AED] hover:text-[#E8BC40] transition-all duration-300" href="lost-password.html">Lost
                    your password?</a>
            </div>
            <div>
                <p>If you have any issues logging into your existing account, please email us at <a
                        class="text-[#306AED] hover:text-[#E8BC40] transition-all duration-300"
                        href="mailto:help@luxelocks.com">help@luxelocks.com</a>. <br>
                    Return to <a class="text-[#306AED] hover:text-[#E8BC40] transition-all duration-300"
                        href="index.html">homepage</a>.
                </p>
            </div>
        </form>
    </section>

    <!-- Create account -->
    <section class="max-w-screen-lg mx-auto px-4 border-b pt-10 pb-5">
        <h2 class="text-[24px] font-bold mb-5">Create an account</h2>
        <form class="border p-7 flex flex-col gap-5" enctype="multipart/form-data" method="post"
            action="{{ route('register') }}" id="registrationForm">
            <!-- First Name -->
            @csrf
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                    placeholder="First Name *" name="first_name" id="first_name">
                @error('first_name')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Last Name -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                    placeholder="Last Name *" name="last_name" id="last_name">
                @error('last_name')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="email"
                    placeholder="Email *" name="email" id="email">
                @error('email')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Number -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                    placeholder="Phone number *" name="phone" id="phone">
                @error('phone')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>


            <!-- Password -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="password"
                    placeholder="Password *" name="password" id="password" required>
                @error('password')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>


            <!-- Business Name -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                    placeholder="Business Name *" name="business_name" id="business_name">
                @error('business_name')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Business Type -->
            <div>
                <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                    placeholder="Business Type *" name="business_type" id="business_type">
                @error('business_type')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Type -->
            <div>
                <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" name="product_type"
                    id="product_type">
                    <option value="" disabled selected>Select Product Type (multi-choice) *</option>
                    <option value="Toupees for men/women">Toupees for men/women</option>
                    <option value="Toupees/Human hair wigs">Toupees/Human hair wigs</option>
                    <option value="Hair extensions">Hair extensions</option>
                    <option value="Afro toupees">Afro toupees</option>
                    <option value="Lace wigs/closures/weaves">Lace wigs/closures/weaves</option>
                </select>
                @error('product_type')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Years of Business -->
            <div>
                <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full"
                    name="business_year" id="business_year">
                    <option value="" disabled selected>Years of Your Hair System Business *</option>
                    <option value="Starting up">Starting up</option>
                    <option value="Within 2 years">Within 2 years</option>
                    <option value="2-5 years">2-5 years</option>
                    <option value="6-10 years">6-10 years</option>
                    <option value="10+ years">10+ years</option>
                </select>
                @error('business_year')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- License Type and Number -->
            <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
                <div>
                    <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full"
                        name="license_type" id="license_type">
                        <option value="" disabled selected>Select Your License Type *</option>
                        <option value="Business license">Business license</option>
                        <option value="Seller's permit">Seller's permit</option>
                        <option value="Resale tax certificate">Resale tax certificate</option>
                        <option value="Cosmetology license">Cosmetology license</option>
                        <option value="Baber license">Baber license</option>
                        <option value="Other">Other (Please upload the license below.)</option>
                    </select>
                    @error('license_type')
                        <p class="text-red-500 text-[12px]">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="text"
                        placeholder="License Number *" name="license_number" id="license_number">
                    @error('license_number')
                        <p class="text-red-500 text-[12px]">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Country -->
            <div>
                <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" name="country"
                    id="country">
                    <option value="" disabled selected>Country *</option>
                    <option value="" disabled selected>Country *</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                    </option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                    </option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                        Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                        Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                    </option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                @error('country')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- File Upload -->
            <div class="flex flex-col">
                <label class="text-[#676D8A] text-[12px]" for="license_file">Upload your business/cosmetology
                    license</label>
                <input class="py-2" type="file" id="license_file" name="license_file" accept=".pdf, .jpg, .png">
                <p class="text-[#444444] text-[12px]"><span class="italic">File supported: PDF, JPEG, PNG | Maximum size:
                        50MB</span> <br> If you are unable to upload these files, please add them as attachments when
                    replying to our confirmation email. Thank you.</p>
                @error('license_file')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Additional Information -->
            <div>
                <textarea class="px-1 h-24 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm resize-none w-full"
                    name="description" id="description"
                    placeholder="Please let us know if you have your own brand/website/instagram/facebook/youtube, any of them will help speed up the approval process"></textarea>
                @error('description')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Preferences -->
            <div>
                <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full"
                    name="contact_type" id="contact_type">
                    <option value="" disabled selected>How would you prefer to be contacted? (multi-choice) *
                    </option>
                    <option value="Telephone">Telephone</option>
                    <option value="Text Message">Text Message</option>
                    <option value="Email">Email</option>
                    <option value="Instagram Direct">Instagram Direct</option>
                    <option value="Facebook Messenger">Facebook Messenger</option>
                </select>
                @error('contact_type')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Best Time to Contact -->
            <div>
                <select class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full"
                    name="contact_time" id="contact_time">
                    <option value="" disabled selected>When would be the best time to contact you? (multi-choice) *
                    </option>
                    <option value="Weekdays, Daytime">Weekdays, Daytime</option>
                    <option value="Weekdays, Evening">Weekdays, Evening</option>
                    <option value="Weekends, Daytime">Weekends, Daytime</option>
                    <option value="Weekends, Evening">Weekends, Evening</option>
                    <option value="Public Holidays, Daytime">Public Holidays, Daytime</option>
                    <option value="Public Holidays, Evening">Public Holidays, Evening</option>
                    <option value="Other">Other</option>
                </select>
                @error('contact_time')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Captcha -->
            <div>
                <label class="text-[#676D8A] text-[12px]" for="captcha">I'm not robot <span
                        class="text-red-500">*</span></label>
                <div class="flex items-center">
                    <p class="text-[#444444] w-20">11 + 5 =</p>
                    <input class="p-3 text-[13px] text-[#676D8A] border border-[#C0C4D4] rounded-sm w-full" type="number"
                        id="captcha" name="captcha">
                </div>
                @error('captcha')
                    <p class="text-red-500 text-[12px]">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <input class="bg-[#306AED] text-white px-[25px] py-[10px] cursor-pointer" type="submit" value="Submit"
                    name="submit" id="submit">
            </div>

            <!-- Submission Note -->
            <p class="text-[#E8BC40]">Upon submission, you'll receive an email with a password and requesting further
                info to complete verification. Please be sure to save the password and respond to the email.</p>
        </form>
    </section>
@endsection
