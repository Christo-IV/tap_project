<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo PROJECT_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!--
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
                </li>
                -->

                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item nav-link active">
                        <?php echo $_SESSION['user_name']; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>/providers/plist">Providers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>/contracts/clist">Contracts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                           href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                    </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>