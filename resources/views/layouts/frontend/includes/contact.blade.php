<form action="{{ url('/contact/store') }}" method="post" class="contact-form form-group">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <label for="name">
                @if (app()->getLocale()=='bn')
                নাম
                @else
                Name
                @endif
            </label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="phone">
                @if (app()->getLocale()=='bn')
                ফোন
                @else
                Phone
                @endif
            </label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
            @error('phone')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="email">
                @if (app()->getLocale()=='bn')
                ইমেইল
                @else
                Email
                @endif
            </label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="message">
                @if (app()->getLocale()=='bn')
                বার্তা
                @else
                Message
                @endif
            </label>
            <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="Your Message">{{ old('message') }}</textarea>
            @error('message')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="contact-submit-btn-outer">
        <button class="contact-submit-btn-inner" type="submit">
            @if (app()->getLocale()=='bn')
            বার্তা পাঠান
            @else
            Send Message
            @endif <i class="fas fa-paper-plane"></i>
        </button>
    </div>
</form>
