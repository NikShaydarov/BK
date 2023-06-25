<style>

@media (min-width: 320px) and (max-width: 480px) and (orientation:portrait) {
    main {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
    }

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 28px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    nav {
        display: flex;
        flex-direction: column;
        background-color: dimgray;
        width: 100%;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    t1 {
        order: 1;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}

@media (min-width: 321px) and (orientation:landscape) and (max-width: 800px) {
    main {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
    }

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 28px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    nav {
        display: flex;
        flex-direction: column;
        background-color: dimgray;
        width: 100%;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    t1 {
        order: 1;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}






@media only screen and (min-width: 1224px) {

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 30px;
        text-align: center;
        width: 600px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    main {
        display: flex;
        flex-direction: column;
        width: 600px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
        border: 5px solid black;
        padding: 20px 20px 20px 20px;
    }

    nav {
        display: flex;
        background-color: dimgray;
        width: 640px;
        border: 5px solid black;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }
    /*t1 {
        order: 1;
    }*/

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;

    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}
@media (min-width: 768px) and (max-width: 1224px) {

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 30px;
        text-align: center;
        width: 600px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    main {
        width: 600px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
        border: 5px solid black;
        padding: 20px 20px 20px 20px;
    }

    nav {
        display: flex;
        background-color: dimgray;
        width: 640px;
        border: 5px solid black;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }

    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}
   
  .form1{
    max-width: 960px;
    text-align: center;
    margin: 0 auto;
  }
  .error {
    border: 3px solid #b8d6e0;
  }
  .hidden{
    display: none;
  }
</style>
<body>
  <div class="table1">
    <table border="1">
      <tr>
        <th>Name</th>
        <th>EMail</th>
        <th>Year</th>
        <th>Pol</th>
        <th>Limbs</th>
        <th>Superpower</th>
        <th>Bio</th>
      </tr>
      <?php
      foreach($users as $user){
          echo '
            <tr>
              <td>'.$user['name'].'</td>
              <td>'.$user['email'].'</td>
              <td>'.$user['year'].'</td>
              <td>'.$user['pol'].'</td>
              <td>'.$user['limbs'].'</td>
              <td>';
                $user_pwrs=array(
                    "inv"=>FALSE,
                    "walk"=>FALSE,
                    "fly"=>FALSE,
                );
                foreach($pwrs as $pwr){
                    if($pwr['per_id']==$user['id']){
                        if($pwr['name']=='inv'){
                            $user_pwrs['inv']=TRUE;
                        }
                        if($pwr['name']=='walk'){
                            $user_pwrs['walk']=TRUE;
                        }
                        if($pwr['name']=='fly'){
                            $user_pwrs['fly']=TRUE;
                        }                      
                    }
                }
                if($user_pwrs['inv']){echo 'inv<br>';}
                if($user_pwrs['walk']){echo 'walk<br>';}
                if($user_pwrs['fly']){echo 'fly<br>';}
              echo '</td>
              <td>'.$user['bio'].'</td>
              <td>
                <form method="get" action="index.php">
                  <input name=edit_id value='.$user['id'].' hidden>
                  <input type="submit" value=Edit>
                </form>
              </td>
            </tr>';
       }
      ?>
    </table>
    <?php
    printf('Пользователи с inv: %d <br>',$pwrs_count[0]);
    printf('Пользователи с walk: %d <br>',$pwrs_count[1]);
    printf('Пользователи с fly: %d <br>',$pwrs_count[2]);
    ?>
  </div>
</body>
