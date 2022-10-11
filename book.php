<?php include 'header.php'; ?>
<?php include 'book_form.php'; ?>



<div class="heading" style="background:url(image/header-bg-3.png) no-repeat ;">
    <h1>book now</h1>
</div>

<!-- booking section start -->

<section class="booking">

    <h1 class="heading-title" style="text-align:center;"> Book Your Trip Now !!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>



        <input type="submit" value="submit" class="btn" name="send" required>




    </form>


</section>

<!-- booking section end -->



<?php include 'footer.php'; ?>