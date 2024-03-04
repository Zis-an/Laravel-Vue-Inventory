<template>
    <div class="main-panel">
            <div class="mx-3">
                <div class="page-header">
                    <h3 class="page-title">Slider</h3>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                                <span>Dashboard/Slider/Add Slider</span>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" @submit.prevent="submit" accept="multipart/form-data">
                                    <div class="form-group">
                                        <label for="sl-position">Position</label>
                                        <input type="integer" v-model="form.slider_position" class="form-control" id="sl-position" placeholder="Slider Position">
                                    </div>
                                    <div class="form-group">
                                        <label for="sl-img">Choose Image</label>
                                        <input type="file" accept="image/*" @input="form.slider_image = $event.target.files[0]" class="form-control" id="sl-img">
                                            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                                {{ form.progress.percentage }}%
                                            </progress>
                                    </div>
                                    <button type="submit" :disabled="form.processing" class="btn btn-success me-2 mr-2">Submit</button>
                                    <Link href="/slider" class="btn btn-secondary">Back</Link>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</template>

<script>

import Layout from '../../../AdminLayout/Layout.vue';
import { Link } from '@inertiajs/vue3';
export default {
    layout: Layout,
    components: {
        Link
    },
    data() {
        return {
            form: this.$inertia.form({
                slider_position: null,
                slider_image: null
            }),
        };
    },
    methods: {
        submit() {
            this.form.post("/slider/store");
        },
    },

};

</script>

<style>

</style>
