<?php       
    if(isset($_POST["PrintLPK"]))
    {        
        function callAPI($method, $url, $data, $username){
           $curl = curl_init();
           switch ($method){
              case "POST":
                 curl_setopt($curl, CURLOPT_POST, 1);
                 if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                 break;
              case "PUT":
                 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                 if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
                 break;
              default:
                 if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
           }
           // OPTIONS:
           curl_setopt($curl, CURLOPT_URL, $url);
           curl_setopt($curl, CURLOPT_HTTPHEADER, array(
              'User: '.$username,
              'Content-Type: application/json',
           ));
           curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
           // EXECUTE:
           $result = curl_exec($curl);
           if(!$result){die("<div class='alert alert-info alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>FAILED!!!</strong> Server Maintenance
            </div>");}
           curl_close($curl);
           return $result;
        } 
        
        function display_array_recursive($response)
        {
            if($response)
            {
                echo "<tr style='text-align:center; font-weight:bold'>
                        <td rowspan='2'>No.</td>
                        <td colspan='2'>Nomor</td>
                        <td rowspan='2'>Lks</td>
                        <td rowspan='2'>Nama Customer</td>
                        <td rowspan='2'>Ket</td>
                        <td rowspan='2'>Tunai<br/>Rp.</td>
                        <td colspan='2'>Cheque+Giro</td>
                        <td rowspan='2'>Sub Total<br/>Rp.</td>
                        <td rowspan='2'>Disc. Denda /<br/>+Angsuran</td>
                        <td rowspan='2'>Biaya<br/>Tagih<br/>Rp.</td>
                        <td rowspan='2'>Total<br/>Rp.</td>
                        <td rowspan='2'>Opr</td>
                    </tr>
                    <tr style='text-align:center; font-weight:bold'>
                        <td>Kwitansi</td>
                        <td>Kontrak</td>
                        <td>Rp.</td>
                        <td>Lbr</td>
                    </tr>";
                $i=0;
                foreach($response as $id=>$hotel)
                {
                    $i+=1;
                    echo "<tr>";
                    
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='nokwitansi')
                            {
                                echo "<td style='text-align:center'>".$i."</td>";
                                echo "<td style='padding:0px 3px; text-align:center'>".strtoupper($value)."</td>";                                 
                            }
                            else if($key=='namakonsumen')
                            {
                                $namakonsumen = substr($value,0,16);
                                echo "<td style='padding:0px 3px;'>".strtoupper($namakonsumen)."</td>";                                
                            }
                            else if($key=='nokontrak' || $key=='lokasi' || $key=='keterangan' || $key=='opr')
                            {
                                echo "<td style='padding:0px 3px; text-align:center'>".strtoupper($value)."</td>";                                
                            }
                            else if($key=='tunairp' || $key=='cekgirorp' || $key=='cekgirolbr' || $key=='subttlrp' || $key=='totalrp')
                            {
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";                               
                            }
                            else if($key=='disdenrp' || $key=='bytagih')
                            {
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";                               
                            }
                            else if($key=='keterangan saat proses')
                            {
                                echo "<script>alert('Silahkan hubungi IT Dept. karena $value')";
                                echo "<script>window.open('/Featurex/ReportLPK','_self')</script>";
                            }
                        }


                    }
                }
                echo "</tr>";
            }
        }
        
        function TotalTrx($response)
        {
            if($response)
            {
                $i=0;
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='nokwitansi')
                            {
                                $i+=1;                                
                            }
                        }
                    }
                }
            }
            return $i;
        }
                
        function TotalAngsuran($response)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='grandtotalangsuran')
                            {
                                $j=$value;                                
                            }
                        }
                    }
                }
            }
            return $j;
        }
                
        function TotalDenda($response)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='grandtotaldenda')
                            {
                                $k=$value;                                
                            }
                        }
                    }
                }
            }
            return $k;
        }
                
        function TotalAdmBPKB($response)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='grandtotaladmbpkb')
                            {
                                $l=$value;                                
                            }
                        }
                    }
                }
            }
            return $l;
        }
                
        function TotalBiayaTagih($response)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='grandtotalbytagih')
                            {
                                $l=$value;                                
                            }
                        }
                    }
                }
            }
            return $l;
        }
                
        function TotalPenerimaanSebelumJamDua($response)
        {
            if($response)
            {
                $sum=0;
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='totalrp')
                            {
                                $x=$value;
                            }
                            
                            if($key=='jam')
                            {
                                if($value<='140000')
                                {
                                    $sum+=$x;
                                }
                            }
                        }
                    }
                }
            }
            return $sum;
        }
                
        function TotalPenerimaanSetelahJamDua($response)
        {
            if($response)
            {
                $sum=0;
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='totalrp')
                            {
                                $x=$value;
                            }
                            
                            if($key=='jam')
                            {
                                if($value>'140000')
                                {
                                    $sum+=$x;
                                }
                            }
                        }
                    }
                }
            }
            return $sum;
        }
        
        function TotalOpr($response)
        {
            if($response)
            {
                $opr=array();
                $i="";
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='opr')
                            {
                                /*if(array_search($value,$opr)=='')
                                {*/
                                    $i=$value;
                                    array_push($opr,$i);
                                /*}*/                                
                            }
                        }
                    }
                }
            }
            return array_values(array_unique($opr));
        }
                
        function TotalPenerimaanOpr($response,$opr)
        {
            if($response)
            {
                $totalrp=0;
                $grandtotal=0;
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='totalrp')
                            {
                                $totalrp=$value;
                            }
                            if($key=='opr')
                            {
                                if($value==$opr)
                                {
                                    $grandtotal+=$totalrp;
                                }
                            }
                        }
                    }
                }
            }
            return $grandtotal;
        }
        
        function display_grand_total($response,$username,$usergroup)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {                    
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='grandtotalangsuran')
                            {
                                echo "<tr>";
                                echo "<td style='padding:0px 3px; text-align:center; font-weight:bold; font-size:13px;' rowspan='4'>Sub<br/>Total</td>";
                                echo "<td>&nbsp;Angsuran</td>";
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";
                                echo "<td style='text-align:center' colspan='4' rowspan='8'>
                                        <p>Dibuat oleh,</p>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <p>($username)</p>
                                    </td>
                                    <td style='text-align:center' colspan='2' rowspan='8'>
                                        <p>Diperiksa oleh,</p>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <p>(......................)</p>
                                    </td>
                                    <td style='text-align:center' colspan='3' rowspan='8'>
                                        <p>Disetujui oleh,</p>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <p>(......................)</p>
                                    </td>";
                                echo "</tr>";
                            }
                            
                            else if($key=='grandtotaldenda')
                            {
                                echo "<tr>";
                                echo "<td>&nbsp;Denda</td>";
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";
                                echo "</tr>";
                            }
                            
                            else if($key=='grandtotaladmbpkb')
                            {
                                echo "<tr>";
                                echo "<td>&nbsp;Adm. BPKB</td>";
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";
                                echo "</tr>";
                            }
                            
                            else if($key=='grandtotalbytagih')
                            {
                                echo "<tr>";
                                echo "<td>&nbsp;Biaya Tagih</td>";
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";
                                echo "</tr>";
                            }
                            
                            /*else if($key=='totalpenerimaan' and $usergroup=='KSR')
                            {
                                echo "<tr>";
                                echo "<td style='padding:0px 3px; font-size:10px;' colspan='2'><b>Grand Total Penerimaan (".strtoupper($value).")</b>:</td>";
                            }
                            else if($key=='rp' and $usergroup=='KSR')
                            {
                                echo "<td style='padding:0px 3px; text-align:right'>".number_format($value)."</td>";
                                echo "</tr>";
                            }*/                        
                        }
                    }
                }
            }
        }
                
        function display_grand_total_not_cashier($response)
        {
            if($response)
            {
                foreach($response as $id=>$hotel)
                {
                    //Second Loop - Loop through Hotel Properties (HotelName,HotelLocation,Nearby Locations, RoomRate)
                    foreach($hotel as $key=>$value)
                    {
                        //Check if a property is an array. 
                        if(is_array($value))
                        {
                            //Third loop - Loops properties that are arrays. They are said to nested/ have child nodes (Nearby Locations, RoomRate)
                            foreach($value as $subkey=>$subvalue)
                            {
                                echo "<td>".$subkey." : ".$subvalue."</td>";
                            }
                        }

                        else
                        {
                            if($key=='totalpenerimaan')
                            {
                                echo "<div style='float:left; padding:0px 3px' class='col-md-3'>";
                                echo "&nbsp;~ Penerimaan Kasir <b>(".strtoupper($value).")</b>";
                            }
                            else if($key=='rp')
                            {
                                $SumGrandTotal += $value;
                                echo " : Rp. ".number_format($value)." ";
                                echo "</div>";
                            }
                        }
                    }
                }
            }
        }
                    
        setlocale(LC_ALL, 'id_ID');
                
        $PrintDateb = new DateTime(date("Y-m-d"));
        $PrintDate = strftime('%d %B %Y', $PrintDateb->getTimestamp());
        
        $PrintDateTime = $_POST["LoginCityName"].', '.$PrintDate.', '.date("H:i:s");
        
        $LoginUser = $_POST["LoginUser"];
        $Operator = substr($LoginUser,0,2).''.substr($LoginUser,-1);
        $LoginGroup = $_POST["LoginGroup"];
        $LoginCityAddress = $_POST["LoginCityAddress"];
        $Menu = $_POST["Menu"];
        $Function = $_POST["Function"];
        $Penerimaan = $_POST["Penerimaan"];
        $Tanggal1 = date_format(date_create($_POST["Tanggal1"]),"Ymd");
        $Tanggal2 = date_format(date_create($_POST["Tanggal2"]),"Ymd");        
        $TampilNama = $_POST["TampilNama"];
        $Kendaraan = $_POST["Kendaraan"];
        $CetakUrut = $_POST["CetakUrut"];
        $TampilItem = $_POST["TampilItem"];

        $data_program =  array("LoginUser"=>$LoginUser,
                               "Menu"=>$Menu,
                               "Function"=>$Function,
                               "Penerimaan"=>$Penerimaan,
                               "Tanggal1"=>$Tanggal1,
                               "Tanggal2"=>$Tanggal2,
                               "TampilNama"=>$TampilNama,
                               "Kendaraan"=>$Kendaraan,
                               "CetakUrut"=>$CetakUrut,
                               "TampilItem"=>$TampilItem);

        $HitAddOn = callAPI('POST', 'http://192.168.188.1:8123/CmdLaporanPenerimaanKasir', json_encode($data_program), $LoginUser);

        $ResAddOn = json_decode($HitAddOn, true);
            
        $GrandTotalPenerimaan = TotalAngsuran($ResAddOn) + TotalDenda($ResAddOn) + TotalAdmBPKB($ResAddOn) + TotalBiayaTagih($ResAddOn);

        /*if(!isset($ResAddOn['0']['Brs0001']))
        {
            echo "<script>window.open('/featurex/ReportLPK','_self')</script>";
        }
        else
        {*/
            
        /*}*/
        if(TotalTrx($ResAddOn)<1)
        {
            echo "<script>window.open('/featurex/ReportLPK','_self')</script>";
        }
    }
    else
    {
        echo "<script>window.open('/featurex/ReportLPK','_self')</script>";
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <style media="print">
            @media {
                .back
                {
                    /*border-top: 1px dashed gray;*/
                    width: 70% !important;
                    height: 70% !important;
                    /*padding: 5% !important;*/
                }
            }
            @page {
                size:A4 potrait;
                margin: 10px 40px;
                -webkit-print-color-adjust: exact;
            }        
        </style>
        <style>
            *
            {
                font-family: sans-serif;
            }
            /*#one,#two,#three
            {
                page-break-after: always;
            }*/
            #watermark
            {
                /*page-break-after: always;*/
                /*border-bottom: 1px dashed whitesmoke;
                border-top: 1px dashed gray;*/
                width: 50%;
                display: block;
                margin: 20% auto;
            }
            #auto
            {
                width: 100%;
                height: 100%;
                overflow-x:auto;
                position: absolute;
            }
            table
            {
                border-collapse: collapse;
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
            }
            td
            {
                border: 1px solid black;
                display: inline block;
                margin: 0px;
                padding: 0px;
                font-size: 8px;
            }
            h2
            {
                margin:0px auto;
                padding: 0px;
                font-size:30px; 
                font-stretch: expanded; 
                font-weight:lighter; 
                color:red;
            }
            h4
            {
                margin: 0px;
                padding: 0px;
                color: mediumseagreen;
                text-align: right;
                font-style: italic;
            }
            hr
            {
                border: 1px solid mediumseagreen;
            }
            P
            {
                margin: 0px;
                padding: 0px;
                display: inline-table;
                width: 100%;
                font-size: 11px;
            }
            .address
            {
                margin:0px auto;
                font-size:9px; 
                font-style:italic;
                color: darkblue;
            }
            .price
            {
                padding: 0px 5px;
                border: 1px solid dimgrey;
                border-radius: 3px;
                background-color: lightgrey;
            }
            .merge
            {
                text-align-last: left;
            }
            .details
       
            {
                font-size: 9px;
            }
            .ttd
            {
                text-align: center;
            }
            .footnote
            {
                margin-top: 10px;
                width: 85%;
                border-top: 1px solid dimgrey;
            }
        </style>
        <script src="jquery-1.9.0.min.js"></script>
        <script language="javascript" type="text/javascript">
            function printDiv() {
                 var printContents = document.getElementById('auto').innerHTML;
                 var originalContents = document.body.innerHTML;

                 document.body.innerHTML = printContents;

                 window.print();

                 document.body.innerHTML = originalContents;
                window.location.href = "/Featurex/ReportLPK";
            }
        </script>
    </head>
    <body>
            
        <button type="submit" style="clear: both; margin:0px auto; padding:0px 10px; height:30px; border-top-left-radius:0px; border-bottom-left-radius:0px;" form="Pay" name="ConfirmPay" onclick="printDiv()">Print LPK</button>
        <div id="auto">
            
<?php
            
    /* QR CODE */
    include "phpqrcode/qrlib.php"; 
    $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
    if (!file_exists($tempdir)) //Buat folder bername temp
    mkdir($tempdir);

    //ambil logo
    $logopath="img\Logo\CMD-logo-cmd[resize].png";

    //isi qrcode jika di scan
    $codeContents = '['.$PrintDateTime.'] ~ [MadeBy: '.$LoginUser.'] ~ [TtlTrx: '.TotalTrx($ResAddOn).'] ~ [TtlAng: Rp. '.number_format(TotalAngsuran($ResAddOn)).'] ~ [TtlDnd: Rp. '.number_format(TotalDenda($ResAddOn)).'] ~ [TtlAdmBPKB: Rp. '.number_format(TotalAdmBPKB($ResAddOn)).'] ~ [TtlByTagih: Rp. '.number_format(TotalBiayaTagih($ResAddOn)).'] ~ [GrndTtlPenerimaan: Rp. '.number_format($GrandTotalPenerimaan).']'; 
    
    //simpan file qrcode
    QRcode::png($codeContents, $tempdir.'LPK-'.$Tanggal1.'_'.$Tanggal1.'-'.$Operator.'-'.$Penerimaan.'-'.$GrandTotalPenerimaan.'.png', QR_ECLEVEL_H, 10,4);

    // ambil file qrcode
    $QR = imagecreatefrompng($tempdir.'LPK-'.$Tanggal1.'_'.$Tanggal1.'-'.$Operator.'-'.$Penerimaan.'-'.$GrandTotalPenerimaan.'.png');

    // memulai menggambar logo dalam file qrcode
    $logo = imagecreatefromstring(file_get_contents($logopath));

    imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
    imagealphablending($logo , false);
    imagesavealpha($logo , true);

    $QR_width = imagesx($QR);
    $QR_height = imagesy($QR);

    $logo_width = imagesx($logo);
    $logo_height = imagesy($logo);

    // Scale logo to fit in the QR Code
    $logo_qr_width = $QR_width/4;
    $scale = $logo_width/$logo_qr_width;
    $logo_qr_height = $logo_height/$scale;

    imagecopyresampled($QR, $logo, $QR_width/2.7, $QR_height/2.3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

    // Simpan kode QR lagi, dengan logo di atasnya
    imagepng($QR,$tempdir.'LPK-'.$Tanggal1.'_'.$Tanggal1.'-'.$Operator.'-'.$Penerimaan.'-'.$GrandTotalPenerimaan.'.png');
            
    $QRCodeFile = $tempdir.'LPK-'.$Tanggal1.'_'.$Tanggal1.'-'.$Operator.'-'.$Penerimaan.'-'.$GrandTotalPenerimaan.'.png';

    //menampilkan file qrcode 
    /*echo '<div align="center"><h2>Create QR Code With Logo PHP</h2></div>';
    echo '<img src="'.$tempdir.$no_cust.'-'.$DataAngsuranKe.'.png'.'" />';*/
            
?>            
            <table>
                <thead id="one">
                    <img id="watermark" class="back" src="CapellaLogoTrans.png">
                    <tr>
                        <td style="text-align:center;">
                            &nbsp;<img width="50px;" src="CapellaLogo.png">&nbsp;
                        </td>
                        <td colspan="11">
                            <h2 style="color:red; font-size: 28px;">&nbsp;PT.CAPELLA MULTIDANA</h2>
                            <p class="address">
                                &nbsp;www.cmd.co.id<br/>
                                <?php echo '&nbsp;'.$LoginCityAddress; ?>
                            </p>
                        </td>
                        <td colspan="2">
                            <h4 style="text-align:center; font-size:15px;">LPK</h4>
                            <p style="text-align:center; font-weight:bold;" class="address">
                                <?php
                                    echo '&nbsp;'.date_format(date_create($_POST['Tanggal1']),"d-m-Y")."&nbsp;<br/>s/d<br/>";
                                    echo '&nbsp;'.date_format(date_create($_POST['Tanggal2']),"d-m-Y").'&nbsp;';
                                ?>
                            </p>
                        </td>
                    </tr>
                    <?php
                        echo display_array_recursive($ResAddOn);
                    ?>
                    
                    <tr>
                        <td colspan='3'>&nbsp;</td>
                        <td style='text-align:center' colspan='2' rowspan='9'>
                            <img width="110px;" src="<?php echo $QRCodeFile; ?>">
                        </td>
                        <td colspan='9'>
                            <p><?php echo '&nbsp;'.$PrintDateTime; ?></p>
                            
                        </td>
                    </tr>
                    
                    <?php
                        echo display_grand_total($ResAddOn,$LoginUser,$LoginGroup).'&nbsp;';
                        if($LoginGroup == "KSR")
                        {
                    ?>
                    
                    <tr>
                        <td style="font-size:10px;" colspan='2'>&nbsp;<b>Grand Total Penerimaan:</b>&nbsp;</td>
                        <td style="padding:0px 3px; text-align:right;">
                            <?php
                                echo number_format($GrandTotalPenerimaan);
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style='padding:0px 3px; font-size:10px;' colspan='2'>
                            <b>Total Penerimaan (sebelum 14:00)</b>:
                        </td>
                        <td style='padding:0px 3px; text-align:right'>
                            <?php echo number_format(TotalPenerimaanSebelumJamDua($ResAddOn)); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style='padding:0px 3px; font-size:10px;' colspan='2'>
                            <b>Total Penerimaan (setelah 14:00)</b>:
                        </td>
                        <td style='padding:0px 3px; text-align:right'>
                            <?php echo number_format(TotalPenerimaanSetelahJamDua($ResAddOn)); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan='3'>&nbsp;</td>
                    </tr>
                    
                    <?php
                        }
                        else
                        {
                    ?>                    
                    
                    <tr>
                        <td style="font-size:10px;" colspan='2'>&nbsp;<b>Grand Total Penerimaan:</b>&nbsp;</td>
                        <td style="padding:0px 3px; text-align:right;">
                            <?php
                                echo number_format($GrandTotalPenerimaan);
                            ?>
                        </td>
                    </tr>                    
                    
                    <tr>
                        <td style='padding:0px 3px; font-size:10px;' colspan='2'>
                            <b>Total Penerimaan (sebelum 14:00)</b>:
                        </td>
                        <td style='padding:0px 3px; text-align:right'>
                            <?php echo number_format(TotalPenerimaanSebelumJamDua($ResAddOn)); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style='padding:0px 3px; font-size:10px;' colspan='2'>
                            <b>Total Penerimaan (setelah 14:00)</b>:
                        </td>
                        <td style='padding:0px 3px; text-align:right'>
                            <?php echo number_format(TotalPenerimaanSetelahJamDua($ResAddOn)); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan='3'>&nbsp;<b>Daftar Penerimaan:</b></td>
                    </tr>
                    
                    <tr>                        
                        <td colspan='14'>
                                
                            <?php
                                /*echo display_grand_total_not_cashier($ResAddOn);*/
                                $Opr = TotalOpr($ResAddOn);
                                for ($x = 0; $x <= count($Opr); $x++)
                                {
                                    if($Opr[$x]!='')
                                    {
                                        /*echo ' ~ Total Penerimaan <b>('.strtoupper($Opr[$x]).')</b>: Rp.  '.number_format(TotalPenerimaanOpr($ResAddOn,$Opr[$x]));*/
                                        echo "<tr>
                                                <td colspan='2' style='padding:0px 3px'>";
                                        echo 'Total Penerimaan <b>('.strtoupper($Opr[$x]).')</b>';
                                        echo "</td>
                                            <td style='text-align:right; padding:0px 3px'>";
                                        echo number_format(TotalPenerimaanOpr($ResAddOn,$Opr[$x]));
                                        echo "<td colspan='11' style='border:none; border-left:1px solid black;'>
                                            </td>
                                            </tr>";
                                    }
                                }
                            ?>
                            
                        </td>
                    </tr>
                    
                    <?php
                        }
                    ?>
                    
                </thead>
            </table>
        </div>    
    </body>
</html>