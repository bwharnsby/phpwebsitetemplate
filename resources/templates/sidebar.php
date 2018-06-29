<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>My Site</h3>
        <strong>My Site</strong>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="index.php">
                <i class="glyphicon glyphicon-home"></i>
                Home
            </a>
        </li>
        <li>
            <a href="index.php?page=about">
                <i class="glyphicon glyphicon-briefcase"></i>
                About
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="glyphicon glyphicon-duplicate"></i>
                Categories
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
            </ul>
        </li>
        <li>
            <a href="index.php?page=faq">
                <i class="glyphicon glyphicon-paperclip"></i>
                FAQ
            </a>
        </li>
        <li>
            <a href="index.php?page=contact">
                <i class="glyphicon glyphicon-send"></i>
                Contact
            </a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li><a href="#" class="download">Downloads</a></li>
        <li><a href="#" class="article">Articles</a></li>
    </ul>
</nav>
