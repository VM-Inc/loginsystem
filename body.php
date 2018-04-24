<section class="main-container" >
<div class="main-wrapper" >
<?php
if (isset($_SESSION['u_id'])) {
	echo '
	<div id="login-welcome" align="center">
	<p>
	Welcome
	</p>
	</div>
	';
} else {
	echo'<style style="text/css">
div.slide-slow {
  width:100%;
  overflow:hidden;
}
div.slide-slow div.inner {
  animation: slide-slow 2s;
}

@keyframes slide-slow {
  from {
    margin-top: 30%;
  }

  to {
    margin-top: 0%;
  }
}

p{
margin-top:7px;
}

</style>
<div id="site-welcome">
<div class="slide-slow">
<div class="inner">
<p align="center">
</p>
<p align="center">
Welcome To site Created By
</p>
</div>
</div>
<div class="slide-slow">
<div class="inner">
<p align="center">
Veer Metri
</p>
</div>
</div>
</div>
';
}
?>
</div>
</section>