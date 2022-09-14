<style>
.sidebar {
    z-index: 1;
    position: absolute;
    width: 250px;
    margin-top: 55px;
    background-image: linear-gradient(140deg, #3ddc3599 0%, #35dc7099 50%, #41c8d67a 75%);
}

.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}

.icondiv {
    background-color: white;
    height: 76px;
    width: 77px;
    border-radius: 36px;
    border: 1px solid #ced1dafa;
    margin-left: 76px;
}

.nav>li {
    position: relative;
    display: block;
}

.dashBody {
    background-color: #f8f9fa !important;
}

.nav {
    flex-direction: column !important;
}

li.log {
    text-align: center;
    margin: 8px;
    font-size: 20px;
}

a.anchor {
    color: #212529;
    text-decoration: none;
}

.log:hover {
    text-decoration: none;
    background-image: linear-gradient(140deg, #3ddc3599 0%, #35dc7099 50%, #41c8d67a 75%);
}
</style>
<div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light"
        style="background-color:white;-webkit-box-shadow:0px 1px 10px #ced4da !important;
 -moz-box-shadow:0px 1px 10px #ced4da !important; 
 box-shadow:box-shadow: 0px 1px 10px #ced4da !important; background-image: linear-gradient(140deg, #f8f9fa 0%, #35dc7047 50%, #41c8d652 75%);">
        <a class="navbar-brand" href="#"><b>Skill Assessment Company Management</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Current User </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/logout">logout</a>
                    </div>
                </li>
            </ul>
        </div>


    </nav>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse" style="padding-bottom: 550%;padding-top: 12px;">
            <ul class="nav in" id="side-menu">
                <li>
                    <div class="icondiv">
                        <i class="fa fa-user fa-3" style="font-size: 4em;padding-left: 14px;"></i>
                    </div>
                </li>
                <li class="log">
                    <a class="anchor" href="/dashboard">Dashboard</a>
                </li>
                <li class="log">
                    <a class="anchor" href="/companies">Companies Log</a>
                </li>
                <li class="log">
                    <a class="anchor" href="/employees">Employees Log</a>
                </li>

            </ul>
        </div>

    </div>
</div>