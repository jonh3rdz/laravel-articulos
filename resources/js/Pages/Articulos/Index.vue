<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Articulos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <div class="flex justify-between">
                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q">
                                <Link :href="route('articulos.create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                    Crear
                                </Link>
                            </div>
                            <hr class="my-6">
                            <table>
                                <tr v-for="articulo in articulos" :key="articulo.id">
                                    <td class="border px-4 py-2">
                                        {{ articulo.tema }}
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link :href="route('articulos.show', articulo.id)">
                                            Ver
                                        </Link>
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link :href="route('articulos.edit', articulo.id)">
                                            Editar
                                        </Link>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            AppLayout, Link,
        },
        props: {
            articulos: Array,
        },
        data() {
            return {
                q: ''
            }
        },
        watch: {
            q: function (value) {
                this.$inertia.replace(this.route('articulos.index', {q: value}))
            }
        }
    }
</script>