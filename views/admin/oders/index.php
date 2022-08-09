<?php include_once('views/admin/layouts/main.php') ?>
<?php require_once('app/Models/Order.php') ?>
<?php startblock('orders') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Orders</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo url('admin/thongke/index') ?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Orders Table</h5>


                        <!-- Table with stripped rows -->
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">

                                <form method="POST" action="<?php echo url('admin/Oders/searchOders') ?>">
                                    <div class="dataTable-search">
                                        <input class="dataTable-input" placeholder="Search..." type="text"
                                            name="search">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">phone</th>
                                            <th scope="col">Address street</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">subtotal</th>
                                            <th scope="col">payment</th>
                                            <th scope="col">user id</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $order = new Order(); 
                                        $orders = $order->findAll()->hydrate();
                                    ?>
                                        <tr>
                                            <?php foreach($orders as $order): ?>
                                        <tr>
                                            <th scope="row"><?php echo $order->order_id ?></th>
                                            <td><?php echo $order->name; ?></td>
                                            <td><?php echo $order->phone_number; ?></td>

                                            <td><?php echo $order->address_street ?></td>
                                            <td><?php echo $order->address ?></td>
                                            <td style="text-align: center;"><?php echo $order->subtotal?></td>
                                            <td><?php echo $order->payment?></td>
                                            <td><?php echo $order->users_id ?></td>

                                        </tr>
                                        <?php endforeach ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php endblock() ?>