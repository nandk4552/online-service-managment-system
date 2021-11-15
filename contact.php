    <!-- contact us section starts -->
    <div class="container col-md-6 my-4">
        <h2 class="display-4 text-center my-3">Contact Us</h2>

        <form class="my-2" action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" placeholder="enter your name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-2">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" placeholder="enter your suject" class="form-control" name="subject" id="subject" aria-describedby="emailHelp">
            </div>

            <label for="message" class="form-label mt-2">Message</label>
            <div class="mb-2">
                <textarea style="width: 100%; height: 80px; border: none; outline:none; resize:none;" placeholder="enter your message..." name="message" id="message" class="border-bottom" cols="4" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-3">Send Message</button>
        </form>

    </div>
    <!-- contact section ends -->