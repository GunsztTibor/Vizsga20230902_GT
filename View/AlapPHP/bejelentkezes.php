<div class="container">
    <div class="row mt-5" style="height: 750px">

        <div class="col-3"></div>

        <div class="col-6 ">

            <h1 class="mt-4 mb-4">Bejelentkezés</h1>

            <Form class="mt-5" method="POST" action="Controller/formFeldolgozo_Login.php" id="loginForm" name="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label><br>
                    <input class="form-control" type="text" name="email" id="email" spaceholder="valami@valami.hu">
                </div>

                <div class="mb-3">
                    <label for="jelszo" class="form-label">Jelszó</label>
                    <input type="password" name="jelszo" id="jelszo" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text"></div>
                </div>
                <button type="submit" class="btn btn-success mb-3" >Bejentkezés</button>
            </Form>
            
        </div>

        <div class="col-3 "> </div>

    </div>
</div>

<script>/*
function LoginValidate() {
   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
   var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
   if( name ==='' || email ===''){
   alert("Please fill all fields...!!!!!!");
   return false;
   }else if(!(email).match(emailReg)){
   alert("Invalid Email...!!!!!!");
   return false;
   }else{
    return false;  
    //document.getElementById("loginForm").submit();
   }
 }*/
 </script>