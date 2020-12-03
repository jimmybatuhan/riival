<template>
    <div class="card account-info-box flex-fill">
        <div class="card-body">
            <div class="row pt-2">
                <div class="col-12">
                    <h5 class="font-weight-bold text-white ">ACCOUNT INFORMATION</h5>
                    <hr class="account-info-hr">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control account-info-field" id="acct-info-full-name" placeholder="Full Name" v-model="fullName">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control account-info-field" id="acct-info-email" placeholder="Email Address" v-model="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control account-info-field" id="acct-info-password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control account-info-field" id="acct-info-confirm-password" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <h5 class="font-weight-bold text-white ">BILLING INFORMATION</h5>
                    <hr class="account-info-hr">
                    <p class="text-white font-weight-bold">{{ email }}</p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <button class="btn ge-button-primary btn-block">SAVE CHANGES</button>
                </div>
            </div>
            <div class="row acct-info-btn-row">
                <div class="col-12 pt-4">
                    <a class="btn-delete-acct font-weight-bold">DELETE ACCOUNT</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.account-info-box,
.account-info-box > .card-body {
    background: #1d212c59;
    border: none;
    color: #fff !important;
}
.account-info-field {
    background: none !important;
    border: none;
    border-bottom: 1px solid #313233;
    color: white;
}
.account-info-hr {
    border-top: 1px solid #454647;
}
.btn-delete-acct {
    color: red;
}
.acct-info-btn-row {
    text-align: center;
}
</style>

<script>
export default {
    name: "AccountInformation",
    props: {
        fullName: {
            type: String,
            required: true
        },
        email: {
            type: String,
            required: true
        },
    }
}
</script>
