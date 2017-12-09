@extends('template.master')
@section('content')
<div class="container space-container">
   <div class="row">
      <div class="col-md-7 up-space">
         <div class="row">
            <div class="col-md-11">
            <!-- <iframe width="100%" height="335" src="https://www.youtube.com/embed/zx1nFdlSdzk" frameborder="0" allowfullscreen></iframe>-->
                <img src="../images/registration/img-world.png" alt="" class="img-responsive">
            </div>
         </div>
         <div class="row">
            <div class="col-md-11">
               <h3>Want to Learn English Online?</h3>
               <p>Now learning English becomes easier and fun with English Muslims. By studying in English Muslim you will master English faster. No need to come to the place of les, just sit sweet at home, you can learn anywhere and anytime 24 hours non-stop!</p>
               <p>Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed
               <br/><br/>
               <b>Let's join hundreds of thousands of other learners in Enlish Muslim. Sign up now!</b></p>
            </div>
         </div>
      </div>
      <div class="col-md-5 up-register">
         <h3 class="text-left">REGISTER</h3>
         <h5>Get a placement test and trial class, free! just need 30 seconds. Fill up below.</h5>
         <div class="col-md-12">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('student/register') }}">
               {{ csrf_field() }}
               <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                  <input id="first_name" type="text" class="form-control form-control-lg" name="first_name" value="{{ old('first_name') }}" placeholder="Muhammad">
                  @if ($errors->has('first_name'))
                  <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Al-Fatih">
                  @if ($errors->has('last_name'))
                  <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Muhammad@mail.com">
                  @if ($errors->has('email'))
                  <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                  @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password">
                  @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                  <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="+6212345678912">
                  @if ($errors->has('mobile'))
                  <span class="help-block">
                  <strong>{{ $errors->first('mobile') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                  <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                  @if ($errors->has('gender'))
                  <span class="help-block">
                  <strong>{{ $errors->first('gender') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="form-group {{ $errors->has('birth_date') ? ' has-error' : '' }}">
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar">
                        </i>
                     </div>
                     <input class="form-control" id="birth_date" name="birth_date" placeholder="DD/MM/YYYY" type="text"/>
                  </div>
                  @if ($errors->has('birth_date'))
                  <span class="help-block">
                  <strong>{{ $errors->first('birth_date') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('education') ? ' has-error' : '' }}">
                  <select class="form-control" id="education" name="education">
                     <option value="" readonly>-- Select Education --</option>
                     <option>Elementary School</option>
                     <option>Junior High School</option>
                     <option>Senior High School</option>
                     <option>Associate Degree</option>
                     <option>Bachelor's Degree</option>
                     <option>Master's Degree</option>
                     <option>Doctoral degree</option>
                  </select>
                  @if ($errors->has('education'))
                  <span class="help-block">
                  <strong>{{ $errors->first('education') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
                  <select class="form-control select2-country" id="country" name="country">
                     <option value="" readonly>-- Select Country --</option>
                     <option>Afghanistan</option>
                     <option>Albania</option>
                     <option>Algeria</option>
                     <option>Andorra</option>
                     <option>Angola</option>
                     <option>Antigua and Barbuda</option>
                     <option>Argentina</option>
                     <option>Armenia</option>
                     <option>Aruba</option>
                     <option>Australia</option>
                     <option>Austria</option>
                     <option>Azerbajian</option>
                     <option>Bahamas</option>
                     <option>Bahrain</option>
                     <option>Bangladesh</option>
                     <option>Barbados</option>
                     <option>Belarus</option>
                     <option>Belgium</option>
                     <option>Belize</option>
                     <option>Benin</option>
                     <option>Bhutan</option>
                     <option>Bolivia</option>
                     <option>Bosnia and Herzegovina</option>
                     <option>Botswana</option>
                     <option>Brunei</option>
                     <option>Bulgaria</option>
                     <option>Burkania Faso</option>
                     <option>Burma</option>
                     <option>Burundi</option>
                     <option>Cambodia</option>
                     <option>Cameroon</option>
                     <option>Canada</option>
                     <option>Cabo Verde</option>
                     <option>Central African Republic</option>
                     <option>Chad</option>
                     <option>Chile</option>
                     <option>China</option>
                     <option>Colombia</option>
                     <option>Coromos</option>
                     <option>Congo</option>
                     <option>Costa Rica</option>
                     <option>Cote d'Ivoire</option>
                     <option>Croatia</option>
                     <option>Cuba</option>
                     <option>Curacao</option>
                     <option>Cyprus</option>
                     <option>Czechia</option>
                     <option>Denmark</option>
                     <option>Djibouti</option>
                     <option>Dominica</option>
                     <option>Dominican Republic</option>
                     <option>Ecuador</option>
                     <option>Egypt</option>
                     <option>El Salvador</option>
                     <option>Equatorial Guinea</option>
                     <option>Eritrea</option>
                     <option>Estonia</option>
                     <option>Ethiopia</option>
                     <option>Fiji</option>
                     <option>Finland</option>
                     <option>France</option>
                     <option>Gabon</option>
                     <option>Gambia</option>
                     <option>Georgia</option>
                     <option>Germany</option>
                     <option>Ghana</option>
                     <option>Greece</option>
                     <option>Grenada</option>
                     <option>Guatemala</option>
                     <option>Guinea</option>
                     <option>Guinea-Bissau</option>
                     <option>Guyana</option>
                     <option>Haiti</option>
                     <option>Holy See</option>
                     <option>Honduras</option>
                     <option>Hong Kong</option>
                     <option>Hungary</option>
                     <option>Iceland</option>
                     <option>India</option>
                     <option>Indonesia</option>
                     <option>Iran</option>
                     <option>Iraq</option>
                     <option>Ireland</option>
                     <option>Israel</option>
                     <option>Italy</option>
                     <option>Jamaica</option>
                     <option>Japan</option>
                     <option>Jordan</option>
                     <option>Kazakhstan</option>
                     <option>Kenya</option>
                     <option>Kiribati</option>
                     <option>Korea South</option>
                     <option>Kosovo</option>
                     <option>Kuwait</option>
                     <option>Kyrgyzstan</option>
                     <option>Laos</option>
                     <option>Latvia</option>
                     <option>Lebanon</option>
                     <option>Lesotho</option>
                     <option>Liberia</option>
                     <option>Libya</option>
                     <option>Liechtenstein</option>
                     <option>Lithuania</option>
                     <option>Luxembourg</option>
                     <option>Macau</option>
                     <option>Macedonia</option>
                     <option>Madagascar</option>
                     <option>Malawi</option>
                     <option>Malaysia</option>
                     <option>Maldives</option>
                     <option>Mali</option>
                     <option>Malta</option>
                     <option>Marshall Islands</option>
                     <option>Mauritania</option>
                     <option>Mauritius</option>
                     <option>Mexico</option>
                     <option>Micronesia</option>
                     <option>Moldova</option>
                     <option>Monaco</option>
                     <option>Mongolia</option>
                     <option>Montenegro</option>
                     <option>Morocco</option>
                     <option>Mozambique</option>
                     <option>Namibia</option>
                     <option>Nauru</option>
                     <option>Nepal</option>
                     <option>Netherlands</option>
                     <option>New Zealand</option>
                     <option>Nicaragua</option>
                     <option>Niger</option>
                     <option>Nigeria</option>
                     <option>North Korea</option>
                     <option>Norway</option>
                     <option>Oman</option>
                     <option>Pakistan</option>
                     <option>Palau</option>
                     <option>Palestina</option>
                     <option>Panama</option>
                     <option>Papua New Guinea</option>
                     <option>Paraguay</option>
                     <option>Peru</option>
                     <option>Philippines</option>
                     <option>Poland</option>
                     <option>Portugal</option>
                     <option>Qatar</option>
                     <option>Romania</option>
                     <option>Russia</option>
                     <option>Rwanda</option>
                     <option>Saint Kitts and Nevis</option>
                     <option>Saint Lucia</option>
                     <option>Saint Vincent and Grenadines</option>
                     <option>Samoa</option>
                     <option>San Marino</option>
                     <option>Sao Tome and Principe</option>
                     <option>Saudi Arabia</option>
                     <option>Senegal</option>
                     <option>Serbia</option>
                     <option>Seychelles</option>
                     <option>Sierra Leone</option>
                     <option>Singapore</option>
                     <option>Sint Maarten</option>
                     <option>Slovakia</option>
                     <option>Slovenia</option>
                     <option>Solomons Islands</option>
                     <option>Somalia</option>
                     <option>South Africa</option>
                     <option>South Korea</option>
                     <option>South Sudan</option>
                     <option>Spain</option>
                     <option>Sri Lanka</option>
                     <option>Sudan</option>
                     <option>Suriname</option>
                     <option>Swaziland</option>
                     <option>Sweden</option>
                     <option>Switzerland</option>
                     <option>Syria</option>
                     <option>Taiwan</option>
                     <option>Tajikistan</option>
                     <option>Tanzania</option>
                     <option>Thailand</option>
                     <option>Timor Leste</option>
                     <option>Togo</option>
                     <option>Tonga</option>
                     <option>Trinidad and Tobago</option>
                     <option>Tunisia</option>
                     <option>Turkey</option>
                     <option>Turkmenistan</option>
                     <option>Tuvalu</option>
                     <option>Uganda</option>
                     <option>Ukraine</option>
                     <option>United Arab Emirates</option>
                     <option>United Kingdom</option>
                     <option>Uruguay</option>
                     <option>Uzbekistan</option>
                     <option>Vanuatu</option>
                     <option>Venezuela</option>
                     <option>Vietnam</option>
                     <option>Yemen</option>
                     <option>Zambia</option>
                     <option>Zimbabwe</option>
                  </select>
                  @if ($errors->has('country'))
                  <span class="help-block">
                  <strong>{{ $errors->first('country') }}</strong>
                  </span>
                  @endif
               </div>



               <div class="form-group {{ $errors->has('occupation') ? ' has-error' : '' }}">
                  <select class="form-control select2-occupation" id="occupation" name="occupation">
                     <option value="" readonly>-- Select Occupation --</option>

                     <option>Accountant</option>
                     <option>Auditor</option>
                     <option>Actor</option>
                     <option>Actuary</option>
                     <option>Adhesive Bonding Machine Operator</option>
                     <option>Tender</option>
                     <option>Administrative Law Judge</option>
                     <option>Administrative Services Manager</option>
                     <option>Adult Basic and Secondary Education and Literacy Teacher</option>
                     <option>Instructor</option>
                     <option>Advertising Sales Agent</option>
                     <option>Advertising and Promotions Manager</option>
                     <option>Aerospace Engineering and Operations Technician</option>
                     <option>Aerospace Engineer</option>
                     <option>Business Managers of Artist</option>
                     <option>Agricultural Engineer</option>
                     <option>Agricultural Equipment Operator</option>
                     <option>Agricultural Inspector</option>
                     <option>Agricultural Sciences Teacher</option>
                     <option>Agricultural Worker</option>
                     <option>Agricultural and Food Science Technician</option>
                     <option>Air Traffic Controller</option>
                     <option>Aircraft Cargo Handling Supervisor</option>
                     <option>Aircraft Mechanic</option>
                     <option>Service Technician</option>
                     <option>Aircraft Structure</option>
                     <option>Airfield Operations Specialist</option>
                     <option>Airline Pilot</option>
                     <option>All Occupation</option>
                     <option>Ambulance Driver</option>
                     <option>Attendant</option>
                     <option>Amusement and Recreation Attendant
                     <option>Anesthesiologist</option>
                     <option>Animal Breeder</option>
                     <option>Animal Control Worker</option>
                     <option>Animal Scientist</option>
                     <option>Animal Trainer</option>
                     <option>Anthropologist</option>
                     <option>Archeologist</option>
                     <option>Anthropology and Archeology Teacher</option>
                     <option>Appraiser</option>
                     <option>Assessors of Real Estate</option>
                     <option>Arbitrator</option>
                     <option>Architect</option>
                     <option>Architectural and Civil Drafter</option>
                     <option>Architectural and Engineering Manager</option>
                     <option>Architecture Teacher</option>
                     <option>Architecture and Engineering Occupation</option>
                     <option>Archivist</option>
                     <option>Art Director</option>
                     <option>Artist</option>
                     <option>Assembler</option>
                     <option>Fabricator</option>
                     <option>Astronomer</option>
                     <option>Athlete</option>
                     <option>Sports Competitor</option>
                     <option>Athletic Trainer</option>
                     <option>Atmospheric and Space Scientist</option>
                     <option>Atmospheric</option>
                     <option>Audio and Video Equipment Technician</option>
                     <option>Audio-Visual and Multimedia Collections Specialist</option>
                     <option>Audiologist</option>
                     <option>Automotive Body and Related Repairer</option>
                     <option>Automotive Glass Installer</option>
                     <option>Repairer</option>
                     <option>Automotive Service Technician</option>
                     <option>Mechanic</option>
                     <option>Automotive and Watercraft Service Attendant</option>
                     <option>Avionics Technicians</option>
                     <option>Baggage Porter</option>
                     <option>Bellhop</option>
                     <option>Bailiff</option>
                     <option>Baker</option>
                     <option>Barber</option>
                     <option>Bartender</option>
                     <option>Bicycle Repairer</option>
                     <option>Bill and Account Collector</option>
                     <option>Billing and Posting Clerk</option>
                     <option>Biochemist</option>
                     <option>Biophysicist</option>
                     <option>Biological Science Teacher</option>
                     <option>Biological Scientist</option>
                     <option>Biological Technician</option>
                     <option>Biomedical Engineer</option>
                     <option>Boilermaker</option>
                     <option>Bookkeeping</option>
                     <option>Brickmason</option>
                     <option>Blockmason</option>
                     <option>Bridge and Lock Tender</option>
                     <option>Broadcast News Analyst</option>
                     <option>Broadcast Technician</option>
                     <option>Brokerage Clerk</option>
                     <option>Budget Analyst</option>
                     <option>Building Cleaning Worker</option>
                     <option>Building and Grounds Cleaning and Maintenance Occupation</option>
                     <option>Bus Driver</option>
                     <option>Truck Mechanic</option>
                     <option>Diesel Engine Specialist</option>
                     <option>Business Operations Specialist</option>
                     <option>Business Teacher</option>
                     <option>Financial Operations Occupation</option>
                    <option>Butcher</option>
                     <option>Meat Cutter</option>
                     <option>Buyer</option>
                     <option>Purchasing Agent</option>
                     <option>Cabinetmaker</option>
                     <option>Bench Carpenter</option>
                     <option>Camera Operator</option>
                     <option>Camera and Photographic Equipment Repairer</option>
                     <option>Captain</option>
                     <option>Cardiovascular Technologist</option>
                     <option>Technician</option>
                     <option>Career/Technical Education Teacher</option>
                     <option>Cargo and Freight Agent</option>
                     <option>Carpenter</option>
                     <option>Carpet Installer</option>
                     <option>Cartographer</option>
                     <option>Photogrammetrist</option>
                     <option>Cashier</option>
                     <option>Cement Mason</option>
                     <option>Concrete Finisher</option>
                     <option>Chef</option>
                     <option>Head Cook</option>
                     <option>Chemical Engineer</option>
                     <option>Chemical Equipment Operator</option>
                     <option>Tender</option>
                     <option>Chemical Plant and System Operator</option>
                     <option>Chemical Technician</option>
                     <option>Chemistry Teacher</option>
                     <option>Chemist</option>
                     <option>Chief Executive</option>
                     <option>Child</option>
                     <option>Childcare Worker</option>
                     <option>Chiropractor</option>
                     <option>Choreographer</option>
                     <option>Civil Engineering Technician</option>
                     <option>Civil Engineer</option>
                     <option>Claims Adjuster</option>
                     <option>Cleaners of Vehicle</option>
                     <option>Equipment</option>
                     <option>Cleaning</option>
                     <option>Clergy</option>
                     <option>Clinical</option>
                     <option>Coache</option>
                     <option>Scout</option>
                     <option>Coating</option>
                     <option>Coil Winder</option>
                     <option>Coin</option>
                     <option>Combined Food Preparation and Serving Worker</option>
                     <option>Commercial Diver</option>
                     <option>Commercial Pilot</option>
                     <option>Commercial and Industrial Designer</option>
                     <option>Communications Equipment Operator</option>
                     <option>Communications Teacher</option>
                     <option>Community and Social Service Specialist</option>
                     <option>Community and Social Service Occupation</option>
                    <option>Compensation and Benefits Manager</option>
                     <option>Compensation</option>
                     <option>Compliance Officer</option>
                     <option>Computer Hardware Engineer</option>
                     <option>Computer Numerically Controlled Machine Tool Programmer</option>
                     <option>Computer Occupation</option>
                     <option>Computer Operator</option>
                     <option>Computer Programmer</option>
                     <option>Computer Science Teacher</option>
                     <option>Computer Support Specialist</option>
                     <option>Computer Systems Analyst</option>
                     <option>Computer and Information Research Scientist</option>
                     <option>Computer and Information Systems Manager</option>
                     <option>Computer and Mathematical Occupation</option>
                     <option>Computer-Controlled Machine Tool Operator</option>
                     <option>Concierge</option>
                     <option>Conservation Scientist</option>
                     <option>Construction Laborer</option>
                     <option>Construction Manager</option>
                     <option>Construction and Building Inspector</option>
                     <option>Construction and Extraction Occupation</option>
                     <option>Construction and Related Worker</option>
                     <option>Continuous Mining Machine Operator</option>
                     <option>Control and Valve Installer</option>
                     <option>Conveyor Operator</option>
                     <option>Cooling and Freezing Equipment Operator</option>
                     <option>Correctional Officer</option>
                     <option>Jailer</option>
                     <option>Correspondence Clerk</option>
                     <option>Cost Estimator</option>
                     <option>Costume Attendant</option>
                     <option>Counselor</option>
                     <option>Counter Attendant</option>
                     <option>Counter and Rental Clerk</option>
                     <option>Courier</option>
                     <option>Messenger</option>
                     <option>Court Reporter</option>
                     <option>Craft Artist</option>
                     <option>Crane and Tower Operator</option>
                     <option>Credit Analyst</option>
                     <option>Credit Authorizer</option>
                     <option>Credit Counselor</option>
                     <option>Criminal Justice and Law Enforcement Teacher</option>
                     <option>Crossing Guard</option>
                     <option>Crushing</option>
                     <option>Curator</option>
                     <option>Customer Service Representative</option>
                     <option>Cutter</option>
                     <option>Trimmer</option>
                     <option>Cutting and Slicing Machine Setter</option>
                     <option>Cutting</option>
                     <option>Dancer</option>
                     <option>Data Entry Keyer</option>
                     <option>Database Administrator</option>
                     <option>Demonstrator</option>
                     <option>Product Promoter</option>
                     <option>Dental Assistant</option>
                     <option>Dental Hygienist</option>
                     <option>Dental Laboratory Technician</option>
                     <option>Dentist</option>
                     <option>Derrick Operator</option>
                     <option>Designer</option>
                     <option>Desktop Publisher</option>
                     <option>Detective</option>
                     <option>Criminal Investigator</option>
                     <option>Diagnostic Medical Sonographer</option>
                     <option>Dietetic Technician</option>
                     <option>Dietitian</option>
                     <option>Nutritionist</option>
                     <option>Dining Room and Cafeteria Attendant</option>
                     <option>Bartender Helper</option>
                     <option>Director</option>
                     <option>Dishwasher</option>
                     <option>Dispatcher</option>
                     <option>Door-to-Door Sales Worker</option>
                     <option>Drafter</option>
                     <option>Dredge Operator</option>
                     <option>Drilling and Boring Machine Tool Setter</option>
                     <option>Driver/Sales Worker</option>
                     <option>Drywall and Ceiling Tile Installers</option>
                     <option>Earth Driller</option>
                     <option>Economics Teacher</option>
                     <option>Editor</option>
                     <option>Education Administrator</option>
                     <option>Education Teacher</option>
                     <option>Educational</option>
                     <option>Electric Motor</option>
                     <option>Electrical Engineer</option>
                     <option>Electrical Power-Line Installer</option>
                     <option>Electrical and Electronic Equipment Assembler</option>
                     <option>Electrical and Electronics Drafter</option>
                     <option>Electrical and Electronics Engineering Technician</option>
                     <option>Electrical and Electronics Installer</option>
                     <option>Electrical and Electronics Repairer</option>
                     <option>Electrical and Electronics Repairer</option>
                     <option>Electrician</option>
                     <option>Electro-Mechanical Technician</option>
                     <option>Electromechanical Equipment Assembler</option>
                     <option>Electronic Equipment Installer</option>
                     <option>Electronic Home Entertainment Equipment Installer</option>
                     <option>Electronics </option>
                     <option>Elementary School Teacher</option>
                     <option>Elevator </option>
                     <option>Eligibility Interviewer</option>
                     <option>Embalmer</option>
                     <option>Emergency Management Director</option>
                     <option>Emergency Medical Technician</option>
                     <option>Engine and Other Machine Assembler</option>
                     <option>Engineering Teacher</option>
                     <option>Engineering Technician</option>
                     <option>Engineer</option>
                     <option>English Language and Literature Teacher</option>
                     <option>Entertainer</option>
                     <option>Performer</option>
                     <option>Entertainment </option>
                     <option>Related Worker</option>
                     <option>Environmental Engineering Technician</option>
                     <option>Environmental Engineer</option>
                     <option>Environmental Science Teacher</option>
                     <option>Environmental Science and Protection Technician</option>
                     <option>Environmental Scientist</option>
                     <option>Specialist</option>
                     <option>Epidemiologist</option>
                     <option>Etcher</option>
                     <option>Engraver</option>
                     <option>Excavating and Loading Machine and Dragline Operator</option>
                     <option>Executive Secretarie</option>
                     <option>Executive Administrative Assistant</option>
                     <option>Explosives Worker</option>
                     <option>Extraction Worker</option>
                     <option>Extruding and Drawing Machine Setter</option>
                     <option>Extruding and Forming Machine Setter</option>
                     <option>Extruding</option>
                     <option>Fabric Mender</option>
                     <option>Fabric and Apparel Patternmaker</option>
                     <option>Faller</option>
                     <option>Family and General Practitioner</option>
                     <option>Farm Equipment Mechanic</option>
                     <option>Service Technician</option>
                     <option>Farm Labor Contractor</option>
                     <option>Farm and Home Management Advisor</option>
                     <option>Farmer</option>
                     <option>Farming</option>
                     <option>Laborer</option>
                     <option>Farmworker</option>
                     <option>Fashion Designer</option>
                     <option>Fence Erector</option>
                     <option>Fiberglass Laminator</option>
                     <option>Fabricator</option>
                     <option>File Clerk</option>
                     <option>Film and Video Editor</option>
                     <option>Financial Analyst</option>
                     <option>Financial </option>
                     <option>Financial Manager</option>
                     <option>Financial Specialist</option>
                     <option>Fire Inspector</option>
                     <option>Investigator</option>
                     <option>Firefighter</option>
                     <option>First-Line Supervisors of Construction Trade</option>
                     <option>Extraction Worker</option>
                     <option>First-Line Supervisors of Correctional Officer</option>
                     <option>First-Line Supervisors of Farming</option>
                     <option>First-Line Supervisors of Fire Fighting and Prevention Worker</option>
                     <option>First-Line Supervisors of Food Preparation and Serving Worker</option>
                     <option>First-Line Supervisors of Helper</option>
                     <option>First-Line Supervisors of Housekeeping and Janitorial Worker</option>
                     <option>First-Line Supervisors of Landscaping</option>
                     <option>First-Line Supervisors of Mechanic</option>
                     <option>First-Line Supervisors of Non-Retail Sales Worker</option>
                     <option>First-Line Supervisors of Office and Administrative Support Worker</option>
                     <option>First-Line Supervisors of Personal Service Worker</option>
                     <option>First-Line Supervisors of Police and Detective</option>
                     <option>First-Line Supervisors of Production and Operating Worker</option>
                     <option>First-Line Supervisors of Protective Service Worker</option>
                     <option>First-Line Supervisors of Retail Sales Worker</option>
                     <option>First-Line Supervisors of Transportation and Material-Moving Machine and Vehicle Operator</option>
                     <option>Fish and Game Warden</option>
                     <option>Fisher</option>
                     <option>Related Fishing Worker</option>
                     <option>Fitness Trainer</option>
                     <option>Aerobics Instructor</option>
                     <option>Flight Attendant</option>
                     <option>Floor Layer</option>
                     <option>Floor Sander</option>
                     <option>Finisher</option></option>
                     <option>Floral Designer</option>
                     <option>Food Batchmaker</option>
                     <option>Food Cooking Machine Operator</option>
                     <option>Food Preparation Worker</option>
                     <option>Food Preparation and Serving Related Occupation</option>
                     <option>Food Preparation and Serving Related Worker</option>
                     <option>Food Scientist</option>
                     <option>Food Server</option>
                     <option>Food Service Manager</option>
                     <option>Food and Tobacco Roasting</option>
                     <option>Foreign Language and Literature Teacher</option>
                     <option>Forensic Science Technician</option>
                     <option>Forest Fire Inspector</option>
                     <option>Prevention Specialist</option>
                     <option>Forest and Conservation Technician</option>
                     <option>Forest and Conservation Worker</option>
                     <option>Forester</option>
                     <option>Forestry and Conservation Science Teacher</option>
                     <option>Forging Machine Setter</option>
                     <option>Foundry Mold and Coremaker</option>
                     <option>Funeral Attendant</option>
                     <option>Funeral Service Manager</option>
                     <option>Furniture Finisher</option>
                     <option>Gaming Cage Worker</option>
                     <option>Gaming Change Person</option>
                     <option>Booth Cashier</option>
                     <option>Gaming Dealer</option>
                     <option>Gaming Manager</option>
                     <option>Gaming Service Worker</option>
                     <option>Gaming Supervisor</option>
                     <option>Gaming Surveillance Officer</option>
                     <option>Gaming Investigator</option>
                     <option>Gaming and Sports Book Writer</option>
                     <option>Runner</option>
                     <option>Gas Compressor and Gas Pumping Station Operator</option>
                     <option>Gas Plant Operator</option>
                     <option>General and Operations Manager</option>
                     <option>Geographer</option>
                     <option>Geography Teacher</option>
                     <option>Geological and Petroleum Technician</option>
                     <option>Geoscientist</option>
                     <option>Glazier</option>
                     <option>Grader</option>
                     <option>Sorter</option>
                     <option>Graduate Teaching Assistant</option>
                     <option>Graphic Designer</option>
                     <option>Grinding and Polishing Worker</option>
                     <option>Grounds Maintenance Worker</option>
                     <option>Hairdresser</option>
                     <option>Hazardous Materials Removal Worker</option>
                     <option>Health Diagnosing and Treating Practitioner</option>
                     <option>Health Educator</option>
                     <option>Health Specialties Teacher</option>
                     <option>Health Technologist</option>
                     <option>Technician</option>
                     <option>Health and Safety Engineer</option>
                     <option>Healthcare Practitioner</option>
                     <option>Technical Occupation</option>
                     <option>Healthcare Practitioner
                     <option>Technical Worker</option>
                     <option>Healthcare Social Worker</option>
                     <option>Healthcare Support Occupation</option>
                     <option>Healthcare Support Worker</option>
                     <option>Heat Treating Equipment Setter</option>
                     <option>Heavy and Tractor-Trailer Truck Driver</option>
                     <option>Highway Maintenance Worker</option>
                     <option>Historian</option>
                     <option>History Teacher</option>
                     <option>Hoist and Winch Operator</option>
                     <option>Home Appliance Repairer</option>
                     <option>Home Economics Teacher</option>
                     <option>Home Health Aide</option>
                     <option>Host</option>
                     <option>Hostess</option>
                     <option>Human Resources Assistant</option>
                     <option>Human Resources Manager</option>
                     <option>Hunter</option>
                     <option>Trapper</option>
                     <option>Hydrologist</option>
                     <option>Industrial Engineering Technician</option>
                     <option>Industrial Engineer</option>
                     <option>Industrial Machinery Mechanic</option>
                     <option>Industrial Production Manager</option>
                     <option>Industrial Truck and Tractor Operator</option>
                     <option>Industrial-Organizational Psychologist</option>
                     <option>Information Security Analyst</option>
                     <option>Information and Record Clerk</option>
                     <option>Inspector</option>
                     <option>Instructional Coordinator</option>
                     <option>Insulation Worker</option>
                     <option>Insurance Appraiser</option>
                     <option>Insurance Claim</option>
                     <option>Policy Processing Clerk</option>
                     <option>Insurance Sales Agent</option>
                     <option>Insurance Underwriter</option>
                     <option>Interior Designer</option>
                     <option>Internist</option>
                     <option>Interpreter</option>
                     <option>Translator</option>
                     <option>Interviewer</option>
                     <option>Janitor</option>
                     <option>Cleaner</option>
                     <option>Jeweler</option>
                     <option>Precious Stone and Metal Worker</option>
                     <option>Judicial Law Clerk</option>
                     <option>Kindergarten Teacher</option>
                     <option>Laborer</option>
                     <option>Landscape Architect</option>
                     <option>Landscaping and Groundskeeping Worker</option>
                     <option>Lathe and Turning Machine Tool Setter</option>
                     <option>Laundry and Dry-Cleaning Worker</option>
                     <option>Law Teacher</option>
                     <option>Lawyer</option>
                     <option>Layout Worker</option>
                     <option>Legal Occupation</option>
                     <option>Legal Secretary</option>
                     <option>Legal Support Worker</option>
                     <option>Legislator</option>
                     <option>Librarian</option>
                     <option>Library Assistant</option>
                     <option>Library Science Teacher</option>
                     <option>Library Technician</option>
                     <option>Licensed Practical and Licensed Vocational Nurse</option>
                     <option>Life Scientist</option>
                     <option>Lifeguard</option>
                     <option>Light Truck or Delivery Services Driver</option>
                     <option>Loading Machine Operator</option>
                     <option>Loan Interviewer</option>
                     <option>Clerk</option>
                     <option>Loan Officer</option>
                     <option>Locksmith</option>
                     <option>Safe Repairer</option>
                     <option>Locomotive Engineer</option>
                     <option>Locomotive Firer</option>
                     <option>Lodging Manager</option>
                     <option>Log Grader</option>
                     <option>Scaler</option>
                     <option>Logging Equipment Operator</option>
                     <option>Logging Worker</option>
                     <option>Logisticians</option>
                     <option>Machine Feeder</option>
                     <option>Machinist</option>
                     <option>Maid</option>
                     <option>Housekeeping Cleaner</option>
                     <option>Mail Clerk</option>
                     <option>Mail Machine Operator</option>
                     <option>Maintenance Worker</option>
                     <option>Maintenance and Repair Worker</option>
                     <option>Makeup Artist</option>
                     <option>Management Analyst</option>
                     <option>Management Occupation</option>
                     <option>Manager</option>
                     <option>Manicurist</option>
                     <option>Pedicurist</option>
                     <option>Manufactured Building and Mobile Home Installer</option>
                     <option>Marine Engineer</option>
                     <option>Naval Architect</option>
                     <option>Market Research Analyst</option>
                     <option>Marketing Specialist</option>
                     <option>Marketing Manager</option>
                     <option>Marriage and Family Therapist</option>
                     <option>Massage Therapist</option>
                     <option>Material Moving Worker</option>
                     <option>Materials Engineer</option>
                     <option>Materials Scientist</option>
                     <option>Mathematical Science Occupation</option>
                     <option>Mathematical Science Teacher</option>
                     <option>Mathematical Technician</option>
                     <option>Mathematician</option>
                     <option>Mechanical Door Repairer</option>
                     <option>Mechanical Drafter</option>
                     <option>Mechanical Engineering Technician</option>
                     <option>Mechanical Engineer</option>
                     <option>Media and Communication Equipment Worker</option>
                     <option>Media and Communication Worker</option>
                     <option>Medical Appliance Technician</option>
                     <option>Medical Assistant</option>
                     <option>Medical Equipment Preparer</option>
                     <option>Medical Equipment Repairer</option>
                     <option>Health Information Technician</option>
                     <option>Medical Scientist</option>
                     <option>Medical Secretary</option>
                     <option>Medical Transcriptionist</option>
                     <option>Medical and Clinical Laboratory Technician</option>
                     <option>Medical and Clinical Laboratory Technologist</option>
                     <option>Medical and Health Services Manager</option>
                     <option>Mental Health Counselor</option>
                     <option>Mental Health and Substance Abuse Social Worker</option>
                     <option>Merchandise Displayer</option>
                     <option>Window Trimmer</option>
                     <option>Metal Worker</option>
                     <option>Plastic Worker</option>
                     <option>Metal-Refining Furnace Operator</option>
                     <option>Meter Reader</option>
                     <option>Microbiologist</option>
                     <option>Middle School Teacher</option>
                     <option>Milling and Planing Machine Setter</option>
                     <option>Mine Cutting and Channeling Machine Operator</option>
                     <option>Mine Shuttle Car Operator</option>
                     <option>Mining Machine Operator</option>
                     <option>Mining and Geological Engineer</option>
                     <option>Mixing and Blending Machine Setter</option>
                     <option>Mobile Heavy Equipment Mechanic</option>
                     <option>Model Maker</option>
                     <option>Molder</option>
                     <option>Motion Picture Projectionist</option>
                     <option>Motor Vehicle Operator</option>
                     <option>Motorboat Mechanic</option>
                     <option>Service Technician</option>
                     <option>Motorboat Operator</option>
                     <option>Motorcycle Mechanic</option>
                     <option>Multimedia Artist</option>
                     <option>Animator</option>
                     <option>Multiple Machine Tool Setter</option>
                     <option>Museum Technician</option>
                     <option>Conservator</option>
                     <option>Music Director</option>
                     <option>Composer</option>
                     <option>Musical Instrument Repairer</option>
                     <option>Tuner</option>
                     <option>Musician</option>
                     <option>Singer</option>
                     <option>Natural Sciences Manager</option>
                     <option>Network and Computer Systems Administrator</option>
                     <option>New Accounts Clerk</option>
                     <option>Nonfarm Animal Caretaker</option>
                     <option>Nuclear Engineer</option>
                     <option>Nuclear Medicine Technologist</option>
                     <option>Nuclear Power Reactor Operator</option>
                     <option>Nuclear Technician</option>
                     <option>Nursing Aide</option>
                     <option>Nursing Instructor</option>
                     <option>Teacher</option>
                     <option>Obstetrician</option>
                     <option>Gynecologist</option>
                     <option>Occupational Health and Safety Specialist</option>
                     <option>Occupational Health and Safety Technician</option>
                     <option>Occupational Therapist</option>
                     <option>Occupational Therapy Aide</option>
                     <option>Occupational Therapy Assistant</option>
                     <option>Office Clerk</option>
                     <option>Office Machine Operator</option>
                     <option>Office and Administrative Support Worker</option>
                     <option>Operating Engineer</option>
                     <option>Other Construction Equipment Operator</option>
                     <option>Operations Research Analyst</option>
                     <option>Ophthalmic Laboratory Technician</option>
                     <option>Optician</option>
                     <option>Optometrist</option>
                     <option>Oral and Maxillofacial Surgeon</option>
                     <option>Order Clerk</option>
                     <option>Orthodontist</option>
                     <option>Orthotist</option>
                     <option>Prosthetist</option>
                     <option>Outdoor Power Equipment and Other Small Engine Mechanic</option>
                     <option>Packaging and Filling Machine Operator</option>
                     <option>Tender</option>
                     <option>Packer</option>
                     <option>Packager</option>
                     <option>Painter</option>
                     <option>Painting</option>
                     <option>Paper Goods Machine Setter</option>
                     <option>Paperhanger</option>
                     <option>Paralegal</option>
                     <option>Legal Assistant</option>
                     <option>Parking Enforcement Worker</option>
                     <option>Parking Lot Attendant</option>
                     <option>Parts Salesperson</option>
                     <option>Patternmaker</option>
                     <option>Paving</option>
                     <option>Payroll and Timekeeping Clerk</option>
                     <option>Pediatrician</option>
                     <option>Personal Care Aide</option>
                     <option>Personal Care and Service Occupation</option>
                     <option>Personal Care and Service Worker</option>
                     <option>Personal Financial Advisor</option>
                     <option>Pest Control Worker</option>
                     <option>Pesticide Handler</option>
                     <option>Petroleum Engineer</option>
                     <option>Petroleum Pump System Operator</option>
                     <option>Pharmacist</option>
                     <option>Pharmacy Aide</option>
                     <option>Pharmacy Technician</option>
                     <option>Philosophy and Religion Teacher</option>
                     <option>Photographer</option>
                     <option>Photographic Process Worker</option>
                     <option>Processing Machine Operator</option>
                     <option>Physical Scientist</option>
                     <option>Physical Therapist Aide</option>
                     <option>Physical Therapist Assistant</option>
                     <option>Physical Therapist</option>
                     <option>Physician Assistant</option>
                     <option>Physician</option>
                     <option>Surgeon</option>
                     <option>Physicist</option>
                     <option>Physics Teacher</option>
                     <option>Pile-Driver Operator</option>
                     <option>Pipelayer</option>
                     <option>Plant and System Operator</option>
                     <option>Plasterer</option>
                     <option>Stucco Mason</option>
                     <option>Plating and Coating Machine Setter</option>
                     <option>Plumber</option>
                     <option>Podiatrist</option>
                     <option>Police and Sheriff's Patrol Officer</option>
                     <option>Political Science Teacher</option>
                     <option>Political Scientist</option>
                     <option>Postal Service Clerk</option>
                     <option>Postal Service Mail Carrier</option>
                     <option>Postal Service Mail Sorter</option>
                     <option>Postmaster</option>
                     <option>Mail Superintendent</option>
                     <option>Postsecondary Teacher</option>
                     <option>Pourer</option>
                     <option>Caster</option>
                     <option>Power Distributor</option>
                     <option>Dispatcher</option>
                     <option>Power Plant Operator</option>
                     <option>Precision Instrument and Equipment Repairer</option>
                     <option>Prepress Technician</option>
                     <option>Preschool Teacher</option>
                     <option>Presser</option>
                     <option>Print Binding and Finishing Worker</option>
                     <option>Printing Press Operator</option>
                     <option>Private Detective</option>
                     <option>Investigator</option>
                     <option>Probation Officer</option>
                     <option>Correctional Treatment Specialist</option>
                     <option>Procurement Clerk</option>
                     <option>Producer</option>
                     <option>Director</option>
                     <option>Production Occupation</option>
                     <option>Production Worker</option>
                     <option>Proofreader</option>
                     <option>Copy Marker</option>
                     <option>Prosthodontist</option>
                     <option>Protective Service Occupation</option>
                     <option>Protective Service Worker</option>
                     <option>Psychiatric Aide</option>
                     <option>Psychiatric Technician</option>
                     <option>Psychiatrist</option>
                     <option>Psychologist</option>
                     <option>Psychology Teacher</option>
                     <option>Public Address System and Other Announcer</option>
                     <option>Public Relations Specialist</option>
                     <option>Public Relation</option>
                     <option>Fundraising Manager</option>
                     <option>Pump Operator</option>
                     <option>Purchasing Agent</option>
                     <option>Purchasing Manager</option>
                     <option>Radiation Therapist</option>
                     <option>Radio Operator</option>
                     <option>Radio and Television Announcer</option>
                     <option>Radiologic Technologist</option>
                     <option>Rail Car Repairer</option>
                     <option>Rail Transportation Worker</option>
                     <option>Rail Yard Engineer</option>
                     <option>Rail-Track Laying and Maintenance Equipment Operator</option>
                     <option>Railroad Brake</option>
                     <option>Railroad Conductor</option>
                     <option>Yardmaster</option>
                     <option>Real Estate Broker</option>
                     <option>Real Estate Sales Agent</option>
                     <option>Receptionist</option>
                     <option>Information Clerk</option>
                     <option>Recreation Worker</option>
                     <option>Recreation and Fitness Studies Teacher</option>
                     <option>Recreational Therapist</option>
                     <option>Recreational Vehicle Service Technician</option>
                     <option>Refractory Materials Repairer</option>
                     <option>Refuse and Recyclable Material Collector</option>
                     <option>Registered Nurse</option>
                     <option>Rehabilitation Counselor</option>
                     <option>Reinforcing Iron and Rebar Worker</option>
                     <option>Religious Worker</option>
                     <option>Reporter</option>
                     <option>Correspondent</option>
                     <option>Reservation and Transportation Ticket Agent</option>
                     <option>Travel Clerk</option>
                     <option>Residential Advisor</option>
                     <option>Respiratory Therapist</option>
                     <option>Respiratory Therapy Technician</option>
                     <option>Retail Salesperson</option>
                     <option>Rigger</option>
                     <option>Rock Splitter</option>
                     <option>Rolling Machine Setter</option>
                     <option>Roof Bolter</option>
                     <option>Roofer</option>
                     <option>Rotary Drill Operator</option>
                     <option>Roustabout</option>
                     <option>Sailor</option>
                     <option>Marine Oiler</option>
                     <option>Sales Engineer</option>
                     <option>Sales Manager</option>
                     <option>Sales Representative</option>
                     <option>Sawing Machine Setter</option>
                     <option>Secondary School Teacher</option>
                     <option>Secretary</option>
                     <option>Administrative Assistant</option>
                     <option>Security Guard</option>
                     <option>Security and Fire Alarm Systems Installer</option>
                    <option>Segmental Paver</option>
                    <option>Self-Enrichment Education Teacher</option>
                     <option>Semiconductor Processor</option>
                     <option>Septic Tank Servicer</option>
                     <option>Sewer Pipe Cleaner</option>
                     <option>Service Unit Operator</option>
                     <option>Set and Exhibit Designer</option>
                     <option>Sewing Machine Operator</option>
                     <option>Shampooer</option>
                     <option>Sheet Metal Worker</option>
                     <option>Ship Engineer</option>
                     <option>Shipping</option>
                     <option>Shoe Machine Operator</option>
                     <option>Tender</option>
                     <option>Shoe and Leather Worker</option>
                     <option>Repairer</option>
                     <option>Signal and Track Switch Repairer</option>
                     <option>Skincare Specialist</option>
                     <option>Slaughterer</option>
                     <option>Meat Packer</option>
                     <option>Slot Supervisor</option>
                     <option>Social Science Research Assistant</option>
                     <option>Social Sciences Teacher</option>
                     <option>Social Scientist</option>
                     <option>Social Work Teacher</option>
                     <option>Social Worker</option>
                     <option>Social and Community Service Manager</option>
                     <option>Social and Human Service Assistant</option>
                     <option>Sociologist</option>
                     <option>Sociology Teacher</option>
                     <option>Software Developer</option>
                     <option>Soil and Plant Scientist</option>
                     <option>Sound Engineering Technician</option>
                     <option>Special Education Teacher</option>
                     <option>Speech-Language Pathologist</option>
                     <option>Stationary Engineer</option>
                     <option>Boiler Operator</option>
                     <option>Statistical Assistant</option>
                     <option>Statistician</option>
                     <option>Stock Clerk</option>
                     <option>Order Filler</option>
                     <option>Stonemason</option>
                     <option>Structural Iron and Steel Worker</option>
                     <option>Structural Metal Fabricator</option>
                     <option>Fitter</option>
                     <option>Substance Abuse and Behavioral Disorder Counselor</option>
                     <option>Subway and Streetcar Operator</option>
                     <option>Surgeon</option>
                     <option>Surgical Technologist</option>
                     <option>Survey Researcher</option>
                     <option>Surveying and Mapping Technician</option>
                     <option>Surveyor</option>
                     <option>Switchboard Operator</option>
                     <option>Tailor</option>
                     <option>Tank Car</option>
                     <option>Taper</option>
                     <option>Tax Examiner</option>
                     <option>Collector</option>
                     <option>Tax Preparer</option>
                     <option>Taxi Driver</option>
                     <option>Chauffeur</option>
                     <option>Teacher Assistant</option>
                     <option>Teacher</option>
                     <option>Instructor</option>
                     <option>Team Assembler</option>
                     <option>Technical Writer</option>
                     <option>Telecommunications Equipment Installer</option>
                     <option>Telecommunications Line Installer</option>
                     <option>Repairer</option>
                     <option>Telemarketer</option>
                     <option>Telephone Operator</option>
                     <option>Teller</option>
                     <option>Terrazzo Worker</option>
                     <option>Textile Bleaching and Dyeing Machine Operator</option>
                     <option>Textile Cutting Machine Setter</option>
                     <option>Textile Knitting and Weaving Machine Setter</option>
                     <option>Therapist</option>
                     <option>Tile and Marble Setter</option>
                     <option>Timing Device Assembler</option>
                     <option>Adjuster</option>
                     <option>Tire Builder</option>
                     <option>Tire Repairer</option>
                     <option>Title Examiner</option>
                     <option>Tool Grinder</option>
                     <option>Tool and Die Maker</option>
                     <option>Tour Guide</option>
                     <option>Escort</option>
                     <option>Traffic Technician</option>
                     <option>Training and Development Manager</option>
                     <option>Training and Development Specialist</option>
                     <option>Transit and Railroad Police</option>
                     <option>Transportation Attendant</option>
                     <option>Transportation Inspector</option>
                     <option>Transportation Security Screener</option>
                     <option>Transportation Worker</option>
                     <option>Travel Agent</option>
                     <option>Travel Guide</option>
                     <option>Tree Trimmer</option>
                     <option>Pruner</option>
                     <option>Umpire</option>
                     <option>Upholsterer</option>
                     <option>Urban and Regional Planner</option>
                     <option>Usher</option>
                     <option>Veterinarian</option>
                     <option>Veterinary Assistant</option>
                     <option>Laboratory Animal Caretaker</option>
                     <option>Veterinary Technologist</option>
                     <option>Technician</option>
                     <option>Vocational Education Teacher</option>
                     <option>Waiter</option>
                     <option>Waitress</option>
                     <option>Watch Repairer</option>
                     <option>Water and Wastewater Treatment Plant and System Operator</option>
                     <option>Weigher</option>
                     <option>Welder</option>
                     <option>Welding</option>
                     <option>Wellhead Pumper</option>
                     <option>Wholesale and Retail Buyer</option>
                     <option>Woodworker</option>
                     <option>Woodworking Machine Setter</option>
                     <option>Word Processor</option>
                     <option>Typist</option>
                     <option>Writer</option>
                     <option>Authors</option>
                     <option>Zoologist</option>
                     <option>Wildlife Biologist</option>

                  </select>
                  @if ($errors->has('occupation'))
                  <span class="help-block">
                  <strong>{{ $errors->first('occupation') }}</strong>
                  </span>
                  @endif
               </div>

               <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                 <!-- <div class="col-md-offset-4 col-md-6"> -->
                   {!! app('captcha')->display() !!}
                   {!! $errors->first('g-recaptcha-response', '<p class="help-block">:message</p>') !!}
                 <!-- </div> -->
               </div>

               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <button type="submit" class="btn btn-module orange-prmary">
                        <i class="fa fa-btn fa-user"></i> Submit
                        </button>
                     </div>
                  </div>
               </div>
               <input type="hidden" name="status" value="Free Member">
            </form>
         </div>
         <div class="form-group space-button"><br /><br />
            <p>Do you login with social media ?</p>
            <a href="#" width="100%" class="btn btn-module btn-facebook item-p-method">
            <i class="fa fa-btn fa-facebook-square"></i> Facebook
            </a>
            <a href="#" width="100%" class="btn btn-module btn-gmail item-p-method">
            <i class="fa fa-btn fa-google-plus-square"></i> Gmail
            </a>
         </div>
         <div class="form-group">
            Have an account? <a class="student-link" href="{{ url('student/login') }}">Login</a>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid bg-method-testimony">
   <div class="container">
      <div class="row middle-space">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <h3 class="text-center">What people are saying about method English Muslim </h3>
            <p class="text-center">Allow us to share some of the benefits, so you can understand why you're going to learn more with us. And if you still some questions, take a look at our frequently asked questions (FAQ’s).</p>
         </div>
         <div class="col-md-2"></div>
      </div>
      <div class="row middle-space">
         <div class="col-md-1"></div>
         <div class="col-md-5 col-sm-6">
            <div class="col-md-12 box-method-testimony rounded">
               <div class="col-md-12">
                  <p class="padding-middle-top">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. </p>
               </div>
               <div class="col-md-12 text-right">
                  <img src="{{url('images/testimony/person-6.png')}}">
                  <p><b>Ahmad Solihin (@ahmadsolihin)</b></p>
                  <p>Studying Computer Engineering @ Beykent University.</p>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-sm-6">
            <div class="col-md-12 box-method-testimony rounded">
               <div class="col-md-12">
                  <p class="padding-middle-top">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus.</p>
               </div>
               <div class="col-md-12 text-right">
                  <img src="{{url('images/testimony/person-7.png')}}">
                  <p><b>Fatin Nurmawati (@fatinnurmawati)</b></p>
                  <p>Studying Computer Engineering @ Beykent University.</p>
               </div>
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</div>
@stop
