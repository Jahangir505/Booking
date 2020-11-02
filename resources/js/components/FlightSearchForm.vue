<template>
    <form :action="actionRoute" id="searchform" @submit="checkForm" method="GET" autocomplete="off">
        <div class="row">

            <input type="hidden" name="destination_iataCode" v-model="destination_iataCode">
            <input type="hidden" name="origin_iataCode" v-model="origin_iataCode">
            <input type="hidden" name="destination_countryName" v-model="destination_countryName">
            <input type="hidden" name="destination_cityName" v-model="destination_cityName">
            <input type="hidden" name="origin_countryName" v-model="origin_countryName">
            <input type="hidden" name="origin_cityName" v-model="origin_cityName">

            <div class="col-lg-4">
                <label>Form</label>
                <auto-complete @query="Suggestion($event)" :items="queryData" name="origin" placeholder="depature city" @selected="originSelected($event)" :error-class="errors.includes('origin') && !form.origin ? 'is-invalid' : ''">
                </auto-complete>
            </div>
            <div class="col-lg-4">
                <label>To</label>
                <auto-complete @query="Suggestion($event)" :items="queryData" name="destination" placeholder="arival city" @selected="destinationSelected($event)" :error-class="errors.includes('destination') && !form.destination ? 'is-invalid' : ''">
                </auto-complete>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6">
                        <label>Departing</label>
                        <div class="input-group">
                            <datepicker  placeholder="2019/12/31" v-model="form.departureDate" name="departureDate" format="yyyy-MM-dd" :input-class="errors.includes('departureDate') && !form.departureDate ? 'is-invalid' : ''" :bootstrap-styling="true" :disabled-dates="{to: getPastDate()}"></datepicker>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Returning</label>
                        <div class="input-group">
                           <!-- <div class="input-group-prepend">
                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>  -->
                            <!-- <input type="text" class="form-control " placeholder="2019/12/31" name="returnDate" v-model="form.returnDate" data-date-format="YYYY-MM-DD">  -->
                            <datepicker  placeholder="2019/12/31" name="returnDate" v-model="form.returnDate" :input-class="errors.includes('returnDate') && !form.returnDate ? 'is-invalid' : ''" format="yyyy-MM-dd" :bootstrap-styling="true" :disabled-dates="{to: getPastDate()}"></datepicker>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-2">
                        <label>Adults</label>
                        <div class="input-group">
                            <select name="adult"  class="form-control custom-select" :class="errors.includes('adult') && !form.adult ? 'is-invalid' : ''" v-model="form.adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Children</label>
                        <div class="input-group">
                            <select name="children"  class="form-control custom-select" v-model="form.children">
                                <option value="0">Select Children</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="help-text text-danger" v-if="errors.includes('children')">children is required</div>
                    </div>
                    <div class="col-md-2">
                        <label>infants</label>
                        <div class="input-group">
                            <select name="infants"  class="form-control custom-select" v-model="form.infants">
                                <option value="0">Select Infants</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Class</label>
                        <div class="input-group">
                            <select name="travelClass"  class="form-control custom-select" v-model="form.travelClass" :class="errors.includes('travelClass') && !form.travelClass ? 'is-invalid' : ''">
                                <option value="">Select Class</option>
                                <option value="ECONOMY">Economy</option>
                                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                <option value="BUSINESS">Business</option>
                                <option value="FIRST">First</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>&nbsp;</label>
                        <button class="btn btn-block btn-tvl" id="search-flight">Search Flight</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';

    export default {
        props: ['actionRoute'],

        components: {
            Datepicker
        },
        
        data() {
            return {
                queryData: [],
                form: {
                    origin: '',
                    destination: '',
                    departureDate: '',
                    returnDate: '',
                    adult: 1,
                    children: 0,
                    infants: 0,
                    travelClass: '',
                },
                origin_iataCode: '',
                destination_iataCode: '',
                errors: [],
                destination_cityName: '',
                destination_countryName: '',
                origin_cityName: '',
                origin_countryName: '',
            }
        },

        methods: {
            Suggestion(query) {
                const url = "https://test.api.amadeus.com/v1/reference-data/locations";
                const options = {
                    params: {
                        subType: "CITY,AIRPORT",
                        keyword: query
                    },
                    headers: { Authorization: 'Bearer '+localStorage.getItem('accessToken')}
                }

                axios.get(url, options)
                .then(resp => {
                    this.queryData = resp.data;

                }).catch(err => {
                    console.log(err.response);
                })
            },

            destinationSelected(e) {
                this.form.destination = e.name;
                this.destination_iataCode = e.iataCode
                this.destination_cityName = e.address.cityName;
                this.destination_countryName = e.address.countryName;
            },

            originSelected(e) {
                this.form.origin = e.name;
                this.origin_iataCode = e.iataCode
                this.origin_cityName = e.address.cityName;
                this.origin_countryName = e.address.countryName;
            },

            checkForm(event) {
                
                this.errors = Object.keys(this.form).filter(key => {
                    if (this.form[key] == '' && key !== 'infants' && key !== 'children' && key !== 'returnDate') {
                        return key+' is requred'
                    } else if (this.form[key]) {
                        return false
                    }
                });

                if (this.errors.length > 0 ) {
                    event.preventDefault();
                } else {
                    return true;
                }
            },

            getPastDate() {
                var d = new Date();
                d.setDate(d.getDate() - 1);
                return d;
            }
        },
    }
</script>