<template>
    <div class="container-fluid analysis-section">
        <div class="container py-4">
            <div class="row">
                <div class="col-4">
                    <div class="card py-4 px-3 mb-0 analysis-card flex-fill">
                        <div class="card-header px-3">
                            <h4 class="card-title font-weight-bold text-white mb-0">REPLAY ANALYSIS</h4>
                        </div>
                        <div class="card-body px-3 pt-1">
                            <p class="card-text text-white">Some quick example text to build on the card title and make
                                up the bulk
                                of the
                                card's content.</p>
                            <a class="card-link btn font-weight-bold btn-block mt-4 ge-button-primary" href="#">Submit
                                Replay</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card py-4 px-3 mb-0 analysis-card flex-fill">
                        <div class="card-header px-3">
                            <h4 class="card-title font-weight-bold text-white mb-0">DOTABUFF ANALYSIS</h4>
                        </div>
                        <div class="card-body px-3 pt-1">
                            <p class="card-text text-white">Some quick example text to build on the card title and make
                                up the bulk
                                of the
                                card's content.</p>
                            <a class="card-link btn font-weight-bold btn-block mt-4 ge-button-primary" href="#">Submit
                                DotaBuff</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card py-4 class-calendar px-3 mb-0 flex-fill">
                        <div class="card-header px-3">
                            <h4 class="card-title font-weight-bold text-white mb-0">CLASS CALENDAR</h4>
                        </div>
                        <div class="card-body px-3 pt-1">
                            <p class="card-text text-white">Some quick example text to build on the card title and make
                                up the bulk
                                of the
                                card's content.</p>
                            <a class="card-link btn font-weight-bold btn-block mt-4 calendar-button ge-text-color-secondary"
                                href="#">VIEW CALENDAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.analysis-section {
    background: #003049;
}
.analysis-section .analysis-card,
.analysis-section .analysis-card .card-header {
    background:#021925;
    border-color: #021925;
}
.analysis-section .class-calendar,
.analysis-section .class-calendar .card-header {
    background: #D62828;
    border-color: #D62828;
}
.analysis-section .class-calendar .calendar-button {
    background: #fff;
    border-radius: 0px;
    padding: 15px;
}
</style>
<script>
    export default {
        name: "Analysis",
    }
</script>
