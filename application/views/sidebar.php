<!--------------- Sidebar ----------------------->
<div class="col-md-2 sidebar">
    <ul class="nav nav-pills nav-stacked bg-dark">
        <li <?php if($page == "panel_home") echo "class='active'";?>>
            <a href="<?=base_url('Panel/panel_home')?>"><span><img height="20px" src="<?php echo base_url('assets/image/dashboard.png')?>"></span>  Home</a></li>
        <li <?php if($page == "panel_new") echo "class='active'";?>>  
            <a href="<?=base_url('Panel/panel_new')?>""><span><img height="20px" src="<?php echo base_url('assets/image/post.png')?>"></span>  New Menu</a></li>
        <li <?php if($page == "panel_list_food") echo "class='active'";?>>
            <a href="<?=base_url('Panel/panel_list_food')?>"><span><img height="20px" src="<?php echo base_url('assets/image/food.png')?>"></span>  List Food</a></li>
        <li <?php if($page == "panel_list_beverage") echo "class='active'";?>>  
            <a href="<?=base_url('Panel/panel_list_beverage')?>"><span><img height="20px" src="<?php echo base_url('assets/image/beverage.png')?>"></span>  List Beverage</a></li>
    </ul>
</div>