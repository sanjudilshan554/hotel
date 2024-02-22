<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Hotel Rooms</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <form>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ROOM TYPE</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="name" id="name"
                            placeholder="comming from back end" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ROOM NUMBER</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" placeholder="101" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row">
                    <div for="name" class="col-md-2 col-form-label">AVILABILITY</div>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Avilable </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2" checked>
                            <label class="form-check-label" for="inlineRadio2">Not Avilable</label>
                        </div>
                        <small id="msg_name" class="text-danger form-text text-error-msg error "></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">VIEW</div>
                    <div class="col-md-10">
                        <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Ocean View" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">AMENITIES</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" placeholder="Wi-Fi, TV, Mini Fridge" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">IMAGE</div>
                    <div class="col-md-10">
                        <input type="file" class="form-control form-control-sm" name="city" id="city"/>
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-round btn-outline-dark mb-0">
                        <font-awesome-icon icon="fa-solid fa-trash" />
                        RESET
                    </button>
                    <button type="submit" class="btn btn-round custom-button btn-sm mb-0">
                        <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
  
<script setup>
import { Link } from "@inertiajs/vue3";

</script>
  
<style lang="scss" scoped>
.custom-button {
    background-color: #ffffff;
    border-color: #6343e9;
    color: #6343e9 !important;
}

.custom-button:hover {
    background-color: #6343e9;
    color: #ffffff !important;
}
</style>
  