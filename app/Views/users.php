<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    </head>
    <body>
        <div class="container-fluid">
            <div class="navbar navbar-expand bg-tertiary">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?= base_url('user/create') ?>" class="btn btn-outline-primary">Insert ID Request</a>
                    </li>
                </ul>
                <a href="<?= base_url('logout') ?>" class="btn btn-outline-dark">Log out</a>
            </div>
            <div class="container">
                
                <?php if(session() && session()->getFlashdata('message')): ?>
                    <p class="text-success"><?= session()->getFlashdata('message') ?></p>
                <?php endif; ?>
                </div>    
            

            <?php if(!empty($users)): ?>
                <table class="table">
                    <thead>
                        <tr>
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
                                <td><?= $u['userId'] ?></td>
                                <td><?= $u['name'] ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['address'] ?></td>
                                <td><?= $u['contact_num'] ?></td>
                                <td><?= $u['emergency_person'] ?></td>
                                <td><?= $u['emergency_number'] ?></td>
                                <td><img src="data:image/jpeg;base64,<?= base64_encode($u['attach_id']) ?>" width="80" height="80"></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No users found. <a href="<?= base_url('user/create') ?>">Create one</a></p>
            <?php endif; ?>
            
        </div>
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>    
    </body>
</html>