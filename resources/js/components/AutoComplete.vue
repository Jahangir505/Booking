
<template>
    <div class="input-group auto-complete">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
        </div>
        <input type="text" class="form-control" :placeholder="placeholder" :name="name" :id="name" v-model="search" @input="onChange()" @blur="hideDropDown" autocomplete="off" :class="errorClass">

        <ul v-show="isOpen && active" class="autocomplete-results">
            <li v-for="(result, i) in results" 
            :key="i"
            class="autocomplete-result"
            @click="setResult(result)">
            {{ result.name }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            items: {
                default: () => []
            },
            name: {
                type: String
            },
            placeholder: {
                type: String
            },
            errorClass: {
                type: String
            }
        },
        
        data() {
            return {
                isOpen: false,
                search: '',
                timer: null,
                active: false,
            }
        },

        methods: {
            onChange() {
                this.isOpen = true;
                this.active = true;

                clearTimeout(this.timer);
            
                this.timer = setTimeout(() => {
                    this.$emit('query', this.search);
                }, 300);

            },


            setResult(result) {
                this.search = `${result.name} ( ${result.iataCode} )`;
                this.$emit("selected", result);
                this.isOpen = false;
                this.active = false;
            },

            hideDropDown() {
                if ((this.results && this.results.length ) <  1 || this.search == '') {
                    this.isOpen = false;
                this.active = false;
                }

            }
        },

        computed: {
            results() {
                if (this.search == '') {
                    this.isOpen = false;
                }
                return this.items.data;
            }
        }
    }
</script>