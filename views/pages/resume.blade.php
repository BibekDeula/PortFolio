@extends('layouts.default')



@section('content')
<style>

  body {
  
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: skyblue;
  background-image: -webkit-linear-gradient(90deg, skyblue 0%, steelblue 100%);
  background-attachment: fixed;
  background-size: 100% 100%;
  
  font-family: "Luckiest Guy", cursive;
  -webkit-font-smoothing: antialiased;
}


::selection {
  background: transparent;
}

  
 

  }
</style>
<body>
  <div class="resume-container">

    <h2>Skills</h2>
    <hr>
    <p class="skills">Laravel, PHP, JavaScript, SQL, HTML, CSS, GitHub</p>

  	

    <h2>Education</h2>
    <hr>
<table border="2"cellpadding="1"color="black">
  <tr s>
    <td>SN</td>
    <td>Qualification</td>
    <td>Institute Name</td>
    <td>University/Board</td>
    <td>Percentage</td>
    <td>Year of Graduation</td>
  </tr>
  <tr>
    <td>1.</td>
    <td>BSc.CSIT</td>
    <td>Texas International College</td>
    <td>Tribhuvan University</td>
    <td>running</td>
    <td>running</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Intermediate(science)</td>
    <td>Texas International College</td>
    <td>NEB</td>
    <td>61%</td>
    <td>2073</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>SLC</td>
    <td>Texas International School</td>
    <td>GON</td>
    <td>78%</td>
    <td>2071</td>
  </tr>
</table>

    <h2>Career Objective</h2>
    <hr>

    <p>Self-motivated and hardworking person seeking an opportunity to work in a challenging
environment to prove my skill and utilize my knowledge and intelligence in the growth of
organisation and myself.
</p>
</div>
</div>
</body>

@endsection