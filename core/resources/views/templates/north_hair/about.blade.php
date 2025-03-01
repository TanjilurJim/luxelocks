@extends('Template::layouts.master')
@section('content')

<section class="relative">
        <img src="assets/images/ABOUT-US-banner.webp" alt="About"
            class="w-full lg:h-[475px] h-[256px] md:block hidden object-cover object-center">
        <div class="absolute inset-0 flex items-center justify-center max-w-screen-xl mx-auto px-4">
            <h1
                class="lg:text-[40px] md:text-[36px] text-[24px] mb-5 md:leading-normal leading-tight uppercase text-white text-center">
                NEWTIMES HAIR <br>
                <span class="lg:text-[48px] md:text-[22px] text-[18px]">A Dedicated Partner in Your Success</span>
            </h1>
        </div>
        <img src="assets/images/ABOUT-US-banner-m.webp" alt="About"
            class="w-full block md:hidden object-cover object-center">
    </section>

    <section class="max-w-screen-2xl mx-auto px-4 py-40">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            <div>
                <h2 class="text-center text-[40px] font-bold">Our Mission</h2>
                <p class="text-center text-[20px] leading-relaxed tracking-[1px]">LUXELOCKS is a global leader
                    in
                    producing premium
                    hair systems,
                    extensions,
                    and human hair wigs,
                    supplying over
                    3,000 salons and wholesalers worldwide. For the past decade, we have honed our craft, using
                    ethically
                    sourced human hair
                    to create high-quality products at direct factory prices. With an extensive stock and a full
                    range
                    of
                    accessories, we
                    are the one-stop destination for salons and vendors. Our global offices and warehouses,
                    including
                    those
                    in the U.S. and
                    Europe, ensure smooth logistics for our clients in these key regions. At LUXELOCKS, we
                    believe
                    in
                    growing
                    together—your success is our success, and we are with you every step of the way.</p>
            </div>
            <img class="h-full w-full" src="assets/images/Our-Mission.webp" alt="About">
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto px-4 pb-40">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
            <div class="shadow-lg py-16 px-8">
                <h2 class="uppercase font-bold text-[28px] text-center">Extensive Manufacturing Capacity</h2>
                <p class="text-[20px] text-center">4,000 m² factory with 15,000+ units produced monthly.</p>
            </div>
            <div class="shadow-lg py-16 px-8">
                <h2 class="uppercase font-bold text-[28px] text-center">Top-Quality Lines</h2>
                <p class="text-[20px] text-center">Hair systems, toppers, wigs, and extensions made from premium human
                    hair, backed by a 6-stage quality check, 30-day
                    return policy, and 90-day warranty.</p>
            </div>
            <div class="shadow-lg py-16 px-8">
                <h2 class="uppercase font-bold text-[28px] text-center">Fast Global Delivery</h2>
                <p class="text-[20px] text-center">Warehouses in Europe, North America, and Asia for fast worldwide
                    shipping.</p>
            </div>
            <div class="shadow-lg py-16 px-8">
                <h2 class="uppercase font-bold text-[28px] text-center">Responsive Customer Support</h2>
                <p class="text-[20px] text-center">A talented team spanning the U.S., Europe, and China delivers
                    round-the-clock, multilingual customer support.</p>
            </div>
        </div>
    </section>

    <section class="max-w-screen-2xl mx-auto px-4 pb-40">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-10">
            <div class="">
                <h2 class="uppercase font-bold text-[50px] text-center">80,000+</h2>
                <p class="text-[20px] text-center font-bold">INVENTORY</p>
            </div>
            <div class="">
                <h2 class="uppercase font-bold text-[50px] text-center">180,000+</h2>
                <p class="text-[20px] text-center font-bold">ANNUAL OUTPUT</p>
            </div>
            <div class="">
                <h2 class="uppercase font-bold text-[50px] text-center">100+</h2>
                <p class="text-[20px] text-center font-bold">COUNTRIES AND REGIONS SERVED</p>
            </div>
            <div class="">
                <h2 class="uppercase font-bold text-[50px] text-center">5,000+</h2>
                <p class="text-[20px] text-center font-bold">WHOLESALE CLIENTS</p>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto px-4 pb-40 aspect-[4/3]">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/Lk8ySLLuR3I" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </section>

    <section class="max-w-screen-2xl mx-auto px-4 pb-20">
        <h2 class="text-center font-bold text-[40px] mb-10">EXCHANGE VISITS WITH CLIENTS</h2>
        <div class="3slide mt-5">
            <div class="rounded-md overflow-hidden relative flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS6.jpg" alt="men-hair-systems">
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS5.jpg" alt="men-hair-systems">
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS4.jpg" alt="men-hair-systems">
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS3.jpg" alt="men-hair-systems">
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS2.jpg" alt="men-hair-systems">
            </div>
            <div class="rounded-md overflow-hidden flex flex-col h-full"><img
                    src="assets/images/EXCHANGE-VISITS-WITH-CLIENTS-1.jpg" alt="men-hair-systems">
            </div>
        </div>
    </section>

    <!-- Form -->
    <section class="bg-[#F0F0F0]">
        <div class="max-w-screen-xl mx-auto px-4 py-20">
            <h2 class="text-[20px] text-center font-bold">INQUIRIES & QUESTIONS</h2>
            <form class="mt-10" action="#">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-5">
                    <input class="w-full border focus:outline-none focus:ring-0 px-3 py-2 text-[#495057]"
                        placeholder="Name *" type="text" name="name" id="name">
                    <input class="w-full border focus:outline-none focus:ring-0 px-3 py-2 text-[#495057]"
                        placeholder="Email Address *" type="email" name="email" id="email">
                    <select
                        class="w-full border focus:outline-none focus:ring-0 px-2 py-2 text-[#495057] country-select"
                        aria-placeholder="Country *" name="country" id="country">
                        <option value="">Country *</option>
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
                    <input class="w-full border focus:outline-none focus:ring-0 px-3 py-2 text-[#495057]"
                        placeholder="Phone/Whatsapp *" type="text" name="phone" id="phone">
                    <input class="w-full border focus:outline-none focus:ring-0 px-3 py-2 text-[#495057]"
                        placeholder="Business Name *" type="text" name="business" id="business">
                    <input class="w-full border focus:outline-none focus:ring-0 px-3 py-2 text-[#495057]"
                        placeholder="Business Role-I am a/an...*" type="text" name="role" id="role">
                </div>
                <textarea class="w-full focus:outline-none focus:ring-0 mt-5 px-3 py-2 h-24 text-[#495057]"
                    placeholder="Any questions or product demands/ size/ color/ length/ quantity/ price/ other information *"
                    name="question" id="question"></textarea>
                <div class="flex justify-center">
                    <input
                        class="border border-[#306AED] bg-[#306AED] text-white hover:bg-transparent hover:text-[#306AED] transition-all duration-200 mt-10 h-11 w-64 rounded-md cursor-pointer"
                        type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
@endsection
