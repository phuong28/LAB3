<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                href="<?php echo url('admin/thongke/index') ?>">
                <i class="bi bi-grid"></i>
                <span>Thống kê</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/doanhthu/index') ?>">
                        <i class="bi bi-circle"></i><span>Thống Kê</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/thongke/index') ?>">
                        <i class="bi bi-circle"></i><span>Doanh Thu bán hàng</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Danh sách sản phẩm </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/products/index') ?>">
                        <i class="bi bi-circle"></i><span>Xem danh sách sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/products/showCreate') ?>">
                        <i class="bi bi-circle"></i><span>Thêm mới sản phẩm </span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Danh sách thể loại</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/categories/create') ?>">
                        <i class="bi bi-circle"></i><span>Thêm thể loại mới</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/categories/index') ?>">
                        <i class="bi bi-circle"></i><span>Xem danh sách thể loại</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Trang bán hàng </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                
                <li>
                    <a href="<?php echo url('admin/oders/index') ?>">
                        <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('thongke/index') ?>">
                        <i class="bi bi-circle"></i><span>quay về trang chủ</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

    </ul>

</aside>