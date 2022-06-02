<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> /* Generating CSS */
    body{
    background:url("http://www.deleteagency.com/assets/img/pattern.png"); 
    background-color : black;
    cursor: url("https://i.imgur.com/zkZbB5k.png"), auto;
  }
  ::placeholder { 
    color: rgb(18, 137, 20);
    opacity: 1; 
  }
  ::-webkit-scrollbar {
      width: 6px;
  }
  ::-webkit-scrollbar-track {
      background-color: black; 
  }
   ::-webkit-scrollbar-thumb {
      background-color: #008000;
  }
  ::selection {color:black;background:green;}
  ::-moz-selection {color:black;background:green;}
  .buzz_wrapper{
    position:relative;
    width:700px;
    margin:20px auto;
    overflow:hidden;
    padding:100px;
  }
  .scanline{
    width:100%;
    display:block;
    height:4px;
    position:relative;
    z-index:3;
    margin-bottom:5px;
    opacity:0.1;
  }
  .buzz_wrapper span{
    position:absolute;
    -webkit-filter: blur(1px);
    font-size:80px;
    font-family:'Courier new', fixed;
    font-weight:bold;
  }
  .buzz_wrapper span:nth-child(1){
    color:green;
    margin-left:-2px;
    -webkit-filter: blur(2px);
  }
  .buzz_wrapper span{
    -webkit-animation: blur 30ms infinite, jerk 50ms infinite;
  }
  .buzz_wrapper .text{
    -webkit-animation: jerkwhole 10s infinite;
    position:relative;
  }
  @-webkit-keyframes jerkwhole {
    30% {  }
    40% { opacity:1; top:0; left:0;  -webkit-transform:scale(1,1);  -webkit-transform:skew(0,0);}
    41% { opacity:0.8; top:0px; left:-100px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(50deg,0);}
    42% { opacity:0.8; top:0px; left:100px; -webkit-transform:scale(1,1.2);  -webkit-transform:skew(-80deg,0);}
    43% { opacity:1; top:0; left:0; -webkit-transform:scale(1,1);  -webkit-transform:skew(0,0);}
    65% { }
  }
  /*---------------------------*/
  
  .buzz_wrapper1{
    position:relative;
    width:700px;
    padding:100px;
  }
  .scanline1{
    width:100%;
    display:block;
    height:4px;
    position:relative;
    z-index:3;
    margin-bottom:5px;
    opacity:0.1;
  }
  .buzz_wrapper1 span1{
    position:absolute;
    -webkit-filter: blur(1px);
    font-size:40px;
    font-family:'Courier new', fixed;
    font-weight:bold;
  }
  .buzz_wrapper span1:nth-child(1){
    color:green;
    margin-left:-2px;
    -webkit-filter: blur(2px);
  }
  .buzz_wrapper1 span1{
    -webkit-animation: blur 30ms infinite, jerk 50ms infinite;/**/
  }
  .buzz_wrapper1 .text1{
    -webkit-animation: jerkwhole 10s infinite;
    position:relative;
  }
  textarea{
    background-color: transparent;
    color: green;
    border: 0px solid green;
    font-size: 2.5em;
    margin-top: -15px;
    text-decoration: none;
  -webkit-animation: blur 30ms infinite, jerk 50ms infinite;/**/
    border-left:4px solid green;
    cursor: url("https://i.imgur.com/sjCxccZ.jpg"), auto;
    padding: 25px;
    overflow:hidden;
    /*display: none;*/
    
  }
  textarea:focus, input:focus{
      outline: 0;
  }
  
  /*----------------------*/
  
  .buzz_wrapper2{
    position:relative;
    width:700px;
    margin-left: -50px;
    
    overflow:hidden;
    padding:50px;
  }
  .scanline2{
    width:100%;
    display:block;
    
    height:4px;
    position:relative;
    z-index:3;
    margin-bottom:5px;
    opacity:0.1;
  }
  .buzz_wrapper2 span2{
    position:absolute;
    -webkit-filter: blur(1px);
    font-size:40px;
    font-family:'Courier new', fixed;
    font-weight:bold;
  }
  .buzz_wrappe2 span2:nth-child(1){
    color:green;
    margin-left:-2px;
    -webkit-filter: blur(2px);
  }
  
  .buzz_wrapper2 span2{
    -webkit-animation: blur 30ms infinite, jerk 50ms infinite;
  }
  
  @-webkit-keyframes blur {
    0%   { -webkit-filter: 1blur(1px); opacity:0.8;}
    50% { -webkit-filter: blur(1px); opacity:1; }
    100%{ -webkit-filter: blur(1px); opacity:0.8; }
  }
  @-webkit-keyframes jerk {
    50% { left:1px; }
    51% { left:0; }
  }
  @-webkit-keyframes jerkup {
    50% { top:1px; }
    51% { top:0; }
  }
  .buzz_wrapper2 .text2{
    -webkit-animation: jerkwhole 10s infinite;
    position:relative;
  }
  #but{
    background-color: transparent;
    color: green;
    border: 0px solid green;
    text-decoration: none;
    -webkit-filter: blur(.9px);
    font-size: 2em;
    cursor: url("https://i.imgur.com/q21BHh4.png"), auto;
   -webkit-animation: blur 30ms infinite, jerk 50ms infinite;
     -webkit-animation: jerkwhole 10s infinite;
  }
  
  /*----------------------*/
  #msg3{
    
    width: 1000px;
    font-size: 25px;
  }
  #msg4{
  
    width: 1000px;
    font-size: 25px;
  }
  #msg5{
   
    width: 1000px;
    font-size: 25px;
    
  }
  #msg6{
    
    width: 1000px;
    font-size: 25px;
  }
  #msg7{
    
    width: 1000px;
    font-size: 25px;
  }

  #Pos_Left{
    float:left;
  }
  #Pos_Right{
    position:absolute; 
    left:1200px; 
    top:100px;
    
  }
input[type=text]:focus,
textarea:focus,
input[type=submit]:focus,
a.button:focus {
	outline: 0;
}

input[type=submit],
a.button {
	background: transparent;
	border: 1px solid #00dd00;
	clear: both;
	color: #00dd00;
	cursor: hand;
	display: inline-block;
	font-family: 'VT323', Courier;
	font-size: 1em;
	margin-bottom: 20px;
	opacity: 0.25;
	padding: 10px 100px;
	position: relative;
	text-decoration: none;
	text-transform: uppercase;
	z-index: 10;
    font-weight: bold;
}

input[type=submit]:hover,
a.button:hover {
	background: #008000;
	color: #383838;
	opacity: 0.8;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #008000;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}

.table-fill {
 /*  background: white; */
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 400px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
th {
  color:#008000;;
  background:#008000;
  border-bottom:4px solid #008000;
  border-right: 1px solid #008000;
  font-size:23px;
  font-weight: 400;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #008000;
  
  color:#008000;
  font-size:16px;
  font-weight:400;
  position:center;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #000000;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#000000;
}
 
tr:nth-child(odd):hover td {
  background:#000000;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#000000;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
 
</style>
<title>Assembler | Generated</title>
</head>
<body>
<?php
    $File=fopen("C:\Users\youss\Desktop\UNIVERSITY SHIT\YEAR 2\SEMESTER 2\CS223 - Computer Organization\Project\Assembly Project\Database\Instructions.txt","r"); //Read from DB file Instructions
    $Separator="##"; //separators
    $ArrayOfInstructionsFromFile=array();
    while(!feof($File))
    {
        $Line=fgets($File);
        array_push($ArrayOfInstructionsFromFile,$Line); //Get lines of Assembly commands
    }
    $AssemblyCode=$_POST["Code"]; //fetch the form name
    $AssemblyCode=explode("\n",$AssemblyCode);
    $StartLocation;
    $ArrayOfLocation=array();
    $ArrayOfInsturctionCode=array();
    $Counter=0;
    for($i=0;$i<count($AssemblyCode)-1;$i++)
    {
        $AssemblyLine=explode(" ",$AssemblyCode[$i]);
        if($i==0)
        {
            if($AssemblyLine[0]=="ORG")    //to get the starting line of the code
            {
                $StartLocation=$AssemblyLine[1];
            }
        }
        else if($AssemblyLine[0]=="//")
        {
            $Counter++;
            $StartLocation=intval($StartLocation);
            $StartLocation++;
        }
        else
        {
            array_push($ArrayOfLocation,decbin($StartLocation));
            $StartLocation=intval($StartLocation);
            $StartLocation++;
            if(count($AssemblyLine)==1) //to get the string size related to the Assembly Commands
            {
                for($j=0;$j<count($ArrayOfInstructionsFromFile);$j++)
                {
                    $Record=explode($Separator,$ArrayOfInstructionsFromFile[$j]);
                    if(trim($AssemblyLine[0])==trim($Record[0]))
                    {
                        $Binary=base_convert($Record[1], 16, 2); //Convertion
                        if(strlen($Binary)<16)
                        {
                            for($k=strlen($Binary);$k<16;$k++)
                            {
                                $Binary="0".$Binary;
                            }
                        }
                        $Binary=chunk_split($Binary,4);
                        array_push($ArrayOfInsturctionCode,$Binary);
                        break;
                    }
                }
            }
            if(count($AssemblyLine)==2)
            {
                for($w=0;$w<count($ArrayOfInstructionsFromFile);$w++)
                {
                    $Record=explode($Separator,$ArrayOfInstructionsFromFile[$w]);
                    if(trim($AssemblyLine[0])==trim($Record[0]))
                    {
                        $Binary=base_convert($Record[1], 16, 2);
                        
                        if(strlen($Binary)<4)
                        {
                            for($y=strlen($Binary);$y<4;$y++)
                            {
                                $Binary="0".$Binary;
                            }
                        }
                        for($x=0;$x<count($AssemblyCode);$x++)
                        {
                            $Line=explode(" ",$AssemblyCode[$x]);
                            $Variable=$Line[0];
                            if(trim($Variable)==trim($AssemblyLine[1]).',')
                            {
                                $Pos=$x-1;
                                $TmpBinary=decbin($Pos);
                                if(strlen($TmpBinary)<12)
                                {
                                    for($v=strlen($TmpBinary);$v<12;$v++)
                                    {
                                        $TmpBinary="0".$TmpBinary;
                                    }
                                }
                                $Binary=$Binary.$TmpBinary;
                                break;
                            }
                        }
                        $Binary=chunk_split($Binary,4);
                        array_push($ArrayOfInsturctionCode,$Binary);
                    }
                }
            }
            //Differnet Actions
            if(count($AssemblyLine)==3)
            {
                if(trim($AssemblyLine[1])=="DEC") //if Label is Decimal change to Binary
                {
                    $Binary=decbin($AssemblyLine[2]);
                    if(strlen($Binary)<16)
                    {
                        for($m=strlen($Binary);$m<16;$m++)
                        {
                            $Binary="0".$Binary;
                        }
                    }
                    elseif(strlen($Binary)>16)
                    {
                        for($q=strlen($Binary);$q>16;$q--)
                        {
                            $Binary=substr($Binary, 1);
                        }
                    }
                    $Binary=chunk_split($Binary,4);
                    array_push($ArrayOfInsturctionCode,$Binary);
                }
                if(trim($AssemblyLine[1]=="HEX"))//If label is Hexa change to Binary
                {
                    $Binary=base_convert($AssemblyLine[2], 16, 2);
                    if(strlen($Binary)<16)
                    {
                        for($m=strlen($Binary);$m<16;$m++)
                        {
                            $Binary="0".$Binary;
                        }
                    }
                    elseif(strlen($Binary)>16)
                    {
                        for($q=strlen($Binary);$q>16;$q--)
                        {
                            $Binary=substr($Binary, 1);
                        }
                    }
                    $Binary=chunk_split($Binary,4);
                    array_push($ArrayOfInsturctionCode,$Binary);
                }
            }
        }
    }
    /* echo("<form action=\"PHP\BackEnd.php\" method=\"post\"><textarea name=\"Code\" cols=\"30\" rows=\"40\" placeholder=\"      Enter Assembly Code\">"); */
    ?>
    <section>
        <div id="Pos_Left">
            <div class="buzz_wrapper">
                <div class="text">
                    <span><div id="msg"/></span>
                </div>
                <div class="scanline"></div>
            </div>
            <div class="buzz_wrapper1">
                <div class="text1">
                <span1><div id="msg1"/></span1>
                </div>
                <div class="scanline1"></div>
                
            </div>
            <br/><br/><br/><br/>
            <form action="PHP/BackEnd.php" method="post" onsubmit="return checkforblank">
            <textarea name="Code" id="fname" rows="10" placeholder="Enter Assembly Code" spellcheck="false">
            <?php      
                for($i=0;$i<count($AssemblyCode);$i++) //Display Assembly Codes
                {
                    echo($AssemblyCode[$i]);
                }
            ?>
            </textarea>
            <br><br><br>
        </form>
        <form href="Index.html">
         <input type="submit" value="Regenerate"/>
        </form>
        </div>      
    </section>
    <div id="Pos_Right">

        <div class="table-title">
            <h3><b>&nbsp Hexa Program</b></h3>
        <table class="table-fill" border="4"><tr><td><b>Location</b></td><td><b>Instruction Code</b></td></tr>
    <?php
        for($i=0;$i<(count($ArrayOfLocation)-$Counter)+1;$i++) //To display Binary
        {
            echo("<tr> <td> <b>". "&nbsp&nbsp&nbsp&nbsp" . $ArrayOfLocation[$i] ."</b> </td> <td> <b>". $ArrayOfInsturctionCode[$i] ."</b> </td> </tr>");
        }
     ?>
        </table>
        </div>
    </section>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>var showText = function (target, message, index, interval) {   
    if (index < message.length) {
      $(target).append(message[index++]);
      setTimeout(function () { showText(target, message, index, interval); }, interval);
    }
  }
  $(function () {
  
    showText("#msg", "Terminal", 0, 100);
    showText("#msg1", "Your Assembly Code", 0, 100);
  });
   $(document).ready(function () {
              setTimeout("$('#fname').focus();", 500);
  });
  
  function checkforblank(){
    if (document.getElementById('fname').value == "") {
      alert('Please Enter your Instructions');
      return false;
    }
  
  }
  
  var textarea = document.querySelector('textarea');
  
  textarea.addEventListener('keydown', autosize);
  
               
  function autosize(){
    var el = this;
    setTimeout(function(){
      el.style.cssText = 'height:0; padding:0';
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
  }
  $(function() {
      $('textarea').on('keypress', function(e) {
          if (e.which == 32)
              return false;
      });
  });
  </script>
  </body>
  </html>