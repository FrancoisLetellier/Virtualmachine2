<div class="row">
    <div class="navbar navbar-default" role="navigation">
        <a class="navbar-brand" href="#">My Static Site</a>
        <ul class="nav navbar-nav">
            <li <?php if($page == "index"){ echo 'class="active"'; } ?>><a href="/">Home</a></li>
            <li <?php if($page == "contact"){ echo 'class="active"'; } ?>><a href="/?page=contact">Contact</a></li>
        </ul>
    </div>
</div>