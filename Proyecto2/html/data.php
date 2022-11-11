<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Show data</title>
</head>

<body>
  <table border=1>
    <tr>
      <th colspan="2">Personal Information</th>
    </tr>
    <tr>
      <td>Title:</td>
      <td><?= $_POST['title']; ?></td>
    </tr>
    <tr>
      <td>First name:</td>
      <td><?= $_POST['fName']; ?></td>
    </tr>
    <tr>
      <td>Last name:</td>
      <td><?= $_POST['lName']; ?></td>
    </tr>
    <tr>
      <td>Birthdate:</td>
      <td><?= $_POST['bDate']; ?></td>
    </tr>
    <?php
            if(!empty($_POST['city'])){
                echo
                "<tr>
                    <td>City:</td>
                    <td>".$_POST['city']."</td>
                </tr>";
            }
            if(!empty($_POST['region'])){
                echo
                "<tr>
                    <td>Region:</td>
                    <td>".$_POST['region']."</td>
                </tr>";
            }
            if(!empty($_POST['postcode'])){
                echo
                "<tr>
                    <td>Post Code:</td>
                    <td>".$_POST['postcode']."</td>
                </tr>";
            }
            if(!empty($_POST['regionalCode'])){
                echo
                "<tr>
                    <td>Regional Code:</td>
                    <td>".$_POST['regionalCode']."</td>
                </tr>";
            }
            ?>
  </table>
  <table border=1>
    <tr>
      <th colspan="2">Subscription Information</th>
    </tr>
    <tr>
      <td>Subscription type:</td>
      <td><?= $_POST['sType']; ?></td>
    </tr>
    <?php
            if(!empty($_POST['sCode'])){
                echo
                "<tr>
                    <td>Subscription code:</td>
                    <td>".$_POST['sCode']."</td>
                </tr>";
            }
            if((!empty($_POST['area1']))||(!empty($_POST['area2']))||(!empty($_POST['area3']))||(!empty($_POST['area4']))||(!empty($_POST['area5']))){
                echo "<tr>";
                echo "<td>Areas of interest:</td>";
                echo "<td>";
                for($i = 1; $i < 6; $i++){
                    if(!empty($_POST['area'.$i])){
                        echo $_POST['area'.$i].", ";
                    }
                }
                echo "</td>";
                echo "</tr>";
            }
            if(!empty($_POST['username'])){
                echo
                "<tr>
                    <td>Username:</td>
                    <td>".$_POST['username']."</td>
                </tr>";
            }
            if(!empty($_POST['passwd'])){
                echo
                "<tr>
                    <td>Password:</td>
                    <td>".$_POST['passwd']."</td>
                </tr>";
            }
            ?>
  </table>
  <table border=1>
    <tr>
      <th colspan="2">Billing Details</th>
    </tr>
    <tr>
      <td>Credit Card Type:</td>
      <td><?= $_POST['creditCardType']; ?></td>
    </tr>
    <tr>
      <td>Card Number:</td>
      <td><?= $_POST['cardNumber']; ?></td>
    </tr>
    <?php
                if(!empty($_POST['passwd'])){
                    echo
                    "<tr>
                    <td>Discount Code:</td>
                    <td>".$_POST['discountCode']."</td>
                </tr>";
                }
            ?>
  </table>
  <?php
        if(!empty($_POST['feedback'])){
            ?>
  <table border=1>
    <tr>
      <th>Feedback</th>
    </tr>
    <tr>
      <td style="width: 300px;"><?= $_POST['feedback']; ?></td>
    </tr>
  </table>
  <?php
        }
        ?>
</body>

</html>