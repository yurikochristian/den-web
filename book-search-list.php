<?php
$phpdate = strtotime( $den['book_date'] );
$mysqldate = date( 'd-m-Y', $phpdate );
echo
    "<a href=\"http://localhost:8080/den-web/booking-detail.php?id=" . $den['book_id'] . "\" style=\"text-decoration:none;\">
    <div class=\"container-fluid bg-4 text-center\" style=\"padding-bottom: 0px !important; padding-top: 0px !important;\">
        <table class=\"pilih\">
                <div>
                    <tr>
                        <div style=\"position: relative;\">
                            <td><img src=\"img/Test1.jpg\" style=\"height:150px;\"></td>
                            <div class=\"absolute\" style=\"position: absolute; margin-top: 40px; left:130px; width: auto; height: auto; background-color: #FED701; padding: 10px;\">" . $den['region'] . "</div>
                            </div>
                            <td style=\"text-align: left; padding: 50px;\">
                                <table style=\"height: 200px\">
                                    <tr>
                                        <td colspan=\"2\"><h2>" . $den['name'] . "</h2></td>
                                    </tr>
                                    <tr>
                                        <td style=\"display:flex;\"><label style=\"background-color: #FED701; padding: 10px;\"><strong style=\"font-size:30px;\">Tanggal Booking " . $mysqldate . "</strong></label><label style=\"background-color: #FF9900; padding: 20px;\">Durasi: " . $den['duration'] . " Hari</label></td>
                                    </tr>
                                </table>
                            </td>
                        </div>
                    </tr>
                </div>
            
        </table>
    </div>
    </a>";
