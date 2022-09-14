<?php
define('admin',true);
$title = "ADMINISTRATION | QR GENERATOR";
require "includes/headers.php";
?>
 <div class="main-panel">
                <!-- table content -->
                <div class="content-wrapper">
                    <div class="row">
                        <!-- DataTales Example -->
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Generate Faculty QR Code</h4>
                                    <div class="table-responsive">
                                        <form onsubmit="generate();return false;">
                                            <div class="form-group">
                                                <label>Enter Faculties' ID Number</label>
                                                <input type="text" class="form-control text-muted" id="qr" name="qrInput" placeholder="Enter Faculties' ID Number" required />
                                            </div>
                                            <div class="input-group-append">
                                            <input type="submit" class="btn btn-success" name="generateQr" value="Generate QR Code">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Messages</h4>
                                    <div class="table-responsive">
                                        <div id="screenshot" style="height: 210px;width:210px;background-color: white;" class="d-flex align-items-center justify-content-center">
                                            <div id="qrResult" ></div>
                                        </div>
                                        <button id="downloadQr" class="m-3 btn btn-behance col-10"><i class="ti-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#downloadQr").click(function(){
                            domtoimage.toBlob(document.getElementById("screenshot")).then(function(blob){
                                window.saveAs(blob, "Faculty.jpg");
                            });
                        });
                    });
                </script>
                <script type="text/javascript">
                    var qrcode= new QRCode(document.getElementById('qrResult'),{
                    width:200,
                    height:200,
                    });
                    function generate(){
                    var message = document.getElementById('qr');
                    qrcode.makeCode(message.value);
                    }
                </script>
                <!-- table content ends -->

<?php
include "includes/footers.php"
?>