
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ECC</title>
  </head>
  <body>
    <div class="container">
    <h1>Electricity Consumption Charge</h1>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
          <form action="ECC_process2.php" method="POST">
        <div class="form-group">
          <label for="exampleFormControlInput1">Voltage(V)</label>
          <input type="text" name="voltage" class="form-control" id="voltage" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Current(A)</label>
          <input type="text" name="current" class="form-control" id="current" required>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Current Rate(sen/kWh)</label>
              <!-- Button trigger modal -->
                <button type="button" class="btn1 btn-info" data-toggle="modal" data-target="#exampleModal">
                  See Tariff Rates
                </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <img src="tariff.png">
                  </div>
                </div>
            </div>   
            </div>
          <input type="text" name="currentrate" class="form-control" id="currentrate" required>
          </select>
        </div>
        <div>
           <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary btn-lg">Calculate</button>
        </div>
        <?php
    
    ?>
      </form>
      <?php
    ?>
    </div>
  </body>
</html>
</html>
