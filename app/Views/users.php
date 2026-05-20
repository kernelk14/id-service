<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    </head>
    <body>
        <div class="navbar navbar-expand-lg" style="background-color: #800000;">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto">
                    <li class="navbar-text">
                        <span class="text-light align-items-center align-content-center d-flex">
                            Hello!,&nbsp;
                                <b><?= strtoupper(auth()->user()->username) ?></b>&nbsp; <!-- Displays your username -->
                                (<b><?= strtoupper(auth()->user()->getGroups()[0]) ?></b>) <!-- Displays your user status -->
                        </span>
                    </li>
                </ul>
                <a href="<?= base_url('user/create') ?>" class="btn btn-outline-light">Insert ID Request</a>
                &nbsp;
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-light">Log out</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
        
                <?php if(session() && session()->getFlashdata('message')): ?>
                    <p class="text-success"><?= session()->getFlashdata('message') ?></p>
                <?php endif; ?>
                </div>    
            
            <div class="container-fluid mt-lg-4">
                <?php if(!empty($users)): ?>
                    <table class="table table-striped table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Select</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Emergency Contact</th>
                                <th>Emergency Contact Number</th>
                                <th>Image Attachment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $u): ?>
                                <tr>
                                    <td class=""><input type="checkbox" name="checkSubmission" id="checkSubmission" class="form-check-input"></td>
                                    <td class=""><?= $u['userId'] ?></td>
                                    <td class=""><?= $u['name'] ?></td>
                                    <td class=""><?= $u['email'] ?></td>
                                    <td class=""><?= $u['address'] ?></td>
                                    <td class=""><?= $u['contact_num'] ?></td>
                                    <td class=""><?= $u['emergency_person'] ?></td>
                                    <td class=""><?= $u['emergency_number'] ?></td>
                                    <td class=""><img src="data:image/jpeg;base64,<?= base64_encode($u['attach_id']) ?>" width="80" height="80"></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No users found. <a href="<?= base_url('user/create') ?>">Create one</a></p>
                <?php endif; ?>
            </div>
            
        </div>
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>    
    </body>
</html>