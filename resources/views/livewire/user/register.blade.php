<div>
    <form method="POST" wire:submit.prevent="storeaccount" autocomplete="off">
        @csrf
        <p>provide the following detals to sign up today</p>
        @if ($currentstep == 1)

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example119">Full Name</label>
                <input type="email" id="form2Example119" wire:model="full_name"
                    class="form-control @error('full_name') is-invalid @enderror" placeholder="Write your full name here"
                    value="{{ old('full_name') }}" />
                @error('full_name')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example11">Email Address</label>
                <input type="email" id="form2Example11" wire:model="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="valid email address"
                    value="{{ old('email') }}" />
                @error('email')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example11">Select Country</label>
                <select wire:model="country_name" id=""
                    class="form-control @error('country_name') is-invalid @enderror">
                    <option value="">click to select</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">+ {{ $country->code }} - {{ ucwords($country->name) }}
                        </option>
                    @endforeach
                </select>
                @error('country_name')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        @endif
        @if ($currentstep == 2)
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example23">Phone Number</label>
                <input type="number" id="form2Example23"
                    class="form-control @error('phone_number') is-invalid @enderror" wire:model="phone_number"  placeholder="0788888"/>
                @error('phone_number')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example24">Passport/ ID Number</label>
                <input type="number" id="form2Example24" class="form-control @error('id_number') is-invalid @enderror"
                    wire:model="id_number" />
                @error('id_number')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example25">Passport/ ID Image</label>
                <input type="file" id="form2Example25"
                    class="form-control @error('passport_image') is-invalid @enderror" wire:model="passport_image" />
                @error('passport_image')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        @endif
        @if ($currentstep == 3)
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example26">Physical Address</label>
                <input type="text" id="form2Example26"
                    class="form-control @error('physical_address') is-invalid @enderror"
                    wire:model="physical_address" />
                @error('physical_address')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example27">Password</label>
                <input type="password" id="form2Example27" class="form-control @error('password') is-invalid @enderror"
                    wire:model="password" />
                @error('password')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">Confirm Password</label>
                <input type="password" id="form2Example28"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    wire:model="password_confirmation" />
                @error('password_confirmation')
                    <div class="invalid-feedback">
                        <small class="text-danger">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        @endif
        <div class="text-center pt-1 mb-5 pb-1">
            @if ($currentstep == 1)
                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button"    wire:click="increasestep()">Next</button>
            @endif
            @if ($currentstep == 2)
                <button class="btn btn-default btn-block fa-lg gradient-custom-2 mb-3" type="button" wire:click="descreaseStep()">Previous </button>

                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button"    wire:click="increasestep()">Next</button>
            @endif
            @if ($currentstep == 3)
                <button class="btn btn-default btn-block fa-lg gradient-custom-2 mb-3" type="button" wire:click="descreaseStep()">Previous </button>

                <button class="btn btn-success btn-block fa-lg gradient-custom-2 mb-3" type="submit">Sign Up</button>
            @endif

        </div>

        <div class="d-flex align-items-center justify-content-center pb-4">
            <p class="mb-0 me-2">Already have an account?</p>
            <a href="{{ route('login') }}" class="btn btn-outline-danger">Log In</a>
        </div>

    </form>
</div>
