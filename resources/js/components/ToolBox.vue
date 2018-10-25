<template>
    <div class="w-64 border rounded border-yellow-dark hover:border-yellow-darker p-4 mr-4 mt-4" v-show="showTool">
        <div class="h-24">
            <strong>{{ name }}</strong>
            <p>
                {{ description }}
            </p>
        </div>
        <a class="align-bottom" :href="url">Use Tool</a>
    </div>
</template>

<script>
    export default {
        props: {
            name: String,
            description: String,
            url: String,
            filterBy: String
        },
        computed: {
            showTool: function () {
                return (
                    this.filterBy.length < 2 ||
                    (
                        this.name.toLowerCase().indexOf(this.filterBy.toLowerCase()) != -1 ||
                        this.description.toLowerCase().indexOf(this.filterBy.toLowerCase()) != -1
                    )
                );
            }
        }
    }
</script>
