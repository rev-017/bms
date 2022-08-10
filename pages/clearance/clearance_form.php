<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    $_SESSION['clr'] = $_GET['clearance'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
       
        <div class="col-xs-12 col-sm-6 col-md-8" style="background: white; " >
		
            <div style=" background: black;" >
			
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; margin-top: 400px; border: 2px solid black;">
                    
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        <?php
                            $qry = mysqli_query($con,"SELECT * from official");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['sPosition'] == "Captain"){
                                    echo '
                                    <p>
                                    <b>'.strtoupper($row['completeName']).'</b><br>
                                    <span style="font-size:15px;">PUNONG BARANGAY</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Ordinance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Sports / Law / Ordinance</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Public Safety)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Public Safety / Peace and Order</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Tourism)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Culture & Arts / Tourism / Womens Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Budget & Finance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Budget & Finance / Electrification</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Agriculture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Agriculture / Livelihood / Farmers Sector / PWD Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Education)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Health & Sanitation / Education</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Infrastracture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['completeName']).'<br>
                                    <span style="font-size:15px;">Infrastracture / Labor Sector/ Environment / Beautification</span>
                                    </p>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
				<div class="pull-left" style="margin-top: 200px; margin-left: -200px">
                       <?php $qry1=mysqli_query($con,"SELECT * from resident r left join clearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                                while($row1 = mysqli_fetch_array($qry1)){
                        echo '<image src="../resident/image/'.basename($row1['image']).'" style="width:160px;height:160px;"/>';
                        }
                        ?>
                    </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">
				<image src="../../img/mini.png" style="width:170px;height:130px; margin-left:-525px; margin-top: 30px;"/>
				
                    <div class="pull-left" style="font-size: 16px; margin-left: -20px; margin-top: 30px;"><b><center>
                      
						Republic of the Philippines<br>
                       
                        BARANGAY SAN JUAN<br>
                        Tel. 123-4567<br></b></center><br>
						<p class="text-center" style="font-size: 20px; font-size:bold;">Office of the Barangay Council</p><br><br>
                   
					</div>
					
                    
                    <div class="col-xs-12 col-md-12">
                        <p class="text-center" ><b style="font-size: 28px;font-size:bold;">BARANGAY CLEARANCE</b></p><br><br>
                        <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that the person whose photo, signature and right thumb mark appear herein, is a resident of Barangay San Juan known to be of good moral character and law-abiding citizen in the community. The following is/are our findings.</p>

                        <?php
                            $qry=mysqli_query($con,"SELECT * from resident r left join clearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                                <p><b><br>
                                    SURNAME: <u>'.strtoupper($row['lname']).'</u><br>
                                    FIRST NAME: <u>'.strtoupper($row['fname']).'</u><br>
                                    MIDDLE NAME: <u>'.strtoupper($row['mname']).'</u><br>
                                    ADDRESS: <u>'.strtoupper($row['houseNoStreet']).'</u><br>
                                    BIRTHDATE & PLACE: <u>'.strtoupper(date_format($bdate,"m-d-Y")).'/'.strtoupper($row['bplace']).'</u><br>
                                    GENDER/CIVIL STATUS: <u>'.strtoupper($row['gender']).'/SINGLE</u><br>
                                    NATIONALITY: <u>'.strtoupper($row['nationality']).'</u><br>
                                    RELIGION: <u>'.strtoupper($row['religion']).'</u><br>
                                    PURPOSE: <u>'.strtoupper($row['purpose']).'</u><br>
                                    FINDINGS: <u>NO DEROGATORY RECORD</u><br>
                                </b></p>
								
                              
                                ';
                            }
                        ?>
                    </div>  
					
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: 20px;">
                        <div style="height:120px; width:140px; border: 1px solid black;">
                            <center><span style="text-align: center; line-height: 160px;">Right Thumb Mark</span></center>
                        </div><br>
                        <p>Tax Payer's Signature</p>
                    </div>
                </div>
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br>
                    <?php
                    $qry = mysqli_query($con,"SELECT * from official");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Captain"){
                            echo '
                            <p>
                            <b style="font-size:18px;">'.strtoupper($row['completeName']).'<br>
                            <span style=" text-align: center;">Punong Barangay</span></b>
                            </p>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-8 col-md-4" style="margin-top:-40px;">
				 <?php
                            $qry=mysqli_query($con,"SELECT * from resident r left join clearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                              
								
                                <p><b>
                                    RES. CERT. NO.: <u>'.strtoupper($row['clearanceNo']).'</u><br>
                                    ISSUED ON: <u>'.strtoupper(date_format($date,"F j, o")).'</u><br>
                                    ISSUED AT: <u>BARANGAY OFFICE</u><br>
                                    OR. NO.: <u>'.strtoupper($row['id']).'</u><br>
                                    ISSUED ON: <u>'.strtoupper(date_format($date,"F j, o")).'</u><br>
                                </b></p> <br><br>
                                ';
                            }
                        ?>
				

                </div>
                <div class="col-xs-3 pull-right" style="margin-bottom:40px;">
               
                </div>
            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>
    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'visible';
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>