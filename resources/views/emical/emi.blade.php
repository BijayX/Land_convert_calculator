<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Converter</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       

        .unit-system-head {
            background-color: grey;
            color: #e2dada;
            font-weight: bold;
        }

        .mini-label {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <section class="py-4">
        <div class="container-fluid">
            <div class="row bg-white">
                <div class="col-md-12 py-3">
                    <h3 class="page-title">
                        Area Converter UNO TECH
                    </h3>
                   
                    <div class="page-content">
                          </div>
                        <div class="row">
                            <!-- Unit Converter Tool -->
                            <div class="col-md-9">
                                <form action="#" onsubmit="return false">
                                    <div class="align-self-end form-group">
                                        <button type="reset" class="btn btn-outline-info">
                                            Refresh
                                        </button>
                                        <div>
                                            <br>
                                    <div class="border bg-light p-4 rounded">
                                        <!-- Ropani System -->
                                        <div class="d-flex ">
                                            <div class="unit-system-head align-self-center p-3">
                                                Ropani System
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group px-4">
                                                    <label class="mini-label" for="">Ropani</label>
                                                    <input type="text" id="ropani-input" class="form-control" placeholder="0">
                                                </div>
                                                <div class="form-group px-2">
                                                    <label class="mini-label" for="">Aana</label>
                                                    <input type="text" id="anna-input" class="form-control" placeholder="0">
                                                </div>
                                                <div class="form-group px-2">
                                                    <label class="mini-label" for="">Paisa</label>
                                                    <input type="text" id="paisa-input" class="form-control" placeholder="0">
                                                </div>
                                                <div class="form-group px-2">
                                                    <label class="mini-label" for="">Daam</label>
                                                    <input type="text" id="daam-input" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="align-self-end form-group">
                                                <button type="submit" class="btn btn-success" onclick="convertFromRopani()">
                                                    Convert
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex ">
                                          <div class="unit-system-head align-self-center p-3">
                                             Bigha   System
                                          </div>
                                          <div class="d-flex">
                                              <div class="form-group px-4">
                                                  <label class="mini-label" for="">Bigha</label>
                                                  <input type="text" id="bigha-input" class="form-control" placeholder="0">
                                              </div>
                                              <div class="form-group px-2">
                                                  <label class="mini-label" for="">Kattha</label>
                                                  <input type="text" id="kattha-input" class="form-control" placeholder="0">
                                              </div>

                                              <div class="form-group px-2">
                                                  <label class="mini-label" for="">Dhur</label>
                                                  <input type="text" id="dhur-input" class="form-control" placeholder="0">
                                              </div>
                                          </div>
                                          <div class="align-self-end form-group">
                                              <button type="submit" class="btn btn-success" onclick="convertFromBigha()">
                                                  Convert
                                              </button>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="d-flex ">
                                        <div class="unit-system-head align-self-center p-3">
                                           Square Feet
                                        </div>
                                        <div class="d-flex">
                                            <div class="form-group px-4">
                                                <label class="mini-label" for="">Sq.Ft</label>
                                                <input type="text" id="sqf-input" class="form-control" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="align-self-end form-group">
                                            <button type="submit" class="btn btn-success" onclick="convertFromfeet()">
                                                Convert
                                            </button>
                                        </div>
                                      </div>
                                      <hr>
                                        <div class="d-flex ">
                                          <div class="unit-system-head align-self-center p-3">
                                             Square Meter
                                          </div>
                                          <div class="d-flex">
                                              <div class="form-group px-4">
                                                  <label class="mini-label" for="">Sq.M</label>
                                                  <input type="text" id="sqm-input" class="form-control" placeholder="0">
                                              </div>
                                          </div>
                                          <div class="align-self-end form-group">
                                              <button type="submit" class="btn btn-success" onclick="convertFrommeter()">
                                                  Convert
                                              </button>
                                          </div>
                                             
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
           <script>
                var ropaniput = document.getElementById('ropani-input');
                var annaput = document.getElementById('anna-input');
                var paisaput = document.getElementById('paisa-input');
                var daamput = document.getElementById('daam-input');

                var bighaput = document.getElementById('bigha-input');
                var katthaput = document.getElementById('kattha-input');
                var dhurpput = document.getElementById('dhur-input');

                var squarefeetput = document.getElementById('sqf-input');
                var squaremeterput = document.getElementById('sqm-input');

                function Decimalplace(value) {
                    return value.toFixed(3);
                }

                function convertSqMtoSqF(sqme) {
                    return (sqme * 10.764);
                }

                function convertSqFToSqM(sqfeet) {
                    return (sqfeet / 10.764);
                }

                function convertFromRopani() {
                    let sqme = (ropaniput.value * 508.72) + (annaput.value * 31.80) + (paisaput.value * 7.95) + (daamput.value * 1.99);

                    BighaSystem(sqme);
                    FeetSystem(sqme);
                    MeterSystem(sqme);
                }

                function convertFromBigha() {
                    let sqme = (bighaput.value * 6772.63) + (katthaput.value * 338.63) + (dhurpput.value * 16.93);

                    showRopaniSystem(sqme);
                    FeetSystem(sqme);
                    MeterSystem(sqme);
                }

                function convertFromfeet() {
                    let sqme = convertSqFToSqM(squarefeetput.value);

                    showRopaniSystem(sqme);
                    BighaSystem(sqme);
                    MeterSystem(sqme);
                }

                function convertFrommeter(){
                    let sqme = squaremeterput.value;

                    showRopaniSystem(sqme);
                    BighaSystem(sqme);
                    FeetSystem(sqme);
                }

                function showRopaniSystem(sqme) {
                    let ropani = parseInt(sqme / 508.74);
                    sqme = sqme % 508.74;
                    let anna = parseInt(sqme / 31.80);
                    sqme = sqme % 31.80;
                    let paisa = parseInt(sqme / 7.95);
                    sqme = sqme % 7.95;
                    let daam = sqme / 1.99;

                    ropaniput.value = ropani;
                    annaput.value = anna;
                    paisaput.value = paisa.toFixed(2);
                    daamput.value = daam.toFixed(3);
                }

                function BighaSystem(sqme) {
                    let bigha = parseInt(sqme / 6772.41);
                    sqme = sqme % 6772.41;
                    let kattha = parseInt(sqme / 338.62);
                    sqme = sqme % 338.62;
                    let dhur = sqme / 16.93;

                    bighaput.value = bigha.toFixed(0);
                    katthaput.value = kattha.toFixed(2);
                    dhurpput.value = dhur.toFixed(3);
                }

                function FeetSystem(sqme) {
                    squarefeetput.value = Decimalplace(convertSqMtoSqF(sqme));
                }

                function MeterSystem(sqme) {
                    squaremeterput.value = Decimalplace(sqme);
                }
            </script>