<x-layout>
    <div class="row mt-4">
        <div class="col-md-4">

            <x-cart-block :cart="$cart"/>

            <x-category-list :categories="$categories"/>

            <x-popular-list :popular="$popular"/>

        </div>

        <div class="col-md-8">

            <x-main-area>
                <form action="/users/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input name="name" type="text" value="{{ old('name') }}" class="form-control" id="name" placeholder="Enter your name">
                        @error('name')
                            <span class="d-block text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address<span class="text-danger">*</span></label>
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @error('email')
                        <span class="d-block text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password<span class="text-danger">*</span></label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                        <span class="d-block text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Confirm Password<span class="text-danger">*</span></label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword2" placeholder="confirm password">
                        @error('password_confirmation')
                        <span class="d-block text-danger"><small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </x-main-area>

        </div>
    </div>
</x-layout>
