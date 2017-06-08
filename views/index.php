<!-- Header -->
<header class="w3-container w3-red w3-text-blue w3-center" style="padding:96px 16px">
  <h1 class="w3-jumbo">Cloudcrest Capital</h1>
  <p class="w3-xlarge">Big Service for Small Business</p>
  <a href="#get-quote" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top">Get a Quote</a>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 id="services">Our Services</h1>
      <h3>Financial Asset Based Lending</h3>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
      <h3>Real Estate Based Lending</h3>
      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h3>Line of Credit</h3>
        <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third">
      <h2 class="w3-center" id="get-quote">Get A Quote</h2>
      <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
        <input type="hidden" name="oid" value="00D6A000000fSEl" />
        <input type="hidden" name="retURL" value="http://qtclending.force.com/apex/Inquiry_Confirmation" />
        <input type="hidden" name="lead_source" value="Web" />
        <input type="hidden" id="00N6A000005fYKx" name="00N6A000005fYKx" value="1" />
        <table>
            <tr>
                <td><label for="first_name">First Name</label></td>
                <td><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="last_name">Last Name</label></td>
                <td><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td><input  id="email" maxlength="80" name="email" size="20" type="email" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="phone">Phone</label></td>
                <td><input  id="phone" maxlength="80" name="phone" size="20" type="tel" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="company">Company</label></td>
                <td><input  id="company" maxlength="40" name="company" size="20" type="text" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="city">City</label></td>
                <td><input  id="city" maxlength="40" name="city" size="20" type="text" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="state">State/Province</label></td>
                <td><input  id="state" maxlength="20" name="state" size="20" type="text" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="industry">Industry</label></td>
                <td>
                    <select  id="industry" name="industry" class="w3-select w3-input w3-animate-input">
                        <option value="">--None--</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Apparel">Apparel</option>
                        <option value="Banking">Banking</option>
                        <option value="Biotechnology">Biotechnology</option>
                        <option value="Chemicals">Chemicals</option>
                        <option value="Communications">Communications</option>
                        <option value="Construction">Construction</option>
                        <option value="Consulting">Consulting</option>
                        <option value="Education">Education</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Energy">Energy</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Environmental">Environmental</option>
                        <option value="Finance">Finance</option>
                        <option value="Food &amp;amp; Beverage">Food &amp;amp; Beverage</option>
                        <option value="Government">Government</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Machinery">Machinery</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Media">Media</option>
                        <option value="Not For Profit">Not For Profit</option>
                        <option value="Other">Other</option>
                        <option value="Recreation">Recreation</option>
                        <option value="Retail">Retail</option>
                        <option value="Shipping">Shipping</option>
                        <option value="Technology">Technology</option>
                        <option value="Telecommunications">Telecommunications</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Utilities">Utilities</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="00N6A000004HgDU">Amount Requested:</label></td>
                <td><input  id="00N6A000004HgDU" name="00N6A000004HgDU" size="20" type="number" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="00N6A000004HgDj">Total Asset Value:</label></td>
                <td><input  id="00N6A000004HgDj" name="00N6A000004HgDj" size="20" type="number" class="w3-input w3-animate-input"/></td>
            </tr>

            <tr>
                <td><label for="">Liquid Asset Value:</label></td>
                <td><input  id="00N6A000004HgDo" name="00N6A000004HgDo" size="20" type="number" class="w3-input w3-animate-input"/></td>
            </tr>
        </table>
        <input class="w3-button w3-blue w3-center" type="submit" name="submit" />
        </form>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center w3-hide-small">
      <i class="fa fa-users w3-padding-64 w3-text-red w3-margin-right fa-big-image"></i>
    </div>

    <div class="w3-twothird">
      <h1 id="clients">Our Clients</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>
  </div>
</div>


<!-- Third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 id="team">Our Team</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>

    <div class="w3-third w3-center w3-hide-small">
      <i class="fa fa-handshake-o w3-padding-64 w3-text-blue w3-margin-right fa-big-image"></i>
    </div>
  </div>
</div>


<!-- Fourth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center w3-hide-small">
      <i class="fa fa-university w3-padding-64 w3-text-red w3-margin-right fa-big-image"></i>
    </div>

    <div class="w3-twothird">
      <h1 id="company">Our Company</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
    </div>
  </div>
</div>



<!-- Fifth Grid -->
<div class="w3-row-padding w3-padding-16 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 id="contact">Contact Us</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
      <div class="w3-xlarge w3-center">
        <i class="fa fa-facebook-official w3-text-blue w3-hover-text-red"></i>
        <i class="fa fa-instagram w3-text-blue w3-hover-text-red"></i>
        <i class="fa fa-snapchat w3-text-blue w3-hover-text-red"></i>
        <i class="fa fa-pinterest-p w3-text-blue w3-hover-text-red"></i>
        <i class="fa fa-twitter w3-text-blue w3-hover-text-red"></i>
        <i class="fa fa-linkedin w3-text-blue w3-hover-text-red"></i>
     </div>
    </div>

    <div class="w3-third w3-center w3-hide-small">
      <i class="fa fa-phone w3-padding-64 w3-text-blue w3-margin-right fa-big-image"></i>
    </div>
  </div>
</div>
