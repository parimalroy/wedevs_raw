<?php include('helper.php') ?>
<aside class="w-64 bg-slate-800 text-white flex flex-col">
        <div class="p-6 text-center font-bold text-2xl tracking-wide border-b border-slate-700">Admin Panel</div>
        <nav class="flex-grow">
            <ul class="space-y-2 p-4">

            <!-- Home page sidebar -->
                <?php if(urls("/wedevs_raw/admin/")){?>
                    <li><a href="#" class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/wedevs_raw/admin/")?"bg-slate-700 font-bold text-white":""; ?> ">Dashboard</a></li>
                    <li><a href="../admin/create.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Blogs</a></li>
                    <li><a href="../admin/profile.php" class="block px-4 py-2 rounded-md hover:bg-slate-700 text-white">Manage Users</a></li>
                    <li><a href="../admin/setting.php" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $setting ?></a></li>
                <?php }; ?>


            <!-- create amd edit page sidebar -->
                <?php if(urls("/wedevs_raw/admin/create.php")|| urls("/wedevs_raw/admin/edit.php") ){?>
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
                    <li><a href="#blogs-section" class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/wedevs_raw/admin/create.php")?"bg-slate-700 font-bold text-white":""; ?>">Manage Blogs</a></li>
                    <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users?></a></li>
                    <li><a href="../admin/setting.php" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $setting ?></a></li>
                <?php }; ?>


                <!-- profile page sidebar -->

                <?php if(urls("/wedevs_raw/admin/profile.php")) {?>
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
                    <li><a href="../admin/create.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Blogs</a></li>
                    <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users?></a></li>
                    <li><a href="#settings-section" class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/wedevs_raw/admin/profile.php")?"bg-slate-700 font-bold text-white":""; ?>"><?php echo $editProfile ?></a></li>
                <?php }; ?>


                <!-- setting page sidebar -->

                <?php if(urls("/wedevs_raw/admin/setting.php")){?>
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700">Dashboard</a></li>
                    <li><a href="../admin/edit.php" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Blogs</a></li>
                    <!-- <li><a href="#users-section" class="block px-4 py-2 rounded-md hover:bg-slate-700">Manage Users</a></li> -->
                    <li><a href="/wedevs_raw/admin/" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $users?></a></li>
                    <li><a href="../admin/profile.php" class="block px-4 py-2 rounded-md hover:bg-slate-700"><?php echo $editProfile ?></a></li>
                    <li><a href="../admin/setting.php" class="block px-4 py-2 rounded-md hover:bg-slate-700 <?php echo urls("/wedevs_raw/admin/setting.php")?"bg-slate-700 font-bold text-white":""; ?>"><?php echo $setting ?></a></li>
                <?php }; ?>
                
            </ul>
        </nav>
        <div class="p-4">
            <a href="#" class="block px-4 py-2 text-center rounded-md bg-red-600 hover:bg-red-500">Logout</a>
        </div>
    </aside>