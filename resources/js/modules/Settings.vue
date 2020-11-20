<template>
    <div class="container">
        <div class="row form-row">
            <div class="col-6">
                <account-information />
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <h4 class="font-weight-bold">Current Subscription</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-md-12">
                        <div class="px-3 py-2">
                            <div class="card success-card">
                                <div class="card-body">
                                    <div class="success-cont">
                                        <i class="fas fa-check"></i>
                                        <h3>Appointment booked Successfully!</h3>
                                        <p>Appointment booked with <strong>Darren Elder</strong><br> on <strong>12 Nov 2019
                                                5:00PM to 6:00PM</strong></p>
                                        <a href="invoice-view" class="btn btn-primary view-inv-btn">View Invoice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import AccountInformation from "src/components/AccountInformation";

    export default {
        name: "Settings",

        created() {

        },

        components: {
            AccountInformation,
        },
    }
</script>

<style>

</style>