@php (ContactForm::validate_form()) 
<form action=<?php the_permalink(); ?> method='POST'>
<div class="control">
  <input class="input" type="text" name='contact-name' placeholder="Full Name" required >
</div>
<div class="control">
  <input class="input" type="email" name='contact-email' placeholder="Email Address" required>
</div>
<div class="control">
  <input class="input" type="tel" name='contact-tel' placeholder="Phone Number" required>
</div>
<div class="control">
  <input class="input" type="date" name='event-date' placeholder="Date Of Event">
</div>

<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='event-type'>
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
      <option selected>Type Of Event</option>
    </select>
  </div>
</div>

<div class="control is-expanded">
  <div class="select is-fullwidth">
    <select name='service'>
      <option>Candy Buffet</option>
      <option>Donut Wall</option>
      <option>Goody Bags</option>
      <option selected>Service Of Interest</option>
    </select>
  </div>
</div>

<div class="control">
  <input class="button is-primary" name='contact-form' type='submit'>
</div>
</form>
