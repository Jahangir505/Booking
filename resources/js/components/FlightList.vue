<template>
    <div class="listingInwrap">
       <div class="alert alert-danger" v-if="error">
           <h3>{{error.title}}</h3>
           <p>{{error.detail}}</p>
           <small>{{error.source.parameter}}</small>
       </div>
        <flight-list-item :airTo="airTo" :airFrom="airFrom" :aircraftImg="aircraftImg" v-for="(flight, index) in flightData" :flight="flight" :key="index"></flight-list-item>

        <div id="loader" class="load-full-screen" v-if="!flightData">
            <div class="loading-animation">
                <span><i class="fa fa-plane"></i></span>
                <span><i class="fa fa-bed"></i></span>
                <span><i class="fa fa-ship"></i></span>
                <span><i class="fa fa-suitcase"></i></span>
            </div>
        </div>

    </div>
</template>

<script>

export default {
    props:['airTo', 'airFrom', 'aircraftImg'],

    data () {
        
        return {
            queryData: {},
            flightData: null,
            error: null,
        }
    },
    created() {
        this.queryData = JSON.parse(localStorage.getItem("queryData"));
    },

    mounted() {
        const url = "https://test.api.amadeus.com/v1/shopping/flight-offers";
        const options = {
            params: {
                currency: "USD",
                max: 100,
                origin: this.queryData.origin_iataCode,
                destination: this.queryData.destination_iataCode,
                travelClass: this.queryData.travelClass,
                departureDate: this.queryData.departureDate,
                returnDate: this.queryData.returnDate,
            },
            headers: {Authorization: 'Bearer '+ localStorage.getItem('accessToken')}
        };
        axios.get(url, options)
        .then(response => {
            // console.log(response.data);
            this.flightData = response.data.data;
        })
        .catch(error => {
            console.log(error.response);
            this.error = error.response.data.errors[0];
        })
    }
}
</script>