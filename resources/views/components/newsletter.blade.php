<div class="container">
        <div class="row container-newsletter align-items-center">
            <div class="col-12 col-lg-6">
                <h2 class="title-newsletter fs-1">{{__('ui.newsletter')}}</h2>
            </div>
            <div class="col-12 col-lg-6">
                <form action="{{route('newsletter_subscribe')}}" method="POST" class="wrapper-newsletter align-items-center">
                    @method('POST')
                    @csrf
                    <input class="mail-newsletter" name="email" type="email" placeholder="{{__('ui.email-grigio')}}">
                    <button class="btn-newsletter" type="submit">{{__('ui.invia-n')}}</button>
                </form>
            </div>
        </div>
    </div>