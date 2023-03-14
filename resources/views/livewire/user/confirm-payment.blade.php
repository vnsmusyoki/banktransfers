<div>
    <div class="footer-area mt-40">
        <a href="javascript:void(0)" class="transferMod active" data-bs-toggle="modal" data-bs-target="#transferMod">Confirm
            Payment</a>
    </div>
    <!-- Transfer Popup start -->
    <div class="transfer-popup">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="transferMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <ul class="nav nav-tabs d-none" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab"
                                        data-bs-target="#transfer" type="button" role="tab"
                                        aria-controls="transfer" aria-selected="true">transfers</button>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="transfer" role="tabpanel"
                                    aria-labelledby="transfer-tab">
                                    <div class="modal-content">
                                        <div class="modal-header mb-60 justify-content-between">
                                            <a href="javascript:void(0)">
                                                <i class="icon-a-left-arrow"></i>
                                                Back
                                            </a>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                        <div class="main-content">
                                            <h4>Confirm Transfer!</h4>
                                            <p> Please enter your ID Number to authorize this transaction in the text
                                                box below</p>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form wire:submit.prevent="completepayment">
                                                <div class="userInput">
                                                    <input type="number" wire:model="id_number" placeholder="2345635"
                                                        style="border-color:black !important;">
                                                </div>
                                                {{-- <a href="javascript:void(0)">Don’t receive a code?</a> --}}
                                                <button class="mt-60" type="submit">Confirm
                                                    Transaction</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Transfer Popup start -->
</div>
