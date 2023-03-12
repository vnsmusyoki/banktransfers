<div>
    <form action="#" wire:submit.prevent="addaccount" method="POST">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="single-input">
                    <label for="companyfname">First Name</label>
                    <input type="text" id="companyfname" placeholder="Dana">
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-input">
                    <label for="companylname">Last Name</label>
                    <input type="text" id="companylname" placeholder="Patton">
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-input">
                    <label for="companyemail">Email</label>
                    <input type="text" id="companyemail" placeholder="danap24@gmail.com">
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-input">
                    <label for="companyphone">Phone</label>
                    <div class="select-area d-flex align-items-center">

                        <input type="number" id="companyphone" placeholder="(070) 4567-8800">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="single-input">
                    <label>Select Country</label>

                    <select wire:model="country_name">
                        <option value="">click to select</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ ucwords($country->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="btn-border w-100">
                    <button type="submit" class="cmn-btn w-100">Add Recipients</button>
                </div>
            </div>
        </div>
    </form>
</div>
