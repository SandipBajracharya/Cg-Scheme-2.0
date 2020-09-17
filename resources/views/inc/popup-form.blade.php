<div id="popup-container">

    <div class="form-popup" id="popupForm">
        <h6> Fill this form to book the product </h6>
        <form action=" {{ route('contact.save')}} " method="POST" class="form-container">
        @csrf
        
        <input type="text" placeholder="Name *" name="name" class="form-control @error('name') is-invalid @enderror mb-2" required>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="text" placeholder="Phone number *" name="phone" class="form-control @error('phone') is-invalid @enderror mb-2" required>
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="email" placeholder="E-mail *" class="form-control @error('email') is-invalid @enderror mb-2" name="email" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="text" placeholder="City *" name="city" class="form-control @error('city') is-invalid @enderror mb-2" required>
        @error('city')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <input type="text" placeholder="Street name (optional)" name="street" class="form-control @error('street') is-invalid @enderror mb-2">
        @error('street')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-group d-flex">
            <label for="" class="col-md-4 col-form-label pl-1">Select Category:</label>
            <div class="col-md-8 pr-0">
                <select class="form-control mb-2" name="category">
                    <option value="Television">Television</option>
                    <option value="Washing Machine">Washing Machine</option>
                    <option value="Air Conditioner">Air Conditioner</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn" id="send-form">Submit</button>
        </div>
        <button type="button" class="btn" onclick="closeForm()" id="close"><i class="fa fa-times" aria-hidden="true"></i></button>
        </form>
    </div>
</div>