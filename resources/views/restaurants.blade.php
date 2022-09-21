<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container" id="shops">
        <div class="row pt-restaurants">
            <div class="col-4">
                <div class="pt-restaurant-sidebar">
                    <form v-on:submit.prevent="fetchShops">
                        <div class="pt-search">
                            <div class="pt-input">
                                <x-input class="py-4 px-6 w-1/2"
                                        placeholder="Find a shop near you"
                                        v-model="shopName" /> <i class="icons icon-magnifier"></i>
                            </div>
                        </div>
                        <div class="pt-submit">
                            <x-button class="ml-4 py-4">Search</x-button>
                        </div>
                    </form>
                </div>
            </div>
            <div col="8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 shadow-sm sm:rounded-lg">
                        <div v-show="locationErrorMessage" class="text-center">@{{ locationErrorMessage }}</div>
                        <div v-show="loading" class="text-center">Loading...</div>
                        <div v-show="!loading" class="grid grid-cols-3 gap-4" style="display: none;">
                            <div class="p-6 bg-white border-b border-gray-200"
                                v-for="shop in shops"
                                :key="shop.id">
                                <div class="text-xl">@{{ shop.name }}</div>
                                <div class="mt-4 text-gray-500"
                                    v-if="shop.distance">@{{ parseInt(shop.distance).toLocaleString() }}m away</div>
                            </div>
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
                        axios.get(`/restaurants`, {
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
                                    this.locationErrorMessage = "Please allow location access.";
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
            }).mount('#shops');
        </script>
    @endpush
</x-app-layout>