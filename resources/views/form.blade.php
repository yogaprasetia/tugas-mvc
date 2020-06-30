<!DOCTYPE html>
<html>
<head>
  <title>Sign Up SanberBook</title>
</head>
<body>
  <h1>Buat Account Baru!</h1>
  <h3>Sign Up Form</h3>

  <!-- Form -->
  <form action="/welcome" method="post">
    @csrf
    <!-- First name -->
    <label for="first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>

    <!-- Last name -->
    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>

    <!-- Gender -->
    <label>Gender:</label><br>
    <input type="radio" id="male"  name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br>

    <!-- Nationality -->
    <label for="nationality">Nationality:</label><br>
    <select id="nationality" name="nationality">
      <option value="Indonesian">Indonesian</option>
      <option value="Singaporean">Singaporean</option>
      <option value="Malaysian">Malaysian</option>
      <option value="Australian">Australian</option>
    </select><br>

    <!-- Language Spoken -->
    <label>Language Spoken:</label><br>
    <input type="checkbox" id="bahasa_indonesia" name="bahasa_indonesia" value="Bahasa Indonesia">
    <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="english" value="English">
    <label for="english">English</label><br>
    <input type="checkbox" id="other" name="other" value="Other">
    <label for="other">Other</label><br>

    <!-- Bio -->
    <label>Bio:</label><br>
    <textarea name="bio" rows="10" cols="30"></textarea><br>

    <!-- Submit -->
    <input type="submit" value="Submit">
  
  </form>
</body>
</html>