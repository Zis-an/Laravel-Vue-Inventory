<template>
    <div class="main-panel">
        <div class="mx-3">
            <div class="page-header">
                <h3 class="page-title">Slider</h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span>Dashboard/Slider</span>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="card">
                <div class="card-body">
                    <Link href="/slider/create" class="btn btn-success mb-4">Create</Link>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> First name </th>
                                <th> Progress </th>
                                <th> Amount </th>
                                <th> Deadline </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Herman Beck </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100px;"></div>
                                    </div>
                                </td>
                                <td> $77.99 </td>
                                <td> May 15, 2015 </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> Messsy Adam </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100px;"></div>
                                    </div>
                                </td>
                                <td> $245.30 </td>
                                <td> July 1, 2015 </td>
                            </tr>
                        </tbody>
                    </table>
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
};
</script>

<style>

</style>
