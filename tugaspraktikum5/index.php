<?php
$home_airport = array(
    "Soekarno-Hatta (CGK)" => 55000,
    "Ahmad Yani (SRG)" => 35000,
    "Adi Sumarmo (SOC)" => 45000,
    "Husein Sastranegara (BDO)" => 45000,
    "Halim Perdana Kusuma (HLP)" => 55000
);
$destination_airport = array(
    "Ngurai Rai (DPS)" => 85000,
    "Sepinggan (BPN)" => 75000,
    "Adi Sucipto (JOG)" => 65000,
    "Sultan Iskandar Muda (BTJ)" => 75000,
    "Hang Nadim (BTH)" => 95000
);

//fungsi untuk mengambil value dari key bandara
// atau mengambil pajak sesuai bandara
function getHomeTax($home_airport, $destination)
{
    $tax = $home_airport[$destination];
    return $tax;
}
function getDestinationTax($destination_airport, $destination)
{
    $tax = $destination_airport[$destination];
    return $tax;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tugas Praktikum 5</title>
</head>

<body>
    <section class="landing">  
    <div class="background">
        <img src="assets/img/bandara.jpg" alt="" pointer="none">
        <div class="container justify-content-center">
        <h3>WELCOME TO</h3>
        <h1>AIRLINE ROUTE REGISTRATION</h1>
        <button type="button" onclick="window.location.href='#regis'" class="btn btn-primary">REGISTRATION</button>
        </div>
    </div>
    <div class="running-text2">
        <marquee id="regis"direction="right"widht="500px" height="40" style="padding-top:7px;color:white;" loop="infinite">Soekarno-Hatta (CGK) 07.30 WIB || Ahmad Yani (SRG) 09.00 WIB || Adi Sumarmo (SOC) 10.30 WIB || Husein Sastranegara (BDO) 13.30 WIB || Halim Perdana Kusuma (HLP) 14.00 WIB || Ngurai Rai (DPS) 07.30 WIB || Sepinggan (BPN) 09.00 WIB || Adi Sucipto (JOG) 10.30 WIB|| Sultan Iskandar Muda (BTJ) 13.30 WIB || Hang Nadim (BTH) 14.00 WIB</marquee>
    </div>  
    </section> 

    <section class="registration" id="regist">
    <div class="container">
        <div class="row d-flex justify-content-center box">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="airlines" class="form-label">AIRLINES</label>
                        <input type="text" class="form-control" id="airlines" name="airlines">
                    </div>
                    <div class="row">
                        <div class="col-lg">
                    <label for="home" class="form-label">HOME AIRPORT</label>
                    <select class="form-select mb-3" name="home" id="home">
                        <option selected disabled>Choose Home Airport</option>
                        <?php foreach ($home_airport as $airport => $tax) : ?>
                            <option value="<?= $airport ?>"><?= $airport; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="destination" class="form-label">DESTINATION AIRPORT</label>
                    <select class="form-select mb-3" name="destination" id="destination">
                        <option selected disabled>Choose Destination Airport</option>
                        <?php foreach ($destination_airport as $airport => $tax) : ?>
                            <option value="<?= $airport ?>"><?= $airport; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">PRICE</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <button class="btn btn-info" name="submit" style="color:white;">SAVE</button>
                </form>
            </div>
        </div>
        </div>
        </section> 
        <?php
        $file = 'data/maskapai.json';
        $airline_data = array();

        $file_json = file_get_contents($file);

        $airline_data = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $tax = getHomeTax($home_airport, $_POST['home']) + getDestinationTax($destination_airport, $_POST['destination']);
            $total = $tax + $_POST['price'];

            $inputUser = array(
                "airlines" => $_POST['airlines'],
                "home" => $_POST['home'],
                "destination" => $_POST['destination'],
                "ticket" => $_POST['price'],
                "tax" => $tax,
                "total" => $total
            );

            array_push($airline_data, $inputUser);

            $data_json = json_encode($airline_data, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

        ?>
        <section class="data" id="data">
        <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="background-color:red;color:white;border:3px black;">Airlines</th>
                        <th scope="col" style="background-color:yellow;color:white;">Home Airport</th>
                        <th scope="col" style="background-color:orange;color:white;">Destination Airport</th>
                        <th scope="col" style="background-color:purple;color:white;">Ticket Price</th>
                        <th scope="col" style="background-color:navy;color:white;">Tax</th>
                        <th scope="col" style="text-align:center;background-color:green;color:white;">Total Ticket Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($airline_data as $data => $value) : ?>
                        <tr>
                            <td><?= $airline_data[$data]['airlines']; ?></td>
                            <td><?= $airline_data[$data]['home']; ?></td>
                            <td><?= $airline_data[$data]['destination']; ?></td>
                            <td><?= $airline_data[$data]['ticket']; ?></td>
                            <td><?= $airline_data[$data]['tax']; ?></td>
                            <td style="text-align:center"><?= $airline_data[$data]['total']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </section> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>