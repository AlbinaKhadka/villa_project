<div class="col-lg-5">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <form id="contact-form" action="{{route('contact.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Full Name</label>
                                <input type="fullname" name="fullname" id="fullname" placeholder="Your Name..."
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your E-mail..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Subject</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                    autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Send
                                    Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
