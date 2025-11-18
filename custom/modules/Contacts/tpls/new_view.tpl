<form id="new_view" id="new_view" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="{{$fname}}"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="{{$lname}}"><br><br>
  
  <label for="email">Email:</label><br> 
  <input type="email" id="email" name="email" value="{{$email}}" ><br><br>
  
  <label for="message">Message:</label><br>
  <textarea id="message" name="message" rows="4" cols="50">{{$message}}</textarea><br><br>
  
  <input type="submit" name="submitbutton" id="submitbutton" value="Submit">
</form>