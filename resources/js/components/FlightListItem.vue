<template>
        <div class="singleList">
            <div class="flightList">
                <div class="row align-items-center">
                    <div class="col-lg-auto">
                        <div class="flight">
                            <div class="thumb">
                                <!-- <img src="{{asset('assets/landing/images/flight.png')}}" alt=""> -->
                                <img :src="aircraftImg" alt="">
                            </div>
                            <h6>Jet Airways</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="shortDescription row mb-2" v-for="(segment, index) in segments" :key="index">
                            <div class="col">
                                <div class="d-flex air">
                                    <div class="media mr-auto">
                                        <img :src="airFrom" alt="">
                                        <!-- <img src="{{asset('assets/landing/images/airForm.png')}}" alt=""> -->
                                        <div class="media-body">
                                            <h5>({{segment.flightSegment.departure.iataCode}})</h5>
                                            <p>{{ getDate(segment.flightSegment.departure.at)}}</p>
                                            <small>{{getTime(segment.flightSegment.departure.at)}}</small>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <img :src="airTo" alt="">
                                        <!-- <img src="{{asset('assets/landing/images/airTo.png')}}" alt=""> -->
                                        <div class="media-body">
                                            <h5>{{segment.flightSegment.arrival.iataCode}}</h5>
                                            <p>{{getDate(segment.flightSegment.arrival.at)}}</p>
                                            <small>{{getTime(segment.flightSegment.arrival.at)}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto time">
                                <p>{{segment.flightSegment.duration}}</p>
                                <p v-if="segments.length < 2">(Non Stop)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-auto priceArea">
                        <s>$400</s>
                        <h4>${{price.total}}</h4>
                        <div class="perRoom">All Incl. per adult</div>
                        <a href="" class="btn btn-block btn-orange">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    props: ['flight', 'airTo', 'airFrom', 'aircraftImg'],
    methods: {
        getTime(timeString){
            const date = new Date(timeString);
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
            return strTime;
        },

        getDate(DateString) {
            const date = `${new Date(DateString).getUTCFullYear()}-${new Date(DateString).getUTCMonth()+1}-${new Date(DateString).getUTCDate()}`;
            return date;
        }
    },

    created() {

        this.airto = this.$attrs.airto;
        this.airfrom = this.$attrs.airfrom;
        this.aircraftimg = this.$attrs.aircraftimg;

        console.log(this.flight.offerItems[0]);

    },

    computed: {
        services() {
            return this.flight.offerItems[0].services;
        },

        price() {
            return this.flight.offerItems[0].price;
        },

        pricePerAdult() {
            return his.flight.offerItems[0].pricePerAdult;
        },

        segments() {
            return this.services[0].segments;
        },

        dictionaries() {
            return this.flight.dictionaries;
        },

        carriers() {
            return this.dictionaries.carriers
        },

        locations() {
            return this.dictionaries.locations
        }
    }
}
</script>