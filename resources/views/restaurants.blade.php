<x-app-layout>
    <div class="pt-breadcrumb-p">
        <div class="container">
            <h3>Restaurants</h3>
            <p>Découvrez les restaurants disponibles</p>
        </div>
    </div>

    <!--Recherche de restaurant -->
    <div class="container" id="restaurants">
        <div class="row pt-restaurants">
            <div class="col-4">
                <div class="pt-restaurant-sidebar">
                    <form v-on:submit.prevent="fetchShops">
                        <div class="pt-search">
                            <div class="pt-input">
                                <x-input placeholder="Rechercher un restaurant" v-model="shopName" />
                                <i class="icons icon-magnifier"></i>
                            </div>
                        </div>
                        <div class="pt-submit">
                            <x-button>Rechercher <i class="fas fa-long-arrow-alt-right"></i></x-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-8">
                <div class="row">
                <div v-show="locationErrorMessage" class="text-center">@{{ locationErrorMessage }}</div>
                <div v-show="loading" class="text-center">Loading...</div>
                <div v-show="!loading" class="grid grid-cols-3 gap-4" style="display: none;">
                            <div class="col-4" v-for="shop in shops" :key="shop.id">
                                <div class="pt-item">
                                    <div class="pt-thumb"><img src="" onerror="this.src='{{ asset('img/noimage.jpg') }}'"> </div>
                                    <div class="pt-title"><h3>@{{ shop.name }}</h3></div>
                                    <div class="pt-address"><i class="fas fa-map-marker-alt"></i>adresse</div>
                                    <div class="pt-stars" v-if="shop.distance"><strong>@{{ parseInt(shop.distance).toLocaleString() }}m away</strong></div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="https://unpkg.com/vue@next"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
        <script>
            Vue.createApp({
                data() {
                    return {
                        shopName: "",
                        long: "",
                        lat: "",
                        shops: [],
                        loading: false,
                        locationErrorMessage: "",
                    }
                },
                methods: {
                    fetchShops() {
                        this.loading = true;
                        axios.get(`/dashboard`, {
                            params: {
                                shopName: this.shopName,
                                long: this.long,
                                lat: this.lat,
                            }
                        }).then(res => {
                            this.shops = res.data.shops;
                        }).finally(() => {
                            this.loading = false;
                        })
                    },

                    getLocation(closure) {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition((position) => {
                                this.long = position.coords.longitude;
                                this.lat = position.coords.latitude;
                                this.locationErrorMessage = "";

                                closure()
                            }, (error) => {
                                if (error.code === 1) {
                                    this.locationErrorMessage = "Autorisez la localisation pour decouvrir les restaurants!";
                                }
                            });
                        } else { 
                            x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                    },
                },
                mounted() {
                    this.getLocation(() => {
                        this.fetchShops();
                    });
                },
            }).mount('#restaurants');
        </script>
    @endpush
</x-app-layout>
@include('layouts.footer')