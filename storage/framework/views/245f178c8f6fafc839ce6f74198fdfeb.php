<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php if(auth()->guard()->check()): ?>

    <section class="background-radial-gradient overflow-hidden"  >


    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad2fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
        <div class=" vh-100 container border-top-0 bg-dark text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5   ">
                <div class="card-body px-4 py-5 px-md-5">



                    <h2 class="text-white  mt-3 " > Welcome <?php echo e($user->name); ?></h2>
                    <form action="/logout" method="post" >
                    <?php echo csrf_field(); ?>
                        <button class="btn btn-primary btn-block mt-3  text-center"  >LogOut</button>
                    </form>

                    <form action="/create-product" method="post" >
                        <?php echo csrf_field(); ?>
                        <div class="mt-3 form-outline mb-4">
                            <input type="text" class="form-control"  name="name" placeholder="product name" >
                            <label class="form-label" for="form3Example3">product name</label>
                        </div>

                        <div class="form-outline mb-4" >
                            <input class="form-control" type="number" name="number" placeholder="number" >
                            <label class="form-label" for="form3Example3">product name</label>
                        </div>

                        <button class="btn btn-primary btn-block mt-3  text-center" >Save Product</button>

                    </form>

                        <table class="table" >
                            <thead>
                            <tr>
                                <th class="text-white" scope="col">Product Name</th>
                                <th class="text-white" scope="col">Product Number</th>
                                <th class="text-white" scope="col">edit</th>
                                <th class="text-white" scope="col">Delete</th>
                            </tr>
                            </thead>


                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tbody>


                                <form action="/delete-product/<?php echo e($product->id); ?>" method="post" >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                <tr>
                                    <th class="text-white" ><?php echo e($product['name']); ?></th>
                                    <th class="text-white" ><?php echo e($product['number']); ?></th>
                                    <th><a href="/edit-product/<?php echo e($product->id); ?>" class="  btn btn-light btn-block   text-center" >edit <?php echo e($product['name']); ?></a></th>

                                    <th><button class="  btn btn-light btn-block   text-center" >Delete <?php echo e($product['name']); ?> </button></th>

                                </tr>
                                </form>

                                </tbody>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>



                </div>

            </div>
        </div>

    </section>



    <!-- <h1>welcome <?php echo e($user->name); ?> </h1> -->

<?php else: ?>
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad2fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class=" vh-100 container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    The best offer <br />
                    <span style="color: hsl(218, 81%, 75%)">for your business</span>
                </h1>
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Free safe Stocking servise for business. Professional  edit , delete and controll your products as a business

                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="/register" method="post" >
                            <?php echo csrf_field(); ?>
                            <!-- 2 column grid layout with text inputs for the name -->
                            <div class="form-outline mb-4">
                                <input type="text" name="name" class="form-control" />
                                <label class="form-label" for="form3Example3">name</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="form3Example3" class="form-control" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control" />
                                <label class="form-label" >Password</label>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4" >Register</button>


                        </form>
                        <form action="/loginpage" method="post" >
                            <?php echo csrf_field(); ?>
                            <button style="background-color: hsl(218, 41%, 19%)" class="btn btn-primary btn-block mb-4" >I have Alredy account</button>

                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


</body>
</html>
<?php /**PATH C:\Users\8VH0A\Desktop\mine\stock\resources\views/home.blade.php ENDPATH**/ ?>