<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Basculer la Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" >Admin Panel</a>


</div><!-- navbar-header Ends -->

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<i class="fa fa-user" ></i>

<?php echo $admin_name; ?> <b class="caret" ></b>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> Profile


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_products" >

<i class="fa fa-fw fa-envelope" ></i> Produits 

<span class="badge" ><?php echo $count_products; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_customers" >

<i class="fa fa-fw fa-gear" ></i> Clients

<span class="badge" ><?php echo $count_customers; ?></span>


</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?view_p_cats" >

<i class="fa fa-fw fa-gear" ></i> Categories Produits

<span class="badge" ><?php echo $count_p_categories; ?></span>


</a>

</li><!-- li Ends -->

<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Déconnecter

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Products li Starts -->

<a href="#" data-toggle="collapse" data-target="#products">

<i class="fa fa-fw fa-table"></i> Produits

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="products" class="collapse">

<li>
<a href="index.php?insert_product"> Insérer Produits </a>
</li>

<li>
<a href="index.php?view_products"> Voir Products </a>
</li>


</ul>

</li><!-- Products li Ends -->

<li><!-- Bundles Li Starts --->

<a href="#" data-toggle="collapse" data-target="#bundles">

<i class="fa fa-fw fa-edit"></i> Paquets

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="bundles" class="collapse">

<li>
<a href="index.php?insert_bundle"> Insérer Paquet </a>
</li>

<li>
<a href="index.php?view_bundles"> Voir Paquet </a>
</li>

</ul>

</li><!-- Bundles Li Ends --->

<li><!-- relations li Starts -->

<a href="#" data-toggle="collapse" data-target="#relations"><!-- anchor Starts -->

<i class="fa fa-fw fa-retweet"></i> Attribuer des produits aux relations de paquets

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="relations" class="collapse"><!-- collapse Starts -->

<li>

<a href="index.php?insert_rel"> Insérer Relation </a>

</li>


<li>

<a href="index.php?view_rel"> Voir Relations </a>

</li>

</ul><!-- collapse Ends -->


</li><!-- relations li Ends -->



<li><!-- manufacturer li Starts -->

<a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

<i class="fa fa-fw fa-briefcase"></i> Fabricants

<i class="fa fa-fw fa-caret-down"></i>


</a><!-- anchor Ends -->

<ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_manufacturer"> Insérer Fabricants </a>
</li>

<li>
<a href="index.php?view_manufacturers"> Voir Fabricants </a>
</li>

</ul><!-- ul collapse Ends -->


</li><!-- manufacturer li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fa fa-fw fa-pencil"></i> Categories Produits

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="p_cat" class="collapse">

<li>
<a href="index.php?insert_p_cat"> Insérer Categories Produits </a>
</li>

<li>
<a href="index.php?view_p_cats"> Voir Categories Produits </a>
</li>


</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#cat">

<i class="fa fa-fw fa-arrows-v"></i> Categories

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat"> Insérer Categories </a>
</li>

<li>
<a href="index.php?view_cats"> Voir Categories </a>
</li>


</ul>

</li><!-- li Ends -->



<li><!-- store section li Starts -->

<a href="#" data-toggle="collapse" data-target="#store">

<i class="fa fa-fw fa-briefcase"></i> Magasins

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="store" class="collapse">

<li>
<a href="index.php?insert_store"> Insérer Magasins </a>
</li>

<li>
<a href="index.php?view_store"> Voir Magasins </a>
</li>

</ul>

</li><!-- store section li Ends -->


<li><!-- contact us li Starts -->

<a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

<i class="fa fa-fw fa-pencil"> </i> Section Contact

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="contact_us" class="collapse">

<li>

<a href="index.php?edit_contact_us"> Modifier Contact </a>

</li>

<li>

<a href="index.php?insert_enquiry"> Insérer Type commande </a>

</li>

<li>

<a href="index.php?view_enquiry"> Voir Type commande </a>

</li>

</ul>

</li><!-- contact us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?edit_about_us">

<i class="fa fa-fw fa-edit"></i> Modifier Page A propos 

</a>

</li><!-- about us li Ends -->


<li><!-- Coupons Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

<i class="fa fa-fw fa-arrows-v"></i> Coupons

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="coupons" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_coupon"> Insérer Coupon </a>
</li>

<li>
<a href="index.php?view_coupons"> Voir Coupons </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Coupons Section li Ends -->



<li><!-- terms li Starts -->

<a href="#" data-toggle="collapse" data-target="#terms" ><!-- anchor Starts -->

<i class="fa fa-fw fa-table"></i> Termes

<i class="fa fa-fw fa-caret-down"></i>

</a><!-- anchor Ends -->

<ul id="terms" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_term"> Insérer Termes </a> 
</li>

<li>
<a href="index.php?view_terms"> Voir Termes </a> 
</li>

</ul><!-- ul collapse Ends -->


</li><!-- terms li Ends -->



<li>

<a href="index.php?view_customers">

<i class="fa fa-fw fa-edit"></i> Voir Clients

</a>

</li>

<li>

<a href="index.php?view_orders">

<i class="fa fa-fw fa-list"></i> Voir commande

</a>

</li>

<li>

<a href="index.php?view_payments">

<i class="fa fa-fw fa-pencil"></i> Voir Paiements

</a>

</li>

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-gear"></i> Utilisateurs

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user"> Insérer Utilisateur </a>
</li>

<li>
<a href="index.php?view_users"> Voir Utilisateurs </a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"> Modifier Profile </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Déconnecter

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>