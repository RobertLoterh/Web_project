<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSN_GHANA</title>

<link href="wrapper.css" rel="stylesheet" type="text/css" />
<link href="mstyle.css" rel="stylesheet" type="text/css" />
<!--JQRY-->
<!--DISPCSS-->
    <link rel="stylesheet" href="dsp/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="dsp/nivo-slider.css" type="text/css" media="screen" />
    
<!--DATECSS-->
<link type="text/css" href="css/excite-bike/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
		
    
<!--DSP-DATE-->
 <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jnslider.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript">
	<!--DISP-->
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
	
	<!--DATE-->
	// Datepicker
			$(function(){
				$('#datepicker').datepicker({
					inline: true
				});								
			});
			
			// Accordion
			$(function(){
				$("#accordion").accordion({ header: "h3" });	
			});

    </script> 
   
<!--SEARCH-->
<script type="text/javascript">
function searchfield_focus(obj)
{
obj.style.color=""
obj.style.fontStyle=""
if (obj.value=="Search")
	{
	obj.value=""
	}
}
var addr=document.location.href;

function click_expandingMenuHeader(obj,sectionName)
{
var x=document.getElementById("cssprop_" + sectionName).parentNode.className;
if (x.indexOf("expandingMenuNotSelected")>-1)
	{
	x=x.replace("expandingMenuNotSelected","expandingMenuSelected");
	document.getElementById("cssprop_" + sectionName).parentNode.className=x;
	document.getElementById("cssprop_" + sectionName).style.display="block";
	}
else
	{
	x=x.replace("expandingMenuSelected","expandingMenuNotSelected");
	document.getElementById("cssprop_" + sectionName).parentNode.className=x;
	document.getElementById("cssprop_" + sectionName).style.display="none";
	}
}

</script>
<!--SEARCH-END-->


</head>

<body>

<!--TOP MENU-->
<a name="top" id="top"></a>
<div id="tpm"><a href="index.html">Home</a> | <a href="register.html">Register</a> | <a href="contactus.html">Contact_Us</a></div>

<!--WRAPPER-->
<div id="wrappers">
<!--HEADER-->
      <!--BANNER-->
  <?php include_once('inc/inc_banner.txt')?>
  
  <div class="hrl"></div>
  
  <div class="mnu">
  <a class="mnl" href="index.html">Home</a> | <a class="mnl" href="aboutcsn.html">About_CSN</a> | <a class="mnl" href="academics.html">Academics</a> | <a class="mnl" href="admissions.html">Admissions</a> | <a  class="mnl" href="events.html">News_&amp;_Events</a> | <a class="mnl" href="students.html">Student_Affairs</a> | <a class="mnl" href="staffs.html">Staffs</a></div>
  <div class="hrl"></div>
  
  
  <!--BOX WRAP-->
  <div id="boxwrap">
  
  <!--WRAPPER.CONTENT.LEFT(MAIN)-->
  <div id="lcontent">
  
    <!--DISPLAY-->
  <div id="dsp">
  <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="images/img1.jpg" alt=""  />
            <a href="http://csn.edu.gh"><img src="images/img2.jpg" alt="" title="A practical session @ the Lab" /></a>
            <img src="images/img3.jpg" alt="" data-transition="slideInLeft" />
            <img src="images/img4.jpg" alt="" title="#htmlcaption" />
          </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Serious</strong> class <em>lessons</em> in sesion <a href="#">Join them!</a>.
            </div>
      </div>
    
  </div>
  <!--DISP_END-->
  
  
  <!--CONTENT(MAIN)-->
  <div id="bcontent">
    <div id="ttle">FAQs</div>
     
    <div id="content1">
    
     <div class="mheader">CSN LAUNCHING  CEREMONY</div>
  <div class="hdrl"></div>
  
  <div class="acc_cntnt">
  
    <!--ACCORDION-->
     <div id="accordion">
    
			<div>
				<h3><a href="#">1</a></h3>
				<div>Lorem ipsum dolor sit amet. Lorem ipsum d.</div>
			</div>
            
			<div>
				<h3><a href="#">2</a></h3>
				<div>Phasellus mattis tincidunt nibh.</div>
			</div>
            
			<div>
				<h3><a href="#">3</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
            
            
			<div>
				<h3><a href="#">4</a></h3>
				<div>Lorem ipsum dolor sit amet. Lorem ipsum d.</div>
			</div>
            
			<div>
				<h3><a href="#">5</a></h3>
				<div>Phasellus mattis tincidunt nibh.</div>
			</div>
            
			<div>
				<h3><a href="#">6</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
            
            
			<div>
				<h3><a href="#">7</a></h3>
				<div>Lorem ipsum dolor sit amet. Lorem ipsum d.</div>
			</div>
            
			<div>
				<h3><a href="#">8</a></h3>
				<div>Phasellus mattis tincidunt nibh.</div>
			</div>
            
			<div>
				<h3><a href="#">9</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
            
            <div>
				<h3><a href="#">10</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
       <!-- Tabs Accodion endss -->     
		</div>
		<!-- Tabs Accodion endss -->
  </div>
  
  
  
  <div class="hdrl2"></div>
    
    </div>
    
    
    

    
 <!--   <div id="content6">   -->
    
        <!--<div class="mheader">HEADER</div>-->
  <!--<div class="hdrl"></div>-->
<!--  <div class="txtpic">
        <div class="bpic"></div>
  </div>-->
<!--  <div class="hdrl2"></div>-->
    
    <!--</div>-->
 
    
    
</div>
   </div>
   
   
   
   
   
   
  
  <!--WRAPPER.CONTENT.RIGHT(PANE)-->
  <!--line-->
  <div id="rpln"></div>
  <!---->
   <div id="rpne">
     <div class="pns" id="p1">
       <div class="rpHeader" align="center">QUICK LINKS</div>
       <div id="pnav">
       <?php include_once('inc/inc_pnav.txt')?>
         
       </div>
     </div>
     
     <div class="pns" id="p2">
     <div class="rpHeader" align="center">CALENDAR</div>
     
     <div id="jqcal">
    <!-- Datepicker -->

		<div id="datepicker"></div>
     </div>
     </div>
     
     <div class="pns" id="p3">
            <div class="rpHeader" align="center">ADVERTISEMENT</div>
            
            <div class="adbx" align="center">
        <?php include_once('inc/inc_advert.txt')?>
            </div>
        
     </div>
   </div>
  
  <!--BOX WRAP END-->
  </div>
  <!--BOX WRAP END-->
  
  
  
  
 
  <!--WRAPPER.CONTENT.BOTTOM-->
  <div id="footer">
  <div id="fcontent"><a href="#top">Top</a> | <a href="index.html">Home</a> | <a href="aboutcsn.html">About_CSN</a> | <a href="academics.html">Academics</a> | <a href="admissions.html">Admissions</a> | <a href="events.html">News_&amp;_Events</a> | <a href="students.html">Student_Affairs</a> | <a href="staffs.html">Staffs</a></div>
  </div>
  
  
  
  
  
  
  <!---WRAPPER END--->
</div>
  <!---WRAPPER END--->


<!--ADDR_BELOW -->
<div  class="adr" id="abl">
  <div class="adr" id="adr1">Christian School of Nursing</div>
   <div class="adr" id="adr2">Abuakwa Road behind PAMO Int. Sch., Breman Esikuma.P.O. BOX BR 84 BREMAN ESIKUMA, CENTRAL REGION, GHANA</div>
   <div id="adr2">Tel: +233 543398119, +233 263113538, +233 244046040 | E-mail: info@csn.edu.gh</div>
</div>


</body>
</html>
