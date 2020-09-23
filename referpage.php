<?php
include('header.php');
$userid=$_SESSION['userid'];
?>
<section id="chartjs-bar-charts">
    <!-- Column Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" >
                <div class="card-header">
                    <h2 class="card-title " style="font-size:30px;" style="color:orange;color:slateblue;"><center>Refer Page</center></h2>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="">
							

	<div class="row">
		<div class="col-lg-4 col-md-12">
			
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="card text-center">
				<div class="card-body">
				<div class="card-image">
				<img src="Images/refer.jpg" style="width:300px;height:300px;">
				</div>
					
					
					<p class="card-title" style="color:red;font-size:25px;">
						Your referal code</p>
				
<a class="footerbtn" href="whatsapp://send?text= Chameleon quiz , Get $100 coins by sining in 👇👇 https://wish-new-year.000webhostapp.com?referalid=<?php  echo($_SESSION['userid']);?>"><img width="25px" height="25px" src="wp.png" /><b style="font-size: 15px;">Click here to Share on Whatsapp</b> <img width="25px" height="25px" src="wp.png" />
</a>
					


<p class="card-text"></p>

			<div class="card " style="color:blue;">
			Invite your friends 
		</div>		
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			
	</div>
	</div></div></div>
</section>

    

</section>
</div></div></div></div>
<?php
include('footer.php');

?>