<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Basic Info</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <form>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">NAME</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="name" id="name" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">EMAIL</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ADDRESS</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="address" id="address" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">PHONE</div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-6 column__right___padding">
                                <label>NUMBER 1</label>
                                <input class="form-control form-control-sm" type="text" name="contact_1" id="inp_contact_1"
                                    placeholder="Number 1" />
                                <small id="msg_contact_1" class="text-danger form-text text-error-msg error"></small>
                            </div>
                            <div class="col-lg-6 column__left___padding">
                                <label>NUMBER 2</label>
                                <input class="form-control form-control-sm" type="text" name="contact_2" id="inp_contact_2"
                                    placeholder="Number 2" />
                                <small id="msg_contact_2" class="text-danger form-text text-error-msg error"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">CATEGORY</div>
                    <div class="col-md-10">
                        <input type="email" class="form-control form-control-sm" name="email" id="email" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">POSTAL CODE</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">WEBSITE</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">CONTACT NUMBER</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">LOCATION</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">CHECK IN/OUT TIME</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">DESCRIPTION</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-round btn-outline-danger mb-0">
                        <font-awesome-icon icon="fa-solid fa-trash" />
                        DELETE
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
  