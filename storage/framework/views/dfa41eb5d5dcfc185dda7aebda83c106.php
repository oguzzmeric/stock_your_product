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
                    <form action="/edit-product/<?php echo e($product->id); ?>" method="post" >
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                    <div class="form-outline mb-4">

                        <input  type="number" name="number" class="form-control text-dark " value="<?php echo e($product->number); ?>" />
                        <label  class=" text-white form-label" >Number</label>

                    </div>

                    <div class="form-outline mb-4" >
                        <input type="text" name="name" class="form-control text-dark"  value="<?php echo e($product->name); ?>"  />
                        <label  class=" text-white form-label" >name</label>
                    </div>


                        <button class="btn btn-primary btn-block mb-4" >edit</button>

                    </form>


                </div>

            </div>
        </div>

    </section>


</body>
</html>
<?php /**PATH C:\Users\8VH0A\Desktop\mine\stock\resources\views/edit-product.blade.php ENDPATH**/ ?>