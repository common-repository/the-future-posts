function the_future_posts_realtime_date() {
  var now = new Date();

  var dd = now.getDate();
  var mm = now.getMonth() + 1; 
  var yyyy = now.getFullYear();

  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  if(dd < 10) {
    dd = "0" + dd;
  } 
  if (mm < 10) {
    mm = "0" + mm;
  } 
  if (hours < 10) {
    hours = "0" + hours;
  } 
  if (minutes < 10) {
    minutes = "0" + minutes;
  } 
  if (seconds < 10) {
    seconds = "0" + seconds;
  } 

  dd_today = yyyy + "-" + mm + "-" + dd;
  dd_now   = yyyy + "-" + mm + "-" + dd + " " + hours + ":" + minutes + "(:" + seconds + ")";

  document.getElementById("the_future_posts_realtime_date_today").innerHTML = dd_today;
  document.getElementById("the_future_posts_realtime_date_now").innerHTML = dd_now;

  setTimeout("the_future_posts_realtime_date();","1000");
  return true;
}

function the_future_posts_copy_to_clipboard(container_id) {
  // create a new textarea element and give it id='temp_element'
  var textarea = document.createElement('textarea');
  textarea.id = 'temp_element';
  // optional step to make less noise on the page, if any!
  textarea.style.height = 0;
  // now append it to your page somewhere, i chose <body>
  document.body.appendChild(textarea);
  // give our textarea a value of whatever inside the div of id=container_id
  textarea.value = document.getElementById(container_id).innerText;
  // now copy whatever inside the textarea to clipboard
  var selector = document.querySelector('#temp_element');
  selector.select();
  document.execCommand('copy');
  // remove the textarea
  document.body.removeChild(textarea);

  // leave this alone: avoids page scroll up after click
  return true;
}

function the_future_posts_copy_string_to_clipboard(str) {
  // create new element
  var el = document.createElement('textarea');
  // set value (string to be copied)
  el.value = str;
  // set non-editable to avoid focus and move outside of view
  el.setAttribute('readonly', '');
  el.style = {position: 'absolute', left: '-9999px'};
  document.body.appendChild(el);
  // select text inside element
  el.select();
  // copy text to clipboard
  document.execCommand('copy');
  // Remove temporary element
  document.body.removeChild(el);

  // leave this alone: avoids page scroll up after click
  return true;
}
