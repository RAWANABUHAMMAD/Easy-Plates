@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span> Contact Us</h6>
      </div>
     </div>
    </div>
</section>


<section id="contact" class="pt-5 pb-5">
    <div class="container-xl">
        
        <div class="row contact_1">
           
            <div class="col-md-6">
                <div class="contact_1l">
                    <h6 class="col_red">GET IN TOUCH</h6>
                    <h1 class="mt-3 mb-3">Have any questions? <br> Let’s Talk!</h1>
                    <p>We’re here to help! Whether you have a question about our ingredients, delivery, or customization options, feel free to reach out to us.</p>
                    <h5>Easy Plates Aqaba,Jordan,10259.</h5>
                    <div class="contact_1li row mx-0 bg_red p-4 mt-5">
                        <div class="col-md-12 text-center">
                            <h6 class="text-light mb-0"><a class="text-light" href="#">support@easyplates.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-6">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="contact_1r shadow p-4">
                        <div class="contact_1ri row">
                            <div class="col-md-6">
                                <div class="contact_1ril">
                                    <div class="input-group border_light">
                                        <input type="text" name="name" class="form-control border-0" placeholder="Name" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary col_red bg-transparent rounded-0 p-3 px-4 border-0" type="button">
                                                <i class="bi-person"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_1ril">
                                    <div class="input-group border_light">
                                        <input type="email" name="email" class="form-control border-0" placeholder="Your Email" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary col_red bg-transparent rounded-0 p-3 px-4 border-0" type="button">
                                                <i class="bi-envelope"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact_1ri row mt-4">
                            <div class="col-md-6">
                                <div class="contact_1ril">
                                    <div class="input-group border_light">
                                        <input type="text" name="subject" class="form-control border-0" placeholder="Subject">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary col_red bg-transparent rounded-0 p-3 px-4 border-0" type="button">
                                                <i class="bi-pencil"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_1ril">
                                    <div class="input-group border_light">
                                        <input type="text" name="order_number" class="form-control border-0" placeholder="Order Number (Optional)">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary col_red bg-transparent rounded-0 p-3 px-4 border-0" type="button">
                                                <i class="bi-list"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact_1ri row mt-4">
                            <div class="col-md-12">
                                <div class="contact_1ril">
                                    <textarea name="message" placeholder="Your Message" class="form-control form_text" required></textarea>
                                    <h6 class="mb-0 center_sm mt-4">
                                        <button type="submit" class="button button_1"> Submit </button>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
        
       
        <div class="row mt-4">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d55540.54817190847!2d35.0032285!3d29.537215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1743545229551!5m2!1sen!2sjo" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div> 
    </div>
</section>



@endsection
   