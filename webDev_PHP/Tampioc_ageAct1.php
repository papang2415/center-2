<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>
<style>
body {
    font-family: 'Times New Roman';
    background-image: url(http://static1.squarespace.com/static/538a3874e4b0ab1541d204ad/t/58d2cda01b10e3219f0b4751/1490210232360/?format=1500w);
    background-size: cover;
    background-repeat: no-repeat;

}

#form {
    margin-top: 15%;
    background: linear-gradient(to bottom, #cc0099 0%, #9900ff 100%);
    border: 2px solid black;
    border-radius: 20px;
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px;
}
</style>

<body>
    <div class="container d-flex justify-content-center pt-5">
        <div id="form" class="p-5 col-md-6s border">
            <form action="" method="post">
                <h1 class="pb-4">A Little Information of You!</h1>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-dark">Name:</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter your Name......." name="myName" required>
                </div>
                <br>
                <div class="input-group mb-3 flex-wrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-dark"> Birthday:</span>
                    </div>
                    <input class="form-control" name='year' type="date" min="1920-01-01" max="2020-12-31" id="birthday"
                        name="birthday">

                </div>
                <div class="col-sm-4 float-right">
                    <button class="btn btn-primary ml-5" type="submit" name="BDay">Submit</button>
                </div>
            </form>

        </div>
    </div>

    <?php 
        if(isset($_POST['BDay'])) {
                $name=$_POST['myName'];
                $y=$_POST['year'];
                helloName($name,$y);
        }
    
        function helloName($name,$y) {
            $x = substr($y,0,4);
            if ($x >= date('Y')) {
                echo "<div style='width:550px; background: linear-gradient(to bottom, #6699ff 0%, #3333ff 100%); border: 1px solid; padding: 10px; 
                box-shadow: 5px 10px; border-radius: 20px;' class='mt-3 pt-5 pb-5 container'>
                    <center>
                        <h2>Hello ".$name."! Please make your birthyear valid!"."</h2>
                    </center>
                </div>";
            }
           else{
            $age = date('Y') - $x;

            if($age == 1) {
                echo "<div style='width:550px; background: linear-gradient(to bottom, #6699ff 0%, #3333ff 100%); border: 1px solid; padding: 10px; 
                box-shadow: 5px 10px; border-radius: 20px;' class='mt-3 pt-5 pb-5 container'>
                    <center>
                        <h2>Hello ".$name."! You are ".$age." year old!"."</h2>
                    </center>
                </div>";
            } else {
                echo "<div style='width:550px; background: linear-gradient(to bottom, #6699ff 0%, #3333ff 100%); border: 1px solid; padding: 10px; 
                box-shadow: 5px 10px; border-radius: 20px;' class='mt-3 pt-5 pb-5 container'>
                    <center>
                        <h2>Hello ".$name."! You are ".$age." years old!"."</h2>
                    </center>
                </div>";
            }

         
           }
        }
    ?>
</body>

</html>