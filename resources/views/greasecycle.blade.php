@extends('layouts.main')

@section('content')
   <section id="home" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
{{--               <img src="{{asset('images/GreaseCycleStatment.jpg')}}" height="400px">--}}
               <div style="width:30%;z-index:100;height:550px;">
                   <div class="wrap-start ldnr-cnt-dv">
                       <h1 class="title-name" style="color:#2FA008">GREASE</h1>
                       <h1 class="title-name">CYCLE</h1>
                   </div>
                   <h5 class="sub-head">Grease Traps</h5>
                   <p class="title-para">Providing Fully Managed, Bespoke Grease Trap Solutions For Commercial Kitchens.</p>
                   <a href="/#contact"><button class="act-btn">Book a Free Quote</button></a>
               </div>
{{--               <div id="vid-clip-wrap" class="algn-btm">--}}
{{--                   <!--INTRO VIDEO CLIP-->--}}
{{--                   <p style="z-index:1000;margin-top:300px;margin-right:300px;">short intro video clip</p>--}}
{{--                   <video src="" alt="grease cycle at work video clip"></video>--}}
{{--               </div>--}}
           </div>
       </div>
   </section>
   <section id="fog" class="wrap-start" style="padding-bottom:50px;">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap" style="flex-direction: column;">
               <div style="width:100%;" class="wrap-space-between">
                   <div class="container algn-cntr">
                      <h2 class="section-header">Grease Pod</h2>
                       <small>Featured Product</small>
                   </div>
               </div>
           </div>
       </div>
   </section>
    <section id="about" class="wrap-start" style="padding-bottom:50px;">
        <div class="outr-content-wrap">
            <div class="inr-content-wrap" style="flex-direction: column;">
                <div style="width:100%;" class="wrap-space-between">
                    <div class="container">
                        <div class="algn-left">
                            <h2 class="section-header">GreaseCycle</h2>
                            <p style="color:#F0822B;margin-top:10px;font-size:18px;">About Us</p>
                        </div>
                        <p class="section-para">GreaseCycle is a fully managed grease trap leasing service for commercial kitchens.
                            <br><br>
                            Our grease traps are designed and manufactured in the UK and our unique modular design ensures we can accommodate kitchens of all shapes and sizes.
                            Rather than a fit and forget approach used by most grease trap companies, GreaseCycle continue to support your business following installation by replacing the grease trap system on a monthly basis with clean sanitised modules.
                            <br><br>
                            This ensures that your grease trap continues to work effectively without you having the hygiene risk of cleaning it out in the middle of your kitchen. The FOG captured in the modules is collected and recycled for Biofuel to help lower your carbon footprint and be more environmentally friendly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="algn-cntr" style="width:100%;margin-top:50px;">
                       <img style="margin-bottom:40px" src="{{asset('images/recycle-solid.svg')}}" alt="recycle icon" height="100px" />
                   <div class="wrap-middle" style="width:100%;">
                       <p class="cap-col-rec">Capture.</p>
                       <p class="cap-col-rec">Collect.</p>
                       <p class="cap-col-rec">Recycle.</p>
                   </div>
                   <a href="/#contact"><button class="act-btn" type="button">Book a Free Quote</button></a>
               </div>
           </div>
       </div>
   </section>
   <section id="why" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap ">
               <div class="container">
                   <h2 class="section-header">Why GreaseCycle?</h2>
                   <p class="section-para">
                       GreaseCycle provide a hassle free grease management service for commercial kitchen.
                       We provide a hassle free service from installation through to monthly replacements.
                   </p>
                   <p class="section-para" style="margin-top:15px;width:70%;">Grease traps are now required by law under <a class="display-link" style="font-style: italic;" href="https://www.legislation.gov.uk/ukpga/1991/56/section/111" target="_blank">section 111 of the Water Industry Act.</a> and our product &amp; services protect you from large waste water fines &amp; business delays.</p>
                   <p style="margin-top:30px;">What you get:</p>
                   <ul style="width:70%">
                       <li>Free Installation</li>
                       <li>Hassle Free - Monthly replacements by a trained technician</li>
                       <li>Improved Drainage - Avoid blockages and bad odours</li>
                       <li>Peace of Mind - Ongoing support to avoid potential fines</li>
                       <li>Environmentally Friendly - Fat, oil and grease recovered from our grease traps is recycled for biofuel</li>
                   </ul>
               </div>
           </div>
       </div>
   </section>
   <section id="pricing" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="container algn-cntr">
                   <h3 class="section-header">Pricing</h3>
                   <p style="margin-top:30px; text-align: center;">All of this for an affordable monthly fee starting from as little as:</p>
                   <p style="font-size:40px;margin-top:25px;color:#10912B;">£69.99 per month</p>
                   <small style="margin-top:5px;font-style: italic;">(Excl. VAT)</small>
                   <a href="/#contact"><button class="act-btn" type="button">Book a Free Quote</button></a>
               </div>
           </div>
       </div>
   </section>
   <section id="contact" class="wrap-start">
       <div class="outr-content-wrap">
           <div class="inr-content-wrap">
               <div class="container algn-cntr">
                   <div class="algn-cntr">
                       <h2 class="section-header">Contact</h2>
                   </div>
                   <p class="algn-cntr call-us-p">Call us on 07384280662 <br><small>or request a call back below.</small></p>

                   <form class="form form-stndrd form-all-req" style="margin-top:20px;" action="/call-back-submit" method="POST" enctype="application/x-www-form-urlencoded">
                       @csrf
                       <h5>Request a callback</h5>
                       @if(session()->has('form-success'))
                           <div class="form-resp-dv form-resp-dv-success">Successfully sent callback request.</div>
                       @endif
                       @if(session()->has('form-failed'))
                           <div class="form-resp-dv form-resp-dv-failed">Form failed to submit. please try again or call us.</div>
                       @endif
                       <div class="form-inpt-sec">
                           <label>Full Name<small>*</small></label>
                           <input id="contact-name" type="text" name="name" placeholder="Name" required/>
                       </div>
                       <div class="form-inpt-sec">
                           <label>Company Name<small>*</small></label>
                           <input id="contact-company" type="text" name="company" placeholder="Company" required/>
                       </div>
                       <div class="form-inpt-sec">
                           <label>Email <small>*</small></label>
                           <input id="contact-email" type="text" name="email" placeholder="Email" autocomplete="email"/>
                           @error('email')
                           <p class="invalid-feedback">{{ $message }}</p>
                           @enderror
                       </div>
                       <div class="form-inpt-sec">
                           <label>Telephone <small>*</small></label>
                           <input id="contact-tel" type="text" name="telephone" placeholder="Telephone" autocomplete="tel" required/>
                       </div>
                       <input id="contact-type" type="hidden" name="reqtype" value="grease trap" required/>
                       @if(config('services.recaptcha.key'))
                           <div id="recaptcha" class="g-recaptcha"
                                data-sitekey="{{config('services.recaptcha.key')}}">
                           </div>
                       @endif
                        <button id="submit-contact-btn" type="submit">Request Callback</button>
                       <small style="margin-top:10px;">By Submitting this form you are agreeing to allow us to use and store this data. We aim to be back in contact within 3 bussiness days. Thank you.</small>
                   </form>
               </div>
           </div>
       </div>
   </section>
@endsection
