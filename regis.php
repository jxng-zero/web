<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
<style>
  /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: linear-gradient(to bottom, #02269e,#01001f,#01154d);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box{
  margin-top: 20px;
}
.gender-box h3, .year-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender, .year-option, .year) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender{
  column-gap: 5px;
}
.form .year{
  column-gap: 2px;
}
.gender input, .year input {
  accent-color: rgb(174, 214, 241 );
}
.form :where(.gender input, .gender label, .year input, .year label) {
  cursor: pointer;
}
.gender label, .year label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(174, 214, 241 );
}
.form button:hover {
  background: rgb(93, 173, 226);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
</style>
</head>
<body>
<section class="container">
      <input type="button" onclick="history.back()" value="back">
      <header>Registration Form</header>
      <form action="adddata.php" method="post" enctype="multipart/form-data" class="form">

        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" required />
        </div>

        <div class="gender-box">
        <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked value="male">Male
            </div>

            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female">Female
            </div>

            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="other">Prefer not to say
            </div>
          </div>
        </div>

        <div class="input-box">
          <label>Age</label>
          <input type="text" pattern="[0-9]{2}" title="only number" placeholder="Enter your age" name="age" required />
        </div>

        <div class="input-box">
          <label>Studnt-ID</label>
          <input type="text" placeholder="Enter your student-id" name="studentid" required />
        </div>

        <div class="year-box">
        <h3>Year</h3>
          <div class="year-option">
            <div class="year">
              <input type="radio" id="check-freshman" name="year" checked value="freshman">Freshman
            </div>

            <div class="year">
              <input type="radio" id="check-sophomore" name="year" checked value="sophomore">Sophomore
            </div>

            <div class="year">
              <input type="radio" id="check-junior" name="year" checked value="junior">Junior
            </div>

            <div class="year">
              <input type="radio" id="check-senior" name="year" checked value="senior">Senior
            </div>

            <div class="year">
              <input type="radio" id="check-super senior" name="year" checked value="super senior">Super senior
            </div>
          </div>
        </div>

         <div class="input-box">
            <label>Phone Number</label>
            <input type="text" pattern="[0-9]{10}" title="pls, input 10 number" placeholder="Enter phone number" name="phone" required />
          </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Please, (something)@gmail.com or other" placeholder="Enter email address" name="email" required />
        </div>

         
        <div class="input-box Education">
          <label>Education</label>
          <div class="column" >
              <div class="select-box">
                <select  name="faculty">
                  <option hidden>Faculy</option>
                  <option value="Faculty of Humanities and Social Sciences">Faculty of Humanities and Social Sciences</option>
                  <option value="Faculty of Nursing">Faculty of Nursing</option>
                  <option value="College of Law and Governance">College of Law and Governance</option>
                  <option value="Faculty of Business Administration and Accountancy">Faculty of Business Administration and Accountancy</option>
                  <option value="Faculty of Education">Faculty of Education</option>
                  <option value="Faculty of Liberal Arts and Sciences">Faculty of Liberal Arts and Sciences</option>
                </select>
              </div>

              <div class="select-box">
                <select name="major">
                  <option hidden>Major</option>
                  <option value="Community Development Program">Community Development Program</option>
                  <option value="Business English Program">Business English Program</option>
                  <option value="Japanese Language Program">Japanese Language Program</option>
                  <option value="Chinese Language Program">Chinese Language Program</option>
                  <option value="Digital Information Management">Digital Information Management</option>
                  <option value="Art and Design Program">Art and Design Program</option>
                  <option value="History">History</option>
                  <option value="Thai Language for Communication">Thai Language for Communication </option>
                  <option value="Communication Arts">Communication Arts</option>
                  <option value="Bachelor of Nursing Program">Bachelor of Nursing Program</option>
                  <option value="Bachelor of Laws Program">Bachelor of Laws Program</option>
                  <option value="Bachelor of Political Program">Bachelor of Political Program</option>
                  <option value="Bachelor of Public Administration Program">Bachelor of Public Administration Program</option>
                  <option value="Management">Management</option>
                  <option value="Marketing Major">Marketing Major</option>
                  <option value="Digital Business Computer Program">Digital Business Computer Program</option>
                  <option value="international Business Administration Program">international Business Administration Program</option>
                  <option value="Modern Business Management Program">Modern Business Management Program</option>
                  <option value="Accounting">Accounting</option>
                  <option value="Department of Tourism and Hotel">Department of Tourism and Hotel</option>
                  <option value="English major">English major</option>
                  <option value="Early Childhood Education Program">Early Childhood Education Program</option>
                  <option value="Computer Education Program">Computer Education Program</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="Elementary Education">Elementary Education</option>
                  <option value="Thai Language Program">Thai Language Program</option>
                  <option value="Social Studie">Social Studies</option>
                  <option value="Department of General Science">Department of General Science</option>
                  <option value="Department of Physical Education">Department of Physical Education</option>
                  <option value="Department of Music Education">Department of Music Education</option>
                  <option value="Department of Chinese Language Teaching">Department of Chinese Language Teaching</option>
                  <option value="Department of Visual Arts Studies">Department of Visual Arts Studies</option>
                  <option value="Education Administration">Education Administration</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Computer and Digital Technology Program">Computer and Digital Technology Program</option>
                  <option value="Community Public Health Program">Community Public Health Program</option>
                  <option value="Sports Science Program">Sports Science Program</option>
                  <option value="Agricultural Technology Program">Agricultural Technology Program</option>
                  <option value="Food Technology and Innovation Program">Food Technology and Innovation Program</option>
                  <option value="Occupational Health and Safety Program">Occupational Health and Safety Program</option>
                  <option value="Software Engineering">Software Engineering</option>
                  <option value="Logistics Engineering Program">Logistics Engineering Program</option>
                  <option value="Industrial and Environmental Management Engineering">Industrial and Environmental Management Engineering</option>
                  <option value="Product Design and Material Innovation Program">Product Design and Material Innovation Program</option>
                  <option value="Department of Civil Technology and Architecture"> Department of Civil Technology and Architecture</option>
                  
                </select>
              </div>
              </div>

            <div class="column">
            <div class="input-box">
              <label>Username</label>
              <input type="text"  pattern="[a-zA-z].{6,}" title="only a-z A-Z more than 6 characters" placeholder="Enter your username"  name="username" required />
            </div>

            <div class="input-box">
              <label>password</label>
              <input type="password" pattern=".{5,}" title="pls, more than 5 characters" placeholder="Enter your password" name="pass" required />
            </div>
            </div>

            <div class="input-box">
              <label for="image">Picture:</label>
              <input type="file" id="image" name="image">
            </div>


        <button>Submit</button>
      </form>
    </section>
  </body>
</html>