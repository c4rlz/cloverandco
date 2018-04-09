@php (ContactForm::validate_form()) 
<form action=<?php the_permalink(); ?> method='POST'>
<div class="control">
  <label class='form-label' for='contact-name'>Your Name</label>
  <input class="input" id='contact-name' type="text" name='contact-name' placeholder="Full Name" required autocomplete='name'>
</div>
<div class="control">
<label class='form-label' for='contact-email'>Your Email</label>
  <input class="input" id='contact-email' type="email" name='contact-email' placeholder="Email Address" required autocomplete='email'>
</div>
<div class="control">
<label class='form-label' for='contact-tel'>Your Phone Number</label>
  <input class="input" type="tel" id='contact-tel' name='contact-tel' placeholder="Phone Number" required autocomplete='tel'>
</div>
<div class="control">
<label class='form-label' for='guest-estimate'>Estimated Number of Guests</label>
  <input class="input" type="number" id='guest-estimate' name='guest-estimate' placeholder="Estimated Number of Guests">
</div>
<div class="control">
<label class='form-label' for='event-date'>Your Event Date</label>
  <input class="input" type="text" id='event-date' name='event-date' placeholder="Date Of Event">
</div>

<div class="control is-expanded">
<label class='form-label' for='event-type'>Your Event Type</label>
  <div class="select is-fullwidth">
    <select name='event-type' id='event-type'>
      <option label=" "></option>
      <option>Birthday Party</option>
      <option>Wedding</option>
      <option>Engagement</option>
      <option>Baby Shower</option>
      <option>Gender Reveal</option>
      <option>Bridal Shower</option>
      <option>Bachelorette/Bachelor</option>
      <option>Corporate</option>
      <option>Communion</option>
      <option>Christening</option>
      <option>Christmas</option>
      <option>Easter</option>
      <option>Halloween</option>
      <option>Valentine's Day</option>
      <option>Graduation</option>
      <option>New Years</option>
      <option>Other</option>
    </select>
  </div>
</div>

<div class="control is-expanded">
<label class='form-label' for='event-service'> Your Service </label>
  <div class="select is-fullwidth">
    <select name='service'>
      <option label=" "></option>
      <option>Candy Buffet</option>
      <option>Donut Wall</option>
      <option>Goody Bags</option>
    </select>
  </div>
</div>

<div class="control">
  <input class="button is-primary" name='contact-form' type='submit'>
</div>
</form>
