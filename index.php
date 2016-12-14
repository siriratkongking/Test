<!DOCTYPE HTML>

<html>
<head> 
	<meta charset=”UTF-8″ >
	<title> แผนที่จังหวัดขอนแก่น </title> 
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="leaflet073/leaflet.css" />
	<link rel="stylesheet" href="Leaflet.draw-master/dist/leaflet.draw.css" />
	<link rel="stylesheet" href="leaflet.measurecontrol.css" />
	<link rel="stylesheet" href="geosearch/geosearch.css" />
	<link rel="stylesheet" href="leaflet-usermarker-master/leaflet.usermarker.css" />
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="leaflet-draw/leaflet-draw.css" >
	<link rel="stylesheet" href="leaflet-routing-machine-2.6.2/css/leaflet-routing-machine.css" />
	
	<script type="text/javascript" src="jquery11.js"></script>
	<script type="text/javascript" src="leaflet073/leaflet.js"></script>
	<script type="text/javascript" src="leaflet073/leaflet-src.js"></script>
	<script type="text/javascript" src="Leaflet.draw-master/dist/leaflet.draw.js"></script>
	<script type="text/javascript" src="leaflet.measurecontrol.js"></script>
	<script type="text/javascript" src="core.js"></script>
	<script type="text/javascript" src="indextest.js"></script>
	<script type="text/javascript" src="geosearch/geosearch.js"></script>
	<script type="text/javascript" src="leaflet-heat/heat.js"></script>
	<script type="text/javascript" src="leaflet-usermarker-master/leaflet.usermarker.js"></script>
	<script type="text/javascript" src="http://leaflet.github.io/Leaflet.markercluster/example/realworld.10000.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
	<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="leaflet-draw/leaflet-draw.js"></script>
	<!--<script type="text/javascript" src="leaflet-routing-machine-2.6.2/dist/leaflet-routing-machine.js"></script>-->
	
	<!--Administrative-->
	<script src="json file/Administrative/thai.js"></script>
	<script src="json file/Administrative/province.js"></script>	
	<script src="json file/Administrative/tambon.js"></script>	
	<script src="json file/Administrative/tessaban.js"></script>	
	<script src="json file/Administrative/amphoepoint.js"></script>	
	<script src="json file/Administrative/village.js"></script>
	<script src="json file/Administrative/wat.js"></script>	
	<script src="json file/Administrative/school.js"></script>
	<script src="json file/Administrative/eia.js"></script>
	<script src="json file/Administrative/ngo.js"></script>
	<script src="json file/Administrative/tao.js"></script>
	<script src="json file/Administrative/comprehensive.js"></script>
	
	
	<script src="style/Administrative/thaistyle.js"></script>
	<script src="style/Administrative/prvstyle.js"></script>
	<script src="style/Administrative/tambonstyle.js"></script>
	<script src="style/Administrative/tessabanstyle.js"></script>
	<script src="style/Administrative/amppointstyle.js"></script>
	<script src="style/Administrative/villpoint.js"></script>
	<script src="style/Administrative/watpoint.js"></script>
	<script src="style/Administrative/schoolpoint.js"></script>
	<script src="style/Administrative/eiastyle.js"></script>
	<script src="style/Administrative/ngopoint.js"></script>
	<script src="style/Administrative/taopoint.js"></script>
	<script src="style/Administrative/comprehensivestyle.js"></script>
	
	
	<!--Forest-->
	<script src="json file/Forest/forestc.js"></script>
	<script src="json file/Forest/fzone.js"></script>
	<script src="json file/Forest/fexist.js"></script>
	
	
	<script src="style/Forest/forestcstyle.js"></script>
	<script src="style/Forest/fzonestyle.js"></script>
	<script src="style/Forest/fexiststyle.js"></script>
	
	
	<!--Water-->
	<script src="json file/Water/wtrbody.js"></script>
	<script src="json file/Water/gwwell.js"></script>
	<script src="json file/Water/irr.js"></script>
	<script src="json file/Water/precipit.js"></script>

	<script src="style/Water/wtrbodystyle.js"></script>
	<script src="style/Water/gwwellstyle.js"></script>
	<script src="style/Water/irrstyle.js"></script>
	<script src="style/Water/precipitstyle.js"></script>
	
	
	<!--Land-->
	<script src="json file/Land/sprob2.js"></script>
	<script src="json file/Land/sgroup2.js"></script>
	<script src="json file/Land/lu2535.js"></script>
	
	<!--Heritage-->
	<script src="json file/Heritage/heritageoepp.js"></script>
	
	
	<!--Factory-->
	<script src="json file/Factory/factory.js"></script>
	
</head>
	

<body>

     <!-- รูปหัวเพจ-->
	 <div class="container-fluid" style="background-color:#FAF8F8">
	 
	 
	      <div class="row">
	        <div class="col-xs-12 col-md-2" style="margin-top:0px;margin-bottom: 10px">
			  <img src="images/gis.png" width="200px" height="150px">
             </div>
			 
			 <div class="col-xs-12 col-md-10" style="margin-top:10px;margin-bottom: 10px">
				<p><h1>โครงการระบบสนับสนุนการตัดสินใจเชิงพื้นที่บนอินเตอร์เน็ต</h1></p>
				<p><h3>คณะเทคโนโลยี มหาวิทยาลัยขอนแก่น</h3></p>
             </div>
		</div>
		
     <nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://www.kku.ac.th/?l=th">Khon Kaen University</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Map</a></li>
      <li><a href="http://technology.kku.ac.th/">Faculty of Technology</a></li>
      <li><a href="https://www.google.co.th/maps">Google Map</a></li> 
      
    </ul>
  </div>
</nav>
	  
	  
      <!-- Title -->
       <!--<div class="row">
        <div class="col-sm-12 col-md-12" >
         <div class="panel-group" id="accordion0">
            <div class="panel panel-warning ">
              <div class="panel-heading" >
                <h4 class="panel-title">
                   <h5>โครงการระบบสนับสนุนการตัดสินใจเชิงพื้นที่บนอินเตอร์เน็ต</h5>
				   <p><h6>คณะเทคโนโลยี มหาวิทยาลัยขอนแก่น</h6></p>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	   <!-- ด้านซ้ายมือ -->
	   
	  
	   
        <div class="row">
       <!--<div class="col-sm-4 col-md-2" style="margin-top:0px;margin-bottom: 0px" >
		 <!-- ด้านซ้ายมือบน -->  
			  
		<!--<div class="panel panel-warning">
		 <div class="panel-heading text-left">
          <p><a href="#"><h4>หน้าหลัก</h4></a></p>
          <p><a href="#"><h4>หน้าแรก</h4></a></p>
          <p><a href="#"><h4>คณะเทคโนโลยี</h4></a></p>
        </div>
	 </div>
		 
		  <!-- ด้านซ้ายมือกลาง -->  
		 
         <!-- <div class="panel-group" id="accordion1">
		     <div class="panel panel-success">
                <div class="panel-heading">
				 <div class= "panel-heading text-center"><h4>ค้นหาการใช้ประโยชน์ที่ดิน</h4></div>
				 </div>
                  <div class="panel-body">
                    <form id="filterForm">
					
					  <!--ค้นหาอำเภอ-->
					  
            <!--          <div class="form-group">
                        <label for="exampleInputEmail1">อำเภอ</label>
                        <select class="form-control" id="ampor">
                             <option value="0" checked="checked">--โปรดเลือกอำเภอ--</option>
                             <option value="1">กระนวน</option>
                             <option value="2">เขาสวนกวาง</option>
                             <option value="3">กิ่ง อ.โคกโพธิ์ไชย</option>
                             <option value="4">ชนบท</option>
                             <option value="5">ชุมแพ</option>
                             <option value="6">กิ่ง อ.ซำสูง</option>
                             <option value="7">น้ำพอง</option>
                             <option value="8">กิ่ง อ.โนนศิลา</option>
                             <option value="9">บ้านไผ่</option>
                             <option value="10">บ้านฝาง</option>
                             <option value="11">กิ่ง อ.บ้านแฮด</option>
                             <option value="12">เปือยน้อย</option>
                             <option value="13">พระยืน</option>
							 <option value="14">พล</option>
                             <option value="15">ภูผาม่าน</option>
                             <option value="16">ภูเวียง</option>
                             <option value="17">เมืองขอนแก่น</option>
                             <option value="18">มัญจาคีรี</option>
                             <option value="19">แวงน้อย</option>
                             <option value="20">แวงใหญ่</option>
							 <option value="21">เวียงเก่า</option>
                             <option value="22">สีชมพู</option>
                             <option value="23">กิ่ง อ.หนองนาคำ</option>
                             <option value="24">หนองเรือ</option>
                             <option value="25">หนองสองห้อง</option>
                             <option value="26">อุบลรัตน์</option>
							 <option value="27">ทั้งหมด</option>
                        </select>
                      </div>
					  
					  <!--ค้นหาการใช้ประโยชน์ที่ดิน-->
					  
			<!--		    <div class="form-group">
                        <label for="exampleInputEmail1">การใช้ประโยชน์ที่ดิน</label>
                        <select class="form-control" id="ampor">
                             <option value="0" checked="checked">--โปรดเลือกประเภทการใช้ประโยชน์ที่ดิน--</option>
                            
                             <option value="1">กระถิน</option>
                             <option value="2">ข้าวโพด</option>
                             <option value="3">ข้าวโพด-ไม้พุ่ม</option>
                             <option value="4">ตัวเมืองและย่านการค้า</option>
                             <option value="5">ทะเลสาป บึง</option>
                             
                        </select>
                      </div>
					  
					<button type="button" class="btn btn-default pull-right" id="submitLand">ค้นหา</button>
                    </form>
                </div>
             </div>
          </div>
        
		  <!-- ด้านซ้ายมือล่าง -->
		  
<!--		<div class="panel-group" id="accordion1">
		     <div class="panel panel-danger">
                <div class="panel-heading">
				  <div class= "panel-heading text-center"><h4>ค้นหาพื้นที่เสี่ยงภัยทางธรรมชาติ</h4></div>
				  </div>
                  <div class="panel-body">
                    <form id="filterForm">
					<div class="form-group">
                        <label for="exampleInputEmail1">ประเภทความเสี่ยง</label>
                        <select class="form-control" id="landused">
                          <option value="0" checked="checked">--โปรดเลือกประเภทความเสี่ยง--</option>
						   <option value="1">พื้นที่เสี่ยงต่อดินเสื่อมโทรม</option>
                          <option value="2">พื้นที่เสี่ยงดินเค็ม</option> 
                          <option value="3">พื้นที่เสี่ยงภัยแล้ง</option>
                          <option value="4">พื้นที่เสี่ยงน้ำท่วม</option>
						</select>
                      </div>
					  
					  <div class="form-group">
                        <label for="exampleInputEmail1">ระดับความเสี่ยง</label>
                        <select class="form-control" id="landused">
                          <option value="0" checked="checked">--โปรดเลือกระดับความเสี่ยง--</option>
						   <option value="1">สูง</option>
                          <option value="2">ปานกลาง</option> 
                          <option value="3">น้อย</option>
                          <option value="4">น้อยมาก</option>
						  <option value="5">ทั้งหมด</option>
                        </select>
                      </div>
					  
					  <button type="button" class="btn btn-default pull-right" id="submitLand">ค้นหา</button>
                    </form>
				  </div>
                </div>
              </div>
	         </div>
		
		
		
		
		
		
              <!-- ด้านขวามือ -->  
			  
        <div class="col-sm-8 col-md-12" style="margin-top:0px; margin-bottom:0px">
          <div class="panel-group panel-group-map" id="accordion2">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>แผนที่จังหวัดขอนแก่น</h4></div>
				  <div id="map" style="width: 100%;height: 550px"></div>
				 
				  <p><h4 align="right">ค่าพิกัด X:<span id="x"> </span>&nbsp;Y:<span id="y"></span></h4> </p>
                </div>
              </div>
            </div>
          </div>
		  
		  
		
		  
		  
		  
		  
	
		  
        
		    
		       <!-- ด้านล่าง --> 
			   
		<!--  <div class="row">
           <div class="col-sm-12 col-md-12" style="margin-top:0px;margin-bottom:0px">	
		     <div class="panel panel-primary">
			 <div class="panel-heading">
             <div class="panel-heading text-right">
             <p><h4>ค่าพิกัด X:<span id="x"> </span>&nbsp;Y:<span id="y"></span></h4></p>
             </div>
		    </div>
	      </div>
		</div>
      </div>-->
	</div>
	
</body>
</html>