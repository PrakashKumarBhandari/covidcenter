
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/Logo.png" type="image/png" sizes="16x16">
    <title>Oxygen Maps Covid 19 | View</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="tableactive.js"></script>

  </head>
<style>

@font-face {
      font-family: Avenir;
      src: url(fonts/avenir_ff/AvenirLTStd-Roman.otf);
    }
	body{
		font-family: Avenir;
		background-color: white;
	}
    .footertext {
  height: 19px;
  color: #383838;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 19px;
}
.submitbtn{
	 height: 19px;
  width: 132.39px;
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 19px;
  text-align: center;
  height: 32px;
  width: 200px;
  border-radius: 4px;
  background-color: #3F8EFC;
  border: none;
  position: relative;
    top: 40px;
}

.formlabel{
	height: 22px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  letter-spacing: 0;
  line-height: 22px;
  display: block;
}

.selectbox{
	box-sizing: border-box;
  height: 32px;
  width: 172px;
  border: 1px solid #EBEBEB;
  border-radius: 4px;
  background-color: #FFFFFF;
    margin-top: 10px;
}
.inputform{
	box-sizing: border-box;
  margin-top: 10px;
    margin-bottom: 10px;
  height: 32px;
  width: 85%;
 border: 1px solid #EBEBEB;
  border-radius: 4px;
  background-color: #FFFFFF;"
}

.formdesc3{
	 height: 22px;
  width: 188px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-style: oblique;
  letter-spacing: 0;
  line-height: 22px;

}
.formdesc2{  height: 22px;
  width: 599px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  letter-spacing: 0;
  line-height: 22px;

}

 .formdesc1 {
  	height: 27px;
  width: 179px;
  color: #3F8EFC;
  font-family: Avenir;
  font-size: 20px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 27px;
  }
  .formview{height: 660px;
  width: 98%;
  border-radius: 12px;
  background-color: #FFFFFF;
  box-shadow: 0 4px 14px 0 rgba(0,0,0,0.1); margin-top: 5%;}

.live-oxygen-status {
  color: #3F8EFC;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 19px;
  margin-top: 10px;
}
.time {
  height: 14px;
  width: 79px;
  color: #3F8EFC;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 14px;

}
.hospitals-and-their {
  height: 22px;
  color: #383838;
  font-family: Avenir;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;

}
.rectangle-1 {
  height: 10px;
  width: 10px;
  border-radius: 2px;
  background-color: #39C9A7;
  display: block;
}
.rectangle-copy-6 {
  height: 10px;
  width: 10px;
  border-radius: 2px;
  background-color: #F15366;
    display: block;
}
.hospital {
  height: 14px;
  width: 48px;
  color: #383838;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 14px;
}
.firsttable{
    border-color: rgb(222 226 230 / 0%);
}
.namehos {
  height: 16px;
  width: 215px;
  color: #383838;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 16px;
}
.red-rectangle {
     height: 24px;
font-size: 10px;
    border-radius: 4px;
    background-color: rgb(241 83 102);
    color: white;
        text-align: center;
}
.green-rectangle {
     height: 24px;
     font-size: 10px;
    border-radius: 4px;
       background-color: rgb(57 201 167);
    color: white;
        text-align: center;
}
.orange-rectangle {
     height: 24px;
  font-size: 10px;
    border-radius: 4px;
    background-color: orange;
    color: white;
        text-align: center;
}
.blue-rectangle {
     height: 24px;

    border-radius: 4px;
    background-color: blue;
    color: white;
    position: relative;
    left: 3px;
        text-align: center;
}
.orgrectangle-1 {
  height: 10px;
  width: 10px;

  border-radius: 2px;
  background-color: orange;
  display: block;
}
.rectangles {
  height: 32px;
  width: 280px;
  border-radius: 4px;
  background-color: #3F8EFC;
  position: relative;
  left: 8em;
  display: flex;
    align-content: center;
    justify-content: space-between;
}
.see-full-table {
  height: 19px;
  width: 222.07px;
  color: #FFFFFF;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 19px;
  text-align: center;
  position: relative;
  top: 3px;
  justify-content: space-around;
      position: relative;
    left: 30px;
}
        

@font-face {
      font-family: Avenir;
      src: url(fonts/avenir_ff/AvenirLTStd-Roman.otf);
    }
.covid-19-oxygen-map {
  height: 44px;
  width: 443px;
  color: #3F8EFC;
  font-family: Avenir;
  font-size: 32px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 44px;
}
.oxygen-map-all {
  height: 19px;
  width: 265px;
  color: #383838;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 19px;
  position: relative;
  top: -4em;
}
  [title~=Close]>img {
    width: 19px !important;
    height: 23px !important;
    margin: 0px !important;
    margin-top: 5px !important;
}
 
.rectangle {
  height: 70px;
  width: 100%;
  border-radius: 8px;
  background-color: #FFFFFF;
  box-shadow: 0 2px 10px 0 rgba(0,0,0,0.2);
      display: flex;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-evenly;
    align-items: baseline;
    flex-direction: row;
}
.group-4 {

    align-items: center;
        display: flex;
   
}
.indicators{
	display: flex;
  height: 70px;
  border-radius: 8px;
  background-color: #FFFFFF;
  box-shadow: 0 2px 10px 0 rgba(0,0,0,0.1);

}
.red-circle-copy-5-red-circle {
  height: 32px;
  width: 32px;
}
.oxygen-needed-hospit {

  width: 200px;
  color: #383838;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 19px;
  padding: 9px;


}
#map{
    width: 100%;
    height: 100%;
}
.group-10 {
  height: 650px;
  width: 1199.37px;
}
td,th{
    text-align: left;
    padding: 5px;
        white-space: nowrap;
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .below-reload{
    flex-direction: column !important;;
  }
  .with-map{
    width: 100% !important;
  }


}
.covid-19-oxygen-map-text {
  height: 33px;
  color: #3F8EFC;
  font-family: Avenir;
  font-size: 24px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 33px;
  padding-left: 1em;
}
.group-top {
    height: 70px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.needed {
  height: 22px;
  width: 61px;
  color: #F15366;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 22px;
}
sub{
    display: block;
}
.last-update {
  height: 10px;
  width: 74px;
  color: #EBEBEB;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.83px;
  line-height: 10px;
}
.oxygen-status-in-hos {
  height: 22px;
  color: #383838;
  font-family: Avenir;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;
}
.rectangle-2 {
  height: 10px;
  width: 82px;
  border-radius: 4px;
  background-color: #606D82;
}
.last-update {
  height: 10px;
  width: 74px;
  color: #EBEBEB;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.83px;
  line-height: 10px;
  position: relative;
  left: 30px;
}
.timedate{
    height: 10px;
  width: 77px;
  color: #383838;
  font-family: Avenir;
  font-size: 10px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 10px;
  position: relative;
  left: 41px;
  top: 9px;
      top: 7px;
}
.navbarbox{
    height: 72px;background-color: #FFFFFF;
    box-shadow: 0 2px 14px 0 rgba(66,66,66,0.1); align-content: center;
    margin-bottom: 20px;

}

                .purpose-of-this-site {
  height: 27px;

  color: #FF5289;
  font-family: Avenir;
  font-size: 1em;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 27px;
}
.main-purpose-of-this {
  height: 72px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 24px;
}

.this-site-is-volunta {
  height: 44px;
  width: 572px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 300;
  letter-spacing: 0;
  line-height: 22px;
}
.tablebelow{
width: 2%;text-align: center;  height: 22px;
  width: 121px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  letter-spacing: 0;
  line-height: 22px;
  padding: 1.5rem .5rem !important;
}
.oxygen-status-around {
  height: 22px;
  width: 430px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 22px;
}

.lastupdatebox{
	height: 18px;
     width: 82px;
     border-radius: 4px;
     background-color: #606D82;
         position: relative;
}
.lastupdatetext{
	height: 10px;
                  width: 74px;
                  color: #EBEBEB;
                  font-family: Avenir;
                  font-size: 10px;
                  font-weight: 500;
                  letter-spacing: 0.83px;
                  line-height: 10px;
                  
    position: absolute;
    top: 4px;
    left: 4px;

}
.timedate{
	  display: inline-block;
    width: 120px;
    position: relative;
    left: 11px;
}
.requestoxygenText{
    height: 20px;
    color: rgb(255 255 255);
    font-family: Avenir;
    font-size: 13px;
    font-weight: 900;
    letter-spacing: 0;
    line-height: 19px;
    text-align: center;
    padding: 3px;
}
.requestoxygenBtn{
	  height: 32px;
  width: 133px;
  border-radius: 4px;
  background-color: #3F8EFC;
  border: none;
}
.disabledreqoxygenbtn{
	background-color: #A7A7A7;
		  height: 32px;
  border-radius: 4px;

  border: none;
}
.centertd{
	display: flex;
    align-content: space-around;
    justify-content: space-around;
}
.centertbltext{
	 height: 22px;text-align:center; 
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;
}
.leftaligntd {
	  height: 22px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;
}
.table>:not(caption)>*>* {
    padding: .5rem .5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: none !important;
}
.sort-hospitals-by {
  height: 22px;
  width: 125px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;
}
.sortoptiontext{
  height: 22px;
  width: 63px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 22px;
}


.relodbtn {
    display: flex;
    align-items: center;
    height: 32px;
    width: 103px;
    border-radius: 4px;
    background-color: rgb(63 142 252);
    border: none;
    position: absolute;
    right: 0;
}



.oxygen-status {
  height: 22px;
  width: 110px;
  color: #383838;
  font-family: Avenir;
  font-size: 16px;
  font-weight: 900;
  letter-spacing: 0;
  line-height: 22px;
}
  .active, .disabledreqoxygenbtn:hover {
  background-color: rgb(13 110 253);
  color: white;
}

.textOxygen{
  margin-right: 14px;  
  font-family: Avenir;
  font-size: 8px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 11px;
}
.oxtextindicators{
display:flex;flex-direction: row;align-items: center;
justify-content: flex-end;margin-bottom: 5%;
}
.mob-map{
  margin-top: 1em;
}
.sort{
   position: absolute;
    right: 0;
}
  @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  #search{
    width: 80%;
  }
  .below-reload{
    flex-direction: column !important;
  }
  .with-map{
    width: 100% !important;
  }
  
  .formview{
  	height: 950px;
  }
  .detail_2{
  	margin-top: 1% !important;
  }

  .submitbtn{
  	width: 36% !important;
  }
  .purposeImage{
  	width: 60%;
  }


 
 .mob{
 	margin-top: 5%;
    transform: scale(.75);
 }
 .covid-19-oxygen-map-text{
 	font-size: 18px;
 }

 .oxygenStatus{
      padding-left: 1.5em;
 }
.relodbtn{
    margin-top: 1em;
    margin-left: 1em;
    left: 0pc;
}
 #map{
 	width: auto !important;
 }
.group-4 {
    height: 49px;
    width: 172px;
}


.oxygen-status-around {
	width: auto;
}
.indicators{
  display: none !important;
}
.indicator-mob{
  display: block !important;
}
   
.disabledreqoxygenbtn {


    margin: 2px;

}
.mob-map{
  margin-top: 3.5em;
}

.sort{
  position: relative;
}
}



</style>
<body>
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'location_db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<?php
 
  

  $coordinates = array();
  $latitudes = array();
  $longitudes = array();
  $organization = array();
  $totaloxygen = array();
    $reqoxygen = array();
    $con1 = array();
    $con2 = array();
    $exlessoxygen=array();

  // Select all the rows in the markers table
  $query = "SELECT * FROM `location_tab` ";
  $result = $db->query($query) or die('data selection for google map failed: ' . $db->error);

  while ($row = mysqli_fetch_array($result)) {

    $latitudes[] = $row['locationLatitude'];
    $longitudes[] = $row['locationLongitude'];
    $coordinates[] = 'new google.maps.LatLng(' . $row['locationLatitude'] .','. $row['locationLongitude'] .'),';
    $organization[] =  $row['org_name'];
    $con1[]=$row['contact1'];
    $con2[]=$row['contact2'];
    $totaloxygen[]= $row['totalOxygen'];
    $reqoxygen[]= $row['requiredOxygen'];
    $exlessoxygen[]= $row['exlessOxygen'];

  }
    
  //remove the comaa ',' from last coordinate
  $lastcount = count($coordinates)-1;
  $coordinates[$lastcount] = trim($coordinates[$lastcount], ","); 

?>


<script>
      function initMap() {
        var mapOptions = {
          zoom: 6.6,
          center: {lat:28.2, lng:84},
          mapTypeId: google.maps.MapTypeId.SATELITE
        };

        var map = new google.maps.Map(document.getElementById('map'),mapOptions);

        var RouteCoordinates = [
          <?php
            $i = 0;
          while ($i < count($coordinates)) {
            echo $coordinates[$i];
            $i++;
          }
          ?>
        ];

        var RoutePath = new google.maps.Polyline({
          path: RouteCoordinates,
          geodesic: true,
          strokeColor: '#1100FF',
          strokeOpacity: 1.0,
          strokeWeight: 10
        });

        green='img/green-ico.png';
        blue='img/blue-ico.png';
        red='img/red-ico.png';
        orange='img/orange-ico.png';

        var infowindow = new google.maps.InfoWindow();
        var marker, i;
            
           <?php for ($i = 0; $i <  count($latitudes); $i++) {  
                    ?>
          lat= <?php echo $latitudes[$i]?>;
          lon= <?php echo $longitudes[$i]?>;
          org_name= "<?php echo $organization[$i]?>-";
          con1= "<?php echo $con1[$i]?>-";
          con2= "<?php echo $con2[$i]?>-";
          availableOx= "<?php echo $totaloxygen[$i]?>-";
          reqoxygen= "<?php echo $reqoxygen[$i]?>-";
          exlessoxygen= "<?php echo $exlessoxygen[$i]<0 ? $exlessoxygen[$i]*-1 : $exlessoxygen[$i] ;?>";      
           exlessoxygens= exlessoxygen+"-"; 
          <?php if($exlessoxygen[$i]<0){
            ?>
        
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            label: {
                     text: exlessoxygen,
                     color:"black",
                      fontSize: "12px",
                      fontWeight: "bold"
                  },
            icon: red,

          
        title:org_name+exlessoxygens+availableOx+reqoxygen+con1+con2,
         // animation: google.maps.Animation.BOUNCE
          });
               
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                    var data = marker.getTitle();
                    var detail=data.split("-");

                        var html = "<div style='padding-left: 10px;padding-right: 12px;'>"+
                                   "<p style='color:black;font-weight: 900;font-size:11px;'>"+detail[0]+"</p>"+ 
                                   "<p style='color:red;font-weight: 500;font-size:11px;'>"+detail[1]+" litres Needed</p>"+
                                  "<p style='color:black;font-size:12px;'><span style='font-weight:bold;font-size:12px;'>Total Oxygen Available</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[2]+" litres</span></p><p style='color:black;'>"+
                                    "<span style='font-weight:900;font-size:12px;'>Total Oxygen Required</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[3]+" litres</span></p><p style='color:black;font-weight:500;'>01452411 , 0144533</p></div>";
                        infowindow.setContent(html);
                        infowindow.open(map, marker, html);
            }
          })(marker, i));

          <?php
           }
else if(((($exlessoxygen[$i])<=10) && (($exlessoxygen[$i])>0) )|| $exlessoxygen[$i] =='0'){
            ?>
        
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            label: {
                     text: exlessoxygen,
                     color:"black",
                      fontSize: "12px",
                      fontWeight: "bold"
                  },
            icon: orange,

          
        title:org_name+exlessoxygens+availableOx+reqoxygen+con1+con2,
         // animation: google.maps.Animation.BOUNCE
          });
               
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                    var data = marker.getTitle();
                    var detail=data.split("-");

                        var html = "<div style='padding-left: 10px;padding-right: 10px;'>"+
                                   "<p style='color:black;font-weight: 900;font-size:12px;'>"+detail[0]+"</p>"+ 
                                   "<p style='color:orange;font-weight: 500;font-size:11px;'>"+detail[1]+" litres left</p>"+
                                  "<p style='color:black;font-size:12px;'><span style='font-weight:bold;font-size:12px;'>Total Oxygen Available</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[2]+" litres</span></p><p style='color:black;'>"+
                                    "<span style='font-weight:900;font-size:12px;'>Total Oxygen Required</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[3]+" litres</span></p><p style='color:black;font-weight:500;'>01452411 , 0144533</p></div>";
                        infowindow.setContent(html);
                        infowindow.open(map, marker, html);
            }
          })(marker, i));

         <?php
           }
else if(($exlessoxygen[$i]) >10 ){
            ?>
        
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, lon),
            map: map,
            label: {
                     text: exlessoxygen,
                     color:"black",
                      fontSize: "12px",
                      fontWeight: "bold"
                  },
            icon: green,
            
          
        title:org_name+exlessoxygens+availableOx+reqoxygen+con1+con2,
         // animation: google.maps.Animation.BOUNCE
          });
               
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                    var data = marker.getTitle();
                    var detail=data.split("-");

                        var html = "<div style='padding-left: 13px;padding-right: 10px;'>"+
                                   "<p style='color:black;font-weight: 900;font-size:12px;'>"+detail[0]+"</p>"+ 
                                   "<p style='color:green;font-weight: 500;font-size:11px;'>"+detail[1]+" litres Excess</p>"+
                                  "<p style='color:black;font-size:12px;'><span style='font-weight:bold;font-size:12px;'>Total Oxygen Available</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[2]+" litres</span></p><p style='color:black;'>"+
                                    "<span style='font-weight:900;font-size:12px;'>Total Oxygen Required</span><span style='color: black;font-weight: 500;display: block;margin-top: 0.5em;'>"+detail[3]+" litres</span></p><p style='color:black;font-weight:500;'>01452411 , 0144533</p></div>";
                        infowindow.setContent(html);
                        infowindow.open(map, marker, html);
            }
          })(marker, i));

          <?php
           }

            }
?>
          

       }
      
      //google.maps.event.addDomListener(window, 'load', initialize);
      </script>

      <!--remenber to put your google map key-->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiw5_hZtvnSLsi_JGJ5lulbc2WkyCWomA&callback=initMap"></script>



<nav class="navbar">
    <div class="container">
   <div class="row"><div class="covid-19-oxygen-map-text col-md-6" style="width: auto;">Covid-19 Oxygen Map Nepal</div>
   </div>
</div>
  </nav>

<div class="container">
       <div class="row">  
    <div class="col-md-6">
        <span class=" oxygen-status-in-hos d-block" style="font-weight:bold;">Oxygen Status in Hospitals in Nepal</span>
        <span style="margin-top: 1em; display: flex">
    <span class="lastupdatebox">

                  <span class="lastupdatetext">
              LAST UPDATE</span></span>
              <span class="timedate">
  
                    <?php
                   $lastTime ='';
                 $getlastdata = "SELECT timeupdated
            FROM   oxygenupdatehistory 
            ORDER  BY timeupdated DESC 
            LIMIT  1";
                                    if($result = mysqli_query($db, $getlastdata)){
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){

                                        echo ($row['timeupdated']);
                                        $lastTime=$row['timeupdated'];
                                    }}
                                    else{
                                        echo "some error occoured";
                                    }
                                }
                                    
                                    ?></span>
</span>
</div>
              <div class="col-md-6" style="position: relative;">   
                <button class="relodbtn" onclick="reloadPage()">
    <span><img src="img/refresh@2x.png" style="height: 15px;
    position: relative;
    top: -3px;"></span><span style=" color: #FFFFFF;
  font-family: Avenir;
  font-size: 12px;position: relative;left: 10px;">Reload Data</span></button> </div> 
</div>
</div>
                 
                 
 

                
      
    
<div class="container mob-map">
     <div class="row" >
                 <div class="col-md-8">
        
      <div id="map" style="height: 430px;"></div>
     
<div class="indicators row">
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/green-ico.png">
                 </span><span class="oxygen-needed-hospit">Hospitals with Sufficient Oxygen</span></div>
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/orange-ico.png">
                 </span><span class="oxygen-needed-hospit">Hospitals with Oxygen less than 10 litres</span></div>
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/red-ico.png" style="
    height: 32px;
">
                 </span><span class="oxygen-needed-hospit" style="position: relative;left: 0.5em;top:6px;">Oxygen Needing Hospitals</span></div>
                 
            
        </div>
<div class="row indicator-mob" style=" display: none; ">
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/green-ico.png" style="width: 60%;">
                 </span><span class="oxygen-needed-hospit">Hospitals with Sufficient Oxygen</span></div>
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/orange-ico.png" style="width: 60%;">
                 </span><span class="oxygen-needed-hospit" style="position: relative;top: -1px;">Hospital with Oxygen less than 10 litres</span></div>
                 <div class="group-4 col-md-4"><span class="red-circle-copy-5-red-circle"><img src="img/red-ico.png" style="width: 60%;">
                 </span><span class="oxygen-needed-hospit">Oxygen Needed Hospitals</span></div>

            
        </div>
        </div>
      

      

  <div class="col-md-4" style=" height: 500px;
  border-radius: 8px;
  background-color: #FFFFFF;
  box-shadow: 0 4px 24px 0 rgba(0,0,0,0.1);">
    <div class="row" style="margin-top: 10px;">
        <div class="live-oxygen-status col-md-6">Live oxygen status</div> 
        <div class="time col-md-6"><?php echo $lastTime?></div>
    </div>

    <div class="row" style="margin-bottom: 5%;"><span class="hospitals-and-their">Hospitals and their Oxygen Status</span></div>
  <div class="row" >
      <div class="oxtextindicators">
<span class="rectangle-1 " style="margin-right: 4px;"></span><span  class="textOxygen">Adequate Oxygen </span>
<span class="rectangle-copy-6 " style="margin-right: 4px;"></span><span  class="textOxygen">Inadequate Oxygen </span>
<span class="orgrectangle-1" style="margin-right: 4px;"></span><span class="textOxygen">Sparse Oxygen</span>
</div>
</div>
   <div style="margin-top: 1%">
     <?php
                   
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM location_tab where hide=1 and exlessOxygen is not null order by  dateUpdated desc LIMIT 10 ";
                    if($result = mysqli_query($db, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="firsttable">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th class='hospital' style='width:2px;'>#</th>";
                                        echo "<th class='hospital'>Hospital</th>";
                                        echo "<th class='hospital'>Oxygen Status</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $i=1;
                                while($row = mysqli_fetch_array($result)){
                                    
                        
                                      echo "<tr>";
                                        echo "<td class='namehos' style='width:2px;'>" . $i. "</td>";
                                        echo "<td class='namehos' style='text-transform: capitalize; white-space: break-spaces'>" . $row['org_name'] . "</td>";
                                        
                                       if($row['exlessOxygen']<0){
                                       
                                        echo "<td>
                                        <span  class='red-rectangle' style='display:block'><span style='position: relative;top: 5px;'>".($row['exlessOxygen']*-1)." Litres Needed</span></span></td>";
                                     }
                                     
                                     elseif ($row['exlessOxygen']>=0 && $row['exlessOxygen']<=10) {
                                       
                                       echo "<td >
                                        <span  class='orange-rectangle' style='display:block'> <span style='position: relative;top: 5px;'>".($row['exlessOxygen']*1)." Litres Left</span></span></td>";
                                     }
                                      elseif ( $row['exlessOxygen']>10) {
                                       
                                        echo "<td>
                                        <span  class='green-rectangle' style='display:block'> <span style='position: relative;top: 5px;'>".($row['exlessOxygen']*1)." Litres Available</span></span></td>";
                                     }
                                    
                                  
                                       $i=$i+1;
                                      
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } 
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 ?>



        </div>
        </div>
      </div>
    </div>
    


                     <div class="container">
 <div class="row" style="margin-top: 2%;">
            <div class="col-md-6">
              <p class="oxygen-status-around">Oxygen Status in Hospitals of Nepal</p>
            </div>
             <div id="provincebtns">
                <button class="disabledreqoxygenbtn active"  id="pp0"><span class="requestoxygenText" >All Provinces</span></button>
                <button class="disabledreqoxygenbtn"  id="pp1"><span class="requestoxygenText" >Province 1</span></button>
                <button class="disabledreqoxygenbtn"  id="pp2"><span class="requestoxygenText" >Province 2</span></button>
                <button class="disabledreqoxygenbtn"  id="pp3"><span class="requestoxygenText" >Bagmati</span></button>
                <button class="disabledreqoxygenbtn"  id="pp4"><span class="requestoxygenText" >Gandaki</span></button>
                <button class="disabledreqoxygenbtn"  id="pp5"><span class="requestoxygenText" >Lumbini</span></button>
                <button class="disabledreqoxygenbtn"  id="pp6"><span class="requestoxygenText" >Karnali</span></button>
                <button class="disabledreqoxygenbtn"  id="pp7"><span class="requestoxygenText" >Sudurpashchim</span></button>
              </div>
              <script type="text/javascript">
                // Add active class to the current button (highlight it)
                var header = document.getElementById("provincebtns");
                var btns = header.getElementsByClassName("disabledreqoxygenbtn");
                for (var i = 0; i < btns.length; i++) {
                  btns[i].addEventListener("click", function() {
                  var current = document.getElementsByClassName("active");
                  if (current.length > 0) { 
                    current[0].className = current[0].className.replace(" active", "");
                  }
                  this.className += " active";
                  });
                }
   

              </script>
<div class="row">
            <div class="form-group col-md-4" style="padding-top: 15px;" id='search'>
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search by Hospital Name" />
        </div>
         
         <div class="col-md-8" style="padding-top: 15px;position: relative;">
                    <div class="sort">
                        <label for="Sort_Hospitals_By" class="sort-hospitals-by" style="margin-top: 9px;/* position: absolute; */">Sort Hospitals by</label>
                        <select id="sortHospitals" name="sortHospitals" class="selectbox" style="margin-top: 0px;width: 20em;">
                        <option value="0" class="sortoptiontext">Show all</option>
                        <option value="1" class="sortoptiontext">Hospitals with Sufficient Oxygen</option>
                        <option value="2" class="sortoptiontext">Hospitals with Oxygen less than 10 litres</option>
                         <option value="3" class="sortoptiontext">Oxygen Needing Hospitals</option>
                      </select>
          </div>
</div>
  
  </div>

        
           
           </div>


          <div class="table-responsive" id="dynamic_content" style="padding-top: 1.5%;"></div>


</div>
                   
                 


<div class="container">
<form class="formview" method="post" action="volunteerdata.php">
                     <div class="row">
                       
 <div class="detail_1 col-md-6" style="padding-left: 5%;padding-top: 3%;">
  
  <div style="padding-top: 15px;">
    <span>
        <img src="img/handsharke.png" style="font-size:40px;color:#3278a1" alt="handshake">
      <!-- <img src=""> -->
    </span>
    <span class="formdesc1"> Call for Volunteers</span></div> 
    <div style="padding-top: 15px;">
      <span class="formdesc2">If you want to help in an any kind possible. Fill up the form below. We will contact you.</span>
    </div>
    <div style="padding-top: 15px;"><span class="formdesc3">* All fields are compulsory</span></div>
        
    <div class="detail_1" style="margin-top: 38px;">    
    <label for="name" class="formlabel">Full Name*</label>

    <input type="text" id="name" name="name" placeholder="Your name.." class="inputform" required="">
    </div>
    <div class="detail_1"> 
    <label for="phone" class="formlabel">Phone Number*</label>
    <input type="text" id="phone" name="phone" placeholder="9841000000" class="inputform" required="">
    </div>
    <div>
    <label for="Email" class="formlabel">Email Address*</label>
    <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" class="inputform" required="">
        </div>
           <div>
    <label for="address" class="formlabel">Current Address*</label>
</div>
  <div>
    <input type="text" id="address" name="address" placeholder="Ward No., Muncipality/VDC, District, Provinence" class="inputform" required="">
    </div> 
       
       </div> 

    <div class="detail_2 col-md-6" style="margin-top: 13.5%; padding-left:5% ">
       <div>
    <label for="gender" class="formlabel">Gender</label>
    <div style="    margin-top: 15px;">
        <input type="radio" value="male">
        <span class="formlabel" style="display: contents;">Male</span>
  <span style="margin-left: 30px;"></span>
        <input type="radio" value="female"><span class="formlabel" style="display: contents;">Female</span>
    </div>
    </div>

    <div>
    <label for="age" class="formlabel" style="margin-top: 2.5%;">Age</label>
      <select id="Age" name="Age" class="selectbox" style="    margin-top: 7px;">
      <option value="10">18</option>
      <option value="11">19</option>
      <option value="12">20</option>
      <option value="12">21</option>
      <option value="12">22</option>
      <option value="12">23</option>
      <option value="10">24</option>
      <option value="11">25</option>
      <option value="12">26</option>
      <option value="12">27</option>
      <option value="12">28</option>
      <option value="12">29</option>
      <option value="12">30</option>
    </select>
        </div>

        <div>
      <label for="Blood_group" class="formlabel" style="margin-top: 9px;">Blood Group</label>
      <select id="blood" name="blood" class="selectbox">
      <option value="A +ve">A +ve</option>
      <option value="B +ve">B +ve</option>
      <option value="AB +ve">AB +ve</option>
      <option value="O + ve">O + ve</option>
      <option value="A -ve">A -ve</option>
      <option value="B -ve">B -ve</option>
      <option value="AB -ve">AB -ve</option>
      <option value="O -ve">O -ve</option>
    </select>
        </div>

        <div>
    <label for="Transportation" class="formlabel" style="    margin-top: 12px;">Means of Transportation</label>
      <select id="transportation" name="transportation" class="selectbox">
      <option value="cycle">Cycle</option>
      <option value="Motorcycle">Motorcycle</option>
      <option value="Bus">Bus</option>
    </select>
       </div>
   
 
</div>
<div class="col-md-12" style="padding-left: 6%;">
       <input type="submit" value="Submit" class="submitbtn" style="height: 35px;
    width: 13%;">
    <div><?php 
error_reporting(0);
    if($_GET['msg']){
     echo "<div style='color: green;margin-top: 51px;padding: 2em;'>We have got your request. We will contact you as fast as possible. Stay Safe !</div>";
    }
    else{

echo "";
    }?>
    </div>
</div>
    </form></div>

<div class="container">
                      <div class="row" style="padding-top: 20%;">
                        <div class="col-md-6">
                            <div class="col-sm-12"><p class="purpose-of-this-site">Purpose of this site</p></div>
                            <div class="col-sm-12"><p class="main-purpose-of-this">Main purpose of this site is to make available the data and status of Oxygen needed and required around the Hospitals inside Kathmandu Valley. Data uploaded here is real-time updated.</p></div>
                             <div style="margin-top: 2em" class="col-sm-12"><p class="main-purpose-of-this">This site is voluntarily developed and maintained by Innovate Tech in coordination with Volunteer Group from Kathmandu Valley.</p></div>
                           
                        </div>
                        
                            <div class="col-md-6"><img src="img/purpose.png" alt="purposeImage" class="purposeImage"></div>
           
                      </div>
              
                 
</div>
            <div class="container">
                    <div class="row" style="padding-top: 10%;">
                        <div class="col-md-4">
                            <p class="footertext">Covid 19 Oxygen Map</p>
                        </div>
                        <div class="col-md-2">
                            <p class="footertext">Terms of Use</p>
                        </div>
                        <div class="col-md-2">
                            <p class="footertext">Terms of Service</p>
                        </div>
                        <div class="col-md-2">
                            <p class="footertext">Privacy Policy</p>
                        </div>
                        <div class="col-2">
                            <p class="footertext" style="white-space: nowrap;"> © 2021 Oxygen Map All rights Reserved</p>
                        </div>
                    </div>
                     </div>
</div>

                      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script type="text/javascript">
                         function  reloadPage(){
                            location.reload();
                         }

                       </script>


  </body>
</html>