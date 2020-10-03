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

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full px-3">
                <label
                  for="password"
                  class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                  >Username</label
                >
                <input
                  v-model="lead.username"
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                  type="username"
                  id="username"
                  name="username"
                  placeholder="Username"
                  :class="{
                    'border-red-500': submitted && $v.lead.username.$error,
                  }"
                />

                <div
                  v-if="submitted && $v.lead.username.$error"
                  class="text-red-500 text-xs italic"
                >
                  <span v-if="!$v.lead.username.required"
                    >Username is required</span
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                <label
                  for="password"
                  class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                  >Password</label
                >
                <input
                  v-model="lead.password"
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-teal-500"
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Password"
                  :class="{
                    'border-red-500': submitted && $v.lead.password.$error,
                  }"
                />

                <div
                  v-if="submitted && $v.lead.password.$error"
                  class="text-red-500 text-xs italic"
                >
                  <span v-if="!$v.lead.password.required"
                    >Password is required</span
                  >
                  <span v-if="!$v.lead.password.minLength"
                    >Password must be at least 6 characters</span
                  >
                </div>
              </div>

              <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
                <label
                  for="Repeat password"
                  class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                  >Repeat Password</label
                >
                <input
                  type="password"
                  v-model="lead.confirmPassword"
                  id="confirmPassword"
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 focus:bg-white"
                  name="confirmPassword"
                  placeholder="Confirm Password"
                  :class="{
                    'border-red-500':
                      submitted && $v.lead.confirmPassword.$error,
                  }"
                />
                <div
                  v-if="submitted && $v.lead.confirmPassword.$error"
                  class="text-red-500 text-xs italic"
                >
                  <span v-if="!$v.lead.confirmPassword.required"
                    >Confirm Password is required</span
                  >
                  <span v-else-if="!$v.lead.confirmPassword.sameAsPassword"
                    >Passwords do not must match</span
                  >
                </div>
              </div>
            </div>
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
                  for="email"
                  class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                  >Address
                </label>

                <vue-google-autocomplete
                  ref="address"
                  id="map"
                  classname="appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500 "
                  placeholder="Please type your address"
                  v-on:placechanged="getAddressData"
                  country="za"
                >
                </vue-google-autocomplete>
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-3">
              <div class="w-full px-3">
                <label
                  for="voting_station"
                  class="block tracking-wide text-gray-700 text-sm font-bold mb-2"
                  >Voting Station
                </label>
                <vue-autosuggest
                  v-model="stationQuery"
                  :suggestions="suggestions"
                  :input-props="{
                    id: 'autosuggest__input',
                    placeholder: 'Please type your voting station address',
                    name: 'voting_station',
                    class:
                      'appearance-none block w-full bg-gray-200 text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-teal-500',
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
                <input
                  type="checkbox"
                  id="custom_voting_flag"
                  value="1"
                  v-model="custom_voting_flag"
                />
                <label>I cannot find out prepared voting station</label>
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

                  <div
                    v-if="submitted && $v.lead.first_time_voter.$error"
                    class="text-red-500 text-sm italic"
                  >
                    <span v-if="!$v.lead.first_time_voter.required"
                      >Please fill out this field</span
                    >
                  </div>
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
        first_time_voter: "",
        address: "",
        voting_station: "",
        province: "",
        password: "",
        confirmPassword: "",
        username: "",
        voting_station_id: null,
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
      custom_voting_flag: false,
    };
  },
  mounted() {
    // To demonstrate functionality of exposed component functions
    // Here we make focus on the user input
    this.$refs.address.focus();
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
      first_time_voter: { required },
      terms_conditions: { required },
      address: { required },
      voting_station: { required },
      password: { required, minLength: minLength(6) },
      confirmPassword: { required, sameAsPassword: sameAs("password") },
      username: { required },
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
      let response = await this.$inertia.post("/leads/save", this.lead);
      // stop here if form is invalid
      this.$v.$touch();
      if (this.$v.$invalid) {
        return;
      }
      if (this.custom_voting_flag) {
        this.lead.voting_station_id = 10000;
      }
    },

    toggleShowPassword() {
      var show = document.getElementById("password");
      if (this.password == false) {
        this.password == true;
        show.type = "text";
      } else {
        this.showpassword = false;
        show.type = "password";
      }
    },
    doSearch() {
      console.log("Searching...");
    },
    filterResults(data, text, field) {
        console.log(data);
        return null

      // return data
      //   .filter((item) => {
      //     if (item[field].toLowerCase().indexOf(text.toLowerCase()) > -1) {
      //       return item[field];
      //     }
      //   })
      //   .sort(function (a, b) {
      //     a.name > b.name;
      //   });
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
      this.lead.voting_station_id = item.id;
      this.lead.voting_station = item.name;
      return item.name;
    },
  },
};
</script>
