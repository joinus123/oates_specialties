@include('frontend.include.header')

<section>
    <div class="contactus-wrapper li-spacing inner-page">
        <div class="banner">

            <div class="col-md-12">
                <div class="sub-page-heading">
                    <div class="container">
                        <h2>contact us</h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="contactus-content-sec">
                <div class="container">
                    <div class="row">
                        @foreach($contacts as $contact)
                        <div class="col-md-4 text-center">
                         
                               <div class="contactus-content mb-4">
                                <i class="{{$contact->icon}}" aria-hidden="true"></i>
                                <h4 class="text-uppercase">{{$contact->heading}}</h4>
                                <p>{{$contact->text}}</p>
                            </div>
                         </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@include('frontend.include.footer')
