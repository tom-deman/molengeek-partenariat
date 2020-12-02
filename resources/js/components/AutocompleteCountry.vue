<template>
    <div style="position: relative; width: 100%;">
        <input
            class="p-1 px-2 appearance-none outline-none w-full text-gray-800"
            type="text"
            v-model="selection"
            @keydown.enter="enter"
            @input="change"
        />
        <ul
            class="dropdown-menu"
            style="width: 100%"
            :style="openSuggestion ? 'display: block;' : 'display: none;'"
        >
            <li
                v-for="( suggestion, index ) in matches"
                :key="index"
                @click="suggestionClick( index )"
                class="my-1 px-2 py-2 hover:text-gray-600 hover:bg-teal-100"
            >
                <a href="#">
                    {{ suggestion }}
                </a>
            </li>
        </ul>
    </div>
</template>


<script>
    export default {
        name: 'autocomplete-country',

        props: {
            suggestions: {
                type    : Array,
                required: true
            }
        },

        data: () => ({
            open   : false,
            current: 0,
            selection: ''
        }),

        methods: {
            enter() {
                this.selection = this.matches[ this.current ]
                this.open = false
                this.$emit( 'getCountry', this.selection )
            },

            change() {
                if ( this.open === false ) {
                    this.open    = true
                    this.current = 0
                }
            },

            suggestionClick( index ) {
                this.selection = this.matches[ index ]
                this.open = false
                this.$emit( 'getCountry', this.selection )
            },
        },

        computed: {
            matches() {
                return this.suggestions.filter(
                    str => str.toLowerCase().includes( this.selection.toLowerCase() )
                )
            },

            openSuggestion() {
                return this.selection      !== ''
                    && this.matches.length !== 0
                    && this.open           === true
            }
        },

        updated(){
            console.log( this.selection.toLowerCase() )
        }

    }
</script>

<style scoped>

    .dropdown-menu{
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        height: 150px;
        overflow-x: hidden;
        overflow-y: scroll;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }

</style>
