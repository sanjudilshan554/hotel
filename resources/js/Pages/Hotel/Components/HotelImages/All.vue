<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Hotel Images</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <div class="col pt-2 image-header">
                <div class="">
                    <input type="file" class="form-control file" id="fileInput">
                    <button class="btn btn-sm btn-round btn-outline-success mb-0">Upload</button>
                </div>
            </div>
            <div class="image-setup image-section border">
                <div class="card  image-section " style="width: 16rem;">
                    <img class="card-img-top" alt="dfdsfds">
                    <div class="card-body">
                        <div class="">
                            <button type="button" class="btn btn-sm btn-round btn-outline-danger mb-0">
                                <font-awesome-icon icon="fa-solid fa-trash" />
                                DELETE
                            </button>
                            <button type="submit" class="btn btn-round custom-button btn-sm mb-0">
                                <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                                MAKE PRIMARY
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

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

.image-section {
    background-color: white;
}

.image-section {
    float: left;
    overflow: hidden;
    margin: 2vh;
}
</style>
  