
<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Guru</title>


                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
.footer ul li
{
	margin:2px;
}
.carde{
	background-color:#ffffff;
	border:1px solid black;
	margin-left:83px;
}
.row{
	border-shadow:2px 2px 2px black; 
}
@media screen and (min-width:786px){
	a{
		color:black;
	}

.footer
{
display:none;	
}
}

   .rownr {overflow-y: hidden; background-color: rgb(105,105,105); color: white; 
           text-align: right; vertical-align:top}
   .txt {width: 95%; overflow-x: scroll}
@media screen and (max-width:786px){
	.rownr {
		display:none;
	}
}

</style>

</head>
<body class="bg-light" >
<?php  include('topnav.php');?>
</div>
<div class="container-fluid " >
<div class="container" style="background-color:white;padding:10px;paddinng-bottom:0px;">
<div class="row">
<div class="col-md-6">
<h6 class="text-primary">Write a function</h6>
<h2>write a function <i class="fas fa-star text-warning"></i> </h2>
</div>
<div class="col-md-6">
<span class="float-right">
<h6><span style="color:red">9 more points </span>to get badge.<h6>
 <div class="progress progress-success" style="height:6px;width:200px;">
  <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;height:6px;color:green"></div>

</div>
<br>
<p class="text-muted">Rank : 128694 | Points : 1239.0</p>
</div>
</span>
</div>

<br>
</div></div>
<div class="container bg-light" style="height:20px">


</div>

</div>
<form method="post" action="compile.php" name="f2" id="form">
<div class="container bg-light shadow-lg p-3 mb-5  rounded" >
  <div class="container-fluid bg-light" style="height:40px;margin:5px;">

     <span class="float-right">
 
<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>

<option value="python3.2">python3.2</option>
</select>
	 </span>
  </div>
  <div class="" style="">
   <div>
        <textarea class="rownr " style="border:none;"rows="20" 

        cols="3" value="1" readonly></textarea>
        <span>
            <textarea class="txt" style="border:none" rows="20" name="code"

            cols="150" nowrap="nowrap" wrap="off"

            autocomplete="off" autocorrect="off" 

            autocapitalize="off" spellcheck="false"

            onclick="selectionchanged(this)" 

            onkeyup="keyup(this,event)" oninput="input_changed(this)" 

            onscroll="scroll_changed(this)"></textarea><br/><br/>
        </span>
    </div>
  </div>
    <div class="container-fluid bg-light" style="height:30px;margin:0px;">
     <span class="float-right text-muted">
	   
            <label>Current position: 
            </label><input id="sel_in" style="border-style:none;color:green;" readonly>
			
<!--<input type="submit" id="st" name="run_by_mkr" value="run" class="shadow-sm  rounded" style="color:white;background-color:#3cc962;border:none;outline:none;float:right;padding:6px 20px 6px 20px;font-weight:bold;shadow:1px 1px 1px black">


<input type="submit" name="run_by_kr" value="Upload"  
style="color:white;background-color:#bf1111;border:none;outline:none;float:right;padding:6px 20px 6px 20px;font-weight:bold;shadow:1px 1px 1px black;margin-right:8px;" class="shadow-sm   rounded">
	 </span> -->
  </div>
  
</div>
<br>



</div>



<!-- Input  -->
<div class="container" style="background-color:white;color:red;height:40px;font-size:30px;">
Input

</div>
<br>
<div class="container bg-light shadow-lg p-3 mb-5  rounded" >
 
  <div class="" style="">
   
        <textarea class="rownr " style="border:none;"rows="15" 

        cols="3" value="1" readonly></textarea> 

            <textarea class="txt shadow-lg p-3 mb-3 bg-white rounded" rows="13" style="border:none;"

            cols="170" name="input" id="st" nowrap="nowrap" wrap="off" 

          

          
> </textarea> 
     
   
  </div>
    <div class="container-fluid bg-light" style="height:30px;margin-right:10px;">
     <span class="float-right text-muted">
	   
          
			
<input type="submit" id="st" name="run_by_mkr" value="run" class="shadow-sm  rounded" style="color:white;background-color:#3cc962;border:none;outline:none;float:right;padding:6px 20px 6px 20px;font-weight:bold;shadow:1px 1px 1px black">


</span>
  </div>
  
</div>
<br>



</div>
</form>

<!-- output -->

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>



<script>
$(document).ready(function(){

    $('form').on('submit', function(e){
      e.preventDefault();

      $.ajax({
            type: "POST", 
            cache: false, 
            url: "compile.php",
            datatype: "html",
            data: $('form').serialize(), 
            success: function(result) { 
               
                $('#div').html(result);
            }
        });
    });
});
</script>









      
























<div class="container" style="background-color:white;color:red;height:40px;font-size:30px;">
Result

</div>
<br>

<div class="container">
<span>
            <textarea class="txt shadow-lg p-3 mb-5 bg-white rounded" id="div" name="output" rows="15" style="border:none;"

            cols="170" name="output" nowrap="nowrap" wrap="off" >

          

           </textarea><br/><br/>
        </span>
</div>


<script>
function input_changed(obj_txt)
    {
        obj_rownr = obj_txt.parentElement.parentElement.getElementsByTagName('textarea')[0];
        cntline = count_lines(obj_txt.value);
        if(cntline == 0) cntline = 1;
        tmp_arr = obj_rownr.value.split('\n');
        cntline_old = parseInt(tmp_arr[tmp_arr.length - 1], 10);
        // if there was a change in line count
        if(cntline != cntline_old)
        {
            obj_rownr.cols = cntline.toString().length; // new width of txt_rownr
            populate_rownr(obj_rownr, cntline);
            scroll_changed(obj_txt);
        }
        selectionchanged(obj_txt);
    }
	
	function scroll_changed(obj_txt)
    {
        obj_rownr = obj_txt.parentElement.parentElement.getElementsByTagName('textarea')[0];
        scrollsync(obj_txt,obj_rownr);
    }
    
function scrollsync(obj1, obj2)
    {
        // scroll text in object id1 the same as object id2
        obj2.scrollTop = obj1.scrollTop;
    }
	function selectionchanged(obj)
{
    var substr = obj.value.substring(0,obj.selectionStart).split('\n');
    var row = substr.length;
    var col = substr[substr.length-1].length;
    var tmpstr = '(' + row.toString() + ',' + col.toString() + ')';
    // if selection spans over
    if(obj.selectionStart != obj.selectionEnd)
    {
        substr = obj.value.substring(obj.selectionStart, obj.selectionEnd).split('\n');
        row += substr.length - 1;
        col = substr[substr.length-1].length;
        tmpstr += ' - (' + row.toString() + ',' + col.toString() + ')';
    }
    obj.parentElement.getElementsByTagName('input')[0].value = tmpstr;
}
function keyup(obj, e)
{
        if(e.keyCode >= 33 && e.keyCode <= 40) // arrows ; home ; end ; page up/down
            selectionchanged(obj, e.keyCode);
}
</script>
</body>
</html>


