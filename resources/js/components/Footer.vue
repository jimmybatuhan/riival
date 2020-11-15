<template>
    <footer class="footer w-100">
        <div class="footer-top pb-2">
            <div class="container-fluid">
                <div class="row py-3">
                    <div class="col-6">
                        <h5 class="text-white font-weight-bold">
                            SIGN UP FOR LATEST NEWS, ANNOUNCEMENTS AND EXCLUSIVE CONTENT
                        </h5>
                        <p class="text-white">Make sure to stay updated on new releases, exclusive content and much more</p>
                    </div>
                    <div class="col-5 offset-1">
                        <div class="row news-letter-form">
                            <div class="col-12">
                                <div class="input-group input-group-md">
                                    <input
                                        type="text"
                                        class="form-control news-letter-input ge-input-text bg-transparent"
                                        placeholder="Email Address"
                                    >
                                    <div class="input-group-append">
                                        <span class="ge-button-primary py-2 px-4 news-letter-button-submit input-group-text">Submit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn ge-button-primary btn-block">JOIN US ON DISCORD</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-4">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Social Media</h2>
                            <ul>
                                <li><a href="appointments">Dota 2</a></li>
                                <li><a href="chat">Country-Strike: Global Offensive</a></li>
                                <li><a href="login">League of Legends</a></li>
                                <li><a href="register">Mobile Legends</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="footer-widget text-white footer-menu">
                            <h2 class="footer-title h4 font-weight-bold">Main Menu</h2>
                            <ul>
                                <li><a href="search">Blog</a></li>
                                <li><a href="login">FAQ</a></li>
                                <li><a href="register">Affiliate</a></li>
                                <li><a href="booking">Terms Of Service</a></li>
                                <li><a href="dashboard-mentee">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Our Games</h2>
                            <ul>
                                <li><a href="appointments">Dota 2</a></li>
                                <li><a href="chat">Country-Strike: Global Offensive</a></li>
                                <li><a href="login">League of Legends</a></li>
                                <li><a href="register">Mobile Legends</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ge-bg-color-secondary">
            <div class="container-fluid">
                <div class="copyright py-3">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-text">
                                <p class="mb-0 text-white">
                                    © 2020 RIIVAL | Support@riival.com | Nørrebrogade 45E Kld., 2200 Copenhagen, Denmark
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
    .footer-widget ul li a, .footer-widget h2 {
        color: #fff;
    }

    .news-letter-button-submit,
    .news-letter-input {
        border-color: #D62828;
        border-radius: 0px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .news-letter-button-submit {
        color: #fff;
        font-weight: 500;
    }

    .news-letter-form {
        border: transparent linear-gradient(90deg, #D62828 0%, #F77F00 100%) 0% 0% no-repeat padding-box;
    }

    .footer {
        border-top: 1px solid #000;
    }

    .footer-top {
        background-color: #021925;
    }
</style>

<script>
    export default {
        name: "Footer",

        created() {

        },
    }
</script>

