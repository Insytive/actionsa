<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div class="mt-6 mb-8 text-gray-500">
                <p>Please fill in the details below</p>
            </div>

            <form class="w-full" @submit.prevent="handleSubmit">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label
                                    for="email"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >ID number</label
                                >
                                <input
                                    type="text"
                                    v-model="lead.id_number"
                                    placeholder="ID number"
                                    id="id_number"
                                    name="id_number"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    tabindex="1"
                                    :class="{
                    'border-red-500': submitted && $v.lead.id_number.$error,
                  }"
                                />
                                <div
                                    v-if="submitted && $v.lead.id_number.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.id_number.required"
                  >Please fill out this field</span
                  >

                                    <span v-if="!$v.lead.id_number.idRegex"
                                    >Enter a valid South African ID</span
                                    >
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="flex flex-wrap -mx-3 mb-6 mt-8">
                            <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                <label
                                    for="first_name"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >First name</label
                                >
                                <input
                                    type="text"
                                    v-model="lead.first_name"
                                    id="first_name"
                                    tabindex="2"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    name="first_name"
                                    placeholder="First name"
                                    :class="{
                    'border-red-500': submitted && $v.lead.first_name.$error,
                  }"
                                />
                                <div
                                    v-if="submitted && !$v.lead.first_name.required"
                                    class="text-red-500 text-sm italic"
                                >
                                    Please fill out this field.
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                                <label
                                    for="first_name"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Last name</label
                                >
                                <input
                                    type="text"
                                    v-model="lead.last_name"
                                    id="last_name"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    name="last_name"
                                    placeholder="Last name"
                                    :class="{
                    'border-red-500': submitted && $v.lead.last_name.$error,
                  }"
                                />
                                <div
                                    v-if="submitted && !$v.lead.last_name.required"
                                    class="text-red-500 text-xs italic"
                                >
                                    Please fill out this field.
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="email"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Email</label
                                >
                                <input
                                    type="email"
                                    tabindex="4"
                                    v-model="lead.lead_email"
                                    placeholder="Email"
                                    id="lead_email"
                                    name="lead_email"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    :class="{
                    'border-red-500': submitted && $v.lead.lead_email.$error,
                  }"
                                />
                                <div
                                    v-if="submitted && $v.lead.lead_email.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.lead_email.required"
                  >Please fill out this field</span
                  >
                                    <span v-if="!$v.lead.lead_email.email"
                                    >Enter a valid email</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="phone"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Phone</label
                                >
                                <input
                                    type="text"
                                    v-model="lead.phone"
                                    placeholder="Phone number"
                                    id="phone"
                                    name="phone"
                                    tabindex="4"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    :class="{
                    'border-red-500': submitted && $v.lead.phone.$error,
                  }"
                                />
                                <div
                                    v-if="submitted && $v.lead.phone.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.phone.required"
                  >Please fill out this field</span
                  >
                                    <span v-if="!$v.lead.phone.phoneRegex"
                                    >Enter a valid Phone number</span
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="address"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Address
                                </label>

                                <vue-google-autocomplete
                                    ref="address"
                                    id="map"
                                    v-model="lead.address"
                                    classname="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    placeholder="Please type your address"
                                    v-on:placechanged="getAddressData"
                                    country="za"
                                    :class="{
                    'border-red-500': submitted && $v.lead.address.$error,
                  }"
                                >
                                </vue-google-autocomplete>

                                <div
                                    v-if="submitted && $v.lead.address.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.address.required"
                  >Please fill out this field</span
                  >
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="voting_station"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Voting Station
                                </label>

                                <div class="form-group mb-3 mt-3">
                                    <input
                                        type="radio"
                                        name="custom_voting_flag"
                                        value="two"
                                        v-model="custom_voting_flag"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >Custom voting station</label
                                    >

                                    <input
                                        type="radio"
                                        name="custom_voting_flag"
                                        value="one"
                                        v-model="custom_voting_flag"
                                        class="ml-8"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >Search address</label
                                    >
                                </div>

                                <vue-autosuggest
                                    v-if="custom_voting_flag === 'one'"
                                    v-model="stationQuery"
                                    :suggestions="suggestions"
                                    :input-props="{
                    id: 'autosuggest__input',
                    placeholder: 'Please type your voting station address',
                    name: 'voting_station',
                    class:
                      'appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white',
                  }"
                                    :sectionConfigs="sectionConfigs"
                                    :renderSuggestion="renderSuggestion"
                                    :getSuggestionValue="getSuggestionValue"
                                    @input="fetchResults"
                                >
                                    <template slot-scope="{ suggestion }">
                    <span class="my-suggestion-item">{{
                            suggestion.item
                        }}</span>
                                    </template>
                                </vue-autosuggest>

                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                                    type="text"
                                    id="voting_station"
                                    v-model="lead.voting_station"
                                    placeholder="Enter your voting station, nearest school or town"
                                    v-if="custom_voting_flag === 'two'"
                                />

                                <div
                                    v-if="submitted && $v.lead.voting_station.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.voting_station.required"
                  >Please fill out this field</span
                  >
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="email"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Are you a first time voter?
                                </label>
                                <div class="form-group">
                                    <input
                                        type="radio"
                                        name="first_time_voter"
                                        value="1"
                                        v-model="lead.first_time_voter"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >Yes</label
                                    >
                                    <br />

                                    <input
                                        type="radio"
                                        name="first_time_voter"
                                        value="0"
                                        v-model="lead.first_time_voter"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >No</label
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <label
                                    for="email"
                                    class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                                >Interest
                                </label>
                                <div class="form-group">
                                    <input
                                        type="radio"
                                        name="interest"
                                        value="1"
                                        v-model="lead.interest"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >Supporter</label
                                    >
                                    <br />

                                    <input
                                        type="radio"
                                        name="interest"
                                        value="0"
                                        v-model="lead.interest"
                                    />
                                    <label
                                        class="tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    >Member</label
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-3">
                            <div class="w-full px-3">
                                <input
                                    type="checkbox"
                                    id="terms_conditions"
                                    value="1"
                                    v-model="lead.terms_conditions"
                                    :class="{
                    'border-red-500':
                      submitted && $v.lead.terms_conditions.$error,
                  }"
                                />
                                <label
                                >I hereby consent and agree to the Interim Constitition of
                                    ActionSA</label
                                >
                                <div
                                    v-if="submitted && $v.lead.terms_conditions.$error"
                                    class="text-red-500 text-sm italic"
                                >
                  <span v-if="!$v.lead.terms_conditions.required"
                  >Please fill out this field</span
                  >
                                </div>
                            </div>

                            <div class="w-full px-3 mt-6">
                                <button
                                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2"
                                >
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<style lang="scss">
#autosuggest__input {
    outline: none;
    position: relative;
    display: block;
    border: 1px solid #616161;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

#autosuggest__input.autosuggest__input-open {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.autosuggest__results-container {
    position: relative;
    width: 100%;
}

.autosuggest__results {
    font-weight: 300;
    margin: 0;
    position: absolute;
    z-index: 10000001;
    width: 100%;
    border: 1px solid #e0e0e0;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    background: white;
    padding: 0px;
}

.autosuggest__results ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

.autosuggest__results .autosuggest__results-item {
    cursor: pointer;
    padding: 4px 15px;
}

#autosuggest ul:nth-child(1) > .autosuggest__results_title {
    border-top: none;
}

.autosuggest__results .autosuggest__results_title {
    color: gray;
    font-size: 11px;
    margin-left: 0;
    padding: 15px 13px 5px;
    border-top: 1px solid lightgray;
}

.autosuggest__results .autosuggest__results-item:active,
.autosuggest__results .autosuggest__results-item:hover,
.autosuggest__results .autosuggest__results-item:focus,
.autosuggest__results
.autosuggest__results-item.autosuggest__results-item--highlighted {
    background-color: #f6f6f6;
}
</style>


<script>
import JetApplicationLogo from "./../../Jetstream/ApplicationLogo";
// import Autocomplete from "../AutoComplete";
import VueGoogleAutocomplete from "vue-google-autocomplete";

import { VueAutosuggest } from "vue-autosuggest";
import axios from "axios";
import {
    required,
    email,
    minLength,
    sameAs,
    helpers,
} from "vuelidate/lib/validators";
const idRegex = helpers.regex(
    "id_number",
    /^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(( |-)(\d{4})( |-)(\d{3})|(\d{7}))$/
);
const phoneRegex = helpers.regex(
    "phone",
    /^[0](\d{9})|([0](\d{2})( |-)((\d{3}))( |-)(\d{4}))|[0](\d{2})( |-)(\d{7})$/s
);
export default {
    components: {
        JetApplicationLogo,
        VueGoogleAutocomplete,
        VueAutosuggest,
    },
    data() {
        return {
            lead: {
                first_name: "",
                last_name: "",
                lead_email: "",
                id_number: "",
                phone: "",
                first_time_voter: 1,
                address: "",
                voting_station: "",
                province: "",
                station_id: "",
                interest: 1,
                terms_conditions: "",
            },
            submitted: false,
            suggestions: [],
            suggestionUrl: "/api/search-voting-stations",
            timeout: null,
            selected: null,
            sectionConfigs: {
                default: {
                    onSelected: (selected) => {
                        this.doSearch(this);
                    },
                },
            },
            stationQuery: "",
            custom_voting_flag: "one",
        };
    },
    mounted() {
        if (this.custom_voting_flag === "two") {
            this.lead.station_id = 1010111;
        }
    },
    validations: {
        lead: {
            first_name: { required },
            last_name: { required },
            lead_email: { required, email },
            id_number: {
                required,
                idRegex,
            },
            phone: { required, phoneRegex },
            // first_time_voter: { required },
            terms_conditions: { required },
            address: { required },
            station_id: { required },
            voting_station: { required },
            // interest: { required }
        },
    },
    watch: {
        searchText(newVal) {
            console.log(newVal);
            this.$emit("input", newVal);
        },
    },
    methods: {
        getAddressData: function (addressData, placeResultData, id) {
            this.lead.address = placeResultData.formatted_address;
        },

        async handleSubmit(e) {
            this.submitted = true;

            // stop here if form is invalid
            this.$v.$touch();
            if (this.$v.$invalid) {
                return;
            }

            alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.lead));
            // let response = await this.$inertia.post("/leads/save", this.lead);
        },
        doSearch() {
            console.log("Searching...");
        },
        filterResults(data, text, field) {
            return data
                .filter((item) => {
                    if (item[field].toLowerCase().indexOf(text.toLowerCase()) > -1) {
                        return item[field];
                    }
                })
                .sort(function (a, b) {
                    a.name > b.name;
                });
            // return filterData.sort(function(a, b) {
            //     a.name - b.name
            // });
        },
        fetchResults() {
            const query = this.stationQuery;
            if (!query) {
                this.suggestions = [];
                return;
            }
            clearTimeout(this.timeout);
            this.timeout = setTimeout(() => {
                axios.post(this.suggestionUrl, { query: query }).then((response) => {
                    const stations = this.filterResults(response.data, query, "name");
                    if (stations.length) {
                        this.suggestions = [];
                        let tempSuggestions = Object.keys(response.data).map((key) => {
                            return response.data[key];
                        });
                        this.suggestions.push({ data: tempSuggestions });
                    } else {
                        this.suggestions = [];
                    }
                });
            });
        },
        renderSuggestion(suggestion) {
            return suggestion.item.name + " - Ward " + suggestion.item.ward_id;
        },
        getSuggestionValue(suggestion) {
            let { item } = suggestion;
            this.lead.station_id = item.id;
            this.lead.voting_station = item.name;
            return item.name;
        },
    },
};
</script>
